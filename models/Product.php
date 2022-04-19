<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author PC
 */
class Product {

    //put your code here
    private $productId;
    private $supplierId;
    private $productName;
    private $categoryId;
    private $quantityPerUnit;
    private $unitPrice;
    private $unitsInStock;
    private $unitsOnOrder;

    function __construct($productId, $supplierId, $productName, $categoryId, $quantityPerUnit, $unitPrice, $unitsInStock, $unitsOnOrder) {
        $this->productId = $productId;
        $this->supplierId = $supplierId;
        $this->productName = $productName;
        $this->categoryId = $categoryId;
        $this->quantityPerUnit = $quantityPerUnit;
        $this->unitPrice = $unitPrice;
        $this->unitsInStock = $unitsInStock;
        $this->unitsOnOrder = $unitsOnOrder;
    }

    function getProductId() {
        return $this->productId;
    }

    function getSupplierId() {
        return $this->supplierId;
    }

    function getProductName() {
        return $this->productName;
    }

    function getCategoryId() {
        return $this->categoryId;
    }

    function getQuantityPerUnit() {
        return $this->quantityPerUnit;
    }

    function getUnitPrice() {
        return $this->unitPrice;
    }

    function getUnitsInStock() {
        return $this->unitsInStock;
    }

    function getUnitsOnOrder() {
        return $this->unitsOnOrder;
    }

    function setProductId($productId) {
        $this->productId = $productId;
    }

    function setSupplierId($supplierId) {
        $this->supplierId = $supplierId;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    function setQuantityPerUnit($quantityPerUnit) {
        $this->quantityPerUnit = $quantityPerUnit;
    }

    function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    function setUnitsInStock($unitsInStock) {
        $this->unitsInStock = $unitsInStock;
    }

    function setUnitsOnOrder($unitsOnOrder) {
        $this->unitsOnOrder = $unitsOnOrder;
    }

}
