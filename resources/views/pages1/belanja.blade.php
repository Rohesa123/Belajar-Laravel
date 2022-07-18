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
        <legend>Belanja</legend>
        @foreach($belanja as $belanja)
            <table border="1" style="margin: 20px auto;" cellpadding="5">
                @php $column = 2 + count($belanja['barang']); @endphp
                <tr>
                    <th colspan="{{$column}}">Belanjaan {{$belanja['nama']}}</th> 
                </tr>
                <tr>    
                    @foreach($belanja['barang'] as $barang)
                        <th>{{$barang}}</th>    
                    @endforeach
                    <th>Total Belanja</th>
                    <th>Cashback</th>
                </tr>
                <tr>
                    @php $cc =0; $hasil_1 = 0; @endphp
                    @foreach($belanja['harga'] as $harga)
                        @php $hasil_1 += $harga; @endphp
                        <td>Rp. {{number_format($harga,0,".",".")}}</td>
                    @endforeach
                        <td>Rp. {{number_format($hasil_1,0,".",".")}}</td>
                        @if($hasil_1 > 250000 && $hasil_1 <= 500000 )
                            @php $cc = ($hasil_1 * 0.05) @endphp
                        @elseif($hasil_1 > 500000)
                            @php $cc = ($hasil_1 * 0.10) @endphp
                        @endif
                        <td>Rp. {{number_format($cc,0,".",".")}}</td>
                    </tr>
                    <tr>
                    <th colspan="{{($column % 2 == 0)?$column / 2:($column / 2) + 0.5}}">Harga Setelah Cashback : </th>
                    @if($hasil_1 > 250000 && $hasil_1 <= 500000 )
                        @php $hasil_1 -= ($hasil_1 * 0.05) @endphp
                    @elseif($hasil_1 > 500000)
                        @php $hasil_1 -= ($hasil_1 * 0.10) @endphp
                    @endif
                    <td style="text-align: center" colspan="{{($column % 2 == 0)?$column / 2:$column / 2}}">Rp. {{number_format($hasil_1,0,".",".")}}</td>
                </tr>
            </table>
        @endforeach 
    </fieldset>
</body>
</html>