<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Acara Tlevisi</legend>
            <table border="1">
                @foreach($televisi as $televisi)
                    <tr>
                        <th colspan="4">{{$televisi['nama_channel']}}</th>
                    </tr>
                    <tr>
                        <th>Acara</th>
                        <th>Jadwal Tayang</th>
                        <th>Jam</th>
                        <th>Tanggal Tayang</th>
                    </tr>
                    <tr>
                        @foreach($televisi['acara_1'] as $item)
                            <td>{{$item}}</td>
                        @endforeach
                    </tr>
                                        <tr>
                        @foreach($televisi['acara_2'] as $item)
                            <td>{{$item}}</td>
                        @endforeach
                    </tr>
                                        <tr>
                        @foreach($televisi['acara_3'] as $item)
                            <td>{{$item}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td colspan="4" style="height: 20px"></td>
                    </tr>
                @endforeach
            </table>
    </fieldset>
</body>
</html>