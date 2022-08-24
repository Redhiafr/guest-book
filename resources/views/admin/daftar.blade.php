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
            font-family: Arial, sans-serif;
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
            border-bottom: 1px solid #5D6975;
            color: #001028;
            /* font-size: 2.4em; */
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            /* margin: 0 0 20px 0; */
            background: url(dimension.png);
        }

        h3 {
            /* border-bottom: 1px solid #5D6975; */
            color: #001028;
            /* font-size: 2.4em; */
            /* line-height: 1.4em; */
            font-weight: normal;
            text-align: center;
            /* margin: 0 0 20px 0; */
            background: url(dimension.png);
        }

        #identity {
            display: flex;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            margin-right: 10px;
            font-size: 0.9em;
        }

        #company {
            text-align: center;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #5D6975;
            white-space: nowrap;
            font-weight: bold;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 15px;
            text-align: center;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.qty {
            text-align: center;
        }

        table td.service,
        table td.unit,
        table td.qty,
        table td.total,
        table td.grand {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
            font-weight: bold;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

        .topright {
            position: absolute;
            top: 8px;
            right: 16px;
            font-size: 18px;
            width: 15%;
        }

        .topleft {
            position: absolute;
            top: 8px;
            left: 16px;
            font-size: 18px;
            width: 15%;
        }
    </style>
</head>

<body>
    <header>
        <img src="assets/images/logo-bumn1.png" class="topleft">
        <img src="assets/images/logo-4.png" class="topright">
    </header>
    <h2>List Daftar Tamu</h2>
    <h3>Pada Tanggal dd/mm/yyyy</h3>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="service">Nama</th>
                    <th class="unit">No. Telepon</th>
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
                        <td>
                    <tr>
                @endforeach


                {{-- @foreach ($guests as $g)
                    <tr>
                        <td class="qty">{{ $loop->iteration }}</td>
                        <td class="service">{{ $g->nama }}</td>  
                        <td class="service">{{ $g->telp }}</td>  
                        <td class="service">{{ $g->tujuan }}</td>  
                        @foreach ($category as $cat)
                        @if ($cat->id == $g->kategori_id)
                            <td>{{ $cat->nama_kategori }}</td>
                        @endif
                        @endforeach
                        <td class="service">{{ $g->instansi }}</td>  
                        <td class="service">{{ $g->keterangan }}</td>  
                       
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </main>

</body>

</html>
