<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Jadwal Kuliah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 class="py-3">Buat Jadwal</h2>
        <form action="{{ url('/input') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kd_mkul">Kode Mata Kuliah:</label>
                <input type="kd_mkul" class="form-control" id="kd_mkul" name="kd_mkul">
            </div>
            <div class="form-group">
                <label for="nama_mkul">Nama Mata Kuliah:</label>
                <input type="nama_mkul" class="form-control" id="nama_mkul" name="nama_mkul">
            </div>
            <div class="form-group">
                <label for="kd_dosen">Kode Dosen:</label>
                <input type="kd_dosen" class="form-control" id="kd_dosen" name="kd_dosen">
            </div>
            <div class="form-group">
                <label for="jam">Jam:</label>
                <input type="jam" class="form-control" id="jam" name="jam">
            </div>
            <div class="form-group">
                <label for="ruang_kelas">Ruang Kelas:</label>
                <input type="ruang_kelas" class="form-control" id="ruang_kelas" name="ruang_kelas">
            </div>
            <div class="form-group">
                <label for="jumlah_mhs">Jumlah Mahasiswa:</label>
                <input type="jumlah_mhs" class="form-control" id="jumlah_mhs" name="jumlah_mhs">
            </div>
            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai:</label>
                <input type="tanggal_mulai" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
