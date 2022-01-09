<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- CSS --}}
        <link rel="stylesheet" href="css\stylelist.css">
        {{-- Link Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- Icon --}}
        <link rel="icon" href="img/favicon.ico">

        <script src="https://kit.fontawesome.com/4e31525354.js" crossorigin="anonymous"></script>

        <title>List Cars</title>
    </head>
    <body>
        @include("header")

        <div class="row">
            <div class="col-3">
                <div class="filter">
                    <form method="POST">
                        @csrf
                        <h1>Filter</h1>
                        <div class="slidecontainer">
                            <input type="range" min="150000" max="300000" value="225000" class="slider" id="myRange">
                            <p>Price: <span id="demo"></span></p>
                        </div>
                        <div class="sort">
                            <div class="passanger">
                                <p>Passanger Capacity</p>
                                <input type="radio" name="cap5" value="5">
                                <label for="cap5">5</label><br>
                                <input type="radio" name="cap5" value="6">
                                <label for="cap5s">5-6</label><br>
                                <input type="radio" name="cap5" value="7">
                                <label for="cap6">>6</label><br>
                                <input type="radio" name="cap5" value="all">
                                <label for="cap5">All</label><br>
                            </div>
                            <div class="transmission">
                                <p>Transmission</p>
                                <input type="radio" id="all" name="all" value="100">
                                <label for="all"class="filter1">All</label><br>
                                <input type="radio" id="manual" name="all" value="100">
                                <label for="manual"class="filter1">Manual</label><br>
                                <input type="radio" id="auto" name="all" value="100">
                                <label for="auto"class="filter1">Automatic</label><br>
                            </div>
                        </div>
                        <div class="bottom">
                            <button class ="butn">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-9" style="margin-top: 104px;">
                @foreach ($carlist as $l)
                <div class="car">
                    <div class="paket">
                        <div class="left">
                            <img src="mbl/{{$l->K_IMAGE}}" alt="">
                        </div>
                        <div class="mid">
                            <div class="car1">
                                <p> {{$l -> K_JENIS }}</p>
                                <p> {{$l -> K_PENUMPANG }} <img src="img/user.png" alt=""> </p>
                                <p> {{$l -> K_BAGASI }} <img src="img/luggage.png" alt=""> </p>
                                <p> {{$l -> K_TRANSMISI }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="top">
                            <p>Rental Per Day</p>
                            <div class="harga">
                                Rp. {{$l -> K_HARGA }},00
                            </div>
                        </div>
                        <div class="bottom" >
                            <a href="{{ url('details/'.$l->K_ID) }}" class="buton">Continue</a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                <div class="row">
                    <div class="col">
                        {{$carlist->links()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="foterlist">
            @include('footer')
        </div>
        <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;
        slider.oninput = function() {
        output.innerHTML = this.value;}
        </script>
    </body>
</html>
