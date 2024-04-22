<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form action="/form" method="post">
        @csrf
        <label for="">Username : @error('username') {{$message}} @enderror 
            <input type="text" name="username" value="{{old('username')}}"></label> <br>
        <label for="">Password : @error('password') {{$message}} @enderror 
            <input type="password" name="password" value="{{old('password')}}"></label> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>