<html lang="en">

<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        th {
            font-size: 14px;
        }

        td,
        p {
            font-size: 10px;
        }
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p style="text-align:right;">Generated at {{ $date }}</p>
    {{-- <p>Add some custom paragraph here!</p> --}}

    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Sesi</th>
                <th>Target</th>
                <th>Deskripsi</th>
                <th>Manfaat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($longterm as $ltt)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ltt->created_at }}</td>
                    <td>{{ $ltt->user->name }}</td>
                    <td>{{ $ltt->user->divisi->divisi }}</td>
                    <td>{{ $ltt->sesi }}</td>
                    <td>{{ $ltt->target }}</td>
                    <td>{{ $ltt->desc }}</td>
                    <td>{{ $ltt->benefit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
