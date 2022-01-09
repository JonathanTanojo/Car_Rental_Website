<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Icon --}}
        <link rel="icon" href="img/favicon.ico">

        <title>About Us</title>

        <script src="https://kit.fontawesome.com/4e31525354.js" crossorigin="anonymous"></script>

        <style>
            body{
                background-color : lightgrey;
            }
            .title {
                font-family: 'Nunito', sans-serif;
                font-size : 35px;
                text-align: center;
            }
            .title::before {
                content: "";
                position: absolute;
                bottom: 711px;
                left: 50%;
                width: 362px;
                height: 3px;
                background: #111;
                transform: translateX(-50%);
            }
            .h2{
                margin-top: 97px;
            }
            .bodymission{
                text-align: end;
            }
            .mission{
                position: absolute;
                width: 958px;
                left: 482px;
                border-radius: 28px;
                padding-left : 48px;
                padding-right: 40px;
                background-color : white;
                box-shadow: 24px 37px 36px -24px rgba(0, 0, 0, 0.25);
            }
            .bg3{
                position: absolute;
                width: 100%;
                height: 412px;
                left: 0px;
                top: 597px;
            }
            .team{
                line-height: 42px;
                font-size : 50px;
            }
            .team p{
                margin-left: 149px;
                margin-bottom:3%;
            }
            .member{
                display : flex;
                margin-left: 142px;
            }
            .jojo{
                font-size : 15px;
                margin-right: 16%;
            }
            .jojo p{
                margin-left: 0px;
            }
            .jonathan{
                width: 172px;
            }
            .titi{
                width: 174px;
            }
            .alexander{
                width: 174px;
            }
            .yafet{
                width: 174px;
            }
            .foterus{
            margin-top: 900px;
            }
        </style>
    </head>
    <body>
        @include('header')
        <section class="title">
            <div class="h2">
                <h2>About Us</h2>
            </div>
        </section>
        <section class="mission">
            <p>
                Our Mission : <br>
                Make all our customer satisfied<br>
                Be more interactive with the users<br>
                Become a car rental website that offers friendly prices with high quality cars<br> <br> <br> <br>
                    <div class="bodymission">
                    Our Mission is what drives us to make a website, where the clients can easily book a car,<br>
                    by making a list of best cars , 24 hours customer service also our car are high quality
                    </div>
            </div>
            </p>
        </section>
        <section class="bg3">
            <div class="team">
                <p> The Team </p>
                <div class="member">
                    <div class="jojo">
                        <img src="img/jojo.JPG" class="jonathan" alt="">
                        <h2>Jonathan</h2>
                        <p>CEO <br>
                        Hobby Tidur
                        </p>
                    </div>
                    <div class="jojo">
                        <img src="img/titi.jpg" class="titi" alt="">
                        <h2>Billy</h2>
                        <p>CEO <br>
                            Hobby Main</p>
                    </div>
                    <div class="jojo">
                        <img src="img/alex.jfif" class = "alexander"alt="">
                        <h2>Alexander</h2>
                        <p>CEO <br>
                            Hobby Minum</p>
                    </div>
                    <div class="jojo">
                    <a href=></a>
                        <img src="img/yafet.jpg" class="yafet" alt="">
                        <h2>Yafet</h2>
                        <p>CEO <br>
                        Hobby Jalan</p>
                    </div>
                </div>
            </div>

        </section>
        <div class="foterus">
            @include('footer')
        </div>
    </body>
</html>
