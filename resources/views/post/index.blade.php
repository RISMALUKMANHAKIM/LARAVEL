<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Post</legend>
        <br>
        <table border="1">
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
            </tr>
            @php $no =1; @endphp
            @foreach ($post as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>
                    <a href="{{ url('post/' . $data->id) }}">{{ $data['title']}}</a>
                </td>
                <td>{{ $data->content}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>