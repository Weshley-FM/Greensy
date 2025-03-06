<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(255, 255, 255);
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #28a745;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        table {
            margin-top: 20px;
            background-color: #f8f9fa;
        }

        th, td {
            text-align: center;
            padding: 12px;
            font-size: 16px;
        }

        th {
            background-color: #28a745;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar products</h1>
        
        <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Tambah Sayur</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Sayur</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $poducts)
                    <tr>
                        <td>{{ $poducts->id }}</td>
                        <td>{{ $poducts->name }}</td>
                        <td>Rp{{ number_format($poducts->price, 2) }}</td>
                        <td>{{ $poducts->stock }}</td>
                        <td>
                            <a href="{{ route('products.edit', $poducts->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $poducts->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
