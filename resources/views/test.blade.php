<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-md-12">

    @foreach($links as $item)

        @if($item->images)
            <a href="{{$item->permalink}}"><img src="{{$item->images[0]->src}}" alt="Italian Trulli" width="200px" height="200px"></a>
        @endif
        <a href="{{$item->permalink}}">{{$item->name}}</a>
        <p>{{$item->description}}</p>
        <p>{{$item->price}}</p>
        <br>
    @endforeach
</div>
</body>
</html>


