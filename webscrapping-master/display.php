<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scrapped Items</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="font-awesome.css" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

    <!--CUSTOM STYLES-->
    <link href="style.css" rel="stylesheet" />
</head>
<body>


<center><h2>Best Items Available on NewEgg.com</h2></center>


<table>
<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Hard Drives</h1>";
$f = fopen("harddrives.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
</table>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Chromebooks</h1>";
$f = fopen("chromebooks.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Gaming Mice</h1>";
$f = fopen("gamingmouse.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Graphics Cards</h1>";
$f = fopen("graphicscards.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>


<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Laptops</h1>";
$f = fopen("laptops.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Printers</h1>";
$f = fopen("printers.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Dash Cams</h1>";
$f = fopen("printers.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best VR Headsets</h1>";
$f = fopen("vrheadsets.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>


<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Bluetooth Adapters</h1>";
$f = fopen("badapters.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>

<table>

<?php
echo "<html><body><table>\n\n";
echo "<h1>Best Switches</h1>";
$f = fopen("switches.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>

</table>
<hr>



</body>
</html>