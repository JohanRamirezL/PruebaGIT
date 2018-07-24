<?php

if(isset($_REQUEST['login']))
{
$d1 = $_REQUEST['de']; 
$d2 = $_REQUEST['hasta'];
$d6 = $_REQUEST['activo'];
$d7 = $_REQUEST['realizados'];
$d8 = $_REQUEST['cancelados'];
header ("location: ../vista/reservadoa1.php?dato1=$d1&&dato2=$d2&&dato6=$d6&&dato7=$d7&&dato8=$d8");
}
?>
<?php

if(isset($_REQUEST['cons']))
{
$d3 = $_REQUEST['dee']; 
$d4 = $_REQUEST['hastaa'];

header ("location: ../vista/pedidosa1.php?dato3=$d3&&dato4=$d4");
}
?>