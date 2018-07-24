<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<script type="text/javascript">
function Reloj() {

marcacion = new Date()

Hora = marcacion.getHours()

Minutos = marcacion.getMinutes()

Segundos = marcacion.getSeconds()

dn = "a.m"
if (Hora > 12) {
dn = "p.m"
Hora = Hora - 12
}
if (Hora == 0)
Hora = 12

if (Hora <= 9) Hora = "0" + Hora
if (Minutos <= 9) Minutos = "0" + Minutos
if (Segundos <= 9) Segundos = "0" + Segundos




var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
var Mes = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", 
"Octubre", "Noviembre", "Diciembre");
var Hoy = new Date();
var Anio = Hoy.getFullYear();
var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] +  "   ";


var Script, Total


Script = Fecha + Hora + ":" + Minutos + ":" + Segundos + " " + dn


Total = Script


document.getElementById('Fecha_Reloj').innerHTML = Total


setTimeout("Reloj()", 1000)
}
</script>
<body onload="Reloj()">

<table><tr><td id="Fecha_Reloj" style="color:#ffbf00; font-weight: 900; font-size: 13px"></td></tr></table>

</body>
</html>