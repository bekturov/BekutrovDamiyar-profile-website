<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('add-user') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="email" placeholder="email">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surname" placeholder="surname">
    <input type="file" name="photo" accept="image/png,image/jpeg">
    <button type="submit">Create111111111111111111111111111111111111</button>
    </form>
</body>
</html>