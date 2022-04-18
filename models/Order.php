<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author PC
 */
class Order {

    //put your code here
    private $id;
    private $customerId;
    private $employeeId;
    private $orderDate;
    private $shippedDate;
    private $shipperId;
    private $shippingFee;
    private $shipAddress;
    private $shipName;
    private $shipCountryRegion;

    function __construct($id, $customerId, $employeeId, $orderDate, $shippedDate, $shipperId, $shippingFee, $shipAddress, $shipName, $shipCountryRegion) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->employeeId = $employeeId;
        $this->orderDate = $orderDate;
        $this->shippedDate = $shippedDate;
        $this->shipperId = $shipperId;
        $this->shippingFee = $shippingFee;
        $this->shipAddress = $shipAddress;
        $this->shipName = $shipName;
        $this->shipCountryRegion = $shipCountryRegion;
    }

    function getId() {
        return $this->id;
    }

    function getCustomerId() {
        return $this->customerId;
    }

    function getEmployeeId() {
        return $this->employeeId;
    }

    function getOrderDate() {
        return $this->orderDate;
    }

    function getShippedDate() {
        return $this->shippedDate;
    }

    function getShipperId() {
        return $this->shipperId;
    }

    function getShippingFee() {
        return $this->shippingFee;
    }

    function getShipAddress() {
        return $this->shipAddress;
    }

    function getShipName() {
        return $this->shipName;
    }

    function getShipCountryRegion() {
        return $this->shipCountryRegion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }

    function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
    }

    function setShippedDate($shippedDate) {
        $this->shippedDate = $shippedDate;
    }

    function setShipperId($shipperId) {
        $this->shipperId = $shipperId;
    }

    function setShippingFee($shippingFee) {
        $this->shippingFee = $shippingFee;
    }

    function setShipAddress($shipAddress) {
        $this->shipAddress = $shipAddress;
    }

    function setShipName($shipName) {
        $this->shipName = $shipName;
    }

    function setShipCountryRegion($shipCountryRegion) {
        $this->shipCountryRegion = $shipCountryRegion;
    }

}
