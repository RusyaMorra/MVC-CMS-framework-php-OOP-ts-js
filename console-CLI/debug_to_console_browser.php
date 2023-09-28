<?php
$ctx = app\core\Ctx::getInstance();
//output in browser console
//USAGE: debug_to_console("Test");

function debug_to_console($data, $ctx ) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}