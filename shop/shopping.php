<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="../css/shoppingstyle.css" rel="stylesheet"/>
        <title>Shopping</title>
    </head>
    <body>
        <?php
        // put your code here
        include '../models/CategoryManager.php';
        include '../models/ProductManager.php';
        $productManger = new ProductManager();
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->getAll();
        if (isset($_POST["category"])) {
            $category = $_POST["category"];
        } else {
            $category = 0;
        }
        $numberofpage = $productManger->totalPage($category);
        ?>
        <div style="height: 50px;"></div>
        <div class="row">
            <div class="col-md-1"></div>
            <form action="shopping.php" method="post" class="col-md-2">
                <div class="list-group">
                    <button type="submit" class="list-group-item list-group-item-action <?php echo ($category == 0 ? 'active' : ''); ?>" aria-current="true">
                        All Categories
                    </button>
                    <?php
                    foreach ($categories as $cat) {
                        if ($cat->getCategoryId() == $category) {
                            ?>
                            <button type="submit" class="list-group-item list-group-item-action active" name="category" value="<?php echo $cat->getCategoryId() ?>"><?php echo $cat->getCategoryName() ?></button>
                            <?php
                        } else {
                            ?>
                            <button type="submit" class="list-group-item list-group-item-action" name="category" value="<?php echo $cat->getCategoryId() ?>"><?php echo $cat->getCategoryName() ?></button>
                            <?php
                        }
                    }
                    ?>
                </div>
            </form>
            <div class="col-md-4">
                <?php
                if (isset($_POST["curpage"])) {
                    $curpage = $_POST["curpage"];
                } else {
                    $curpage = 1;
                }
                $products = $productManger->getAll($category, $curpage);
                ?>
                <table class="table">
                    <colgroup>
                        <col span="1" width="150"/>
                        <col span="1" width="150"/>
                        <col span="1" width="150"/>
                        <col span="1" width="150"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($products as $product) {
                            ?>
                            <tr>
                                <td scope='row'><?php echo $product->getProductName(); ?></td>
                                <td scope='row'><?php echo $product->getUnitPrice(); ?></td>
                                <td>
                                    <input type="number" name="amount" min="0" value="1" style="width: 75px;"/>
                                </td>
                                <td>
                                    <button class="btn btn-outline-info" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <form action="shopping.php" method="post">
                    <input type="hidden" name="category" value="<?php echo $category; ?>"/>
                    <?php
                    if ($numberofpage == 2) {
                        ?>
                        <ul class="pagination center">
                            <li class="page-item"><button class="page-link btnsub" type="submit" name="curpage" value="1">Previous</button></li>
                            <li class="page-item"><button class="page-link btnsub <?php echo $curpage == 1 ? 'active-btn' : ''; ?>" type="submit" name="curpage" value="1">
                                    1
                                </button></li>
                            <li class="page-item"><button class="page-link btnsub <?php echo $curpage == 2 ? 'active-btn' : ''; ?>" type="submit" name="curpage" value="2">
                                    2
                                </button></li>
                            <li class="page-item"><button class="page-link btnsub" type="submit"  name="curpage" value="2">Next</button></li>
                        </ul>
                        <?php
                    } else if ($numberofpage > 2) {
                        ?>
                        <ul class="pagination center">
                            <li class="page-item"><button class="page-link btnsub" type="submit" name="curpage" value="<?php echo $curpage > 1 ? $curpage - 1 : $curpage ?>">Previous</button></li>
                            <li class="page-item"><button class="page-link btnsub <?php echo $curpage == 1 ? 'active-btn' : ''; ?>" type="submit" name="curpage" value="<?php echo $curpage == 1 ? 1 : ($curpage == $numberofpage ? $curpage - 2 : $curpage - 1) ?>">
                                    <?php echo $curpage == 1 ? 1 : ($curpage == $numberofpage ? $curpage - 2 : $curpage - 1) ?>
                                </button></li>
                            <li class="page-item"><button class="page-link btnsub <?php echo $curpage > 1 && $curpage < $numberofpage ? 'active-btn' : ''; ?>" type="submit" name="curpage" value="<?php echo $curpage == 1 ? 2 : ($curpage == $numberofpage ? $curpage - 1 : $curpage) ?>">
                                    <?php echo $curpage == 1 ? 2 : ($curpage == $numberofpage ? $curpage - 1 : $curpage) ?>
                                </button></li>
                            <li class="page-item"><button class="page-link btnsub <?php echo $curpage == $numberofpage ? 'active-btn' : ''; ?>" type="submit" name="curpage" value="<?php echo $curpage == 1 ? 3 : ($curpage == $numberofpage ? $curpage : $curpage + 1) ?>">
                                    <?php echo $curpage == 1 ? 3 : ($curpage == $numberofpage ? $curpage : $curpage + 1) ?>
                                </button></li>
                            <li class="page-item"><button class="page-link btnsub" type="submit"  name="curpage" value="<?php echo ($curpage < $numberofpage ? $curpage + 1 : $curpage); ?>">Next</button></li>
                        </ul>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-3">
                <button class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>
                    <div class="circle" style="position: absolute;top: 90px;">
                        <h5 >3</h5>
                    </div>
                </button>

            </div>
        </div>


    </body>
</html>
