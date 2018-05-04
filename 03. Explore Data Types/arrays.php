<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
    <?php
    
      $numbers = array(4,8,15,16,23,42);
      echo $numbers[0];
    ?>
    <br />
    
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php echo $mixed[0]; ?><br />
    <?php //echo $mixed ?><br /> <!-- gives error -->
    <?php //echo $mixed[3]; ?><br /> <!-- gives error -->
    
    <?php echo $mixed[3][1] . " before z"; ?><br />
    <!-- alt: <?php echo "{$mixed[3][1]} before z"; ?><br /> -->
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "horse"; ?>
    
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>
    
    <?php 
      //PHP 5.4 added the short array syntax.
      $array = [1,2,3];
    ?>
    
  </body>
</html>
<!-- print:
4
dog
6


y before z

    Array
(
    [0] => 6
    [1] => fox
    [2] => cat
    [3] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )

    [4] => mouse
    [5] => horse
)
1    
 -->