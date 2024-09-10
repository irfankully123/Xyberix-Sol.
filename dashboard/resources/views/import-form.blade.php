<!-- resources/views/import-form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Excel Import Form</title>
</head>
<body>
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xlsx">
        <button type="submit">Import</button>
    </form>
</body>
</html>
