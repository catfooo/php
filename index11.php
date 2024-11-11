<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dra ett kort</title>
</head>
<body>
    <form method="GET">
        <input type="submit" value="dra ett kort" name="kort">
    </form>
    <?php
        if (isset($_GET['kort'])) {
            $rand1 = rand(1, 14);
            $rand2 = rand(1,4);
            if ($rand2==1) {
                $rand2="&#9824;";
            } elseif ($rand2==2) {
                $rand2="&#9827;";
            } elseif ($rand2==3) {
                $rand2="&#9829;";
            } else {
                $rand2="&#9830;";
            }
            if ($rand1==11) {
                $rand1="J";
            } elseif ($rand1==12) {
                $rand1="Q";
            } elseif ($rand1==13) {
                $rand1="K";
            } elseif ($rand1==14) {
                $rand1="Joker";
            }
            echo $rand2 . $rand1;
        }
    ?>
</body>
</html>