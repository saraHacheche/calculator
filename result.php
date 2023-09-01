<!DOCTYPE html>
<html>
<head>
    <title> The  Result</title>
    <link rel="stylesheet" type="text/css" href="css/style-sara.css">
</head>
<body>
    <div class="container">
        <h1> The Result</h1>
        <?php
    
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];

        function calculate($num1, $num2, $op) {
            if ($op == '+') {
                return $num1 + $num2;
            } elseif ($op == '-') {
                return $num1 - $num2;
            } elseif ($op == '*') {
                return $num1 * $num2;
            } elseif ($op == '/') {
                return $num1 / $num2;
            } else {
                return "Invalid operator";
            }
        }

        $result = calculate($number1, $number2, $operator);
        echo "<p> Final Result: " . $result . "</p>";
        ?>
    </div>
</body>
</html>
