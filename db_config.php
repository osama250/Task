<?php  
  define('Server_Name' , 'localhost');
  define('Server_User' , 'root');
  define('DB_Password' , '');
  define('DB_Name','Books');

   $status_conn =  mysqli_connect( Server_Name , Server_User , DB_Password  , DB_Name ); 
   if ( !$status_conn ) {
       die ('Problem In Conntet With Database');
   } else {
      // echo 'Conntect Suecsseful';
   }