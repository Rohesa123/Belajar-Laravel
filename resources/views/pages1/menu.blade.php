<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($menu as $menu)
        @foreach($menu['menu_n'] as $menu_n)
            <ul>
                <li>{{$menu_n}}</li>
                @if ($menu_n == "Berita")
                    <ul>
                        @foreach($menu['menu_b'] as $menu_b)
                            <li>{{$menu_b}}</li>
                            @if($menu_b == "Olahraga")
                                <ul>
                                    @foreach($menu['menu_o'] as $menu_o)
                                        <li>{{$menu_o}}</li>                                        
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </ul>
        @endforeach
    @endforeach
</body>
</html>