<?php
function calc($val){
    if($val<100) return 3*$val;
    else if($val>=100 && $val<200) return 4*$val;
    else if($val>=200 && $val<300) return 5*$val;
    else return 6*$val;
}
$cid=$_POST['cno'];
$cname=$_POST['cname'];
$prev=$_POST['prev'];
$pres=$_POST['pres'];
$diff=$pres-$prev;
$bill=calc($diff);

echo "<table align=center bgcolor=orange cellspacing=0 cellpadding=5>";
echo "<tr><td colspan=2><h1 align=center>ELECTRICITY BILL</h1></td></tr>";
echo "<tr bgcolor=burlywood><td>CUSTOMER ID</td><td>$cid</td></tr>";
echo "<tr><td>CUSTOMER NAME</td><td>$cname</td></tr>";
echo "<tr bgcolor=burlywood><td>PREVIOUS READING</td><td>$prev</td></tr>";
echo "<tr><td>PRESENT READING</td><td>$pres</td></tr>";
echo "<tr bgcolor=burlywood><td>READING</td><td>$diff</td></tr>";
echo "<tr><td>AMOUNT</td><td>$bill</td></tr>";


echo "</table>"
?>


