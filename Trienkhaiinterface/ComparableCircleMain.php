<?php
include ('ComparableCircle.php');
$sircleOne = new ComparableCircle('circleOne',8);
$sircleTwo = new ComparableCircle('circleTwo',3);
var_dump($sircleOne->compareTo($sircleTwo));