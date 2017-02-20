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



        <br>
        <form action="<?php echo base_url() ?>home/reg_data" method="post">
            <table align="center" border="1px" cellpadding="0" cellspacing="0" class="table">


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

                <div id="myProgress">
                    <div id="myBar">
                        <div id="label">10%</div>
                    </div>
                </div>

                {reza}
                <tr>
                    <td>{u_name}</td>
                    <td>{passwd}</td>
                    <td>{mobile}</td>
                    <td>{address}</td>
                    <td>{email}</td>
                    <td><a href="<?php echo base_url() ?>home/show/{id}" class="btn btn-primary"> Show</a></td>
                    <td><a href="<?php echo base_url() ?>home/edit/{id}" class="btn btn-warning"> Edit</a></td>
                    <td><a href="<?php echo base_url() ?>home/delete/{id}" class="btn btn-danger">delete</a></td>

                </tr>
                {/reza}


            </table>
        </form>
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
                        document.getElementById("label").innerHTML = width * 1 + '%';
                    }
                }
            }
        </script>
    </body>
</html>