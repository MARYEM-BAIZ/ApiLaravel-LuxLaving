<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testPage</title>
</head>
<body>
{{-- retrieving users --}}
<ul>
    <h2>Users list</h2>
    <p>{{ $users->count() }}</p>
    @foreach ($users as $user)
        <li>Name : {{ $user->name }}, email : {{ $user->email }}</li>
    @endforeach
</ul>
</body>
</html>
