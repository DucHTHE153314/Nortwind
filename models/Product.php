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
    private $id;
    private $productCode;
    private $productName;
    private $category;
    private $quantityPerUnit;
    private $standardCost;
    private $description;
    private $supplierIds;

    function __construct($id, $productCode, $productName, $category, $quantityPerUnit, $standardCost, $description, $supplierIds) {
        $this->id = $id;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->category = $category;
        $this->quantityPerUnit = $quantityPerUnit;
        $this->standardCost = $standardCost;
        $this->description = $description;
        $this->supplierIds = $supplierIds;
    }

    function getId() {
        return $this->id;
    }

    function getProductCode() {
        return $this->productCode;
    }

    function getProductName() {
        return $this->productName;
    }

    function getCategory() {
        return $this->category;
    }

    function getQuantityPerUnit() {
        return $this->quantityPerUnit;
    }

    function getStandardCost() {
        return $this->standardCost;
    }

    function getDescription() {
        return $this->description;
    }

    function getSupplierIds() {
        return $this->supplierIds;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProductCode($productCode) {
        $this->productCode = $productCode;
    }

    function setProductName($productName) {
        $this->productName = $productName;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    function setQuantityPerUnit($quantityPerUnit) {
        $this->quantityPerUnit = $quantityPerUnit;
    }

    function setStandardCost($standardCost) {
        $this->standardCost = $standardCost;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setSupplierIds($supplierIds) {
        $this->supplierIds = $supplierIds;
    }

}
