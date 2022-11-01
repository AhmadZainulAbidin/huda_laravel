<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <td>Judul</td>
                <td>Kejadian</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d['Judul']}}</td>
                <td>{{ $d['Kejadian']}}</td>
                <td>{{ $d['Tanggal']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Berita</h1>
    <form action="/berita" method="POST">
        @csrf
    <input type="text" name="name" placeholder="Judul">    
    <input type="kejadian" name="kejadian" placeholder="Kejadian">
    <input type="Tanggal" name="text"placeholder="Tanggal">

    <button type="submit">Submit</button>
    </form>
</body>
</html>