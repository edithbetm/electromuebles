<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nuevo producto</title>
<script type="text/javascript" src="../recursos/stmenu.js"></script>
</head>

<body>
    <img src="../recursos/logo.png" width="1650" height="374" alt=""/>
    <script type="text/javascript" src="../recursos/menuh.js"></script>
<form action="altaproducto.php" method="get">
<table width="600" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center" bgcolor="#FF4700"><strong>Alta de productos</strong></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Código:</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtcod" id="txtcod"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Tipo:</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txttip" id="txttip"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Marca:</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtmar" id="txtmar"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Descripción: </td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtdes" id="txtdes"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Precio normal</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtnor" id="txtnor"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Precio descuento</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtdesc" id="txtdesc"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FD662B">Existencia</td>
      <td align="center" bgcolor="#FF9971"><input type="text" name="txtexi" id="txtexi"></td>
    </tr>
    <tr>
      <td bgcolor="#FD662B">&nbsp;</td>
      <td align="center" bgcolor="#FD662B"><input type="submit" name="submit" id="submit" value="Guardar">
        <input type="reset" name="reset" id="reset" value="Borrar"></td>
      </tr>
  </tbody>
</table>
</form>
</body>
</html>
