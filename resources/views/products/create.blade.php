<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sayur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F8F9FA;
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

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #28a745;
            background-color: #e9f5eb;
        }

        input:focus {
            outline-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Sayur</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Sayur</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" name="price" required>
            </div>
            <div class="form-group">
                <label for="stock">Stok</label>
                <input type="number" class="form-control" name="stock" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
