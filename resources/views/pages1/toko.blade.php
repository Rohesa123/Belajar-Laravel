<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Toko Bangunan Makmur Jaya</h1>
        <br>
        @if($produk_1 !== "Kosong" && $produk_2 !== "Kosong")
            @if($produk_1 == "Pasir Urug")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 50.000
            @elseif($produk_1 == "Batako Besar")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 30.000
            @elseif($produk_1 == "Bata Merah")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 40.000
            @elseif($produk_1 == "Batu Apung")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 65.000
            @else
                Nama Barang : Tidak Ada <br>
                Harga : Tidak Ada
            @endif
            <br>
            <br>
            @if($produk_2 == "Pasir Urug")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 50.000
            @elseif($produk_2 == "Batako Besar")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 30.000
            @elseif($produk_2 == "Bata Merah")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 40.000
            @elseif($produk_2 == "Batu Apung")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 65.000
            @else
                Nama Barang : Tidak Ada <br>
                Harga : Tidak Ada
            @endif
        @elseif($produk_1 !== "Kosong" || $produk_2 !== "Kosong")
            @if($produk_1 == "Pasir Urug")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 50.000
            @elseif($produk_1 == "Batako Besar")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 30.000
            @elseif($produk_1 == "Bata Merah")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 40.000
            @elseif($produk_1 == "Batu Apung")
                Nama Barang : {{$produk_1}} <br> Harga : Rp. 65.000
            @elseif($produk_1 !== "Kosong")
                Nama Barang : Tidak Ada <br>
                Harga : Tidak Ada
            @endif
            <br>
            <br>
            @if($produk_2 == "Pasir Urug")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 50.000
            @elseif($produk_2 == "Batako Besar")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 30.000
            @elseif($produk_2 == "Bata Merah")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 40.000
            @elseif($produk_2 == "Batu Apung")
                Nama Barang : {{$produk_2}} <br> Harga : Rp. 65.000
            @elseif($produk_2 !== "Kosong")
                Nama Barang : Tidak Ada <br>
                Harga : Tidak Ada
            @endif
        @else 
            <strong>Maaf Barang Tidak Ada</strong>
        @endif




        {{-- @if($produk == "Pasir Urug")
            Nama Barang : {{$produk}} Rp. 50.000
        @elseif($produk == "Batako Besar")
            Nama Barang : {{$produk}} Rp. 30.000
        @elseif($produk == "Bata Merah")
            Nama Barang : {{$produk}} Rp. 40.000
        @elseif($produk == "Batu Apung")
            Nama Barang : {{$produk}} Rp. 65.000
        @else
            Mohon Maaf Material Tidak Ada
        @endif --}}
    </center>
</body>
</html>