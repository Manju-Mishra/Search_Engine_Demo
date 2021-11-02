<?php
include("Ajax_Code.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <style>
        body {
            background-image: url("https://cdn.dribbble.com/users/34759/screenshots/13971601/media/30298693302288b91b5d3dc292a8cadb.png?compress=1&resize=400x300");
            background-size: cover;
            background-attachment: fixed;

        }
    </style> -->
</head>
<body>
    <br><br>
    <div class="col-5 text-warning mt-4 border border-primary container" align="center">
    <h1><i>SEARCH HERE</i></h1>
    </div><br>
    <form method="post">
    <div class="container">
        <input type="text" name="search" id="name" placeholder="search here" class="form-control container col-5 mt-4"> <br>
        <div id="data" class="container col-5">

        </div>
       
    </div>
    </form>

    <script src="jquery-3.6.0.min.js"></script>
     <script>
           $(document).ready(function()
           {
               $(document).on('keyup','#name',function()
               {
                   var d=$(this).val();
                   if(d)
                   {
                       $.ajax({
                           type:"post",
                           url:"Ajax_Code.php",
                           data:{'data':d},
                           success:function(res)
                           {
                               $("#data").html(res);
                           }
                       })
                   }
               })
           });
     </script>
</body>
</html>