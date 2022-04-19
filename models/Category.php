<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author PC
 */
class Category {

    //put your code here
    private $categoryId;
    private $categoryName;
    private $description;
    private $picture;

    function __construct($categoryId, $categoryName, $description, $picture) {
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
        $this->description = $description;
        $this->picture = $picture;
    }

    function getCategoryId() {
        return $this->categoryId;
    }

    function getCategoryName() {
        return $this->categoryName;
    }

    function getDescription() {
        return $this->description;
    }

    function getPicture() {
        return $this->picture;
    }

    function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

}
