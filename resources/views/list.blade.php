<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Jadwal Kuliah</title>
</head>

<body id="dashboard-page">
    <div class="container">
        <div class="header">
            <h2>Jadwal Kuliah</h2>
            <a href="{{ url('/input') }}" class="add-schedule-button">Buat Jadwal</a>
        </div>
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Kode Dosen</th>
                    <th>Jam</th>
                    <th>Ruang Kelas</th>
                    <th>Jumlah Mahasiswa</th>
                    <th>Tanggal Mulai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->kd_mkul }}</td>
                    <td>{{ $item->nama_mkul }}</td>
                    <td>{{ $item->kd_dosen }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>{{ $item->ruang_kelas }}</td>
                    <td>{{ $item->jumlah_mhs }}</td>
                    <td>{{ $item->tanggal_mulai }}</td>
                    <td class="action-button">
                        <a href="{{ url('/edit/' . $item->id) }}" class="edit-button">EDIT</a>
                        <form action="{{ url('/delete/' . $item->id) }}" method="POST" class="delete-button">
                            @method('DELETE')
                            @csrf
                            <button type="submit" style="border:none; background: transparent">HAPUS</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <style>
        body {
            background-color: #ececec;
            margin-top: 75px;
        }

        .container {
            padding: 1rem;
            background-color: white;
            border-radius: 10px;
        }

        .divider {
            width: 1px;
            height: 100%;
            background-color: #343a40;
        }

        /* navbar */

        .navbar {
            position: absolute;
            top: 0;
            right: 0;
            height: 35px;
            width: 100%;
            padding: 1rem;
            display: flex;
            justify-content: flex-end;
        }

        .navbar .navbar-content {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .navbar .navbar-content .username,
        .logout-button {
            margin: 0 0.5rem;
            color: #343a40;
            font-weight: 600;
        }

        .navbar .navbar-content .logout-button {
            text-decoration: none;
        }

        /* login page  */

        #login-page {
            background: url('./login-bg.jpg') center center;
            background-size: cover;
            margin: 0;
            display: flex;
        }

        #login-page .bg-opacity {
            width: 100%;
            height: 100%;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        #login-page .login-box {
            width: fit-content;
            margin: auto;
            padding: 2rem 3rem;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.5);
        }

        #login-page .login-box form#login-form {
            display: flex;
            justify-self: center;
            flex-direction: column;
        }

        #login-page .login-box .input-username,
        #login-page .login-box .input-password {
            border-radius: 0;
            box-shadow: none;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #fff;
            margin: 0 auto;
            display: inherit;
            margin-bottom: 0;
            font-size: 12px;
            color: #fff;
            height: 35px;
            line-height: 35px;
            padding-left: 0;
            letter-spacing: 1px;
        }

        #login-page .login-box .input-username::placeholder,
        #login-page .login-box .input-password::placeholder {
            color: white;
        }

        #login-page .login-box .button {
            cursor: pointer;
            background-color: transparent;
            background-image: none;
            filter: none;
            box-shadow: none;
            border: 2px solid #fff;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            color: #fff;
            text-shadow: none;
            margin-top: 10px;
            text-transform: uppercase;
            padding: 8px 30px;
            font-size: 14px;
            letter-spacing: 1px;
            width: auto !important;
            margin: 1rem auto !important;
        }

        /* dashboard page */
        #dashboard-page {
            display: flex;
            flex-direction: column;
        }

        #dashboard-page .navbar {
            position: absolute;
            top: 0;
            right: 0;
            height: 35px;
            width: 100%;
            padding: 1rem;
            display: flex;
            justify-content: flex-end;
        }

        #dashboard-page .navbar .navbar-content {
            display: flex;
            align-items: center;
            height: 100%;
        }

        #dashboard-page .navbar .navbar-content .username,
        .logout-button {
            margin: 0 0.5rem;
            color: #343a40;
            font-weight: 600;
        }

        #dashboard-page .navbar .navbar-content .logout-button {
            text-decoration: none;
        }

        #dashboard-page .header {
            display: flex;
            justify-content: space-between;
        }

        #dashboard-page .add-schedule-button,
        #dashboard-page .add-schedule-button:visited {
            padding: 1rem 2rem;
            border-radius: 20px;
            align-self: flex-end;
            color: #00994C;
            border: 1px solid #00994C;
            transition: all 0.5s;
            text-decoration: none;
            margin: 1rem 0;
            font-weight: 600;
        }

        #dashboard-page .add-schedule-button:hover {
            background-color: #00994C;
            color: white;
        }

        #dashboard-page .schedule-table {
            border-collapse: collapse;
            width: 100%;
        }

        #dashboard-page .schedule-table thead tr th {
            text-align: left;
            background-color: #00994C;
            color: white;
        }

        #dashboard-page .schedule-table thead tr th,
        #dashboard-page .schedule-table tr td {
            border: 0.5px solid #ddd;
            padding: 0.5rem;
        }

        #dashboard-page .schedule-table thead tr th:first-child {
            border-top-left-radius: 10px;
            border-left: none;
            border-top: none;
        }

        #dashboard-page .schedule-table thead tr th:last-child {
            border-top-right-radius: 10px;
            border-top: none;
            border-right: none;
        }

        #dashboard-page .schedule-table tr:nth-child(even) {
            background-color: #ededed;
        }

        #dashboard-page .schedule-table tr:hover {
            background-color: #ddd;
        }

        #dashboard-page .schedule-table .action-button {
            display: flex;
            padding: 1rem;
        }

        #dashboard-page .schedule-table .action-button .edit-button,
        #dashboard-page .schedule-table .action-button .delete-button {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: .75rem;
            transition: all 0.5s;
            text-decoration: none;
            text-align: center;
            margin: 0 0.5rem;
            font-weight: 600;
        }

        #dashboard-page .schedule-table .action-button .edit-button {
            color: #343a40;
            border: 1px solid #343a40;
        }

        #dashboard-page .schedule-table .action-button .edit-button:hover {
            background-color: #343a40;
            color: white;
        }

        #dashboard-page .schedule-table .action-button .delete-button {
            color: #dc3545;
            border: 1px solid #dc3545;
        }

        #dashboard-page .schedule-table .action-button .delete-button:hover {
            background-color: #dc3545;
            color: white;
        }

        /* Form Page */

        #create-schedule-page .header {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        #create-schedule-page .header .back-button {
            margin: 0 2rem 0 0.5rem;
            font-size: 2rem;
            cursor: pointer;
        }

        #create-schedule-page .container {
            margin-right: auto;
            margin-left: auto;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #edit-schedule-page .header {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        #edit-schedule-page .header .back-button {
            margin: 0 2rem 0 0.5rem;
            font-size: 2rem;
            cursor: pointer;
        }

        #edit-schedule-page .container {
            margin-right: auto;
            margin-left: auto;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form {
            width: 80%;
        }

        .form tr td {
            padding: 0.5rem 1rem;
        }

        .form tr td>input {
            padding: 1px 2px;
            width: 100%;
        }

        .form tr td>input {
            height: 25px;
            border-radius: 5px;
            border: 0.5px solid black;
        }

        .form tr td.input-field {
            width: 80%;
        }

        .form .submit-button {
            padding: 1rem 2rem;
            border-radius: 5px;
            align-self: flex-end;
            color: #00994C;
            border: 1px solid #00994C;
            transition: all 0.5s;
            text-decoration: none;
            margin: 1rem 0;
            font-weight: 600;
            cursor: pointer;
            height: max-content;
        }

        .form .submit-button:hover {
            background-color: #00994C;
            color: white;
        }

    </style>
</body>

</html>
