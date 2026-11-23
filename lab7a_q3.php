<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $area = calculateArea(4, 2);

        echo "The area of a rectangle with a width of 4 and 2 is " . $area;
    ?>
</body>
</html>