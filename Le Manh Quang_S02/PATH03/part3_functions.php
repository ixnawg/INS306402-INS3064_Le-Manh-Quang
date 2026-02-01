<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PATH 03 – PHP Functions</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
    <h1>PATH 03 – PHP Functions</h1>

    <nav>
        <a href="../PATH01/part1_warmups.php">PATH 01</a>
        <a href="../PATH02/part2_core_challenges.php">PATH 02</a>
        <a href="../PATH03/part3_functions.php">PATH 03</a>
        <a href="../PATH04/part4_mini_projects.php">PATH 04</a>
    </nav>

    <?php
    // 01 Greeter
    function greet($name) {
        return "Hello, $name!";
    }

    // 02 Area Calc
    function area($w, $h) {
        return $w * $h;
    }

    // 03 Adult Check
    function isAdult($age) {
        return is_numeric($age) && $age >= 18;
    }

    // 04 Safe Divide
    function safeDiv($a, $b) {
        return $b == 0 ? null : $a / $b;
    }

    // 05 Formatter
    function fmt($n, $symbol = "$") {
        return $symbol . number_format($n, 2);
    }

    // 06 Pure Math
    function add($a, $b) {
        return $a + $b;
    }
    ?>

    <div class="card">
        <h3>01) Greeter</h3>
        <div class="result">
            Input: greet("Sam")<br>
            Output: <?= greet("Sam") ?>
        </div>
    </div>

    <div class="card">
        <h3>02) Area Calc</h3>
        <div class="result">
            Input: area(5.5, 2)<br>
            Output: <?= area(5.5, 2) ?>
        </div>
    </div>

    <div class="card">
        <h3>03) Adult Check</h3>
        <div class="result">
            Input: isAdult(null)<br>
            Output: <?= var_export(isAdult(null), true) ?><br><br>
            Input: isAdult(20)<br>
            Output: <?= var_export(isAdult(20), true) ?>
        </div>
    </div>

    <div class="card">
        <h3>04) Safe Divide</h3>
        <div class="result">
            Input: safeDiv(10, 0)<br>
            Output: <?= var_export(safeDiv(10, 0), true) ?>
        </div>
    </div>

    <div class="card">
        <h3>05) Formatter</h3>
        <div class="result">
            Input: fmt(50)<br>
            Output: <?= fmt(50) ?><br><br>
            Input: fmt(1234.5, "₫")<br>
            Output: <?= fmt(1234.5, "₫") ?>
        </div>
    </div>

    <div class="card">
        <h3>06) Pure Math</h3>
        <div class="result">
            Input: add(7, 8)<br>
            Output: <?= add(7, 8) ?>
        </div>
    </div>

</div>

<footer>
    PHP Exercises © <?php echo date("Y"); ?>
</footer>

</body>
</html>
