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
        <legend>Tabel Siswa</legend>
        <table>
            <tr>
                <th>Nama</th>
            </tr>
            @foreach($post as $data)
                <tr>
                    <td>{{$data['nama']}}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>