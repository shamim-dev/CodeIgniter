<html>
<head>
	<title>Registration form</title>
</head>
<body>
<form action="<?php echo base_url() ?>home/edit_data" method="post">
	<table>

		
	  <tr>
      <td>User Name :<td>
      <td><input type="text" name="username" id="username" value="{u_name}"><td>
   </tr>

    <tr>
      <td>PassWord :<td>
      <td><input type="text" name="passwd" id="passwd" value="{passwd}"><td>
   </tr> 

   <tr>
      <td>Email :<td>
      <td><input type="text" name="email" id="email" value="{email}"><td>
   </tr>

    <tr>
      <td>Mobile :<td>
      <td><input type="text" name="mobile" id="mobile" value="{mobile}"><td>
   </tr> 

   <tr>
      <td>Address :<td>
      <td><input type="text" name="address" id="address" value="{address}"><td>
   </tr> 

   <input type="hidden" name="id" id="id" value="{id}">

   <tr>
      <td><td>
      <td><input type="submit" name="submit" id="submit" value="Update"><td>
   </tr>
</table>
</form>
</body>
</html>