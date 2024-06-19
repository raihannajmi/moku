<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Calculator</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Leap Year Calculator</h1>
        <form method="POST" action="{{ route('calculate') }}">
            @csrf
            <label for="start_year">Start Year:</label>
            <input type="number" id="start_year" name="start_year" required>
            <br>
            <label for="end_year">End Year:</label>
            <input type="number" id="end_year" name="end_year" required>
            <br>
            <button type="submit">Submit</button>
        </form>
        @if (isset($leapYears))
            <h2>Leap Years:</h2>
            <ul>
                @foreach ($leapYears as $year)
                    <li>{{ $year }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
