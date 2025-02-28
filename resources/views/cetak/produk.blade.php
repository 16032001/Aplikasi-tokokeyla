<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Barang</title>
    <link rel="icon" type="image/png" href="{{url('logo/logo.png')}}">
    <style>
        /* .logo {
            margin-top: 15px;
            float: left;
            width: 17%;
            padding: 0px;
            text-align: right;
        } */

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
            padding-left: 5px;
            text-align: center;
        }

        .judul {
            text-align: center;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        .sizeimg {
            width: 100px;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 13%;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        hr {
            margin-top: 15%;
            height: 3px;
            background-color: black;
        }

        br {
            margin-bottom: 5px !important;
        }

        h5 {
            line-height: 0.3;
        }
    </style>
</head>

<body>

    <div class="header">
        <!-- <div class="logo">
            <img class="sizeimg" src="logo/logo.png">
        </div> -->
        <div class="headtext">
            <h2 style="margin:0px;">Toko Kayla</h2>
            <p style="margin:0px;">Jl. Trikora, Kel.Guntung Manggis, Kec. Landasan Ulin, Kota Banjarbaru, Kalimantan Selatan</p>
            <p style="margin:0px;">Telp. 081953000765</p>
        </div>
        <hr>
    </div>

    <div class="container" style="margin-top:-40px;">
        <h3 style="text-align:center;text-transform: uppercase;">Laporan Data Barang</h3>
        <table class="table table-bordered nowrap">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Barang</th>
                    <th scope="col" class="text-center">Kategori</th>
                    <th scope="col" class="text-center">Satuan</th>
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td scope="col" class="text-center">{{$loop->iteration}}</td>
                    <td scope="col" class="text-center">{{$d->nama_barang }}</td>
                    <td scope="col" class="text-center">{{$d->kategori->nama_kategori }}</td>
                    <td scope="col" class="text-center">{{$d->satuan->nama_satuan }}</td>
                    <td scope="col" class="text-center">{{$d->stok }}</td>
                    <td scope="col" class="text-center">{{$d->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <small>Dicetak Pada : {{$now}}</small>
        <br>
        <br>
        <div class="ttd">
            <h5>
                Banjarbaru,
            </h5>
            <!-- <h5>Atasan</h5> -->
            <br>
            <br>
            <h5 style="text-decoration:underline;">Nama Atasan</h5>
            <!-- <h5>Penanggung jawab</h5>
            <h5>NIK. 201101 19920709 7</h5> -->
        </div>
    </div>
</body>

</html>
