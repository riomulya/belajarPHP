<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function jilnap($value)
{
    if ($value % 2 == 0) {
        echo "Bilangan Genap";
    } else {
        echo "Bilangan Ganjil";
    }
}
?>
<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Bilangan</td>
        <td>Jenis</td>
    </tr>
    <tr>
        <td><?php echo "$angka[0]" ?></td>
        <td>
            <?php
            jilnap($angka[0])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[1]" ?></td>
        <td>
            <?php
            jilnap($angka[1])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[2]" ?></td>
        <td>
            <?php
            jilnap($angka[2])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[3]" ?></td>
        <td>
            <?php
            jilnap($angka[3])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[4]" ?></td>
        <td>
            <?php
            jilnap($angka[4])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[5]" ?></td>
        <td>
            <?php
            jilnap($angka[5])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[6]" ?></td>
        <td>
            <?php
            jilnap($angka[6])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[7]" ?></td>
        <td>
            <?php
            jilnap($angka[7])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[8]" ?></td>
        <td>
            <?php
            jilnap($angka[8])
            ?>
        </td>
    </tr>
    <tr>
        <td><?php echo "$angka[9]" ?></td>
        <td>
            <?php
            jilnap($angka[9])
            ?>
        </td>
    </tr>
</table>