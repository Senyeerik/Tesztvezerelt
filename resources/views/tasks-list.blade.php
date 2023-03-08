<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$foo}}</h1>
    <ul> 
        @foreach($tasks as $task) 
            <li>{{ $task }}</li> 
        @endforeach 
    </ul> 
</body>
</html>