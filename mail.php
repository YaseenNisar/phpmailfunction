<?php
                    $email = "";
                    if(isset($_POST['subscribe'])){
                        //access user entered data
                       $name = $_POST['name'];
                       $email = $_POST['email'];
                       $name = $_POST['name'];
                       $sender = "From: myaseennisar@gmail.com";
                       if(empty($name) || empty($email)){
                           ?>
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
                           <?php
                        }else{
                           if(mail($name, $email,$sender)){
                            ?>
                   <div class="alert alert-success text-center">
                                <?php echo "email successfully sent to $email"?>
                            </div>
                           <?php
                           $email = "";
                           }else{
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed to send mail!" ?>
                            </div>
                           <?php
                           }
                       }
                    }
                ?> 