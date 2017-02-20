<html>
<head>
	<title>Registration form</title>

   <style type="text/css">
      #loader {
           position: absolute;
           left: 50%;
           top: 50%;
           z-index: 1;
           width: 150px;
           height: 150px;
           margin: -75px 0 0 -75px;
           border: 16px solid #f3f3f3;
           border-radius: 50%;
           border-top: 16px solid #3498db;
           width: 120px;
           height: 120px;
           -webkit-animation: spin 2s linear infinite;
           animation: spin 2s linear infinite;
         }

         @-webkit-keyframes spin {
           0% { -webkit-transform: rotate(0deg); }
           100% { -webkit-transform: rotate(360deg); }
         }

         @keyframes spin {
           0% { transform: rotate(0deg); }
           100% { transform: rotate(360deg); }
         }

         /* Add animation to "page content" */
         .animate-bottom {
           position: relative;
           -webkit-animation-name: animatebottom;
           -webkit-animation-duration: 1s;
           animation-name: animatebottom;
           animation-duration: 1s
         }

         @-webkit-keyframes animatebottom {
           from { bottom:-100px; opacity:0 } 
           to { bottom:0px; opacity:1 }
         }

         @keyframes animatebottom { 
           from{ bottom:-100px; opacity:0 } 
           to{ bottom:0; opacity:1 }
         }

         #myDiv {
           display: none;
           text-align: center;
         }

   </style>
   <link href=" <?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>



<body  onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<form action="<?php echo base_url() ?>home/reg_data" method="post">
    <table align="center" border="1px" cellpadding="0" cellspacing="0" class="table animate-bottom" style="display:none;" id="myDiv" >

		
	  <tr >
      <th >User Name </th>
      <th >Password </th>
      <th >Mobile </th>
      <th >Address </th>
      <th >email </th>
      <th >Show </th>
      <th >edit </th>
      <th >delete </th>
      
      
   </tr>

   {reza}
      <tr>
      <td>{u_name}</td>
      <td>{passwd}</td>
      <td>{mobile}</td>
      <td>{address}</td>
      <td>{email}</td>
     <!--  <td><a href="<?php echo base_url() ?>home/show/{id}" class="btn btn-primary" > Show</a></td> -->
     <div >
      <td><a href="<?php echo base_url() ?>home/show/{id}" class="btn btn-primary" > Show</a></td>
      <td><a href="<?php echo base_url() ?>home/edit/{id}" class="btn btn-warning"> Edit</a></td>
      <td><a href="<?php echo base_url() ?>home/delete/{id}" class="btn btn-danger">delete</a></td>
      </div>
      
      </tr>
   {/reza}

   
</table>
</form>


   <script>
      var myVar;

      function myFunction() {
          myVar = setTimeout(showPage, 2000);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
      }
   </script>
</body>


</html>