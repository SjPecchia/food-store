<?php
function error_handler($e_number, $e_message, $e_file, $e_line, $e_vars = [])
{
    $message = "<h3>An error occurred</h3>";
    $message .= "<p><strong>File:</strong> $e_file<br>";
    $message .= "<strong>Line:</strong> $e_line<br>";
    $message .= "<strong>message:</strong> $e_message<br>";
    global $debug;
    if ($debug) {
        echo $message;
        die();
    } else {
        if ($e_number == E_ERROR) {
            echo "<h1>An unexpected error occurred</h1>";
            echo "<p>Tech support will not be notified. We apologize for the inconvenience.</p>";
            die();
        }
    }
}

set_error_handler("error_handler");
