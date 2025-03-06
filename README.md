 ShopFinder

ShopFinder is a Laravel application that helps customers find nearby shops based on their latitude and longitude. It allows admins to manage shops, and customers to search for shops near their location.

Screenshots

Dashboard (Admin)



Add Shop (Admin)



Shop List (Admin)



Customer Search (Customer)



🛠️ Features

Admin can add, edit, and delete shops. 
Customers can search for nearby shops using latitude & longitude
Google Maps link to view each shop location directly on the map

 Folder Structure (Important Files)

app/
    Http/
        Controllers/
            Admin/
                ShopController.php
            Customer/
                ShopSearchController.php
resources/
    views/
        shops/
            create.blade.php
            edit.blade.php
            index.blade.php
            show.blade.php
        customer/
            shops.blade.php

 Usage Flow

Admin logs in and adds shops with name, latitude, and longitude.
Customers open the search page and enter their location (latitude & longitude).3⃣ Nearby shops are shown and direct Google Maps links.


