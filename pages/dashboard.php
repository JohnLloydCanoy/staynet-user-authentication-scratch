<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../global.css">
</head>

<body class="min-h-screen flex flex-col">
    <?php include(__DIR__ . '/../components/navigation.php'); // __DIR__ provides the absolute filesystem path of the directory containing the current file.
    include(__DIR__ . '/../components/searchbar.php');
    ?>
    <div class="flex-1 mx-[5px] mb-[5px] px-4 py-7 bg-white rounded-lg shadow-md flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold text-center">Welcome to your Dashboard</h1>
        <p class="text-center mt-4 text-gray-600">Here you can manage your bookings, reservations, and more.</p>
    <!-- Test Button -->
    <h2 class="text-2xl font-bold mb-6 ">Recommended for you</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        <?php 
        // Sample data for properties - in a real application, this would come from a database
        $properties = [
            [
                "title" => "Cozy Studio in Divisoria",
                "price" => 2500,
                "rating" => "4.8"
            ],
            [
                "title" => "Modern Apartment Uptown",
                "price" => 4500,
                "rating" => "4.9"
            ],
            [
                "title" => "Student Dorm near USTP",
                "price" => 1500,
                "rating" => "4.5"
            ],
            [
                "title" => null,
                "price" => null,
                "rating" => null
            ],
            [
                "title" => "Shared Room in Lapasan",
                "price" => 800,
                "rating" => "4.1"
            ]
            ,
            [
                "title" => "Shared Room in Lapasan",
                "price" => 800,
                "rating" => "4.1"
            ]
        ];
        // Loop through properties and include the listing card component for each from the sample data or database
        foreach ($properties as $property) {
            $title = $property['title'];
            $price = $property['price'];
            $rating = $property['rating'];

            include 'components/listing_card.php'; 
        }
        ?>
    </div>
    <h2 class="text-2xl font-bold mb-6 ">Near You</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        <?php 
        // Sample data for properties - in a real application, this would come from a database
        $properties = [
            [
                "title" => "Cozy Studio in Divisoria",
                "price" => 2500,
                "rating" => "4.8"
            ],
            [
                "title" => "Modern Apartment Uptown",
                "price" => 4500,
                "rating" => "4.9"
            ],
            [
                "title" => "Student Dorm near USTP",
                "price" => 1500,
                "rating" => "4.5"
            ],
            [
                "title" => null,
                "price" => null,
                "rating" => null
            ],
            [
                "title" => "Shared Room in Lapasan",
                "price" => 800,
                "rating" => "4.1"
            ]
            ,
            [
                "title" => "Shared Room in Lapasan",
                "price" => 800,
                "rating" => "4.1"
            ]
        ];
        // Loop through properties and include the listing card component for each from the sample data or database
        foreach ($properties as $property) {
            $title = $property['title'];
            $price = $property['price'];
            $rating = $property['rating'];

            include 'components/listing_card.php'; 
        }
        ?>
    </div>
        <div class="mt-16 ">
            <?php include(__DIR__ . '/../components/footer.php'); ?>
        </div>
    </div>
        
</body>
</html>