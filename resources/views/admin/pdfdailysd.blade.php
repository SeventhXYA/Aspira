<html lang="en">

<head>
    <title>Daily Self-Development</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p style="text-align:right;">Generated at {{ $date }}</p>

    <table class="table table-bordered table-compact">
        <thead>
            <tr>
                <th>No</th>
                <th>Rincian</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dailysd as $sd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <b>Nama:</b> {{ $sd->user->name }}<br>
                        <b>Divisi:</b> {{ $sd->user->divisi->divisi }}<br>
                        <b>Plan:</b> {{ $sd->plan }}<br>
                        <b>Actual:</b><br> {{ $sd->actual }}<br>
                        <b>Status:</b><br>
                        @if ($sd->progress == 100)
                            <span style="color: green">Terselesaikan</span>
                        @elseif ($sd->progress == 50)
                            <span style="color: blue">Tidak Terselesaikan</span>
                        @else
                            <span style="color: red">Tidak Tekerjakan</span>
                        @endif
                    </td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
