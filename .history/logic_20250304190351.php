<?php
# Statements to be inserted here
$yes = TRUE; $no = FALSE;

$result = ($no && $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";
$result = ($yes && $no) ? 'TRUE' : 'FALSE';
    echo "Yes AND No returns $result <br>";
$result = ($yes && $yes) ? 'TRUE' : 'FALSE';
    echo "Yes AND Yes returns $result <br>";

$result = ($no || $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";
$result = ($yes || $no) ? 'TRUE' : 'FALSE';
    echo "Yes OR No returns $result <br>";
$result = ($yes && $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";
$result = ($no && $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";
?>