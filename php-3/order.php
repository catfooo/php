<?php

    $db = new mysqli("localhost", "root", "root", "filmdb");

    // sök film i databas med id
    // MySQL, string is ''. if number, '' becomes number
    $id = $_GET['id'];
    $sql ="SELECT * FROM films WHERE id='$id'";

    $result = $db->query($sql);

    $film = $result->fetch_assoc();

    // print_r($film);

?>

<h2>du har beställt <?php echo $film['title'];?></h2>
<h3>artikelnummer: <?php echo $id;?></h3>
<h4>pris: <?php echo $film['price']?>kr</h4>

<form action="#" method="post">
    <h3>ange din e-post</h3>
    <input type="email" name="email" required> <br>
    <input type="submit" name="submit" value="skicka beställningen">
    <input type="hidden" name="film_id" value="<?php echo $id?>">
</form>

<?php

    if (isset($_POST['submit'])) {
        $film_id = $_POST['film_id'];
        $email = $_POST['email'];

        echo "<h1>beställning från Videobutiken</h1>
        <h2>film id: $film_id</h2>
        <h2>filmen kommer att levereras till: $email</h2>";

        // spara i databasen ..
        $sql = "INSERT INTO orders (film_id, email) VALUES('$film_id','$email')";
        $db->query($sql);
    }

?>