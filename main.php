<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location: login.php");
        exit();
    }
    if(isset($_GET["logout"])){
        unset($_SESSION["user"]);
        header("location: login.php");
        exit();
    }
?>

<div class="container">

    <h1>User Information</h1>

    <a href="?logout=true">Logout</a>

    <?php
    $jsonFile = 'data.json';
    $jsonData = file_get_contents($jsonFile);
    $userData = json_decode($jsonData, true);

    if ($userData === null) {
        echo "Error decoding JSON data";
    } else {
        echo '<table>';
        echo '<tr><th>Username</th><th>Email</th><th>Country</th><th>Age</th></tr>';

        foreach ($userData as $user) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($user['username']) . '</td>';
            echo '<td>' . (isset($user['email']) ? htmlspecialchars($user['email']) : '') . '</td>';
            echo '<td>' . (isset($user['country']) ? htmlspecialchars($user['country']) : '') . '</td>';
            echo '<td>' . (isset($user['age']) ? htmlspecialchars($user['age']) : '') . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
    ?>

</div>

</body>
</html>
