<?php
session_start();

// Check if the user is logged in (i.e., if session exists)
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to the login page if not logged in
    exit();
}

// Retrieve the user's name from the session
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Your Dashboard</title>
    <style>
        /* General Body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        .card {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card-item {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 20px);
            text-align: center;
        }

        .card-item h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .card-item p {
            color: #777;
            font-size: 16px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .card-item {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>
        <p>This is your personalized dashboard. You can access various features below.</p>

        <!-- Dashboard cards -->
        <div class="card">
            <div class="card-item">
                <h3>Your Profile</h3>
                <p>Update your personal information and view your profile details.</p>
                <a href="#">Go to Profile</a>
            </div>
            <div class="card-item">
                <h3>Settings</h3>
                <p>Change your settings and preferences for a better experience.</p>
                <a href="#">Go to Settings</a>
            </div>
            <div class="card-item">
                <h3>Notifications</h3>
                <p>Check your latest notifications and messages from the site.</p>
                <a href="#">View Notifications</a>
            </div>
        </div>

        <!-- Logout button -->
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
