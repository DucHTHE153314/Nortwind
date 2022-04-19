<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author PC
 */
class Employee {

    //put your code here
    private $employeeId;
    private $firstName;
    private $lastName;
    private $title;
    private $titleOfCourtesy;
    private $birthDate;
    private $address;
    private $city;
    private $region;
    private $postalCode;
    private $country;
    private $phone;
    private $email;

    function __construct($employeeId, $firstName, $lastName, $title, $titleOfCourtesy, $birthDate, $address, $city, $region, $postalCode, $country, $phone, $email) {
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->title = $title;
        $this->titleOfCourtesy = $titleOfCourtesy;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->city = $city;
        $this->region = $region;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->phone = $phone;
        $this->email = $email;
    }

    function getEmployeeId() {
        return $this->employeeId;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getTitle() {
        return $this->title;
    }

    function getTitleOfCourtesy() {
        return $this->titleOfCourtesy;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getAddress() {
        return $this->address;
    }

    function getCity() {
        return $this->city;
    }

    function getRegion() {
        return $this->region;
    }

    function getPostalCode() {
        return $this->postalCode;
    }

    function getCountry() {
        return $this->country;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setTitleOfCourtesy($titleOfCourtesy) {
        $this->titleOfCourtesy = $titleOfCourtesy;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
