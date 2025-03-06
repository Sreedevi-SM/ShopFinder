
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Edit Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop Details') }}
        </h2>
  

<div class="container">
    <h2>Edit Shop - {{ $shop->name }}</h2>

    <form action="{{ route('shops.update', $shop->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Shop Name:</label>
        <input type="text" name="name" value="{{ $shop->name }}" required>

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" value="{{ $shop->latitude }}" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" value="{{ $shop->longitude }}" required>

        <button type="submit">Update Shop</button>
    </form>

    <p><a href="{{ route('shops.index') }}">⬅️ Back to Shop List</a></p>
</div>
</x-slot>

</x-app-layout>

</body>
</html>
