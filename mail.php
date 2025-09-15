<?php

if (isset($_POST['submit'])){
if (!empty($_POST['email']) && $_POST['email'] !='')
    {  
     
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

         $to = "rkpolymers.in@gmail.com";
        $bcc = "enquiry.onlinepromotionhouse@gmail.com,sbagga.oph@gmail.com ";
        $sub = "Inquiry from website (Online Promotion House)";
        $msg = "<html>
                  <body>
                      <h1 style=' text-align: center; color: #e5e5e5;background-color: #3f51b5; padding: 1rem; margin: 0;'>Inquirer Details</h1>
                      <div style='border: 5px solid #039be5; background:#151515'>
                      <table style=' display: block; margin: 1rem; padding: 0; border-radius: 3px; border-collapse: collapse;'>
                         <tbody style='color: white; width: 100%;'>
                         
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Name: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $name . "</td>
                            </tr>
                             <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Phone: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $phone . "</td>
                            </tr>
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>Email: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $email . "</td>
                            </tr>
                            <tr>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>message: </td>
                               <td style=' padding: 0.5rem 1rem; font-size: 1.5rem; border: 1px solid #d4d4d4;'>" . $message . "</td>
                            </tr>
                           
                         </tbody>
                      </table>
                      <p style='text-align:center; color:white;'><b>Thank you !</b></p>
                      <p style='text-align:center; color:white;'><b>Team Online Promotion House.</b></p>
                      </div>
                   </body>
                </html>";

        // echo $msg ; die;
       $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= "From: noreply@rkpolymersandsons.com" . "\r\n";
        $headers .= "Bcc: $bcc" . "\r\n";
        
        mail($to, $sub, $msg, $headers);
        $send = true;
         ?>
        <script>alert("Your mail has been sent");</script>
        <?php
      echo "<script type='text/javascript'>window.top.location='https://rkpolymersandsons.com/contact-us'</script>";

       
    }
    else{
         $send = false; 
          header('Location: index.html');
    }
}



?>
