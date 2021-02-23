<!-- Primeira aula-->
<?php 
    echo "Hello World!";
?>


<!-- Segunda aula-->
<?php 
    $name = "Eullerson";
    echo "<p>O meu nome é ".$name."</p>";

    $string1 = "<p>How are you doing?</p>";
    $string2 = "<p>Not bad! Thank you.</p>";
    echo $string1." ".$string2;

    $Number = 45;
    $calculation = $Number * 25/2 + 4;
    echo "<p>The result of the calculation is ".$calculation."</p>";

    $myBool = true;
    echo "<p> This variable is true = ".$myBool."</p>";

    $myBool2 = false;
    echo "<p> This variable is false = ".$myBool2."</p>";
?>


<!-- Terceira aula-->
<?php
    $myArray = array("fé", "esperança", "amor");
    print_r($myArray);
    unset($myArray["Agora vai"]);

    echo $myArray[2];

    $anotherArray[1] = "1";
    $anotherArray[2] = "2";
    $anotherArray[3] = "3";
    $anotherArray[4] = "4";
    $anotherArray["NyFavouriteFood"] = "Ice crean";
        echo "<p></p>";
    print_r($anotherArray);

    $thirdArray = Array(
        "porque"=>"why", 
        "Ele"=> "He", 
        "Vive", "Live");
        echo "<p></p>";
    print_r($thirdArray);
        echo "<p></p>";
    echo sizeof($myArray);
    echo sizeof($anotherArray);
    echo sizeof($thirdArray);
        echo "<p></p>"
?>

<!-- Quarta aula-->
<?php 

    $user = "eullerson";

    if($user == "eullerson") {
        echo "Hello, Eullerson";
    } else {
        echo "Sorry, your name dont const in our database!";
    }

    $age = 20;

    if ($age >= 18) {
        echo "<p>you may proceed...</p>";
    } else {
        echo "<p>you are too young, sorry!</p>";
    }

    $myname = "eullerson";
    $myage = "19";

    if ($myname == "eullerson" && $myage == "19") {
        echo "Hi, Eulleron. You welcome in here!";
    } else {
        echo "Sorry, i do not know him.";
    }
    ?>

<!-- Quinta aula-->


<?php 
        echo "<p></p>";
    $family = array("Jack", "joyce", "Paul", "Kate");
    
    for ($i = 0; $i < sizeof($family); $i++) {
        echo $family[$i]."<br>";
    }

    foreach ($family as $key => $value) {
        $family[$key] = $value." Ribeiro";

        echo "Array intem ".$key." is ".$value."<br>";
    }

    for ($i = 0; $i<11; $i++) {
        echo $i."<br>";
    }
    for ($i = 10; $i>0; $i--) {
        echo $i."<br>";
    }
?>

<!-- Sexta aula-->
<?php 
    $e = 0;
    while ($e < sizeof($family)) {
        echo $family[$e]."<br>";
        $e++;
    }

    $e = 0;
    while ($e < 11) {
        echo $e;
        $e++;
    }
?>

<?php
    function
?>