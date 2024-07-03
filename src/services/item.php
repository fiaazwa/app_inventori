<?php

require_once '../connfig/conn.php';
require_once '../services/stock.php';

function selectAllItems()
{
    global $conn;
    $sql = "SELECT * FROM items";
    return $conn->query($sql);
}

function deleteItems($id)
{
    global $conn;
    $sql = "DELETE FROM categories WHERE id = $id";
    return $conn->query($sql);
}

function createItems($data)
{
    global $conn;

    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $stock = $data['stock'];
    $category_id = $data['category_id'];
    $user_id = $data['user_id'];

    // insert stock
    $sql = "INSERT INTO stocks VALUES(NULL, $stock, NOW(), NOW())";

    $stock_id = NULL;
    if ($conn->query($sql)) {
        $stock_id = $conn->insert_id;
    }

    $sql = "INSERT INTO items VALUES(NULL, '$name', '$price', '$description', $stock_id, $category_id, $user_id, NOW(), NOW())";
    return $conn->query($sql);
}