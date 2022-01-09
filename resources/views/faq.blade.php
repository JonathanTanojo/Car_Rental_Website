<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link CSS --}}
    <link rel="stylesheet" href="css\stylea.css">
    {{--  Link Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">

    <title>FaQ</title>
</head>
<body>
    @include('header');
    <div id="Home" class="tabcontent">
        <section class="faq" id="faq">
            <div class="max-width">
                <h2 class="title">FAQ</h2>
                <div class="faq-content">
                    <div class="konten">
                        <p>
                            How to Book a car ? <br>
                            Set your start date and end date <br>
                            -Choose your average price,seats,and transmission <br>
                            -Choose your car <br> <br>

                            What is the price range ? <br>
                            -It range from Rp 150.000,00 - Rp 400.000,00 <br><br>
                            How many passengers can the car accomodate ? <br>
                            -Depends on your cars, range from 5 until 8 person. <br><br>
                            How to pay ? <br>
                            -Credit card <br>
                              * Rental Mobil accepts Visa, MasterCard, and JCB credit cards
                              All credit card transactions via Rental Mobil are fully protected by Secure Socket Layer of RapidSSL (Verisign Group) authorized technology. You will receive instant confirmation and e-ticket via email in max. 60 minutes after completing payment. <br><br>
                            -Transfer <br>
                              * You can make secure and convenient payments via Transfer BCA, BNI, BRI or Mandiri.<br><br>
                            -ATM <br>
                               * If you do not own BCA, BNI, BRI or Mandiri accounts, you can make payments through other banks within ATM Bersama, Prima and Alto networks. ATM payment method is available 24-hour.<br><br>
                            -Internet Banking <br>
                             * Rental Mobil Accepts Payments via Internet Banking
                              You can make secure and convenient payments via Internet Banking such as CIMB Clicks and BCA KlikPay. All transactions are conducted in real time and protected by the Secure Socket Layer of RapidSSL authorized technology.<br><br>
                            -Indomaret & Alfamart <br>
                              * Rental Accepts Payments via Indomaret and Alfamart
                              You can make payments at any Indomaret or Alfamart stores. For flight/hotel bookings, payments can be made at least 24 hours before the departure time.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="foterfaq">
        @include('footer')
    </div>
</body>
</html>
