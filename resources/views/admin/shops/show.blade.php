<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Shop Details</title>
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
        p {
            font-size: 16px;
            margin: 8px 0;
            color: #555;
        }
        strong {
            color: #333;
        }
        a {
            display: inline-block;
            margin-right: 15px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .links {
            margin-top: 20px;
            text-align: center;
        }
        .google-map-link {
            margin-top: 15px;
            display: block;
            text-align: center;
            color: #28a745;
            font-weight: bold;
        }
        .google-map-link:hover {
            color: #218838;
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
    <h2>Shop Details - {{ $shop->name }}</h2>

    <p><strong>Name:</strong> {{ $shop->name }}</p>
    <p><strong>Latitude:</strong> {{ $shop->latitude }}</p>
    <p><strong>Longitude:</strong> {{ $shop->longitude }}</p>

    <div class="links">
        <a href="{{ route('shops.edit', $shop->id) }}">✏️ Edit Shop</a>
        <a href="{{ route('shops.index') }}">⬅️ Back to Shop List</a>
    </div>

  
    <a class="google-map-link" target="_blank" 
       href="https://www.google.com/maps/search/?api=1&query={{ $shop->latitude }},{{ $shop->longitude }}">
        🌍 View on Google Maps
    </a>
</div>
</x-slot>

</x-app-layout>

</body>
</html>
