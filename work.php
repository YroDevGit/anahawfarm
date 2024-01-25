<?php
// Set the timezone
date_default_timezone_set('UTC');

// Get the selected year and month from the URL parameters, or use the current year and month if none are specified
if (isset($_GET['year'])) {
    $year = $_GET['year'];
} else {
    $year = date('Y');
}
if (isset($_GET['month'])) {
    $month = $_GET['month'];
} else {
    $month = date('m');
}

// Get the number of days in the month
$num_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Get the first day of the month
$first_day = date('N', strtotime($year . '-' . $month . '-01'));

// Create the calendar table
echo '<table>';

// Create the table header with a drop-down menu for selecting the year and month
echo '<thead>';
echo '<tr>';
echo '<th colspan="7">';
echo '<form method="get">';
echo '<select name="month">';
for ($i = 1; $i <= 12; $i++) {
    $month_name = date('F', mktime(0, 0, 0, $i, 1, $year));
    echo '<option value="' . sprintf('%02d', $i) . '"';
    if ($i == $month) {
        echo ' selected';
    }
    echo '>' . $month_name . '</option>';
}
echo '</select>';
echo '<select name="year">';
for ($i = date('Y') - 10; $i <= date('Y') + 10; $i++) {
    echo '<option value="' . $i . '"';
    if ($i == $year) {
        echo ' selected';
    }
    echo '>' . $i . '</option>';
}
echo '</select>';
echo '<input type="submit" value="Go">';
echo '</form>';
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th>Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';
echo '</thead>';

// Create the table body
echo '<tbody>';
echo '<tr>';

// Fill in the days of the previous month, if necessary
for ($i = 1; $i < $first_day; $i++) {
    echo '<td></td>';
}

// Fill in the days of the current month
for ($i = 1; $i <= $num_days; $i++) {
    // Start a new row at the beginning of the week
    if (($i + $first_day - 1) % 7 == 0) {
        echo '</tr><tr>';
    }
    echo '<td>' . $i . '</td>';
}

// Fill in the days of the next month, if necessary
for ($i = ($num_days + $first_day); $i <= 42; $i++) {
    echo '<td></td>';
}

echo '</tr>';
echo '</tbody>';
echo '</table>';
?>
