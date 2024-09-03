<!DOCTYPE html>
<html>
<head>
    <title>Daftar Cooliner</title>
    <script>
        function editCooliner(id, nama, asalDaerah, deskripsi) {
            document.getElementById('id').value = id;
            document.getElementById('nama').value = nama;
            document.getElementById('asal_daerah').value = asalDaerah;
            document.getElementById('deskripsi').value = deskripsi;
        }
    </script>
</head>
<body>
    <h1>Daftar Cooliner</h1>
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h3>Edit Data Cooliner</h3>
        <form action="{{ route('cooliner.update', $cooliner->id) }}" method="post">
        @csrf
        <table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="{{ $cooliner->nama }}"></td>
        </tr>
        <tr>
        <td>Asal Kuliner</td>
        <td><input type="text" name="asal_daerah" value="{{ $cooliner->asal_daerah }}"></td>
        </tr>
        <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="deskripsi" value="{{ $cooliner->deskripsi }}"></td>
        </tr>
        <td><input type="submit" value="Simpan"></td>
        </table>
        </form>
    </div>
</body>
</html>