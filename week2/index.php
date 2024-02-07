<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php echo '<h1>PHP and Creating Output</h1>' ; ?>

    <?php echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatum doloremque amet unde voluptas accusamus porro expedita provident nemo accusantium, nostrum ipsa deleniti ex repellendus veritatis. Porro itaque ipsam eaque!</p>' ; ?>
  
    <?php echo '<p>The PHP echo command can be used to create output.</p>' ; ?>

    <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>' ; ?>
    
    <?php echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>' ; ?>
    
    <?php echo '<h2>More HTML to Convert</h2>' ; ?>

    <?php echo '<p>PHP says "Hello World!"</p>' ; ?>

    <?php echo '<p>Can you display a sentence with \' and "?</p>' ; ?>

    <img src="<?php echo 'https://placehold.co/600x400' ; ?>" alt="image of the smaple.php">

    <br></br>

    <!-- PHP Variables -->

    <?php
      $linkName = 'Codecademy';
      $linkURL = 'https://www.codecademy.com/';
      $linkImage = 'codecademy.png';
      $linkDescription = 'Learn to code interactively, for free.';
    ?>

    <?php echo $linkName; ?>

    <a href="<?php echo $linkURL ; ?>">
      <?php echo '<h1>'. $linkName .'</h1>' ; ?>
    </a>

    <img src="<?php echo $linkImage ; ?>" alt="image codecademy">

    <?php echo '<p>'. $linkDescription .'</p>' ; ?>

    <!-- Links and Arrays -->

    <?php 
        $person['firstName'] = 'Arnulfo';
        $person['lastName'] = 'Sánchez';
        echo '<p>Hello '.$person['firstName'].' '.$person['lastName'].'</p>';
    ?>

    <?php
      $languages = array('PHP', 'HTML', 'JavaScript', 'CSS')
    ?>

  </body>
</html>