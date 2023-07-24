<?php
   $respuestas = array(
       "es un anbu asesino de Iwagakure.",
       "¡Ve a cocinar ramen, nunca fuiste a la escuela ninja!",
       "anbu espía de Iwagakure."
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>
