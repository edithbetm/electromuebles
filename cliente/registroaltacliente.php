<!doctype html>
<html>
<head>
	<script type="text/javascript" src="../recursos/stmenu.js"></script>
<meta charset="utf-8">
<title>Nuevo cliente</title>
</head>

<body>
	<img src="../recursos/logo.png" width="1650" height="374" alt=""/>
<script type="text/javascript" src="../recursos/menuh.js"></script>
	<form action="altacliente.php" method="get">
<table width="600" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" bgcolor="#FF2124"><strong>Alta de clientes</strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Nombre:</td>
      <td align="center" bgcolor="#FFB6B7"><input name="txtnom" type="text" id="txtnom" required pattern="[A-Za-z ñ]+" maxlength="40" minlength="3" ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Dirección:</td>
      <td align="center" bgcolor="#FFB6B7"><input type="text" name="txtdir" id="txtdir" required pattern="[A-Za-z0-9ñ]+*" maxlength="45" minlength="5" ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Colonia:</td>
      <td align="center" bgcolor="#FFB6B7"><input type="text" name="txtcol" id="txtcol" required pattern="[A-Za-z ñ]+" maxlength="40" minlength="3" ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Ciudad: </td>
      <td align="center" bgcolor="#FFB6B7"><input type="text" name="txtciu" id="txtciu" required pattern="[A-Za-z ]+" maxlength="40" minlength="3" ></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Estado</td>
      <td align="center" bgcolor="#FFB6B7"><input type="text" name="txtest" id="txtest" required pattern="[A-Za-z ]+" maxlength="40" minlength="3" ></td>
      </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Telefono</td>
      <td align="center" bgcolor="#FFB6B7"><input name="txttel" type="text" id="txttel" required pattern="[0-9]+" maxlength="15" minlength="9" ></td>
      </tr>
    <tr>
      <td align="right" bgcolor="#FF4649">Código Postal</td>
      <td align="center" bgcolor="#FFB6B7"><input type="text" name="txtpos" id="txtpos" required pattern="[0-9]+" maxlength="10" minlength="4" ></td>
      </tr>
    <tr>
      <td bgcolor="#FF4649">&nbsp;</td>
      <td align="center" bgcolor="#FF4649"><input type="submit" name="submit" id="submit" value="Guardar">
        <input type="reset" name="reset" id="reset" value="Borrar"></td>
      </tr>
  </tbody>
</table>
<br>
</form>

	<form action="../inicio/" method="get">
<center><input type="submit" name="submit" id="submit" value="Inicio"></center>
</form>
</body>
</html>
