<?php
  require_once 'core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';
  include 'includes/leftbar.php';

  $sql="SELECT * FROM products WHERE feature = 1";
  $feature = $db->query($sql);
?>

<!---Main content--->
    <div class="col-md-8">Main
      <div class="row">
        <h2 class="text-center">Featured Products</h2>
        <?php while($product = mysqli_fetch_assoc($feature)) : ?>
         <div class="col-sm-3 text-center">
           <h4><?= $product['title']; ?></h4>
           <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="img-thumb"/>
           <p class="list-price text-danger">List Price:<s>$<?= $product['list_price']; ?></s></p>
           <p class="price">Our Price: $<?= $product['price'];?></p>
            <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id'];?>)">
             Details
            </button>
         </div>
      <?php endwhile; ?>
      </div>
    </div>

    <?php
      include 'includes/rightbar.php';
      include 'includes/footer.php';
    ?>
