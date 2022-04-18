<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 * Define a <code>Customer</code> Object in the system.
 * @author DucHT
 */
class Customer {

    //put your code here
    private $id;
    private $firstName;
    private $lastName;
    private $company;
    private $emailAddress;
    private $homePhone;
    private $jobTitle;
    private $address;

    function __construct($id, $firstName, $lastName, $company, $emailAddress, $homePhone, $jobTitle, $address) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->emailAddress = $emailAddress;
        $this->homePhone = $homePhone;
        $this->jobTitle = $jobTitle;
        $this->address = $address;
    }

    function getId() {
        return $this->id;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getCompany() {
        return $this->company;
    }

    function getEmailAddress() {
        return $this->emailAddress;
    }

    function getHomePhone() {
        return $this->homePhone;
    }

    function getJobTitle() {
        return $this->jobTitle;
    }

    function getAddress() {
        return $this->address;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setCompany($company) {
        $this->company = $company;
    }

    function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
    }

    function setHomePhone($homePhone) {
        $this->homePhone = $homePhone;
    }

    function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
    }

    function setAddress($address) {
        $this->address = $address;
    }

}
