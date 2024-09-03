<!DOCTYPE html>
<html>
<head>
    <title>Daftar Cooliner</title>
</head>
<body>
    <h1>Daftar Cooliner</h1>
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Asal Daerah</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cooliners as $cooliner)
            <tr>
                <td>{{ $cooliner->nama }}</td>
                <td>{{ $cooliner->asal_daerah }}</td>
                <td>{{ $cooliner->deskripsi }}</td>
                <td>
                    <a href="{{ route('cooliner.edit', $cooliner->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <div class="container">
        <h3>Tambah Data Cooliner</h3>
        <form action="{{ url('/cooliner/store') }}" method="post">
        @csrf
        <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
        </tr>
        <tr>
        <td>Asal Kuliner</td>
        <td><input type="text" name="asal_daerah"></td>
        </tr>
        <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="deskripsi"></td>
        </tr>
        <td><input type="submit" value="Simpan"></td>
        </table>
        </form>
        </div>
</body>
</html>