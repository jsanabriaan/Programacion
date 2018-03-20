<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 389px;
	height: 115px;
	z-index: 1;
	left: 172px;
	top: 148px;
}
#apDiv1 table {
	text-align: center;
	font-weight: bold;
}
#apDiv2 {
	position: absolute;
	width: 389px;
	height: 115px;
	z-index: 1;
	left: 583px;
	top: 149px;
}
#apDiv2 table {
	text-align: center;
	font-weight: bold;
}
#apDiv3 {
	position: absolute;
	width: 389px;
	height: 115px;
	z-index: 1;
	left: 987px;
	top: 149px;
}
#apDiv3 table {
	text-align: center;
	font-weight: bold;
}
#apDiv4 {	position: absolute;
	width: 389px;
	height: 115px;
	z-index: 1;
	left: 172px;
	top: 148px;
}
#apDiv5 {	position: absolute;
	width: 389px;
	height: 115px;
	z-index: 1;
	left: 583px;
	top: 149px;
}
</style>

<?php include("consultas.php");
?>
</head>

<body>
  <p>NOMBRE DE USUARIO: <?php echo $_SESSION['username'];?>
  <p><a href="cerrar.php">Cerrar Sesion</a>  
<div id="apDiv1">
  <table width="388" border="1">
    <tr>
      <td width="235">Nombre</td>
      <td width="137"><?php echo $data['fullName']?></td>
    </tr>
    <tr>
      <td>ID</td>
      <td><?php echo $data['id'];?></td>
    </tr>
    <tr>
      <td>Default withdraw fee</td>
      <td><?php echo $data['payoutFee'];?></td>
    </tr>
    <tr>
      <td>Ask</td>
      <td><?php echo $data1['ask'];?></td>
    </tr>
    <tr>
      <td>Best bid price</td>
      <td><?php echo $data1['bid'];?></td>
    </tr>
    <tr>
      <td>Last trade price</td>
      <td><?php echo $data1['last'];?></td>
    </tr>
    <tr>
      <td>Last trade price 24 hours ago</td>
      <td><?php echo $data1['open'];?></td>
    </tr>
    <tr>
      <td>Lowest trade price within 24 hours</td>
      <td><?php echo $data1['low'];?></td>
    </tr>
    <tr>
      <td>Highest trade price within 24 hours</td>
      <td><?php echo $data1['high'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in base currency</td>
      <td><?php echo $data1['volume'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in quote currency</td>
      <td><?php echo $data1['volumeQuote'];?></td>
    </tr>
    <tr>
      <td>Last update or refresh ticker timestamp</td>
      <td><?php echo $data1['timestamp'];?></td>
    </tr>
  </table>
</div>
<div id="apDiv2">
  <table width="388" border="1">
    <tr>
      <td width="235">Nombre</td>
      <td width="137"><?php echo $data2['fullName']?></td>
    </tr>
    <tr>
      <td>ID</td>
      <td><?php echo $data2['id'];?></td>
    </tr>
    <tr>
      <td>Default withdraw fee</td>
      <td><?php echo $data2['payoutFee'];?></td>
    </tr>
    <tr>
      <td>Ask</td>
      <td><?php echo $data3['ask'];?></td>
    </tr>
    <tr>
      <td>Best bid price</td>
      <td><?php echo $data3['bid'];?></td>
    </tr>
    <tr>
      <td>Last trade price</td>
      <td><?php echo $data3['last'];?></td>
    </tr>
    <tr>
      <td>Last trade price 24 hours ago</td>
      <td><?php echo $data3['open'];?></td>
    </tr>
    <tr>
      <td>Lowest trade price within 24 hours</td>
      <td><?php echo $data3['low'];?></td>
    </tr>
    <tr>
      <td>Highest trade price within 24 hours</td>
      <td><?php echo $data3['high'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in base currency</td>
      <td><?php echo $data3['volume'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in quote currency</td>
      <td><?php echo $data3['volumeQuote'];?></td>
    </tr>
    <tr>
      <td>Last update or refresh ticker timestamp</td>
      <td><?php echo $data3['timestamp'];?></td>
    </tr>
  </table>
</div>
<div id="apDiv3">
  <table width="388" border="1">
    <tr>
      <td width="235">Nombre</td>
      <td width="137"><?php echo $data4['fullName']?></td>
    </tr>
    <tr>
      <td>ID</td>
      <td><?php echo $data4['id'];?></td>
    </tr>
    <tr>
      <td>Default withdraw fee</td>
      <td><?php echo $data4['payoutFee'];?></td>
    </tr>
    <tr>
      <td>Ask</td>
      <td><?php echo $data5['ask'];?></td>
    </tr>
    <tr>
      <td>Best bid price</td>
      <td><?php echo $data5['bid'];?></td>
    </tr>
    <tr>
      <td>Last trade price</td>
      <td><?php echo $data5['last'];?></td>
    </tr>
    <tr>
      <td>Last trade price 24 hours ago</td>
      <td><?php echo $data5['open'];?></td>
    </tr>
    <tr>
      <td>Lowest trade price within 24 hours</td>
      <td><?php echo $data5['low'];?></td>
    </tr>
    <tr>
      <td>Highest trade price within 24 hours</td>
      <td><?php echo $data5['high'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in base currency</td>
      <td><?php echo $data5['volume'];?></td>
    </tr>
    <tr>
      <td>Total trading amount within 24 hours in quote currency</td>
      <td><?php echo $data5['volumeQuote'];?></td>
    </tr>
    <tr>
      <td>Last update or refresh ticker timestamp</td>
      <td><?php echo $data5['timestamp'];?></td>
    </tr>
  </table>
</div>
</body>
</html>