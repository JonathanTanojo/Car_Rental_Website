<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link href="{{ URL::asset('css/stylepayment.css') }}" rel="stylesheet" type="text/css" >
    {{-- Header & Footer--}}
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Icon --}}
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">

    <title>Payment</title>
</head>
<body>
    @include("header")
    <section class="page">
        <div class="row">
            <div class="col-9">
                <div class="col-4">
                    <div class="bgbiru">
                        <div class="list-group">
                            <form action="{{ url('payment/bank/'.$i->K_ID) }}" method="POST">
                                @csrf
                                <input type="submit" class="list-group-item list-group-item-action active" value="Bank Transfer">
                            </form>
                            <form action="{{ url('payment/atm/'.$i->K_ID) }}" method="POST">
                                @csrf
                                <input type="submit" class="list-group-item list-group-item-action" value="ATM">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="bgputih">
                        <p>
                            > BCA <br>
                            08121555154 <br> <br>
                            > Mandiri <br>
                            08131555154 <br> <br>
                            > Permata <br>
                            08121455154 <br> <br>
                            > HSBC <br>
                            08121554466 <br> <br>
                            > BNI <br>
                            081215554122 <br> <br>
                            > BRI <br>
                            255421585128 <br> <br>
                            <br> <br>
                            Name : carsrentalcom
                        </p>
                    </div>
                    <form action="/list">
                        <input type="submit" value="Cancel" class="btn3" >
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="combo">
                    <div class="col-4">
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
                            <div class="proses" style="color: blue;font-weight: 600;">
                                - Pay
                            </div>
                            <div class="lingkaran">
                                <div class="angka1">
                                    3
                                </div>
                            </div>
                            <div class="proses">
                                - E-Ticket
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="judul" style=" margin-left: 13%; margin-top: 11%;">
                            <h3>Rental Details</h3>
                            <div class="gmbri">
                                <img src={{ asset('mbl/'.$i->K_IMAGE); }} alt="" style="width: 230px">
                            </div>
                            <div class="text">
                                <p> <b>{{ $i ->K_JENIS}}</b>  <br>
                                    {{$i ->K_TRANSMISI}}  <br>
                                !31 Desc 2021 - 3 Jan 2022!<br>
                                !Surabaya! <br>
                                !Non-Driver!</p>
                            </div>
                            <div class="submit">
                                <form action="{{ url('eticket/'.$i->K_ID) }}" method="POST">
                                    @csrf
                                    <input type="submit" value="Continue" class="btno">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @include("footer")
</body>
</html>
