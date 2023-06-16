<!DOCTYPE html>
<html lang="en">
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
            <form action method = "post" class = "school-band-member-form">
                <fieldset class = "big-border">   
                    <legend>Enter Your Information</legend>
                    <fieldset class = "general">
                        <legend>General</legend>
                        <label for = "input1">First Name</label>
                        <input type = "text" name="fname" id = "input1"><br>

                        <label for = "input1">Last Name</label>
                        <input type = "text" name="lname" id = "input1"><br>

                        <label for = "input1">Age</label>
                        <input type = "number" name="age" id = "input1" min = "1" max = "99">
                    </fieldset>

                    <fieldset class = "instruments">
                        <legend>Which Instruments Do You Play?</legend>
                            <input type="checkbox" id="instrument1" name="instruments[]" value="Piano">
                            <label for="instrument1">Piano</label>
                            <input type="checkbox" id="instrument2" name="instruments[]" value="Electric Guitar">
                            <label for="instrument2">Electric Guitar</label>
                            <input type="checkbox" id="instrument3" name="instruments[]" value="Saxophone">
                            <label for="instrument3">Saxophone</label>
                            <input type="checkbox" id="instrument4" name="instruments[]" value="Bass Guitar">
                            <label for="instrument4">Bass Guitar</label>
                            <input type="checkbox" id="instrument5" name="instruments[]" value="Drums">
                            <label for="instrument5">Drums</label>
                    </fieldset>

                    <fieldset class = "bands">
                        <legend>Which Band Do You Want To Be A Part Of?</legend>
                            <input type="radio" id="jazz" name="bname" value="Classy Jazz">
                            <label for="jazz">'Classy Jazz'</label>

                            <input type="radio" id="blues" name="bname" value="Melodic Blues">
                            <label for="blues">'Melodic Blues'</label>

                            <input type="radio" id="rock" name="bname" value="Dizzy Rock">
                            <label for="rock">'Dizzy Rock'</label>
                    </fieldset>
                </fieldset>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </form>
            <div class="form-group submit-message">
                <?php
				 	require_once('database.php');
					if(isset($_POST) & !empty($_POST)){
						$fname = trim($_POST['fname']);
						$lname = trim($_POST['lname']);
						$age = trim($_POST['age']);

                        $bname = !empty($_POST['bname']) ? trim($_POST['bname']) : '';
                        
                        $instrument_results = "";
                        $instruments = !empty($_POST['instruments']) ? $_POST['instruments'] : '';
                        if (!empty($instruments)){
                            foreach ($instruments as $instrument){
                                $instrument_results .= ' ';
                                $instrument_results .= $instrument;
                            }
                            $instrument_results = trim($instrument_results);                            
                        }
                        
                        #VALIDATION
                        $error = "";
                        if (empty($fname)){
                            $error = "First name is required!";
                        } else if (empty($lname)){
                            $error = "Last name is required!";
                        } else if (empty($age)){
                            $error = "Please enter your age!";
                        } else if (empty($instrument_results)){
                            $error = "Select the instruments that you can play!";
                        } else if (empty($bname)){
                            $error = "Select which band do you want to join!";
                        }

                        if (empty($error)){
                            $res = $database->create($fname, $lname, $age, $instrument_results, $bname);
                            if($res){
                                echo "<p>Successfully inserted data</p>";
                            }else{
                                echo "<p>Failed to insert data</p>";
                            }
                        }else{
                            echo "<p>$error</p>";
                        }
					}
				?>
            </div>
        </main>

        <footer>
            <p><small>Music Is Fun!</small></p>
        </footer>
    </body>
</html>