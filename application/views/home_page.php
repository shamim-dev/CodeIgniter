<fieldset style="width:200px; margin:0 auto;">
<form action="<?php echo base_url() ?>home/login" method="post" >
 
    <legend> Login Form</legend>
    <div> User Name<div>
    <input type="text" name="u_name" id="u_name">

    <div> User Name<div>
    <input type="text" name="passwd" id="passwd">
    <input type="submit" value="Submit" name="submit" >
 
</form></br>
<a href="<?php echo base_url() ?>home/reg"> Click For Registration</a> </br>
<a href="<?php echo base_url() ?>home/all_users"> View All Users</a>
 </fieldset>
