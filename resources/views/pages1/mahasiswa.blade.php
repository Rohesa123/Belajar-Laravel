<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Mata Kulia</th>
            <th>Dosen Pembimbing</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['Nama']}}</td>
            <td>
            @if($data['id_d'] == '1')
                Pemograman Mobile
            @elseif($data['id_d'] == '2')
                Pemograman Web
            @endif
            </td>
            <td>    
            @if($data['id_d'] == '1')
                Yusuf Bachtiar
            @elseif($data['id_d'] == '2')
                Yaris Riyadi
            @endif
            </td>
            <td>{{$data['Nilai']}}</td>
            <td>
            @if($data['Nilai'] <= 100 && $data['Nilai'] >= 90)
                A
            @elseif($data['Nilai'] < 90 && $data['Nilai'] >= 80)
                B
            @elseif($data['Nilai'] < 80 && $data['Nilai'] >= 70)
                C
            @elseif($data['Nilai'] < 70 && $data['Nilai'] >= 50)
                D
            @elseif($data['Nilai'] < 50 && $data['Nilai'] >= 0)
                E
            @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>