<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factures</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8062/8062571.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 50px;
            height: 50px;
        }

        .title {
            color: #007bff;
            font-style: italic;
            font-family: monospace;
            margin-bottom: 10px;
        }

        .date {
            text-transform: capitalize;
            margin-bottom: 20px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #4494ff;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
    
        <h1 class="title">{{ $title }}</h1>
    </div>
    <div class="date">{{ $date }}</div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Products</th>
                <th>Montant</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factures as $facture)
            <tr>
                <td>{{ $facture->id }}</td>
                <td>{{ $facture->client_name }}</td>
                <td>{{ $facture->produits }}</td>
                <td>{{ $facture->ttc }} $</td>
                <td>{{ $facture->datedefacture }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>&copy; {{ date('Y') }} </p>
    </div>
</body>
</html>
