<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@forelse ($info as $userInfo)
        <table>
            <tr>
                <td>{{$userInfo->email}}</td>
                <td>{{$userInfo->name}}</td>
                <td>{{$userInfo->surname}}</td>
                <td><img src="{{$userInfo->photo}}" width="100px"></td>
            </tr>
        </table>
    @empty
        <p>Nothing at the moment.</p>
    @endforelse

</body>
</html>