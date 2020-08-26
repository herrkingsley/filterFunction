<?php 
    include("inc/header.inc.php");
    include("inc/header.inc.php");
    include("classes/product.class.php");
    include("classes/render.class.php");
    include("classes/filter.class.php");
    include("inc/allProducts.inc.php");


?>

<?php 

// echo Render::renderProduct($klocka);
// echo "\n";
// echo Render::renderProduct($ring);

?>

<div class="wrapper">
    <div class="products">
        <?php 
        // Render::renderProduct($klocka); 
        // Render::renderProduct($ring);
        // Render::renderProduct($klocka2); 

        Render::renderList($allProducts->filterByTag("ring")); 
        ?>
    </div>

</div>


