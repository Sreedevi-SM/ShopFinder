<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Shop List</title>

    <!-- External CSS (Bootstrap) for layout and basic styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
            font-weight: 600;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
            color: white;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
            border-color: #bee5eb;
        }

        .form-control {
            border-radius: 0.375rem;
            padding: 0.75rem 1rem;
            font-size: 1rem;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .row {
            margin-bottom: 15px;
        }

        /* Button style for full width */
        .btn {
            width: 100%;
        }
    </style>

</head>

<body>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop List') }}
        </h2>
   
    <div class="container mt-4">

        <h2 class="mb-4">Shops Near Location (Lat: {{ $latitude }}, Long: {{ $longitude }})</h2>

        <form method="GET" action="{{ route('customer.findShops') }}" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label>Latitude</label>
                    <input type="text" name="latitude" value="{{ $latitude }}" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label>Longitude</label>
                    <input type="text" name="longitude" value="{{ $longitude }}" class="form-control" required>
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Search Shops</button>
                </div>
            </div>
        </form>

        @if($shops->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Location (Lat, Long)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shops as $shop)
                    <tr>
                        <td>{{ $shop->name }}</td>
                        <td>{{ $shop->latitude }}, {{ $shop->longitude }}</td>
                        <td>
                            <a href="https://www.google.com/maps?q={{ $shop->latitude }},{{ $shop->longitude }}"
                               target="_blank" class="btn btn-sm btn-info">
                                View on Map
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-info">No shops found near this location.</div>
        @endif

    </div>

    <!-- External JS (Bootstrap) for basic interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </x-slot>

    </x-app-layout>
</body>

</html>
