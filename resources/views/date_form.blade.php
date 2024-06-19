<!-- resources/views/date_form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Rentang Tanggal</title>
</head>
<body>
    <h1>Masukkan Rentang Tanggal</h1>
    <form action="{{ route('showDates') }}" method="POST">
        @csrf
        <label for="start_date">Tanggal Awal:</label>
        <input type="date" id="start_date" name="start_date" required>
        <br>
        <label for="end_date">Tanggal Akhir:</label>
        <input type="date" id="end_date" name="end_date" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>