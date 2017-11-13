<?php

require './vendor/autoload.php';

if ($_GET['type'] === 'GitHub') {
    $github = Hook\Hook::GitHub();

    if (isset($_GET['auth'])) {
        $github = Hook\Hook::GitHub('correct-signature');
    }


    $github->listen();

    echo $github->output;
}

if ($_GET['type'] === 'GitLab') {
    $gitlab = Hook\Hook::GitLab();

    if (isset($_GET['auth'])) {
        $gitlab = Hook\Hook::GitLab('correct-signature');
    }

    $gitlab->listen();

    echo $gitlab->output;
}

if ($_GET['type'] === 'BitBucket') {
    $bitbucket = Hook\Hook::BitBucket();

    $bitbucket->listen();

    echo $bitbucket->output;
}
