<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'menu.php'; ?>

    <!-- Your page content goes here -->


    <h1>Calculator</h1>
    <form method="POST" class="calculator-form">
        <input type="number" name="num1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calculate" class="calc-btn">
    </form>

    <div class="results">
    <?php

    require 'src/calculatorClass.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        $calc = new Calculator();
        switch ($operator) {
            case 'add':
                $result = $calc->add($num1, $num2);
                break;
            case 'subtract':
                $result = $calc->subtract($num1, $num2);
                break;
            case 'multiply':
                $result = $calc->multiply($num1, $num2);
                break;
            case 'divide':
                $result = $calc->divide($num1, $num2);
                break;
            default:
                $result = "Invalid operator";
        }
        echo "Result: $result";
    }
    ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
