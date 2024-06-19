<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers</title>
</head>
<body>
    <h1>Prime Numbers between {{ $start }} and {{ $end }}</h1>
    <ul>
        @forelse ($primes as $prime)
            <li>{{ $prime }}</li>
        @empty
            <li>No prime numbers found in the given range.</li>
        @endforelse
    </ul>
    <a href="{{ url('/') }}">Back</a>
</body>
</html>
