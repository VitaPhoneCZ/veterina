<?php
    // Pred vystavenim Vasich stranek, tento soubor prosim smazte.

     $content = file_get_contents('http://www.endora.cz/obsah-nedodan/?domena='.$_SERVER['SERVER_NAME']);
     $content = preg_replace('/(src|href)="\//','\\1="http://www.endora.cz/',$content);
     echo $content;
