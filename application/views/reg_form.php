<html>
<head>
	<title>Registration form</title>
</head>
<body>
<form action="<?php echo base_url() ?>home/reg_data" method="post">
	<table>

		
	  <tr>
      <td>User Name :<td>
      <td><input type="text" name="username" id="username"><td>
   </tr>

    <tr>
      <td>PassWord :<td>
      <td><input type="text" name="passwd" id="passwd"><td>
   </tr> 

   <tr>
      <td>Email :<td>
      <td><input type="text" name="email" id="email"><td>
   </tr>

    <tr>
      <td>Mobile :<td>
      <td><input type="text" name="mobile" id="mobile"><td>
   </tr> 

   <tr>
      <td>Address :<td>
      <td><input type="text" name="address" id="address"><td>
   </tr> 

   <tr>
      <td><td>
      <td><input type="submit" name="submit" id="submit" value="Register"><td>
   </tr>
</table>
</form>
</body>
</html>