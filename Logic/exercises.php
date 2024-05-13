
<!DOCTYPE html>
<html>
    <head>
        <title>Intro PHP - Variables</title>

      
    </head>
    <body>
        <div class="container">
            <h1>Intro PHP - Logic</h1>
            <div class="content">
            <h2>Conditionals</h2>
            <?php
            $mystery = "Plopsa"; //CHANGE THIS VALUE TO MAKE THE CONDITIONAL BELOW TRUE

                if ($mystery[0] === "P" && strlen($mystery) > 5 && strpos("l", $mystery) !== -1) {
                    echo "Great !";
                } else {
                    echo "Not there yet !";
                }
            ?>
            <h2>Loops</h2>
            <h3>Cities by country</h3>
                <?php

                $cities_by_country = [
                    "Brussels" => "Belgium",
                    "Liège" => "Belgium",
                    "Paris" => "France",
                    "Charleroi" => "Belgium",
                    "Rome" => "Italy",
                    "Nice" => "France",
                    "Rio de Janeiro" => "Brazil",
                    "Antwerp" => "Belgium",
                ];
                ?>
                <ul>
                    <?php
                    foreach($cities_by_country as $city => $country) : 
                    ?>
                        <?php if ($country === "Belgium"):?>
                            <li>
                                <?php echo $city?>
                            </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                </ul>


                 <h2>Functions</h2>
                 <h3>Throw dice</h3>
                 <?php 

                    function through_dice($faces, $times) {
                     $count = 1;
                     do {
                         $number = rand(1, $faces);
                         echo "die {$count} : {$number} <br>";
                            $count++;
                        } while ($count <= $times);
                        echo "";
                    }

                 through_dice(12, 8);
                 ?>

                 <h3>Repeat string</h3>

                 <?php
                 function repeat_words($word, $times)
                 {
                    echo str_repeat($word, $times);
                 }

                 repeat_words("Hello ", 8);

                 ?>

                <h3>Greet someone</h3>
                 <?php 
                    function greet($first_name, $last_name) {
                     echo "This is {$first_name}. " . $last_name[0];
                    }
                    
                    greet("Marlon", "Brandon");
                 ?>


                    <h3>Weather</h3>

                    <?php 
                    
                    function is_short_weather($temperature) {
                        return $temperature >= 24 ? true : false;
                    }

                    var_dump(is_short_weather(13));
                    var_dump(is_short_weather(27));
                    var_dump(is_short_weather(-7));

                    ?>

                    <h3>last element</h3>

                    <?php 
                    
                    function last_element($array) {
                         
                        var_dump(array_pop($array));
                         
                    }

                    last_element([3, 5, 7]); //7
                    last_element([1]); //1
                    last_element([]); //null

                    ?>

                     <h3>capitalize</h3>

                    <?php 
                    function capitalize($string) {
                        echo ucfirst($string) . "<br>";
                    }
                    capitalize("eggplant"); // "Eggplant"
                    capitalize("pamplemousse"); // "Pamplemousse"
                    capitalize("squid"); //"Squid"
                    ?>
 <h3>Sum</h3>
                    <?php
                    function sum_array($array)
                    {
                        echo $sum = array_sum($array) . "<br>";
                    }
                    sum_array([1, 2, 3]); // 6
sum_array([2, 2, 2, 2]); // 8
sum_array([50, 50, 1]);

                    ?>

                     <h3>Return day</h3>

                     <?php 
                     function return_day($number){
                        
                         $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                         echo $number === 0 ? null :  $days[$number-1]; 
                         
                     }

                     return_day(1); // "Monday"
                    return_day(7); // "Sunday"
                    return_day(4); // "Thursday"
                    return_day(0); // null

                     
                     ?>

            </div>
            

        </div>
    </body>
</html>