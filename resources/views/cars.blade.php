<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css\stylecars.css">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Link Icon Centang --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Icon --}}
    <link rel="icon" href="img/favicon.ico">

    <title>Best Cars</title>
</head>
<body>
@include('header');
<section class="datepickercars">
    <div class="form-containercars">
        <div class="backinputcars">
            <form action="">
                <div class="carikota">
                    <div class="kotaawal">
                        <div class="input-box1">
                            <div class="label">
                                Pick Up Place
                            </div>
                            <div class="inpt">
                                <select name="" id="">
                                    @foreach ($listkota as $i)
                                    <option value="{{$i->id_kota}}">{{$i->kota}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>
                    </div>
                    <div class="kotaakhir" style="display: none">
                        <div class="input-box5">
                            <div class="label">
                                Drop off Place
                            </div>
                            <div class="inpt">
                                <select name="" id="">
                                    @foreach ($listkota as $i)
                                    <option value="{{$i->id_kota}}">{{$i->kota}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tambahan">
                    <div class="input-box4">
                        <input type="checkbox" name="agree" value="kotaakhir">Drop car off at different location
                    </div>
                </div>
                <div class="tanggal">
                    <div class="tanggalawal">
                        <div class="input-box2">
                            <label> Rental Start date <label>
                            <input type="date" placeholder="Search Places">
                        </div>
                    </div>
                    <div class="tanggalakhir">
                        <div class="input-box3">
                            <label> Rental End Date <label>
                            <input type="date" placeholder="Search Places">
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
                    <input type="submit" value="Submit" class="btncars" >
                </div>
            </form>
        </div>
    </div>
</section>
<section class="listmobil">
    <div class="col-12">
        @foreach ($cars as $l)
        <div class="car">
            <div class="paket">
                <div class="left">
                    <img src="mbl/{{$l -> Image}}" alt="">
                </div>
                <div class="mid">
                    <div class="car1">
                        <p> {{$l -> Jenis }}</p>
                        <p> {{$l -> Penumpang }} <img src="img/user.png" alt=""> </p>
                        <p> {{$l -> Bagasi }} <img src="img/luggage.png" alt=""> </p>
                        <p> {{$l -> Transmisi }}</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="top">
                    <p>Rental Per Day</p>
                    <div class="harga">
                        Rp. {{$l -> Harga }},00
                    </div>
                </div>
                <div class="bottom">
                    <a href="{{ url('details/'.$l->ID) }}" class="buton" style="text-decoration: none">Continue</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{$cars->links()}}
        </div>
    </div>

    <script src= "https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });
        });
    </script>
</section>
<div class="fotercar">
    @include('footer')
</div>
{{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

