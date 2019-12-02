<?php
 include_once("connection.php");
?>
<!DOCTYPE html>
<html class="no-js">
    
    <?php 
        include_once("header.php");
    ?>
    
    <body>

        <!-- navbar started from here -->
         <?php    include_once("nav.php");  ?>
        <!-- navbar ended ended from here-->
       
        <div class="container-fluid">
            <div class="row-fluid">
                

               <!-- left slide bar ended here -->


                <?php 
                  include_once("leftslidebar.php");
                   
                ?>

                
              


                <div class="span9" id="content">
                     <div class="row-fluid">
                            <div class="navbar">
                                <div class="navbar-inner" style="text-align:center">
                                    <h3 style="color:#0088cc">Subscribers</h3>
                                </div>
                            </div>
                            
                            <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                           
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      <fieldset>
                                       
                                        
                                        
                                        <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                            <legend><center>Email Sent</center></legend><br>   
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                        
                                      </div>
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                                                             
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										require_once "connection.php";
			
										use PHPMailer\PHPMailer\PHPMailer;
										use PHPMailer\PHPMailer\Exception;

										require 'vendor/autoload.php';

										$sql = "SELECT email FROM multiple";
										$result = mysqli_query($connection, $sql);
										while ($row = mysqli_fetch_assoc($result)) 
										{

											$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
											try {
												//Server settings
												//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
												$mail->isSMTP();                                      // Set mailer to use SMTP
												
											  // Set parameters for SMTP  
											$mail->SMTPOptions = array(
											'ssl' => array(
											'verify_peer' => false,
											'verify_peer_name' => false,
											'allow_self_signed' => true
											)
											);


											$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
											$mail->SMTPAuth = true;                               // Enable SMTP authentication
											$mail->Username = 'elysianwed@gmail.com';                 // SMTP username
											$mail->Password = 'ElysianWedding';                           // SMTP password
											$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
											
											$mail->Port = 587;                                    // 587 TCP port to conect to

											//Recipients
											$mail->setFrom('elysianwed@gmail.com', 'Wedding Planner');
										   
											$mail->addAddress($row['email']);               // Name is optional
											//$mail->addReplyTo('info@example.com', 'Information');
					
											$mail->isHTML(true);                                  // Set email format to HTML
											$mail->Subject = 'Attention Please';
											$mail->Body    = '<b>We are glad to inform that we have started a new company. Hope you like it. Please do visit our website and check it out.</b>';
											$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

											$mail->send();
											$eml = $row['email'];
											echo 'Message has been sent to - '.$eml.'<br>';
										} 
				
										catch (Exception $e) {
										echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
											}
										}
                                         echo '<tr class="odd gradeX">';
	                                     echo'<td>'.$eml.'</td>';
                                         echo '</tr>';
                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                                         

                                        

                                                
                                             
                                    
                                        </div>
                                        
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                        <!-- /block -->
                    </div>
                   
                </div>

             </div>


            


            <hr>
                        </div>
                        <!-- /block -->
                    </div>


            <?php 
               include_once("footer.php");
            ?>

        </div>

        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
        
       
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>


        
    </body>

</html>