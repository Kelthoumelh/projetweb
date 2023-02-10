<?php include 'hf/header.php' ?>
<?php
  
  $products = array(
    array(1, "Chebakkia", "T-shirt confortable en coton de qualité supérieure", "S, M, L, XL", "Blanc, noir, rouge", 15,"img/chebakkias.PNG") ,
    array(2, "Ghliba", "T-shirt confortable en papier canson", "28, 30, 32, 34", "20kg" , 50, "t-shirt-2.jpeg"),
    array(3, "Briouates", "Triangle aux amandes recouvert d'une fine pate craquante enrobée de miel", "S, M, L", "Noir", 75, "t-shirt-3.jpeg"),
    array(4, "Zellige", "T-shirt confortable en or ", "S, M, L", "Noir", 75, "t-shirt-3.jpeg"),
    array(5, "Fekkas", "T-shirt confortable en or ", "S, M, L", "Noir", 75, "t-shirt-3.jpeg"),
    array(6, "Corne de Gazelle", "T-shirt confortable en or ", "S, M, L", "Noir", 75, "t-shirt-3.jpeg"),
    array(7, "Gateau choco", "T-shirt confortable en or ", "S, M, L", "Noir", 75, "t-shirt-3.jpeg"),
    array(8, "Gateau abricot-coco", "T-shirt confortable en or ", "S, M, L", "Noir", 75, "t-shirt-3.jpeg")
  );
  foreach ($products as $product) {
      if($_GET['idProdui']== $product[0]){
        //   echo "<tr>";
        //   echo "<td>" . $product[0] . "</td>";
        //   echo "<td>" . $product[1] . "</td>";
        //   echo "<td>" . $product[2] . "</td>";
        //   echo "<td>" . $product[3] . "</td>";
        //   echo "<td><img class='image1'src='IMG/t-shirt-1.jpeg'" . $product[6] . "' alt='" . $product[1] . "'></td>";
        //   echo "</tr>";

        echo '<div class="product-detail-page">
        <div class="product-image">
          <img src="img/'.$product[6].'" alt="T-shirt en coton">
        </div>
        <div class="product-info">
          <h1>'.$product[1].'</h1>
          <p class="product-description">'.$product[2].'</p>
          <p class="product-price">'.$product[3].'</p>
          <p class="product-sizes">Quantitée disponible ≃ '.$product[4].'</p>
          <p class="product-colors">Couleur disponible : '.$product[5].'</p>
          <button class="add-to-cart-button">Ajouter au panier</button>
        </div>
      </div> ';
      }

    }
?>
<?php include 'hf/footer.php' ?>