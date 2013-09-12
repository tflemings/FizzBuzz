<?php
define ("THREE", "Fizz");
define ("FIVE", "Buzz");
$start = $_POST['start'];
$stop = $_POST['stop'];
$output = '';
for ($x = $start; $x <= $stop; $x++) {
    if ($x % 3 == 0) {
        $output = THREE;
        if ($x % 5 == 0) {
            $output .= FIVE;
        }
    } elseif ($x % 5 == 0) {
        $output = FIVE;
    } else {
        $output = $x;
    }
    echo $output . "<br />"; 
}
?>
<a href="index.php">Back to form</a> <?php
