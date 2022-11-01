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
                <td>judul</td>
                <td>konten</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d['judul']}}</td>
                <td>{{ $d['konten']}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Register</h1>
    <form action="/berita" method="POST">
        @csrf
    <input type="text" name="judul" placeholder="nama">    
    <input type="text" name="konten" placeholder="email">
   

    <button type="submit">Submit</button>
    </form>
</body>
</html>