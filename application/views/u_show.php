<html>
    <head>
        <title>Registration form</title>
        <style>
            #myProgress {
                width: 100%;
                background-color: #ddd;
            }

            #myBar {
                width: 10%;
                height: 30px;
                background-color: #4CAF50;
            }

            #label {
                text-align: center;
                line-height: 30px;
                color: white;
            }
        </style>
        <link href=" <?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body onload="move()">

<div id="myProgress">
            <div id="myBar"  align="center">
                <div id="label">10%</div>
            </div>
        </div> 
        
        <table align="center" border="1px" cellpadding="0" cellspacing="0"   id="myDiv" class="animate-bottom table">
 
            <tr> <th> User Name </th> <td>{u_name} </td></tr>
            <tr> <th> Password </th> <td>{passwd} </td></tr>
            <tr> <th> Mobile </th> <td>{mobile} </td></tr>
            <tr> <th> Addresse </th> <td>{address} </td></tr>
            <tr> <th> email </th> <td>{email} </td></tr>

            <tr><td colspan="2"><a href="<?php echo base_url() ?>home/all_users" class="btn btn-info">Go back</a></td></tr>
        </table>

        <script>
            function move() {
                var elem = document.getElementById("myBar");
                var width = 10;
                var id = setInterval(frame, 10);
                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                    } else {
                        width++;
                        elem.style.width = width + '%';
                        if( width!==100){
                            document.getElementById("label").innerHTML = width * 1 + '%';
                        }else{
                           document.getElementById("label").innerHTML = '<h5 style="width:300px; margin-left:500px;"  align="center"> <marquee behavior="alternate" direction="right">User data loding Completed!</marquee></h5>'; 
                        }
                        
                    }
                }
            }
        </script>
    </body>
</html>