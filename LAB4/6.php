<!DOCTYPE html>
<html>
<head>
    <title>Sum of Numbers Divisible by 3 or 5</title>
</head>
<body>
    <h1>Enter Numbers</h1>
    <form action="" method="post">
        <label for="numbers">Enter numbers (separated by comma):</label>
        <input type="text" name="numbers" required>
        <br><br>
        <input type="submit" name="btn_sub" value="Calculate Sum">
    </form>
</body>
</html>

<?php
    if(isset($_POST["btn_sub"]))
    {

        $numbers = $_POST['numbers'];
        $array = array_map('intval', explode(',', $numbers));
        $sum = 0;

        foreach ($array as $num) {
            if ($num % 3 == 0 || $num % 5 == 0) {
                $sum = $sum + $num;
            }
        }
        echo "<h1>Sum of numbers divisible by 3 or 5: " . $sum . "</h1>";
    }
?>