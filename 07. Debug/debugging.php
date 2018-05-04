<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body>
  <!-- var_dump() does what echo(), gettype() and print_r() does alltogether -->
    <?php
      $number = 99;
      $string = "Bug?";
      $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
      
      var_dump($number);
      var_dump($string);

      echo "<pre> ";
      print_r($array);
      echo "</pre>";

      var_dump($array);
    
    ?>
    <br />
    <pre>
    <?php
      print_r(get_defined_vars()); // array of defined and default vars
    ?>
    </pre>
    <br />
    <?php

      function say_hello_to($word) {
        echo "Hello {$word}!<br />";
        var_dump(debug_backtrace());
      }

      say_hello_to('Everyone');
    ?>
  </body>
</html>
<!-- print:
C:\wamp64\www\Exercise Files\Chapter_07\07_03-final\sandbox\debugging.php:15:int 99

C:\wamp64\www\Exercise Files\Chapter_07\07_03-final\sandbox\debugging.php:16:string 'Bug?' (length=4)

 Array
(
    [1] => Homepage
    [2] => About Us
    [3] => Services
)

C:\wamp64\www\Exercise Files\Chapter_07\07_03-final\sandbox\debugging.php:22:
array (size=3)
  1 => string 'Homepage' (length=8)
  2 => string 'About Us' (length=8)
  3 => string 'Services' (length=8)


    Array
(
    [_GET] => Array
        (
        )

    [_POST] => Array
        (
        )

    [_COOKIE] => Array
        (
        )

    [_SERVER] => Array
        (
            [HTTP_HOST] => localhost:8080
            [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0
            [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
            [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.5
            [HTTP_ACCEPT_ENCODING] => gzip, deflate
            [HTTP_DNT] => 1
            [HTTP_CONNECTION] => keep-alive
            [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
            [HTTP_CACHE_CONTROL] => max-age=0
            [PATH] => C:\Program Files (x86)\Intel\iCLS Client\;C:\Program Files\Intel\iCLS Client\;C:\Windows\SYSTEM32;C:\Windows;C:\Windows\SYSTEM32\WBEM;C:\Windows\SYSTEM32\WINDOWSPOWERSHELL\V1.0\;C:\Program Files\Java\jdk1.8\bin;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:php\;C:\wamp64\bin\php\php5.6.16;C:\Program Files (x86)\Skype\Phone\;C:\Program Files\nodejs\;C:\Program Files (x86)\ATI Technologies\ATI.ACE\Core-Static;C:\Program Files\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files\Intel\Intel(R) Management Engine Components\IPT;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\IPT;C:\Program Files\Calibre2\;
            [SystemRoot] => C:\Windows
            [COMSPEC] => C:\Windows\system32\cmd.exe
            [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
            [WINDIR] => C:\Windows
            [SERVER_SIGNATURE] => 
Apache/2.4.27 (Win64) PHP/7.0.23 Server at localhost Port 8080


            [SERVER_SOFTWARE] => Apache/2.4.27 (Win64) PHP/7.0.23
            [SERVER_NAME] => localhost
            [SERVER_ADDR] => ::1
            [SERVER_PORT] => 8080
            [REMOTE_ADDR] => ::1
            [DOCUMENT_ROOT] => C:/wamp64/www
            [REQUEST_SCHEME] => http
            [CONTEXT_PREFIX] => 
            [CONTEXT_DOCUMENT_ROOT] => C:/wamp64/www
            [SERVER_ADMIN] => wampserver@wampserver.invalid
            [SCRIPT_FILENAME] => C:/wamp64/www/Exercise Files/Chapter_07/07_03-final/sandbox/debugging.php
            [REMOTE_PORT] => 53935
            [GATEWAY_INTERFACE] => CGI/1.1
            [SERVER_PROTOCOL] => HTTP/1.1
            [REQUEST_METHOD] => GET
            [QUERY_STRING] => 
            [REQUEST_URI] => /Exercise%20Files/Chapter_07/07_03-final/sandbox/debugging.php
            [SCRIPT_NAME] => /Exercise Files/Chapter_07/07_03-final/sandbox/debugging.php
            [PHP_SELF] => /Exercise Files/Chapter_07/07_03-final/sandbox/debugging.php
            [REQUEST_TIME_FLOAT] => 1522231988.62
            [REQUEST_TIME] => 1522231988
        )

    [_ENV] => Array
        (
        )

    [_REQUEST] => Array
        (
        )

    [_FILES] => Array
        (
        )

    [number] => 99
    [string] => Bug?
    [array] => Array
        (
            [1] => Homepage
            [2] => About Us
            [3] => Services
        )

)
    


Hello Everyone!

C:\wamp64\www\Exercise Files\Chapter_07\07_03-final\sandbox\debugging.php:36:
array (size=1)
  0 => 
    array (size=4)
      'file' => string 'C:\wamp64\www\Exercise Files\Chapter_07\07_03-final\sandbox\debugging.php' (length=73)
      'line' => int 39
      'function' => string 'say_hello_to' (length=12)
      'args' => 
        array (size=1)
          0 => string 'Everyone' (length=8)

-->