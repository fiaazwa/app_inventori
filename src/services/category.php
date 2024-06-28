<?php

require_once '../connfig/conn.php';

function selectAll()
{
    global $conn;
    $sql = "SELECT * FROM categories";
    return $conn->query($sql);
}

function delete($id)
{
    global $conn;
    $sql = "DELETE FROM categories WHERE id = $id";
    return $conn->query($sql);
}

function create($data)
{
    $name = $data['name'];
    $description = $data['description'];

    global $conn;
    $sql = "INSERT INTO categories VALUES(NULL, '$name', '$description', NOW(), NOW())";
    return $conn->query($sql);
}