<html>
    <head>
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <p>Welcome to my homepage</p>
        <?php
            if (!isset($_POST['submit'])) {
                echo '<form action="" method="post">';
                if (isset($_GET['firstName'])) {
                    echo '<p><span style="color:F00">Error: First name cannot be blank!</span></p>';
                }
                echo '<div>First Name';
                echo '<input type="text" name="firstName" id="firstName" class="firstName"/>';
                echo '</div>';
                echo '<div>Last Name:';
                echo '<input type="text" name="lastName"/>';
                echo '</div>';
                echo '<div>Email:';
                echo '<input type="text" name="email"/>';
                echo '</div>';
                echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
                echo '</form>';
            }
            if (isset($_POST['submit'])) {
                printf("%s", $_REQUEST['firstName']);

                if (($firstName=$_REQUEST['firstName'])=="") {
                    header('Location: https://ec2-18-220-131-116.us-east-2.compute.amazonaws.com/hw11/?firstName=err');
                }

                $lastName=$_REQUEST['lastName'];
                $email=$_REQUEST['email'];
                echo '<h3>Data Received from requests.php</h3>';
                echo '<p>First Name: '.$firstName.'</p>';
                echo '<p>Last Name: '.$lastName.'</p>';
                echo '<p>email: '.$email.'</p>';
            }
        ?>
    </body>
</html>