<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f5f5f5;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        button, a {
            padding: 10px 15px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button {
            background: #28a745;
            color: white;
        }
        a {
            background: #6c757d;
            color: white;
        }
        .errors {
            background: #f8d7da;
            color: #842029;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>

        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <label>Product Name</label>
            <input type="text" name="name" value="{{ old('name') }}">

            <label>Category</label>
            <select name="category_id">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label>Supplier</label>
            <select name="supplier_id">
                <option value="">Select Supplier</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>

            <label>Description</label>
            <textarea name="description">{{ old('description') }}</textarea>

            <label>Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}">

            <label>Quantity</label>
            <input type="number" name="quantity" value="{{ old('quantity') }}">

            <div class="actions">
                <button type="submit">Save Product</button>
                <a href="{{ route('products.index') }}">Back</a>
            </div>
        </form>
    </div>
</body>
</html>