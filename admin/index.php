<?php
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <title>Repcel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- 5-=DXbZ]Ggah -->
    <link href="assets/logo.png" rel="icon">
    <link href="assets/logo.png" rel="apple-touch-icon">
    <script>
        function Send_emails()
		{
			$.ajax({
                type: 'POST',
                url: 'priv/send_emails.php',
                contentType: false,
                processData: false,
                success:function(response) {
                       //alert("success");
                },
                onFailure: function(response){
                    //alert("fail");
                }
            });
		}
    </script>
</head>
<body>
    <div class="main">
        <div class="login-form">
        <script>
					document.addEventListener("DOMContentLoaded", function(event) { 
						Send_emails();
						});
				</script>
            <form action="priv/login.php" method="post">	
                <?php

                if(isset($_SESSION['error_admi'])==1)
                {
                    echo "<div class='error_account'>
                        El correo o la contraseña es incorrecto <a href='recover'>Cambia tu contraseña</a>.
                    </div>";
                    unset($_SESSION['error_admi']);
                }
                if(isset($_GET['error'])==1)
                {
                    echo "<div class='error_account'>
                        Tu cuenta esta suspendida.
                    </div>";
                    unset($_SESSION['error']);
                }
                ?>
                <div class="text-center social-btn">
                    <img src="assets/logo.png" style="max-width: -moz-available;max-width: -webkit-fill-available;" alt="">
                </div>
                <div class="form-group">
                    <label class="float-left form-check-label" style="width: 100%;">Correo</label>
                    <div class="input-group" style="padding: 10px 0 10px 0;">
                        <?php
                            if(isset($_SESSION['email_admi']))
                            {
                                echo "<input  class='form-control' name='email' placeholder='Correo' required='required' autofocus tabindex='1' value='".$_SESSION['email_admi']."'>";
                            }else
                            {
                        ?>
                            <input  class="form-control" name="email" placeholder="Correo" required="required" autofocus tabindex="1">
                        <?php
                            }
                            ?>
                    </div>
                </div>    
                <div class="form-group">
                <label class="float-left form-check-label">Contraseña </label>
                    <div class="input-group" style="padding: 10px 0 10px 0;">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required" tabindex="2">
                    </div>
                </div>        
                <div class="form-group">
                    <button style="width: 100%;" type="submit" class="button secondary large pr-4" tabindex="3">Entrar</button>
                </div> 
            </form>
        </div>
    </div>
   
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

