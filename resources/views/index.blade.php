<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="css\style.css">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Link Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Link Icon Centang --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">
    {{-- DateTime Picker --}}
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <title>Cars Rental</title>
</head>
<body>
    @include('header');
       {{-- Home Page --}}
    <section class="home" id="home">
        <div class ="text">
            <h1> Go Anywhere Become Easy</h1>
        </div>
    </section>
    {{-- Promosi Page --}}
    <section class="promosi">
        <div class="iklan">
            <img src="img/iklanmobil_6.jpg" alt="" class="iklan1">
            <img src="img/iklanmobil_1.jpg" alt="" class="iklan2">
            <img src="img/iklanmobil_2.jpg" alt="" class="iklan3">
            <img src="img/iklanmobil_8.jpg" alt="" class="iklan4">
        </div>
    </section>
    {{-- Filter Page --}}
    <section class="datepicker">
        <div class="form-container">
            <div class="backinput">
                <form method="POST" action="">
                    @csrf
                    <div class="carikota">
                        <div class="kotaawal">
                            <div class="input-box1">
                                <div class="label">
                                    Pick Up Place
                                </div>
                                <div class="inpt">
                                    <select name="kotaawal" id="">
                                        @foreach ($listkota as $i)
                                        <option value="{{$i->kota}}">{{$i->kota}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="kotaakhir">
                            <div class="input-box5">
                                <div class="label">
                                    Drop off Place
                                </div>
                                <div class="inpt">
                                    <select name="kotaakhir" id="">
                                        @foreach ($listkota as $i)
                                        <option value="{{$i->kota}}">{{$i->kota}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tambahan">
                        <div class="input-box4">
                            <input type="checkbox" name="agree" value="kotaakhir">
                            <label>Drop car off at different location</label>
                        </div>
                    </div>
                    <div class="tanggal">
                        <div class="tanggalawal">
                            <div class="input-box2">
                                <label> Rental Start date <label>
                                <input type="date" value="">
                            </div>
                        </div>
                        <div class="tanggalakhir">
                            <div class="input-box3">
                                <label> Rental End Date <label>
                                <input type="date" value="">
                            </div>
                        </div>
                    </div>
                    <div class="supir">
                        <select name="" id="">
                            <option value="supir">Driver</option>
                            <option value="nonsupir">Non-Driver</option>
                        </select>
                    </div>
                    <div class="submit">
                        <a href="{{ url('/list') }}" class="beten">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="promosi2">
        <div class="iklanke2">
            <div class="iklan5">
                <img src="img/iklanmobil_7.jpg" alt="" class="iklan5">
                <P>Jangan lewatkan Kesempatan dengan waktu terbatas</P>
            </div>
            <div class="iklan6">
                <img src="img/iklanmobil_10.jpg" alt="" class="iklan6">
                <P>Jangan lewatkan Kesempatan dengan waktu terbatas</P>
            </div>
            <div class="iklan7">
                <img src="img/iklanmobil_4.jpg" alt="" class="iklan7">
                <P>Jangan lewatkan Kesempatan dengan waktu terbatas</P>
            </div>
        </div>
    </section>
    <div class="foter">
        @include('footer')
    </div>

    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src= "https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });
        });
    </script>
    <script>
        $(function () {
          $('#datetimepicker1').datetimepicker();
       });
      </script>
</body>
</html>
