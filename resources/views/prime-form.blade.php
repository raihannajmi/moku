<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers</title>
</head>
<body>
    <h1>Find Prime Numbers</h1>
    <form method="POST" action="{{ route('show.primes') }}">
        @csrf
        <label for="start">Bilangan Awal:</label>
        <input type="number" id="start" name="start" required>
        <br>
        <label for="end">Bilangan Akhir:</label>
        <input type="number" id="end" name="end" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
