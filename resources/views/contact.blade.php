<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="css\stylea.css">
    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">

    <title>Contact Us</title>
</head>
<body>
    @include('header')
    <section>
        <div id="News" class="tabcontent">
            <section class="contact" id="contact">
                <div class="max-width">
                    <h2 class="title">Contact us</h2>
                    <div class="contact-content">
                        <div class="column left">
                            <img src="img/map.jpg" alt="Map" width="500" height="333">
                        </div>
                        <div class="column right">
                            <div class="text">Please fill this </div>

                            <form method="POST">
                                @csrf
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="field email">
                                        <input type="email" name="gmail" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" name="input" placeholder="Tell us your concerns" required></textarea>
                                </div>
                                <p>
                                    Call Center : <br>
                                    0821-4040-2468
                                </p>
                                <div class="button-area">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="foterconct">
        @include('footer')
    </div>
</body>
</html>

