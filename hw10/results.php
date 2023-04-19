<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];

    if (isset($_POST['submit'])) {
        echo '<h3>Data Received from index.php</h3>';
        echo '<p>First Name: '.$firstName.'</p>';
        echo '<p>Last Name: '.$lastName.'</p>';
        echo '<p>email: '.$email.'</p>';
    } else {
        echo '<h3>No data received</h3>';
    }

?>