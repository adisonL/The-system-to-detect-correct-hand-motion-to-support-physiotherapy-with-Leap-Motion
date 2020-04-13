<!DOCTYPE html>
<html lang="en">
<body>
    <?php

    echo "My second page PHP Script";

    $x = 15985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" - 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

    ?>
</body>
</html>