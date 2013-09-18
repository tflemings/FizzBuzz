<?php
include 'header.inc';
include 'Validator.inc';
define ("THREE", "Fizz");
define ("FIVE", "Buzz");
$messages = array();
$v = new Validator();
$start = 1;
$stop = 100;
if (isset($_POST['start']) && isset($_POST['stop'])) {
    if ($_POST['start'] != '') {
        $filteredStart = $v -> filterInteger($_POST['start']);
        if ($filteredStart !== false) {
            $start = $filteredStart;
        } else {
            $messages['start_message'] = 'Invalid start value replaced by 1';
        }
    } else {
        $messages['start_message'] = 'Invalid start value replaced by 1';
    }
    if ($_POST['stop'] != '') {
        $filteredStop = $v -> filterInteger($_POST['stop']);
        if ($filteredStop !== false) {
            $stop = $filteredStop;
        } else {
            $messages['stop_message'] = 'Invalid stop value replaced by 100';
        }
    } else {
        $messages['stop_message'] = 'Invalid stop value replaced by 100';
    }
} 
$output = '';
?>
<h1 id="result_banner">FizzBuzz between <?php echo $start; ?> and <?php echo $stop; ?> </h1> 
<?php
foreach ($messages as $key => $value) { 
    echo "<p class='warning'>$value</p>";
}
?>
<ul>
<?php
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
    echo "<li>$output</li>"; 
}
?>
</ul>
<a href="index.php">Back to FizzBuzz</a> 
<?php
include 'footer.inc';
?>
