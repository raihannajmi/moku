<!-- resources/views/show_dates.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Rentang Tanggal</title>
</head>
<body>
    <h1>Hari Sabtu dan Minggu antara {{ $start_date }} dan {{ $end_date }}</h1>
    <ul>
        @foreach ($weekends as $weekend)
            <li>{{ $weekend }}</li>
        @endforeach
    </ul>
</body>
</html>