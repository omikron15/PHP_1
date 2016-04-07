<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $myname = "Connor Rose";
    $myage = "10";

    if ($myage < 16)
    {
        print "none";
    }
    else if ($myage >= 21)
    {
        print "You can buy specs, mugs and sausage rolls";
    }
    else if($myage <= 18)
    {
        print "You can buy specs and mugs";
    }
    else if($myage <= 16)
    {
        print "You can buy specs";
    }

    ?>
</p>
</body>
</html>