<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/stylepro.css') }}">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Icon --}}
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
    <title>Booking Order</title>
</head>
<body>
    @include('header')
    <div class="col-12">
        <div class="bgwhite">
            <div class="txt">
                <p>Already Have Acoount</p>
            </div>
            <div class="lock">
                <img src="{{ asset('img/lock.png'); }}" alt="">
                <div class="txt1">
                    <p>Login  or register to enjoy this member-only benefit</p>
                </div>
                <div class="txt2">
                    <a href="/login">Login / Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="{{ url('payment/bank/'.$i->K_ID) }}" method="POST" >
            @csrf
        <div class="col-8" style="width: 60.7%;">
            <div class="atas">
                <div class="konten">
                    <div class="jdl">
                        <p>
                            Contact Details
                        </p>
                    </div>
                    <div class="jdlnama" style="display: flex">
                        <p>
                            Name <p style="color: red;margin-left: 1px;"> *</p>
                        </p>
                    </div>
                    <div class="inptnama">
                        <p>
                            <input type="text"  class="inputo" name="name" id="" required>
                        </p>
                    </div>
                    <div class="jdlnotlp" style="display: flex">
                        <p>
                            Phone <p style="color: red;margin-left: 1px;"> *</p>
                        </p>
                    </div>
                    <div class="inptnotlp">
                        <p>
                            <input type="text"  class="inputo" name="notlp" id="" required>
                        </p>
                    </div>
                    <div class="jdlgmail" style="display: flex">
                        <p>
                            Gmail <p style="color: red;margin-left: 1px;">*</p>
                        </p>
                    </div>
                    <div class="inptgmail">
                        <p>
                            <input type="text"  class="inputo" name="gmail" id="" required>
                        </p>
                    </div>
                </div>
            </div>
            <div class="bawah">
                <div class="konten">
                    <div class="jdl">
                        <p>
                            Driver Details
                        </p>
                    </div>
                    <div class="jdlnama" style="display: flex">
                        <p>
                            Name <p style="color: red;margin-left: 1px;"> *</p>
                        </p>
                    </div>
                    <div class="inptnama">
                        <p>
                            <input type="text"  class="inputo" name="namadriver" id="" required>
                        </p>
                    </div>
                    <div class="jdlnotlp" style="display: flex">
                        <p>
                            Phone <p style="color: red;margin-left: 1px;"> *</p>
                        </p>
                    </div>
                    <div class="inptnotlp">
                        <p>
                            <input type="text"  class="inputo" name="notlpdriver" id="" required>
                        </p>
                    </div>
                    <div class="submit">
                        <form action="">
                            <input type="submit" value="Continue" class="btno">
                        </form>
                        <form action="/list">
                            <input type="submit" value="Cancel" class="btn3" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <div class="col-4" style="margin-top: 377px; margin-left: 60%;">
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
            <div class="bawahkanan">
                <div class="jdl1">
                    <h3>Rental Details</h3>
                    <div class="gmbri">
                        <img src={{ asset('mbl/'.$i->K_IMAGE); }} alt="">
                    </div>
                    <div class="text">
                        <p> <b>{{ $i ->K_JENIS}}</b>  <br>
                        {{$i ->K_TRANSMISI}} <br>
                        !31 Desc 2021 - 3 Jan 2022! <br>
                        !Surabaya! <br>
                        !Non-Driver! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foterpro">
        @include('footer')
    </div>
</body>
</html>
