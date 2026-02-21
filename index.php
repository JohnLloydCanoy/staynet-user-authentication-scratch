<?php require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayNet</title>
    <link rel="stylesheet" href="global.css?v=<?php echo time(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php 
        include ('pages/dashboard.php');
    ?>
</body>
</html>
