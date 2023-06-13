<?php
function check($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
$num1 = 39;
check($num1);
echo "<br/>";
$num2 = 28;
check($num2);
?>