<?php

include './Customer.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerManager
 *
 * @author PC
 */
class CustomerManager {

    //put your code here
    private $data;

    public function __construct() {
        $this->data = array();
    }

    private function clear() {
        $this->data = array();
    }

    /**
     * The List of all <code>Customer</code> in data.
     * @return <code>Customer[]</code> 
     */
    public function getAll() {
        $this->clear();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "northwind";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT * FROM Customer";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $firstName = $row["first_name"];
                $lastName = $row["last_name"];
                $company = $row["company"];
                $emailAddress = $row["email_address"];
                $homePhone = $row["home_phone"];
                $jobTitle = $row["Job_title"];
                $address = $row["address"];
                $this->data[] = new Customer($id, $firstName, $lastName, $company, $emailAddress, $homePhone, $jobTitle, $address);
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        return $this->data;
    }

}
