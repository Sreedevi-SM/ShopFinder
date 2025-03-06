<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
  

    <!-- Form Container -->
    <div class="container mt-4">
        <form method="GET" action="{{ route('customer.findShops') }}" class="shop-search-form">
            @csrf
            <h3 class="mb-4">Find Shops Near Your Location</h3>
            
            <div class="form-group mb-3">
                <label for="latitude" class="form-label">Latitude:</label>
                <input type="text" id="latitude" name="latitude" class="form-control" placeholder="Enter Latitude" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="longitude" class="form-label">Longitude:</label>
                <input type="text" id="longitude" name="longitude" class="form-control" placeholder="Enter Longitude" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Find Shops</button>
        </form>
    </div>

    <!-- Custom CSS -->
    <style>
        /* Custom Form Styling */
        .shop-search-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .btn-block {
            width: 100%;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        h3 {
            font-size: 22px;
            color: #333;
            font-weight: 700;
        }

        .form-control {
            padding: 15px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(72, 222, 69, 0.6);
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .container {
            padding-top: 20px;
        }

        /* Body Styling */
        body {
            background-color: #f4f7fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            font-weight: 600;
            font-size: 24px;
        }
    </style>
      </x-slot>
</x-app-layout>
