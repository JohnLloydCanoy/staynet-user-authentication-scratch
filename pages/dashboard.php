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
    <?php 
        // Create a Primary Button
        $btn_text = "Book Now";
        $btn_link = "#book.php";
        include 'components/buttons/primary_button.php'; 

        // Create a Secondary Button right next to it
        $btn_text = "Become a Host";
        $btn_link = "#host.php";
        include 'components/buttons/secondary_button.php'; 
    ?>
        <?php include(__DIR__ . '/../components/footer.php'); ?>
    </div>
        
</body>
</html>