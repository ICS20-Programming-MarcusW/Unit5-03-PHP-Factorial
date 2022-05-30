<?php
// get value of positive integer by a post method
$userNum = intval($_POST["pos-int"]);
// initialize variables
// set counter to 1
$counter = 1;
// set the answer/factorial to 1
$factorial = 1;

// calculate the factorial of the positive integer by using a do while loop
do
{
    $factorial = $factorial * $counter;
    $counter = $counter + 1;
}
while ($counter <= $userNum);

// echo to display the result (factorial of integer) to the user
echo '<p>The factorial of your integer is ' . $factorial . '.</p>';
?>
