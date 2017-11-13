<?php

require './vendor/autoload.php';

if ($_GET['type'] === 'GitHub') {
    $github = Hook\Hook::GitHub();

    if (isset($_GET['auth'])) {
        $github = Hook\Hook::GitHub('correct-signature');
    }

    if (isset($_GET['callback'])) {
        $github->listen(['push' => 'githubCallback']);
    } else {

        if (isset($_GET['invalid-event'])) {
            $github->listen(['jaksd', 'push']);
        } else {
            $github->listen();
        }

        echo $github->output;

        if (count($github->errors)) {
            foreach ($github->errors as $error) {
                echo $error;
            }
        }
    }
}

if ($_GET['type'] === 'GitLab') {
    $gitlab = Hook\Hook::GitLab();

    if (isset($_GET['auth'])) {
        $gitlab = Hook\Hook::GitLab('correct-signature');
    }

    if (isset($_GET['callback'])) {
        $gitlab->listen(['Push Hook' => 'gitlabCallback']);
    } else {

        if (isset($_GET['invalid-event'])) {
            $gitlab->listen(['jaksd', 'Push Hook']);
        } else {
            $gitlab->listen();
        }

        echo $gitlab->output;

        if (count($gitlab->errors)) {
            foreach ($gitlab->errors as $error) {
                echo $error;
            }
        }
    }
}

if ($_GET['type'] === 'BitBucket') {
    $bitbucket = Hook\Hook::BitBucket();

    if (isset($_GET['callback'])) {
        $bitbucket->listen(['repo:push' => 'bitbucketCallback']);
    } else {

        if (isset($_GET['invalid-event'])) {
            $bitbucket->listen(['jaksd', 'repo:push']);
        } else {
            $bitbucket->listen();
        }

        echo $bitbucket->output;

        if (count($bitbucket->errors)) {
            foreach ($bitbucket->errors as $error) {
                echo $error;
            }
        }
    }
}

function githubCallback($event)
{
    echo $event->repository->full_name;
}

function gitlabCallback($event)
{
    echo $event->project->name;
}

function bitbucketCallback($event)
{
    echo $event->repository->full_name;
}
