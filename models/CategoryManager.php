<?php
include 'Category.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryManager
 *
 * @author PC
 */
class CategoryManager {

    //put your code here
    private $data;

    public function __construct() {
        $this->data = array();
    }

    private function clear() {
        $this->data = array();
    }

    public function getAll() {
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
        $sql = "SELECT * FROM Category";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $categoryId = $row["categoryId"];
                $categoryName = $row["categoryName"];
                $description = $row["description"];
                $picture = $row["picture"];
                $this->data[] = new Category($categoryId, $categoryName, $description, $picture);
            }
        }
        mysqli_close($conn);
        return $this->data;
    }

    public function getOne($categoryId) {
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
        $sql = "SELECT * FROM Category Where categoryId = ?";
        $prst = $conn->prepare($sql);
        $prst->bind_param("i", $categoryId);
        $prst->execute();
        $result = $prst->get_result();

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                mysqli_close($conn);
                return new Category($row["categotyId"], $row["categoryName"], $row["description"], $row["picture"]);
            }
        }
        mysqli_close($conn);
        return NULL;
    }

}
