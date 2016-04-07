<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

  $Array_People = array();

    array_push($Array_People, "Person 1");
    array_push($Array_People, "Person 2");
    array_push($Array_People, "Person 3");
    array_push($Array_People, "Person 4");
    array_push($Array_People, "Person 5");
    array_push($Array_People, "Person 6");
    array_push($Array_People, "Person 7");
    array_push($Array_People, "Person 8");
    array_push($Array_People, "Person 9");
    array_push($Array_People, "Person 10");
    array_push($Array_People, "Person 11");
    array_push($Array_People, "Person 12");
    array_push($Array_People, "Person 13");
    array_push($Array_People, "Person 14");
    array_push($Array_People, "Person 15");

    $Spec_Winner = rand(0,14);
    $Mugs_Winner = rand(0,14);
    $SausageRolls_Winner = rand(0,14);

    print "The specs winner is " . $Array_People[$Spec_Winner];
    print "The Mugs winner is " . $Array_People[$Mugs_Winner];
    print "The Sausage Rolls winner is " . $Array_People[$SausageRolls_Winner];

    ?>
</p>
</body>
</html>