<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Shop List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        a.btn {
            display: inline-block;
            padding: 8px 15px;
            background-color:#007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        a.btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            margin-right: 8px;
        }
        td a:hover {
            text-decoration: underline;
        }
        form {
            display: inline;
        }
        form button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 4px;
        }
        form button:hover {
            background-color: #c82333;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop List') }}
        </h2>
   

<div class="container">
    <h2>All Shops</h2>

    <a href="{{ route('shops.create') }}" class="btn">➕ Create New Shop</a>

    @if($shops->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Shop Name</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                    <tr>
                        <td>{{ $shop->id }}</td>
                        <td>{{ $shop->name }}</td>
                        <td>{{ $shop->latitude }}</td>
                        <td>{{ $shop->longitude }}</td>
                        <td>
                            <a href="{{ route('shops.show', $shop->id) }}">👁️ View</a>
                            <a href="{{ route('shops.edit', $shop->id) }}">✏️ Edit</a>
                            <form action="{{ route('shops.destroy', $shop->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">🗑️ Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-data">No shops available.</div>
    @endif
</div>
</x-slot>
</x-app-layout>

</body>
</html>
