<?php
$valor=$_POST['valor'];
//$valor="Hola mundo";
if($valor=='on' || $valor=='activar' || $valor=='prender' || $valor=='encender'|| $valor=='enciende')
{
    exec('sudo python /var/www/voz/prende.py');
    $retorna=1;
}
elseif($valor=='off' || $valor=='apaga' || $valor=='apagar' || $valor=='desactivar')
{
    exec('sudo python /var/www/voz/apaga.py');
    $retorna=2;
}
else {
$retorna=3;
}

echo $retorna;
?>
