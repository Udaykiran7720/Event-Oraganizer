<?php   
 include 'connection.php';  
 $query = "select * from booking";  
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
             
           
            <th>name</th>
            <th>phoneno</th>
            <th>address</th>
            <th>event name</th>
            <th>event location</th>
            <th>email</th>
            <th>event date</th>
            <th>guests</th>
            <th>event description</th> 
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                                
                               <td>".$result['booker_name']."</td>  
                               <td>".$result['phone_no']."</td>  
                               <td>".$result['booker_address']."</td>  
                               <td>".$result['event_name']."</td>  
                               <td>".$result['event_location']."</td>
                               <td>".$result['email_id']."</td>
                               <td>".$result['event_date']."</td>
                               <td>".$result['no_of_guest']."</td>
                               <td>".$result['event_description']."</td>
                              </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  
