<?php  
   require 'db_config.php';
   require  'func.php';
   $pagetitle = 'Insert Books';

   if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

        $name  = $_POST['name']; 
        $date  = $_POST['date'];
        $errors = [];

        if ( empty($name) )   {  $errors[] = 'Must Write Name';           }
        if ( empty($date) )   {  $errors[] = 'Must Choose Date';          }

        $query  =  "INSERT INTO appointment_booking VALUES(null , '$name' , '$date' )";
        $res    = mysqli_query( $status_conn , $query );   
        showMessage( 'تم تسجيل البيانات بنجاح' );
   
 }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $pagetitle ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
        crossorigin="anonymous">
  </head>
  <body>

        <div class="container" style="margin-top:50px">
        <div class="row">
            <h4 class="text-center">  appointment booking </h4>
       <form action=""  method="post">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">  Name Of Book </label>
                    <input type="text" class="form-control" 
                            id="exampleFormControlInput1" 
                            placeholder="Write Name of Book Here..." 
                            name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Date Of Book </label>
                    <input type="date" class="form-control" 
                            id="exampleFormControlInput1" 
                            placeholder="Choose Your Date.."
                            name="date">
                </div>
                <button type="submit" class="btn btn-primary"> Save </button>

                <div class="col-md-6">
                          <?php   
                              if (  isset( $errors) ) {
                                foreach ($errors as $erorr ) {  
                                  showMessage( $erorr ); 
                                }
                              } 
                          ?>
                </div>
       </form>


        </div>
        </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
         crossorigin="anonymous"></script>
  </body>
</html>
