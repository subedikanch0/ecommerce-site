<!--individual part SANTOSH-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/nav.css"/>
</head>
<body>

<?php
include "header_nologin.php";

if($_SESSION["admin_name"]==""){
    header("refresh:0, url=log_in_to_continue.php");
}
?>

<!--individual part started SANTOSH-->
<div class="border container form_min black">       <!--        Form division started-->

    <div><h1>Welcome <?php  echo $_SESSION["admin_name"];?></h1></div>
    <div class="form_box border overflow">           <!--        form box-->

        <div class="float_left border form_margin">
            <div class="right">
                <div><h3><a href="product_input_form.php">Input Product</a> </h3></div>
                <br>
                <!--                <div>Product ID:</div>-->
                <!--                <br>-->
                <div class="form_padding_top"><h3><a href="product_update_search_id.php">Update Product</a></h3></div>
                <br>
                <div class="form_padding_top"><h3><a href="admin_search_past_order.php">Access customer Past Order</a></h3></div>
                <br>
                <div class="form_padding_top"><h3><a href="most_popular_product.php">Most Popular Products</a></h3></div>
                <br>
                <div class="form_padding_top"><h3><a href="left_in_cart.php">Product left in cart</a></h3></div>
                <br>
                <div class="form_padding_top"><h3><a href="most_searched.php">Most Searched Product</a></h3></div>
                <br>


            </div>
        </div>





    </div>      <!--    form box-->

</div>

<!--individual part ended SANTOSH-->
<!--Form division Ended-->

<div class="container">
    <?php
    include "footer.php";
    ?>
</div>

</body>
</html>
