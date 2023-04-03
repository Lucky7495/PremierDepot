<?php
$bestSales=[
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"],
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"],
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"],
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"],
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"],
    ["titre"=>"ordinateur","prix"=>79.99,"description"=>"igerbersqigesqgiesgbsbgiu","image"=>"Images/Header/Logo%20png.png","marque"=>"test"]


];

?>
<bestsales>
<?php
foreach ($bestSales as $bestSale){
    ?>
    <card>
    <img class="img" src="<?=$bestSale["image"] ?>" alt="image">
    <div class="marque"><?=ucfirst(strtolower($bestSale["marque"])).":" ?></div>
    <div class="titre"><?=ucfirst(strtolower($bestSale["titre"])).":" ?></div>
    <div class="prix"><?= $bestSale["prix"]."€"?></div>
        <div class="description"><?= $bestSale["description"]?></div>
    <div class="bouton"><a href="#">En savoir plus</a></div>
    </card>
    <?php
}
?>
</bestsales>

