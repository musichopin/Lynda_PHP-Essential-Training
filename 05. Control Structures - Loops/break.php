<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Break</title>
  </head>
  <body>

    <?php
      for ($count=0; $count <= 10; $count++) {
        if ($count == 5) {
          break;
        }
        echo $count . ", ";
      }
    ?>
    
    <br />
    <?php // loop inside a loop with break

      for ($i=0; $i<=5; $i++) {
        if ($i % 2 == 0) { continue; }
        for ($k=0; $k<=5; $k++) {
          if ($k == 3) { break(2); } // breaks 2 levels of loop
          echo $i . "-" . $k . "<br />";
        }
      }

    ?>
    

  </body>
</html>
<!-- print:
0, 1, 2, 3, 4,
1-0
1-1
1-2
 -->