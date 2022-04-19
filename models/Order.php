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
    private $orderId;
    private $custId;
    private $employeeId;
    private $orderDate;
    private $requiredDate;
    private $shippedDate;
    private $shipperId;
    private $freight;
    private $shipAddress;
    private $shipName;
    private $shipCity;
    private $shipCountry;

    function __construct($orderId, $custId, $employeeId, $orderDate, $requiredDate, $shippedDate, $shipperId, $freight, $shipAddress, $shipName, $shipCity, $shipCountry) {
        $this->orderId = $orderId;
        $this->custId = $custId;
        $this->employeeId = $employeeId;
        $this->orderDate = $orderDate;
        $this->requiredDate = $requiredDate;
        $this->shippedDate = $shippedDate;
        $this->shipperId = $shipperId;
        $this->freight = $freight;
        $this->shipAddress = $shipAddress;
        $this->shipName = $shipName;
        $this->shipCity = $shipCity;
        $this->shipCountry = $shipCountry;
    }

    function getOrderId() {
        return $this->orderId;
    }

    function getCustId() {
        return $this->custId;
    }

    function getEmployeeId() {
        return $this->employeeId;
    }

    function getOrderDate() {
        return $this->orderDate;
    }

    function getRequiredDate() {
        return $this->requiredDate;
    }

    function getShippedDate() {
        return $this->shippedDate;
    }

    function getShipperId() {
        return $this->shipperId;
    }

    function getFreight() {
        return $this->freight;
    }

    function getShipAddress() {
        return $this->shipAddress;
    }

    function getShipName() {
        return $this->shipName;
    }

    function getShipCity() {
        return $this->shipCity;
    }

    function getShipCountry() {
        return $this->shipCountry;
    }

    function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    function setCustId($custId) {
        $this->custId = $custId;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }

    function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
    }

    function setRequiredDate($requiredDate) {
        $this->requiredDate = $requiredDate;
    }

    function setShippedDate($shippedDate) {
        $this->shippedDate = $shippedDate;
    }

    function setShipperId($shipperId) {
        $this->shipperId = $shipperId;
    }

    function setFreight($freight) {
        $this->freight = $freight;
    }

    function setShipAddress($shipAddress) {
        $this->shipAddress = $shipAddress;
    }

    function setShipName($shipName) {
        $this->shipName = $shipName;
    }

    function setShipCity($shipCity) {
        $this->shipCity = $shipCity;
    }

    function setShipCountry($shipCountry) {
        $this->shipCountry = $shipCountry;
    }

}
