<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>School Music Bands</title>
		<meta name="author" content="Michael Nikishin">
		<meta name="description" content="School Music Band Database">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
        <h1>School Music Bands</h1>
        <img class = "logo" src = "images/logo.png" alt = "logo">
        <nav class = "global-nav">
            <ul>
                <li><a href = "./index.php" title = "Go to home page">Home</a></li>
                <li><a href = "./view.php" title = "View the table">View Table</a></li>
            </ul>
        </nav>   
    </header>

    <main>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Instruments</th>
                <th>Band Name</th>
            </tr>
            <?php
                while($r = mysqli_fetch_assoc($res)){
            ?>
                    <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
                        <td><?php echo $r['age'] ?></td>
                        <td><?php echo $r['instrument'] ?></td>
                        <td><?php echo $r['bname'] ?></td>
                    </tr>
                <?php
                }
            ?>
        </table>
    </main>

    <footer>
        <p><small>Music Is Fun!</small></p>
    </footer>
</body>
</html>
