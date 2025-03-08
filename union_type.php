<?php

function introduce(string|array|false $name)
{
    if ($name === false) {
        return;
    }
    
    if (is_array($name)) {
        foreach ($name as $n) {
            echo "Hello $n" . PHP_EOL;
        }
    } else {
        echo "Hello $name" . PHP_EOL;
    }
}

introduce(['John Doe', 'Jane Doe']);
introduce(false);