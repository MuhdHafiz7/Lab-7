<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Lab 7a Q1</title>
    </head>
    <body>
        <?php
            $name = "Muhammad Hafiz Bin ZainolAsri";
            $matric_number = "CI250134";
            $course = "Bachelor of Software Engineering";
            $year_of_study = 2;
            $address = "No. 7, Jalan Kampar Permai 4, Taman Kampar Permai, 31900, Kampar, Perak";
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo "$matric_number"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo "$year_of_study"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>
    </body>
</html>