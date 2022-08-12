
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Relatório de Produtos</title>

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

<table class="container" width="100%">

    <thead class="table-header">
    <tr>
        <th colspan="5">
            Lista de Produtos
        </th>
    </tr>
    <tr>
        <th>Nome</th>
        <th>SKU</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Status</th>
    </tr>
    </thead>

    <tbody>

    @foreach($products as $product)
        <tr>
            <td class="col">{{$product->name}}</td>
            <td class="col">{{$product->id}}</td>
            <td class="col">R$ {{number_format($product->price,2,",",".")}}</td>
            <td class="col">{{$product->category->name}}</td>
            <td class="col">{{$product->status}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>



