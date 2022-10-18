<?php

function crud_create($user) {
    $content = file_get_contents(DATA_LOCATION);
    $content = json_decode($content, true);
    $content[] = $user;
    file_put_contents(DATA_LOCATION, json_encode($content));
}