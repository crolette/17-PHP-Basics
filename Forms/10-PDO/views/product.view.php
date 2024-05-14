<?php require "partials/header.php"; ?>
<?php require "partials/banner.php";?>
<?php require_once('controllers/getProduct.php')?>

    <h2><?= $product["productName"] ?></h2>
	
	<ul>
       
        <li>
            Product Line : <?php echo $product["productLine"]?>
        </li>
        <li>
            Scale : <?php echo $product["productScale"]?>
        </li>
        <li>
            Vendor : <?php echo $product["productVendor"]?>
        </li>
        <li>
            Description : <?php echo $product["productDescription"]?>
        </li>
        <li>
            Quantity in stock : <?php echo $product["quantityInStock"]?>
        </li>
        <li>
            MSRP : <?php echo $product["MSRP"]?>€
        </li>
    </ul>


<?php require "partials/footer.php"; ?>
