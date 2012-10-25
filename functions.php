<?php

function assert_example_works($expression, $continue_if_true = false) {
    if ($expression) {
        if ($continue_if_true) {
            return;
        } else {
            echo 'It works!' . PHP_EOL;
            exit(0);
        }
    } else {
        echo 'It DOES NOT work!' . PHP_EOL;
        exit(0);
    }
}
