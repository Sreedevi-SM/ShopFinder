<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Create Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 10px;
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
    

<div class="container">
    <h2>Create New Shop</h2>

    <form action="{{ route('shops.store') }}" method="POST">
        @csrf

        <label for="name">Shop Name:</label>
        <input type="text" name="name" required>

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" required>

        <button type="submit">Save Shop</button>
    </form>

    <p><a href="{{ route('shops.index') }}">Back to Shop List</a></p>
</div>

</body>
</html>
