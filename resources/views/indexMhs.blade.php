<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <th>{{ $mhs->nim }}</th>
                <th>{{ $mhs->nama }}</th>
                <th>{{ $mhs->email }}</th>
                <th>{{ $mhs->prodi }}</th>
                <th>{{ $mhs->jurusan }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>