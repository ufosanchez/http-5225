<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Generate a random number (1, ..., 100)
        $randomGrade = ceil(rand(1,100));

        // Generate a random number of the week (1, ..., 7)
        $randomDay = ceil(rand(1,7));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Codeacademy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA = 'W3SCHOOLS';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = '';
            $linkCTA = 'Mozilla';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        
        echo '<h2>'.$linkName.'</h2>';

        if($linkURL !== ""){
            echo '<a href="'.$linkURL.'">'.$linkCTA.'</a>';
        } else{
            echo '<p>'.$linkCTA.'</p>';
        }
            
        echo '<br>';
        echo '<img src="' . $linkImage . '" width="200">';
        echo '<p>'.$linkDescription.'</p>';

        ?>

        <hr>

        <?php

        echo '<H1>Your grade is : '.$randomGrade.'</H1>';

        switch($randomGrade){
            case ($randomGrade<60):{
                echo '<H1> Grade F, sorry you failed the course </H1>';
                break;
            }
            case ($randomGrade>=60 && $randomGrade<=70):{
                echo '<H1> Grade E, sorry you failed the course, come again and learn more</H1>';
                break;
            }
            case ($randomGrade>70 && $randomGrade<=75):{
                echo '<H1> Grade D, almost :( </H1>';
                break;
            }
            case ($randomGrade>75 && $randomGrade<=80):{
                echo '<H1> Grade C, ehhh you passed but your grade it\'s quite low </H1>';
                break;
            }
            case ($randomGrade>80 && $randomGrade<=85):{
                echo '<H1> Grade B, not bad, eh? </H1>';
                break;
            }
            case ($randomGrade>85 && $randomGrade<=90):{
                echo '<H1> Grade A, yess almost perfect </H1>';
                break;
            }
            case ($randomGrade>90):{
                echo '<H1> Grade A+, wowww amazing </H1>';
                break;
            }
            default:
                echo '<H1> This grade doesn\'t exist </H1>';
                break;
        }

        ?>

        <hr>

        <?php

        echo '<H1>The random numer is : '.$randomDay.'</H1>';

        switch($randomDay){
            case 1:
                echo '<H1>Today is Monday</H1>';
                break;
            case 2:
                echo '<H1>Today is Tuesday</H1>';
                break;
            case 3:
                echo '<H1>Today is Wendsday</H1>';
                break;
            case 4:
                echo '<H1>Today is Thursday</H1>';
                break;
            case 5:
                echo '<H1>Today is Friday</H1>';
                break;
            case 6:
                echo '<H1>Today is Saturday</H1>';
                break;
            case 7:
                echo '<H1>Today is Sunday</H1>';
                break;
            default:
                echo '<H1>no valid data</H1>';
                break;
        }

        ?>

    </body>
</html>