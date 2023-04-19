<html>
    <head>
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <p>Welcome to my homepage</p>
        <?php
            if (!isset($_POST['submit'])) {
                echo '<form action="" method="post">';
                echo '<div>First Name';
                if (isset($_GET['firstname']) && $_GET['firstname'] != '') { // previous submitted data
                    echo '<input type="text" name="firstName" value="'.$_GET['firstname'].'"/>';
                } else {
                    if (isset($_GET['firstNameErr'])) {
                        echo '<input type="text" name="firstName"/>';
                        echo '<p><span style="color:F00">Error: First name cannot be blank!</span></p>';
                    } else {
                        echo '<input type="text" name="firstName"/>';
                    }
                }
                echo '</div>';
                echo '<div>Last Name:';
                if (isset($_GET['lastname']) && $_GET['lastname'] != '') { // previous submitted data
                    echo '<input type="text" name="lastName" value="'.$_GET['lastname'].'"/>';
                } else {
                    if (isset($_GET['lastNameErr'])) {
                        echo '<input type="text" name="lastName"/>';
                        echo '<p><span style="color:F00">Error: Last name cannot be blank!</span></p>';
                    } else {
                        echo '<input type="text" name="lastName"/>';
                    }
                }
                echo '</div>';
                echo '<div>Email:';
                if (isset($_GET['Email']) && $_GET['Email'] != '') { // previous submitted data
                    echo '<input type="text" name="email" value="'.$_GET['Email'].'"/>';
                } else {
                    if (isset($_GET['emailErr'])) {
                        echo '<input type="text" name="email"/>';
                        echo '<p><span style="color:F00">Error: Email name cannot be blank!</span></p>';
                    } else {
                        echo '<input type="text" name="email"/>';
                    }
                }
                echo '</div>';
                echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
                echo '</form>';
            }
            if (isset($_POST['submit'])) {
                
                $errString='';
                if (($firstName=$_REQUEST['firstName'])=="") {
                    $errString.="firstNameErr=err&";
                }

                if (($lastName=$_REQUEST['lastName'])=="") {
                    $errString.="lastNameErr=err&";
                }

                if (($email=$_REQUEST['email'])=="") {
                    $errString.="emailErr=err";
                }

                if ($errString != "") {
                    header("Location: https://ec2-18-220-131-116.us-east-2.compute.amazonaws.com/hw11/index.php?$errString&firstname=$firstName&lastname=$lastName&Email=$email");
                }

                echo '<h3>Data Received from requests.php</h3>';
                echo '<p>First Name: '.$firstName.'</p>';
                echo '<p>Last Name: '.$lastName.'</p>';
                echo '<p>email: '.$email.'</p>';
            }
        ?>
    </body>
</html>