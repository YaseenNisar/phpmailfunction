 <?php
                    $email = "";
                    if(isset($_POST['send'])){
                        
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="sec-6 .container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <p class="text-center">Recieve the latest Updates on Jobs about Projects. Subscribe to the monthly eidtion of Software Solutions</p>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="name">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>