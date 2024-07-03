<?php

require_once '../connfig/conn.php';

function selectAllCategory()
{
    global $conn;
    $sql = "SELECT * FROM categories";
    return $conn->query($sql);
}

function selectCategoriById($id)
{
    global $conn;
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function deleteCategory($id)
{
    global $conn;
    $sql = "DELETE FROM categories WHERE id = $id";
    return $conn->query($sql);
}

function createCategory($data)
{
    $name = $data['name'];
    $description = $data['description'];

    global $conn;
    $sql = "INSERT INTO categories VALUES(NULL, '$name', '$description', NOW(), NOW())";
    return $conn->query($sql);
}