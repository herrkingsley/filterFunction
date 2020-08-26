<?php 
    include("inc/header.inc.php");
    include("inc/header.inc.php");
    include("classes/product.class.php");
    include("classes/render.class.php");
    include("classes/filter.class.php");
    include("inc/allProducts.inc.php");


?>

<div class="wrapper">

<?php  include("inc/selectForm.inc.php"); ?>
<a href="index.php">Alla</a>
    <div class="products">
        <?php 

    if(isset($_GET['submit'])){
        Render::renderList($allProducts->filterByTag("{$_GET['tags']}")); 
    } else {
        Render::renderList($allProducts->getProducts($klocka)); 
    }
        // Render::renderProduct($klocka); 
        // Render::renderProduct($ring);
        // Render::renderProduct($klocka2); 

        
        
        // echo "<br>";
        // var_dump($allProducts->getAllTags());
        ?>
    </div>

</div>


