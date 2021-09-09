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
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-Mail</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td><a href="{{route('show',$user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>

