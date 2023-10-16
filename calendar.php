<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <?php include 'menu.php'; ?>


    <h1>Calendar</h1>
    <form method="POST" class="calendar-form">
        <div>
            <label for="month">Month:</label>
            <select name="month" id="month">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo '<option value="' . $i . '">' . date('F', mktime(0, 0, 0, $i, 1, date('Y'))) . '</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <label for="year">Year:</label>
            <input type="number" name="year" id="year" value="<?php echo date('Y'); ?>">
        </div>
        <input type="submit" value="Show Calendar">
    </form>

    <div class="calendar-container">
        <?php
        require 'src/calendarClass.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $year = $_POST['year'];
            $month = $_POST['month'];
            $calendar = new Calendar();
            echo $calendar->generateCalendar($year, $month);
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
