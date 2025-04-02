<?php

function save($title, $content)
{
    $note = [
        'title' => $title,
        'content' => $content
    ];
    $_SESSION['notes'][] = $note;
}

function fetch()
{
    if (isset($_SESSION['notes'])) {
        return $_SESSION['notes'];
    } else {
        return [];
    }
}

function getNote($id)
{
    $notes = fetch();
    if (isset($notes[$id])) {
        return $notes[$id];
    } else {
        return null;
    }
}

function update($id, $title, $content)
{
    $note = [
        'title' => $title,
        'content' => $content
    ];
    $_SESSION['notes'][$id] = $note;
}