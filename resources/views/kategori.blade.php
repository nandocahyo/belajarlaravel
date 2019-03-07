<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori</title>
    <style>
        table, th, td {
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<table>
        <tr>
            <th>Nama Kategori</th>
            <th>Jenis</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{$row->nama_kategori}}</td>
            <td>{{$row->jenis}}</td>
        </tr>
         @endforeach
</table>
    
</body>
</html>