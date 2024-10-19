<?php
$cname=$_POST['name'];
$cnu=$_POST['number'];
echo "<br><br>Consumer Name : ".$cname;
echo "<br><br>Consumer Number : ".$cnu;

$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = '<br><br>Total amount of ' . $units . ' - ' . $result;
        echo "" .$result_str; 
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units)
{
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if ($units <= 50) {
        $bill = $units * $unit_cost_first;
    } else if ($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    } else if ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    } else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float) $bill, 2, '.', '');
}

?>
