<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>
  </head>
  <body>
    
    <?php $numbers = array(8,23,15,42,16,4); ?>
    
    Count:         <?php echo count($numbers); ?><br />
    Max value:     <?php echo max($numbers);   ?><br />
    Min value:     <?php echo min($numbers);   ?><br />
    <br />
    <pre>
    Sort:          <?php sort($numbers);  print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    Implode:       <?php echo $num_string = implode(" * ", $numbers); ?><br />
    Explode:       <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />
    
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />

  </body>
</html>

<!-- print:
 Count: 6
Max value: 42
Min value: 4

    Sort:          Array
(
    [0] => 4
    [1] => 8
    [2] => 15
    [3] => 16
    [4] => 23
    [5] => 42
)


    Reverse sort: Array
(
    [0] => 42
    [1] => 23
    [2] => 16
    [3] => 15
    [4] => 8
    [5] => 4
)


    


Implode: 42 * 23 * 16 * 15 * 8 * 4
Explode: Array ( [0] => 42 [1] => 23 [2] => 16 [3] => 15 [4] => 8 [5] => 4 )

15 in array?: 1
19 in array?:
 -->