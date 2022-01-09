<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link CSS --}}
    <link rel="stylesheet" href="css\stylesignup.css">

    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">

    <title>Document</title>
</head>
<body>
    @include('header');
    <section class="bg1"></section>
    <section class="promosii">
        <img src="img/iklanmobil_10.jpg" alt="">
    </section>
    <section class="inputi">
        <div class="back">
            <div class="label">
                <label>Log in to your account</label>
            </div>
            <form method="post" action="">
                <div class="email">
                    <label>Email or Mobile no.</label>
                    <br>
                    <input type="text"  class="input" name="" id="">
                </div>
                <div class="pass">
                    <label>Password</label>
                    <br>
                    <input type="password"  class="input">
                </div>
                <div class="submit">
                    <input type="submit" value="Login" class="btni">
                </div>
            </form>
        </div>
    </section>
    <div class="fotersign">
        @include('footer')
    </div>
</body>
</html>
