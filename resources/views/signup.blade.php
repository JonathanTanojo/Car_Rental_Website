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
        <img src="img/iklanmobil_3.jpg" alt="">
    </section>
    <section class="inputi">
        <div class="back">
            <div class="label">
                <label>Sign Up as a Member</label>
            </div>
            <form method="POST">
                @csrf
                <div class="email">
                    <label>Email or Mobile no.</label>
                    <br>
                    <input type="text" class="input"name="gmail" id="">
                </div>
                <div class="nama">
                    <label>Name</label>
                    <br>
                    <input type="text" class="input" name="nama" id="">
                </div>
                <div class="pass">
                    <label>Password</label>
                    <br>
                    <input type="password" class="input" name="password">
                </div>
                <div class="submit">
                    <input type="submit" value="Sign Up" class="btni" >
                </div>
            </form>
        </div>
    </section>
    <div class="fotersign">
        @include('footer')
    </div>
</body>
</html>
