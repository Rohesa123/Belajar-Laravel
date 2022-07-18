<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Siswa</legend>
        @foreach($data_siswa as $siswa)
            Id      : {{$siswa['id']}}<br>
            Nama    : {{$siswa['nama']}}<br>
            umur    : {{$siswa['umur']}}<br>
            Status  :
            @if($siswa['umur'] >= 17)
                Anda Berhak Mendapatkan SIM
            @else
                Anda Belum Berhak Mendapatkan SIM
            @endif
            <br>
            Kelas   : {{$siswa['kelas']}}<br>
            Daftar Mata Pelajaran :
            @foreach($siswa['mapel'] as $mapel)
                <li>{{$mapel}}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>
</html>