<?php

require_once '../connfig/conn.php';

function selectAll()
{
    global $conn;
    $sql = "SELECT * FROM user";
    return $conn->query($sql);
}

function selectById($id)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE id = $id";
    return $conn->query($sql);
}

function delete($id)
{
    global $conn;
    $sql = "DELETE FROM users WHERE id = $id";
    return $conn->query($sql);
}

function update($id, $data)
{
    global $conn;
    $name = $data['name'];
    $email = $data['email'];

    $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    return $conn->query($sql);
}