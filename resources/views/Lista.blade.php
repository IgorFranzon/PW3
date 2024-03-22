<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name=" viewport" content="width=device=width, initial=scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <h1>Lista</h1>
    <table> 
        <tr>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Categoria</th>
        </tr>
        @foreach($products as $produto)
        <tr>
            @foreach($produto as $data)
            <td>{{$data}}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
</body>
</html>