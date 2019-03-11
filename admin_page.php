<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

        <h1>You are Admin</h1>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <p><a href="logout.php">Logout</a></p>
    
</body>
</html>


<?php } ?>