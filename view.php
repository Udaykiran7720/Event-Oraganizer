<?php   
 include 'connection.php';  
 $query = "select * from contact_us";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="view.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
             
           <th>ID</th>  
            <th>name</th>
            <th>phoneno</th>
            <th>email</th>
            <th>message</th> 
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['ID']."</td>  
                               <td>".$result['fullname']."</td>  
                               <td>".$result['phoneno']."</td>  
                               <td>".$result['emailid']."</td>  
                               <td>".$result['message']."</td>  
                              </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  
