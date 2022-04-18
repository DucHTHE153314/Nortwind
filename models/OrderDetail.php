<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderDetail
 *
 * @author PC
 */
class OrderDetail {

    //put your code here
    private $id;
    private $orderId;
    private $productId;
    private $quantity;
    private $unitPrice;
    private $discount;

    function __construct($id, $orderId, $productId, $quantity, $unitPrice, $discount) {
        $this->id = $id;
        $this->orderId = $orderId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->discount = $discount;
    }

    function getId() {
        return $this->id;
    }

    function getOrderId() {
        return $this->orderId;
    }

    function getProductId() {
        return $this->productId;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getUnitPrice() {
        return $this->unitPrice;
    }

    function getDiscount() {
        return $this->discount;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    function setDiscount($discount) {
        $this->discount = $discount;
    }

}
