<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Continue</title>
  </head>
  <body>

    <?php
      for ($count=0; $count <= 10; $count++) {
        if ($count % 2 == 0) { continue; }
        echo $count . ", ";
      }
    ?>

    <br />
    <?php // what's wrong with this?

      $count = 0;
      while ($count <= 10) {
        if ($count == 5) {
          $count++;
          continue;
        }
        echo $count . ", ";
        $count++;
      }

    ?>
    
    <br />
    <?php // loop inside a loop with continue

      for ($i=0; $i<=5; $i++) {
        if ($i % 2 == 0) { continue(1); } //alt: continue
        for ($k=0; $k<=5; $k++) {
          if ($k == 3) { continue(2); } // skips 2 levels of loop
          echo $i . "-" . $k . "<br />";
        }
      }

    ?>
    

  </body>
</html>
<!-- print:
1, 3, 5, 7, 9,
0, 1, 2, 3, 4, 6, 7, 8, 9, 10,
1-0
1-1
1-2
3-0
3-1
3-2
5-0
5-1
5-2
 -->
