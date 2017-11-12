<?php

require './vendor/autoload.php';

if (isset($_GET['auth'])) {
    $github = Hook\Hook::GitHub('correct-signature');

    $github->listen();

    echo $github->output;

    $gitlab = Hook\Hook::GitLab('correct-signature');

    $gitlab->listen();

    echo $gitlab->output;
} else {
    $github = Hook\Hook::GitHub();

    $github->listen();

    echo $github->output;

    $gitlab = Hook\Hook::GitLab();

    $gitlab->listen();

    echo $gitlab->output;
}
