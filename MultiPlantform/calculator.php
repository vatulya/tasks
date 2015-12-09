<?php

Logger::log('Start');

$param1 = (int)(isset($_POST['param1']) ? $_POST['param1'] : $_GET['param1']);
$param2 = (int)(isset($_POST['param2']) ? $_POST['param2'] : $_GET['param2']);
Logger::log('Got params: %s and %s', [$param1, $param2]);

$calculator = new Calculator();
$result = $calculator->sum($param1, $param2);

echo '<div><b>Program "Calculator"</b><br><br>' . $param1 . ' + ' . $param2 . ' = <b>' . $result . '</b></div>';

Logger::log('Finish');
