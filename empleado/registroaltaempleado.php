<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo empleado</title>
<script type="text/javascript" src="../recursos/stmenu.js"></script>
</head>

<body>
    <img src="../recursos/logo.png" width="1650" height="374" alt=""/>
    <script type="text/javascript" src="../recursos/menuh.js"></script>
    <br>
<form action="altaempleado.php" method="get">
<table width="600" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" bgcolor="#1806FB"><strong>Alta de empleados</strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Nombre:</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtnom" id="txtnom"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Direccion:</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtdir" id="txtdir"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Colonia:</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtcol" id="txtcol"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Ciudad:        </td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtciu" id="txtciu"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Estado</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtest" id="txtest"></td>
      </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Telefono</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txttel" id="txttel"></td>
      </tr>
    <tr>
      <td align="right" bgcolor="#685DFF">Código Postal</td>
      <td align="center" bgcolor="#A19AFF"><input type="text" name="txtpos" id="txtpos"></td>
      </tr>
    <tr>
      <td bgcolor="#685DFF">&nbsp;</td>
      <td align="center" bgcolor="#685DFF"><input type="submit" name="submit" id="submit" value="Guardar">
        <input type="reset" name="reset" id="reset" value="Borrar"></td>
      </tr>
  </tbody>
</table>
</form>
</body>
</html>
