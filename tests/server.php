<?php

require './vendor/autoload.php';

$hook = Hook\Hook::GitHub();

$hook->listen();

echo $hook->output;
