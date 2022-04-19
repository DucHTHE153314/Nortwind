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
    private $custId;
    private $contactName;
    private $companyName;
    private $contactTitle;
    private $country;
    private $address;
    private $city;
    private $email;
    private $fax;
    private $mobile;
    private $phone;
    private $postalCode;
    private $region;

    function __construct($custId, $contactName, $companyName, $contactTitle, $country, $address, $city, $email, $fax, $mobile, $phone, $postalCode, $region) {
        $this->custId = $custId;
        $this->contactName = $contactName;
        $this->companyName = $companyName;
        $this->contactTitle = $contactTitle;
        $this->country = $country;
        $this->address = $address;
        $this->city = $city;
        $this->email = $email;
        $this->fax = $fax;
        $this->mobile = $mobile;
        $this->phone = $phone;
        $this->postalCode = $postalCode;
        $this->region = $region;
    }
    function getCustId() {
        return $this->custId;
    }

    function getContactName() {
        return $this->contactName;
    }

    function getCompanyName() {
        return $this->companyName;
    }

    function getContactTitle() {
        return $this->contactTitle;
    }

    function getCountry() {
        return $this->country;
    }

    function getAddress() {
        return $this->address;
    }

    function getCity() {
        return $this->city;
    }

    function getEmail() {
        return $this->email;
    }

    function getFax() {
        return $this->fax;
    }

    function getMobile() {
        return $this->mobile;
    }

    function getPhone() {
        return $this->phone;
    }

    function getPostalCode() {
        return $this->postalCode;
    }

    function getRegion() {
        return $this->region;
    }

    function setCustId($custId) {
        $this->custId = $custId;
    }

    function setContactName($contactName) {
        $this->contactName = $contactName;
    }

    function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }

    function setContactTitle($contactTitle) {
        $this->contactTitle = $contactTitle;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    function setRegion($region) {
        $this->region = $region;
    }

}
