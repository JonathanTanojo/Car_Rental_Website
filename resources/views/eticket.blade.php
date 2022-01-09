<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon --}}
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- CSS --}}
    <link href="{{ URL::asset('css/styleeticket.css') }}" rel="stylesheet" type="text/css" >
    {{-- Header & Footer--}}
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >




    <title>E-Ticket</title>
</head>
<body>
    @include('header')
    <div class="row" style="width: 100%">
        <div class="col-8">
            <div class="kiri">
                <div class="atas">
                    <img src={{ asset('img/barcode.png'); }} alt="">
                </div>
                <div class="bawah">
                    <div class="judul" style=" margin-left: 13%; margin-top: 6%;">
                        <h3>Rental Details</h3>
                        <div class="gmbri">
                            <img src={{ asset('mbl/'.$i->K_IMAGE); }} alt="" style="width: 360px">
                        </div>
                        <div class="combine" style="display: flex">

                            <div class="text">
                                <p> <b>{{ $i ->K_JENIS}}</b>  <br>
                                    {{$i ->K_TRANSMISI}}  <br>
                                    !31 Desc 2021 - 3 Jan 2022!<br>
                                    !Surabaya! <br>
                                    !Non-Driver!</p>
                                </div>
                                <div class="submit">
                                    <form action="/">
                                        <input type="submit" value="Finish" class="btno">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-4">
            <div class="kanan">
                <div class="flow">
                    <div class="lingkaran">
                        <div class="angka">
                            1
                        </div>
                    </div>
                    <div class="proses">
                        - Book
                    </div>
                    <div class="lingkaran">
                        <div class="angka1">
                            2
                        </div>
                    </div>
                    <div class="proses">
                        - Pay
                    </div>
                    <div class="lingkaran">
                        <div class="angka1">
                            3
                        </div>
                    </div>
                    <div class="proses" style="color: blue;font-weight: 600;">
                        - E-Ticket
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foter" style="margin-top: 867px;">
        @include('footer')
    </div>
</body>
</html>
