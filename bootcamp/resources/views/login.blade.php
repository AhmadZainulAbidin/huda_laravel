<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <table>
        <thead>
            <tr>   
                <td>nama</td>
                <td>email</td>
                <td>password</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d['name']}}</td>
                <td>{{ $d['email']}}</td>
                <td>{{ $d['password']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Register</h1>
    <form action="/login" method="POST">
        @csrf
    <input type="text" name="name" placeholder="nama">    
    <input type="email" name="email" placeholder="email">
    <input type="password" name="text"placeholder="password">

    <button type="submit">Submit</button>
    </form>
</body>
</html>