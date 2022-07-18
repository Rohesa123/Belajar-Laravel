<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr * {
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <strong>{{$nama}}</strong> <br>
            </td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>
                <strong>{{$umur}}</strong> <br>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <strong>{{$alamat}}</strong> <br>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <strong>{{$jk}}</strong> <br>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <strong>{{$hobi}}</strong>
            </td>
        </tr>
    </table>
</body>
</html>