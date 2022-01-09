<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Icon --}}
        <link rel="icon" href="img/favicon.ico">

        <title>Terms Of Use</title>
        <style>
            .title {
                font-family: 'Nunito', sans-serif;
                font-size : 25px;
                text-align: center;
                margin-top: 200px;
            }
            .contain{
                text-align: center;
            }
            .title::before {
                content: "";
                position: absolute;
                bottom: 693px;
                left: 50%;
                width: 180px;
                height: 3px;
                background: #111;
                transform: translateX(-50%);
            }
            .foterterms{
                margin-top: 159px;
            }
        </style>
    </head>
    <body>
    @include('header')
    <div class="title">
        <h2 class="title">Terms Of Use</h2>
            <img src="" alt="" class="">

         </div>
        <div class="contain">
            <br>
            <p>THESE TERMS OF USE MUST BE READ BEFORE USING THE SITE. THE USAGE OF ANY PART OF THE SITE INDICATES<br>
            ACCEPTANCE OF THESE TERMS OF USE. </p> <br>

            <p>The www.rentalcars.com site and the app ("Site") is managed by Waworuntu Group of Companies including its subsidiaries and <br>
            affiliated companies ("we", "us", "our" or “Rentalcars”). By accessing and/or using any part of the Site, you acknowledge that you <br>
            have read and understood, and agree to the Terms of Use (“Terms”) and other terms and conditions in relation to the Site as <br>
            referred to in these Terms. If you do not agree to be bound by these Terms, you may not access or use any part of the Site. These <br>
            Terms constitute a binding legal agreement between you as an individual user (“you” or “your”) and Traveloka. You must be at <br>
            least eighteen (18) years old to use the Site. </p> <br>

            <p>Please note that we may change, modify, add and delete these Terms at any time where this is necessary to comply with any law <br>
            or regulation binding on us or to reflect a change to our operational practices, provided that we will use reasonable endeavours <br>
            to provide notice of material changes on the Site. Every time you use the Site, please check these Terms to ensure that you have <br>
            reviewed the current version. By continuing to use any part of the Site after such changes to these Terms, you agree and consent <b>
            to the changes. </p> <br>

            <p>If you use any of our other services, then your usage is based on the submission to and acceptance of the terms and conditions <br>
            applicable to such services, which will be made available to you when you use those other services. <br></p>
        </div>
        <div class="foterterms">
            @include('footer')
        </div>
    </body>
</html>
