<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
</head>
<body>
    <h1>Edit Data Dosen</h1>
    <form action="/update_dosen/{{ $dosen->id }}" method="post">
        {{ csrf_field() }}
        <label for="nidn">NIDN :</label><br>
        <input type="text" id="nidn" name="nidn" value="{{ $dosen->nidn }}" required="required"><br>
        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" value="{{ $dosen->nama }}" required="required"><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" value="{{ $dosen->email }}" required="required"><br>
        <label for="prodi">Prodi :</label><br>
        <input type="text" id="prodi" name="prodi" value="{{ $dosen->prodi }}" required="required"><br>
        <label for="jurusan">Jurusan :</label><br>
        <input type="text" id="jurusan" name="jurusan" value="{{ $dosen->jurusan }}" required="required"><br><br>
        <table style="width:25; border:none;">
            <tr>
                <th><a href="/dosen"><button type="button">Kembali</button></a></th>
                <th><input type="submit" value="Submit"></th>
            </tr>
        </table>
    </form>
</body>
</html>