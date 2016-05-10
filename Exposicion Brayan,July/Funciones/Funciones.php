<html> 
<head> 
    <title>funcion 1</title> 
</head> 

<body> 

<? 
function escribe_separa($cadena){ 
    for ($i=0;$i<strlen($cadena);$i++){ 
       echo $cadena[$i]; 
       if ($i<strlen($cadena)-1) 
          echo "-"; 
    } 
} 

escribe_separa ("hola"); 
echo "<p>"; 
escribe_separa ("Texto más largo, a ver lo que hace"); 
?> 
</body> 
</html>
