<?php

require_once '../connfig/conn.php';

function selectStockById($id)
{
    global $conn;
    $sql = "SELECT * FROM stocks WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function deleteStock($id)
{
    global $conn;
    $sql = "DELETE FROM categories WHERE id = $id";
    return $conn->query($sql);
}

function createStock($stock): int
{
    global $conn;
    $sql = "INSERT INTO stocks VALUES(NULL, '$stock', NOW(), NOW())";
    return $conn->query($sql) ? $conn->insert_id : 0;
}