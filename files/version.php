<?php

if (!preg_match('/^([0-9]\.[0-9])/', phpversion(), $matches)) {

    die('Could not identify the PHP version');
}

echo reset($matches); // outputs something like "7.1"

die();