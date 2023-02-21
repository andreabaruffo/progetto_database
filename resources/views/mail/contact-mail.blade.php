<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
       {{$user['name']}} , grazie per averci contattato
    </h1>
    <h2>
        la tua richiesta è stata presa in visione,verrai ricontattato appena possibile sulla mail : {{$user['email']}}
    </h2>
    <h3>
        Il tuo messaggio era: <br>{{$user['message']}}
    </h3>
</body>
</html>