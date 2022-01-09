<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" href="img/favicon.ico">

    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
    {{-- Header --}}
    <header>
        <a href="/" class = "logo"><img src={{ asset('img/carrental.com.png'); }} alt=""></a>
        <ul class="navbar" style="padding-left: 0px;">
            <li><a href="/" class="text-decoration-none">Home</a></li>
            <li><a href="/cars" class="text-decoration-none">Best Cars</a></li>
            <li><a href="/list" class="text-decoration-none">List Cars</a></li>
            <li><a href="/faq" class="text-decoration-none">FaQ</a></li>
        </ul>
        <div class="header-btn">
            <form action="/signup">
                <input type="submit" value="Sign Up" class="signup">
            </form>
            <form action="/login">
                <input type="submit" value="Login" class="login">
            </form>
        </div>
    </header>
</body>
</html>
