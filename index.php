<!DOCTYPE html>
<html>
<body>

<?php
$accountBallance=1000; \\Set account balance
echo 'Initial account ballance: '.$accountBallance.' PLN<br>';
$transfersarray = array(1=>100, 300 , -1100, -1000); //Initialize the array from which we will generate transfer vizualization

//loop
foreach ($transfersarray as $transfer)
{
if ($transfer>0)
{
echo 'Incoming transfer: '.$transfer.' PLN<br>';
}
else
{
echo 'Outgoing transfer: '.$transfer.' PLN<br>';
}
$accountBallance+=$transfer;
$transferBallance+=$transfer;
}

echo 'Final account ballance: '.$accountBallance.' PLN<br>';
if ($accountBallance<0)
{
echo 'You have an overdraft! Check your spending to avoid additional payments!<br>';
}
if ($transferBallance<0)
{
echo 'Your expenses exceeded incomes!<br>';
}
?>

</body>
</html>
