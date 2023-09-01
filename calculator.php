<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style-sara.css">
</head>
<body>
    <div class="container">
        <h1>Calculator</h1>
        <form action="result.php" method="post">
            <label for="number1">Number 1:</label>
            <input type="number" id="number1" name="number1" required>

            <label for="operator">Operator:</label>
            <select id="operator" name="operator" required>
                <option value="*">Multiply</option>
                <option value="+">Sum</option>
                <option value="-">Subtraction</option>
                <option value="/">Division</option>
            </select>

            <label for="number2">Number 2:</label>
            <input type="number" id="number2" name="number2" required>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>