<?php session_start();
/*THIS FILE STOPS TIMER AND PROCESSES THE AMOUNT OF TIME TAKEN FROM START TO STOP. 
THE LEADERBOARD WILL BE DISPLAYED HERE.
ALLOWS USER TO LOGOUT (INDEX.PHP)*/


$_SESSION["endTime"] = time();

function timeDiff($start,$end){
    $interval = $end - $start;

    return $interval;
}

$timeInterval = timeDiff($_SESSION["startTime"], $_SESSION["endTime"]);

echo "Your time: $timeInterval seconds";
echo "<br>";
echo "<a href='logout.php'>Go home</a>";
?>


