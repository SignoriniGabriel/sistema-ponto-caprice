
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Relatório de Categorias</title>

    <style>
        body {
            font-family: 'lato', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        .table-header {
            background-color: #7e3af2;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            color: #fff;
        }

        .col{
            text-align: center;
        }

    </style>

</head>
<body>

{{--    <img src="{{url('storage/assets/logo/PCcinza.png')}}">--}}

<table class="container" width="100%">

    <thead class="table-header">
    <tr>
        <th colspan="2">
            Lista de Categorias
        </th>
    </tr>
    <tr>
        <th>Nome da Categoria</th>
        <th>Quantidade de Produtos</th>
    </tr>
    </thead>

    <tbody>

    @foreach($categories as $c)
        <tr>
            <td class="col">{{$c->name}}</td>
            <td class="col">{{$c->quantity}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>



