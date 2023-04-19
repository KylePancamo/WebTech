<html>
    <head>
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <p>Welcome to my homepage</p>
        <?php
            if (!isset($_POST['submit'])) {
                echo '<form action="" method="post">
                <div>First Name    
                    <input type="text" name="firstName" id="firstName" class="firstName"/>
                </div>
                <div>Last Name:
                    <input type="text" name="lastName"/>
                </div>
                <div>Email:
                    <input type="text" name="email"/>
                </div>
                <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                </form>';
            }
            if (isset($_POST['submit'])) {
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $email=$_POST['email'];
                echo '<h3>Data Received from index.php</h3>';
                echo '<p>First Name: '.$firstName.'</p>';
                echo '<p>Last Name: '.$lastName.'</p>';
                echo '<p>email: '.$email.'</p>';
            }
        ?>
    </body>
</html>