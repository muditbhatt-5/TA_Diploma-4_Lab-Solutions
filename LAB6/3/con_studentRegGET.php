<?php
if (isset($_GET['sub'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $gender = $_GET['gender'];
        $courses = $_GET['courses'];
        
        echo "<h2>Retrieved using GET method:</h2>";
        echo "Name: " . ($name) . "<br>";
        echo "Email: " . ($email) . "<br>";
        echo "password: " . ($password) . "<br>";
        echo "gender: " . ($gender) . "<br>";
        echo "Courses: " . (implode(', ', $courses)) . "<br>";


        // extract($_GET);
        // if(isset($name))
        // {
        //     echo "Name: " . $name . "<br>";
        // }
        // if(isset($courses))
        // {
        //     print_r($courses);
        // }
    }
?>