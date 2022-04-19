<?php

include 'Product.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductManager
 *
 * @author PC
 */
class ProductManager {

    //put your code here
    private $data;

    public function __construct() {
        $this->data = array();
    }

    public function clear() {
        $this->data = array();
    }

    public function getAll($categoryId, $page) {
        $this->clear();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if ($categoryId != 0) {
            $sql = "SELECT * FROM Product Where CategoryId = ? LIMIT 7 OFFSET ? ";
        } else {
            $sql = "SELECT * FROM Product Where CategoryId > ? LIMIT 7 OFFSET ? ";
        }
        $prst = $conn->prepare($sql);
        $skip = ($page - 1) * 7;
        $prst->bind_param("is", $categoryId, $skip);
        $prst->execute();
        $result = $prst->get_result();
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $productId = $row["productId"];
                $supplierId = $row["supplierId"];
                $productName = $row["productName"];
                $categoryId = $row["categoryId"];
                $quantityPerUnit = $row["quantityPerUnit"];
                $unitPrice = $row["unitPrice"];
                $unitsInStock = $row["unitsInStock"];
                $unitsOnOrder = $row["unitsOnOrder"];
                $this->data[] = new Product($productId, $supplierId, $productName, $categoryId, $quantityPerUnit, $unitPrice, $unitsInStock, $unitsOnOrder);
            }
        }
        mysqli_close($conn);
        return $this->data;
    }

    public function totalPage($categoryId) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if ($categoryId != 0) {
            $sql = "SELECT Count(*) as 'total' FROM Product Where CategoryId = ? ";
        } else {
            $sql = "SELECT Count(*) as 'total' FROM Product Where CategoryId > ? ";
        }
        $prst = $conn->prepare($sql);
        $prst->bind_param("i", $categoryId);
        $prst->execute();
        $result = $prst->get_result();

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                mysqli_close($conn);
                return ceil($row["total"] / 7.0);
            }
        }
        mysqli_close($conn);
    }

}
