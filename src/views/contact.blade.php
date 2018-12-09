<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <h1>Contact us</h1>

    <form action="{{route('send')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">ADD</button>
    </form>
</body>
</html>