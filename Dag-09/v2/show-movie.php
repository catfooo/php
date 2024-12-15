<div class="col-md-4 mb-3">
<div class="card">
  <img src='images/<?php echo $film["image"]; ?>' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo "<h3>$film[title]</h3>";?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p>pris: <?php echo "$film[price] kr";?></p>
    <a href="order-form.php?id=<?php echo $film["id"]; ?>" class="btn btn-primary">köp</a>
  </div>
</div>
</div><!-- col-md-4 -->

<?php

    // visa en enda film

    // print_r($film);

    // echo "<h3>$film[title]</h3>";
    
    //echo "<img src='images/$film[image]'>";
    // echo "<p>pris: $film[price] kr</p>";
    //echo "<a href='order.php?id=$film[id]'>Köp</a>";
    //echo "<hr>";    

?>