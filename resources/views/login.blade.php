@php



@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L'épreuve de la connexion</title>
</head>
<body>
    <h1>QUI OSE SE CONNECTER A MON SITE ?</h1>

    @if (session('error'))
        <div>
            <h1>{{session('error')}}</h1>
        </div>
    @endif

    <form method="POST" action="{{ route('login')}}">
        @csrf
        <input type="email" title="email" name="email" placeholder="Email">
        <input type="password" title="password" name="password" placeholder="Password">
        <button type="submit">Essayons de se connecter...</button>
    </form>
</body>
</html>