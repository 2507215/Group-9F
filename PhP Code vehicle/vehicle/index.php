<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Vehicle Insurance</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>
   <body class="mainPage">
      <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-2"></div>
         <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-title">
               Vehicle Insurance
            </div>
            <div class="col-lg-12 login_text">
               Login
            </div>
            <div class="col-lg-12 login-form">
               <div class="col-lg-12 login-form">
               <form method="POST" action="#" id="loginForm">
                     <div class="form-group">
                        <label class="form-control-label">USERNAME</label>
                        <input type="text" class="form-control login_field" name="username" required>
                     </div>
                     <div class="form-group">
                        <label class="form-control-label">PASSWORD</label>
                        <input type="password" class="form-control login_field" name="password" required>
                     </div>
                     <div class="col-lg-12 loginbttm">
                        <div class="col-lg-6 login-btm login-text">
                        </div>
                        <div class="col-lg-6 login-btm login-button">
                           <button type="submit" name="submit" class="btn btn-outline-primary">LOGIN</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
         </div>
      </div>
   </body>
   <script type="text/javascript">				
		$('#lognForm').on('keyup keypress', function(e){
			var keyCode = e.keyCode || e.which;
			if(keyCode === 13){
				e.preventDefault();
				return false;
			}
		});
    
		$('form').submit(function(e){
			e.preventDefault();
			$.ajax({
				url: 'dataLogin.php',
				type:'post',
				data: $(this).serialize(),
				success:function(data){    
               if(data=="success"){
                  window.location = 'customer.php';
               }else{
                  alert(data);
               }
				//	window.location = 'customer.php';
				}
			});
		});

	</script>
</html>