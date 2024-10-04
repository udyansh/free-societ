<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/shoedata">Display All Records</a><br>
    <a href="/regshoes">Add New Records</a>

    <div class="row">
        @foreach($records as $d)
        <div class="col-3">{{$d->texts}}</div>
    </div>

    
</body>
</html>
