<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

   $provisionedActivities = array("Specs", "Drugs", "Rock and Roll");

   unset($provisionedActivities[2]);

    foreach($provisionedActivities as $x) {

        print "<p>$x</p>";

    }

    ?>
</p>
</body>
</html>