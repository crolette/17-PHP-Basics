
<!DOCTYPE html>
<html>
    <head>
        <title>Intro PHP - Variables</title>

      
    </head>
    <body>
        <div class="container">
            <h1>Intro PHP - Variables</h1>
            <div class="content">
            <h2>Variables</h2>
            <?php
            $a = "3";
            $b = "8";
            /***********Do not change the code above 👆*******/
            //Write your code here :
            $temp = $a;
            $a = $b;
            $b = $temp;
            /***********Do not change the code below 👇*******/
            echo "a is " . $a;
            echo "<br/>";
            echo "b is " . $b;
            ?>  

            <h2>Strings</h2>

            <br>

            <?php
            $national_account = "N957324";
            $belgian_account = "BE97684531265";
            $partial_account = "   BE_954364    ";

            echo "Your account number contains " . strlen($national_account) ."<br>";

            echo "The first letter of the bank account is " . substr($national_account, 0, 1) . " and it is "; 
            
            if (substr($national_account,0,1) == "N"):
                echo " a national account number";
                elseif (substr($national_account,0,1) == "I"):
                    echo "an international account number";
                    endif;

            ?>

        <br>
        <?php
            echo "The first letter of the bank account is " . substr($belgian_account, 0, 2);
            ?>

            <br>
            <?php 
            echo "The account number is " . str_replace("_","",trim($partial_account));
             ?>
        <br>
            <?php 
            $word = "skateboard";

            $searched_word = "board";
            $extracted_word = substr($word, strpos($word, $searched_word), strlen($searched_word));

            $facial_hair = str_replace("o", "e", $extracted_word);

            echo "The extracted word is " . $extracted_word . " converted to " . $facial_hair ;
            
            ?>
            <h2>Numbers</h2>

            <?php  
            $city = "Brussels";
            $weather_condition = "rainy";
            $temperature = 24.16879;

            echo 'The weather in ' . $city .' is '. round($temperature, 0) . '°C and it\'s ' . $weather_condition .'' ;

            ?>
            <br>
            <br>
            <?php

            $price = 37.5;
            $vat = 0.21;


            echo $price * (1 + $vat) .'€';

            ?>
            <br>
            <br>
            <?php
            $radius = 37.59;
            $surface = pi()  * $radius * $radius;
            echo 'The surface of a circle with a radius of '. number_format($radius,2,',') . 'cm is ' . number_format($surface,0,'.','.') . 'cm2';
            ?>

            <br><br>
                
            <h2>Arrays</h2>
                <h3>POP</h3>
            <?php
            $leaderboard = ["Harry", "Lua", "Hermione", "Bellatrix"];
            echo "Before pop <br>";
            print_r($leaderboard);
            // array_pop($leaderboard);
            // echo "<br>";
            // echo "After pop <br>";
            // print_r($leaderboard);
            echo "After unset <br>";
            unset($leaderboard[3]);
            print_r($leaderboard);
            echo " count " . count($leaderboard);
            echo "<br>";
            $leaderboard[] = "test";
            print_r($leaderboard);
            echo " count " . count($leaderboard);

            ?>

            <h3>Array manipulation</h3>
            <h4>loop and look if value is present or not</h4>
            <?php
            $initialArray = [
                null,
                true,
                ["Apple", "two", null],
                false,
                ["three", "BeCode"],
                4,
                "I'm a big bad wolf",
                ["one"],
            ];

            echo "<br>";
             
            $new_array = [];
            foreach ($initialArray as $value) {
                var_dump($new_array); echo "<br>";

                if ($value === "one" || $value === "two" || $value === "three") {
                    array_push($new_array, $value);
                }
                elseif (is_array($value)) {
                foreach($value as $element) {
                    if ($element === "one" || $element === "two" || $element === "three") {
                    array_push($new_array, $element);
                }
                }
             } 
            }
            var_dump($new_array);

            ?>
            <h4>flatten and contains</h4>

<?php
            $initialArray = [
                null,
                true,
                ["Apple", "two", null],
                false,
                ["three", "BeCode"],
                4,
                "I'm a big bad wolf",
                ["one"],
            ];
             
            $new_array = [];
            foreach ($initialArray as $value) {
                
                if (gettype($value) == "array") {
                foreach($value as $element) {
                    array_push($new_array, $element);
                }
                } else {
                    array_push($new_array, $value);
                }
                }
                ;

            $result = [];
            in_array("one", $new_array) ? array_push($result, "one") : null;
            in_array("two", $new_array) ? array_push($result, "two") : null;
            in_array("three", $new_array) ? array_push($result, "three") : null;

            var_dump($result);

            ?>
            <br>
            <h3>Array planets</h3>
            <?php
            $planets = array("The Moon", "Venus", "Earth", "Mars", "Jupiter");
            array_shift($planets);
            array_push($planets, "Saturn");
            array_unshift($planets, "Mercury");
            print_r($planets);

            
            ?>


            </div>
            

        </div>
    </body>
</html>