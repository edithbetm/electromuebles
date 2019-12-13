<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo proveedor</title>
<script type="text/javascript" src="../recursos/stmenu.js"></script>
</head>

<body>
    <img src="../recursos/logo.png" width="1650" height="374" alt=""/>
    <script type="text/javascript" src="../recursos/menuh.js"></script>
    <br>
<form action="altaproveedor.php" method="get">
<table width="600" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" bgcolor="#159E00"><strong>Alta de proveedores</strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#1DD501">Marca</td>
      <td align="center" bgcolor="#9BFF8C"><input type="text" name="txtmar" id="txtmar"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#1DD501">Direccion</td>
      <td align="center" bgcolor="#9BFF8C"><input type="text" name="txtdir" id="txtdir"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#1DD501">Correo</td>
      <td align="center" bgcolor="#9BFF8C"><input type="text" name="txtcor" id="txtcor"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#1DD501">Telefono        </td>
      <td align="center" bgcolor="#9BFF8C"><input type="text" name="txttel" id="txttel"></td>
    </tr>
    <tr>
      <td bgcolor="#1DD501">&nbsp;</td>
      <td align="center" bgcolor="#1DD501"><input type="submit" name="submit" id="submit" value="Guardar">
        <input type="reset" name="reset" id="reset" value="Borrar"></td>
      </tr>
  </tbody>
</table>
</form>
</body>
</html>
