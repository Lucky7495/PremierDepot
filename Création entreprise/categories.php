<?php
require_once "bdd/db_thetechhub.php";

$categories=selectCateg();

?>
<categories>
    <?php
    foreach ($categories as $category) {
        ?>
        <categorie>
            <a href="produits.php">
            <img src="<?= $category["image"]?>" alt="img" class="img_cat">
            <div class="nom_cat"><?= $category["Libellecategorie"]?></div></a>
        </categorie>

    <?php }?>
</categories>
