<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Daftar Tamu</title>

    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            height: 29.7cm;
            width: 100%;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Poppins, sans-serif;
            font-size: 14px;
            font-family: Arial;
        }

        header {
            /* width: 100%;
            padding: 10px 0;
            margin-bottom: 30px; */
            border-color: #f3f3f3;
            position: relative;
            background: transparent;
            padding: 1.5rem 1.875rem 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h2 {

            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-top: 10%;
            /* font-size: 2.4em; */
            line-height: 1.4em;
            font-weight: bold;
            text-align: center;

            /* margin: 0 0 20px 0; */
            background: url(dimension.png);
        }

        h3 {
            /* border-bottom: 1px solid #5D6975; */
            color: #001028;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* font-size: 2.4em; */
            /* line-height: 1.4em; */
            font-weight: normal;
            text-align: center;
            /*margin: 0 0 20px 0;*/
            background: url(dimension.png);
        }

        table {
            width: 10%;
            margin-top: 5%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table th,
        table td {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }

        table th {
            padding: 10px 20px;
            color: #5D6975;
            border-bottom: 1px solid #858796;
            white-space: nowrap;
            font-weight: bold;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            text-align: center;
        }

        .topright {
            position: absolute;
            top: 10px;
            right: 16px;
            font-size: 18px;
            width: 17%;
        }

        .topleft {
            position: absolute;
            top: 10px;
            left: 16px;
            font-size: 18px;
            width: 20%;
        }
    </style>
</head>

<body>
    <header>
        <img src="assets/images/logo-bumn1.png" class="topleft">
        <img src="assets/images/logo-4.png" class="topright">
    </header>
    <h2 style="text-decoration: underline;">DAFTAR TAMU</h2>
    <h3>{{$start_date}} sampai {{$end_date}}</h3>
    <main>
        <div class="table-responsive" style="overflow-x:auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No. Telepon</th>
                        <th>Tujuan</th>
                        <th>Kategori</th>
                        <th>Nama Instansi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->nama }}</td>
                            <td>{{ $u->telp }}</td>
                            <td>{{ $u->tujuan }}</td>
                            @foreach ($category as $cat)
                                @if ($cat->id == $u->kategori_id)
                                    <td>{{ $cat->nama_kategori }}</td>
                                @endif
                            @endforeach
                            <td>{{ $u->instansi }}</td>
                            <td>{{ $u->keterangan }}</td>
                        <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>
