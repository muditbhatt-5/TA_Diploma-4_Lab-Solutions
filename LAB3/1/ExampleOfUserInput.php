<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day</title>
</head>
<body>
    
    <form action="" method="POST">
        <label for="day">Enter a day of the week (in number):</label>
        <input type="text" id="day" name="day" required>
        <input type="submit" name="submit" value="submit"/>
    </form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{

    $day = $_POST['day'];

    if ($day >= 1 && $day <= 7) 
    {
        switch ($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
        }
    } 
    else
    {
        echo "Invalid input. Please enter a number between 1 and 7.";
    }
}

?>


