<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    {{-- Icon --}}
    <link rel="icon" href="{{ asset('img/favicon.ico'); }}">

    <title>Rincian</title>
</head>
<body>
@include("header");
<section class="rincian">
    <div class="bg">
        <div class="gmbr">
            <img src={{ asset('mbl/'. $i ->K_IMAGE) }} alt="">
        </div>
        <div class="list">
            <div class="nama">
                {{ $i ->K_JENIS}}
            </div>
            <div class="penumpng">
                {{ $i ->K_PENUMPANG}} <i><img src={{ asset('img/user.png'); }}  alt=""></i>
            </div>
            <div class="bagasi">
                {{ $i ->K_BAGASI}} <i><img src={{ asset('img/luggage.png'); }}  alt=""></i>
            </div>
            <div class="jenis">
                {{ $i ->K_TRANSMISI}}
            </div>
            <div class="supirtidak">
                !Non - Driver!
            </div>
            <div class="kota">
                !Surabaya!
            </div>
            <div class="tgl">
                !23 October 2021 - 24 October 2021!
            </div>
        </div>
        <div class="price">
            <div class="desc">
                <p>Rental per Day</p>
            </div>
            <div class="harga">
                <p>Rp. {{ $i ->K_HARGA}},00</p>
            </div>
        </div>
        <div class="continue">
                <a href="{{ url('prosesing/'.$i->K_ID) }}" class="btn1" style="text-decoration: none">Submit</a>
            <form action="/list">
                <input type="submit" value="Cancel" class="btn2" >
            </form>
        </div>
    </div>
</section>
<section class="btm">
    <div class="syarat">
        <p>
            Rental Info
            Policy
            <br>
            - Return the fuel as received
            <br>
            <br>
            Rental Requirements : <br>
            - ID card (KTP or passport) <br>
            - Drivers License (SIM A)/International Driving Permit <br>
            - Family Card (Kartu Keluarga) <br>
            - Photo of Credit Card (can be replaced if you dont have one) <br>

        </p>
    </div>
</section>
<div class="foter" style="margin-top: 960px;">
    @include('footer')
</div>
</body>
</html>
