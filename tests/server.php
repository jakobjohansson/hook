<?php

require './vendor/autoload.php';

$github = Hook\Hook::GitHub();

$github->listen();

echo $github->output;

$gitlab = Hook\Hook::GitLab();

$gitlab->listen();

echo $gitlab->output;

$bitbucket = Hook\Hook::BitBucket();

$bitbucket->listen();

echo $bitbucket->output;
