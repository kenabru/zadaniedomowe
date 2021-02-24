<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie1</title>
</head>

<body>
    <a href="index.html">Strona główna</a>
    <?php
    $a = 20;
    $b = 10;
    $c = 25;
    $p = ($a + $b + $c) / 2;
    $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    ?>
    <table border cellspacing="1" ; border width="40%" cellpadding="5" ; style="border: 5px outset solid black; ">
        <tr>
            <td>Długość boku a:</td>
            <td>
                20
            </td>
        </tr>
        <tr>
            <td>Długość boku b:</td>
            <td>10</td>
        </tr>
        <tr>
            <td>
                Długość boku c:
            </td>
            <td>25</td>
        </tr>
        <tr>
            <td>Pole:</td>
            <td><?php
                print($s);
                ?>
            </td>
        </tr>
    </table>
</body>

</html>