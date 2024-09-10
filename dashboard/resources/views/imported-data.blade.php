
<!DOCTYPE html>
<html>
<head>
    <title>Imported Data</title>
</head>
<body>
    <h2>Imported Data</h2>
    @if(count($data) > 0)
        <table border="1">
            <thead>
                <tr>
                    @foreach($data[0] as $columnName)
                        <th>{{ $columnName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $row)
                    @if($index > 0)
                        <tr>
                            @foreach($row as $column)
                                <td>{{ $column }}</td>
                            @endforeach
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data imported.</p>
    @endif
</body>
</html>
