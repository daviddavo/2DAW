<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $message = '';
        
        for ($i = 100; $i >= 0; $i = $i-2) {
            
            if($i != 100){
                $message .= ", ";
            }
            
            $message .= $i;
        }
        
        print $message;
        ?>
    </body>
</html>
