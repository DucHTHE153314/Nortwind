<?php

include 'Customer.php';
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
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM Customer";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $custId = $row["custId"];
                $contactName = $row["contactName"];
                $companyName = $row["companyName"];
                $contactTitle = $row["contactTitle"];
                $country = $row["country"];
                $address = $row["address"];
                $city = $row["city"];
                $email = $row["email"];
                $fax = $row["fax"];
                $mobile = $row["mobile"];
                $phone = $row["phone"];
                $postalCode = $row["postalCode"];
                $region = $row["region"];
                $this->data[] = new Customer($custId, $contactName, $companyName, $contactTitle, $country, $address, $city, $email, $fax, $mobile, $phone, $postalCode, $region);
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        return $this->data;
    }

}
