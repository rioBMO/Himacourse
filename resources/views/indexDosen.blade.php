<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
</head>
<body>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h1>Daftar Dosen</h1>
    <a href="/add_dosen"><button type="button">Tambah Dosen</button></a> <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>NIP/NIDN</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosen as $dosen)
            <tr>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->prodi }}</td>
                <td>{{ $dosen->jurusan }}</td>
                <td>
                    <table style="width:25; border:none;">
                        <tr>
                            <td><a href="/edit_dosen/{{ $dosen->id }}"><button type="button">Edit</button></a></td>
                            <td>
                                <form action="/delete_dosen/{{ $dosen->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>