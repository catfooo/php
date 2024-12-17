
    
    <?php

        require_once "header.php";

        $id = $_GET['id'];
        echo '<body class="container">';
        echo "<h2>du har best�llt produkt nr: $id</h2>";        

        require_once "db.php";

        $sql = "SELECT * FROM produkter WHERE id = $id";
        $result = $db->query($sql);
        // h?mta result som 'en' associativ array
        $item = $result->fetch_assoc();
        echo "<h3>du har best�llt " . $item['produktnamn'] . "</h3>"; 
        echo "<h3>pris: " . $item['pris'] . " maskrosor</h3>";
    
    ?>

    <h3>vart ska vi leverera?</h3>

    <!-- hidden? artikelnummer(php?id=)? -->
    <form action="confirmation.php" method="POST">
        <div class="row">
            <div class="col-md-12">
                <label for="name">namn </label>
                <input id="name" type="text" name="name" class="form-control mb-3">
            </div>
            <div class="col-md-6">
                <label for="telephonenumber">telefonnummer </label>
                <input id="telephonenumber" type="text" name="telephonenumber" class="form-control mb-3">
            </div>
            <div class="col-md-6">
                <label for="email">e-postadress </label>
                <input id="email" type="text" name="email" class="form-control mb-3">
            </div>
            <div class="col-md-12">
                <label for="address">leveransadress </label>
                <input id="address" type="text" name="address" class="form-control mb-3">
            </div>
            <div class="col-md-4">
                <input type="submit" name="submit" class="btn btn-primary w-100">
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </form>
    
<?php

    require_once "footer.php";

?>