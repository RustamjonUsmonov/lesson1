<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>First APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
<h1>First App</h1>
<div class="container m-2">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$user->name}}</h5>
            <p class="card-text">{{$user->password}}</p>
            <a href="#" class="btn btn-primary">{{$user->email}}</a>
        </div>
    </div>
</div>
</body>
</html>


