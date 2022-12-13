<html lang="en">

<head>
    <title>Daily Record Interval</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- 
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.43.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
    <h1>{{ $title }}</h1>
    <p style="text-align:right;">Generated at {{ $date }}</p>
    {{-- <p>Add some custom paragraph here!</p> --}}

    <table class="table table-bordered" style="font-size: 12px">
        <!-- head -->
        <thead>
            <tr>
                <td></td>
                <th>Bisnis & Profit</th>
                <th>Self-Development</th>
                <th>Kelembagaan</th>
                <th>Inovasi/Creativity</th>
                <th>Morning Briefing & 5R</th>
                <th>Technical Planning</th>
                <th>Evaluasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="font-bold">{{ $user->name }}</td>
                    <td>
                        @if ($user->totalBp == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalBp }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalSd == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalSd }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalKl == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalKl }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalIc == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalIc }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalMb == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalMb }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalTp == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalTp }}
                        @endif
                    </td>
                    <td>
                        @if ($user->totalEv == '00:00:00')
                            <span style="color: red">00:00:00</span>
                        @else
                            {{ $user->totalEv }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
