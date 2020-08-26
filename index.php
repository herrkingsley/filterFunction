<?php 
    include("inc/header.inc.php");
    include("inc/header.inc.php");
    include("classes/product.class.php");
    include("classes/render.class.php");
    include("classes/filter.class.php");
    include("inc/allProducts.inc.php");


?>

<div class="wrapper">


    <div class="products">
        <?php 

    if(isset($_GET['submit'])){
        Render::renderList($allProducts->filterByTag("{$_GET['tags']}")); 
    } else {
        Render::renderList($allProducts->getProducts($klocka)); 
    }
    ?>

    

        
    </div>
    <div class="select"><?php  include("inc/selectForm.inc.php"); ?>
    <p>Välj: <a href="index.php">Alla</a></p>
</div>

</div>


