<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 409px;
	height: 169px;
	z-index: 1;
	left: 518px;
	top: 111px;
}
#apDiv1 #form1 table {
	text-align: center;
	font-weight: bold;
}
</style>
</head>

<body>
<div id="apDiv1">
  <form id="form1" name="form1" method="post" action="ingreso.php">
    <table width="405" border="1">
      <tr>
        <td width="197">Nombre de usuario:</td>
        <td width="192"><label for="user"></label>
        <input type="text" name="user" id="user" /></td>
      </tr>
      <tr>
        <td>Contraseña</td>
        <td><label for="pass"></label>
        <input type="password" name="pass" id="pass" /></td>
      </tr>
    </table>
    <p>
      <input type="submit" name="Ingresar" id="Ingresar" value="Ingresar" />
    </p>
    <p><a href="index1.php">Registrar</p>
  </form>
</div>

	
</body>
</html>