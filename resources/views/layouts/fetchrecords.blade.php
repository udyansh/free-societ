<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($detail as $details)
    <h1>{{$details->details}}</h1>
    <h1><img src="freesociety/{{$details->image}}" alt=""></h1>
    @endforeach
</body>
</html>