<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr><td>no</td>
            <th>about me   </th>
            <th>  experience years    </th>
            <th> project compleated </th>
            <th>action</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{$loop->iteration	}}</td>
                <td>{{ $item->aboutme }}</td>
                <td>{{ $item->Exp_Years }}</td>
                <td>{{ $item->Proj_Complete }}</td>
                <td><a href="/aboutedit/{{$item->id}}/edit">Edit</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
