<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<script>
        $(document).ready(function(){
            $("#correo").focusin(function(){
                $("#input-content-id").css({
                    border:'1px solid #2b58cf'
                }).animate({
                    borderWidth:1.3
                },400);
            }).focusout(function(){
            $("#input-content-id").css({
                    border:'1px solid rgba(153, 153, 153, 0.54)'
                }).animate({
                    borderWidth:1
                },500);
        });
            
            $("#password").focusin(function(){
                $("#input-content-2-id").css({
                    border:'1px solid #2b58cf'
                }).animate({
                    borderWidth:1.3
                },400);
            }).focusout(function(){
            $("#input-content-2-id").css({
                    border:'1px solid rgba(153, 153, 153, 0.54)'
                }).animate({
                    borderWidth:1
                },500);
        });
        });
        
    </script>
</head>
<body>
   <div class="bg-blue remove_float">
   </div>
    <div class="content-mother">
        <div class="content_width col-xs-11 remove-float center-block white border-radius-8">
        <h2 class="text-center">Inicia sesión con tu cuenta</h2>
	        <form action="">
            <div class="input-content" id="input-content-id">
               <label for="correo">
                   <img src="assets/img/user.png" alt="">
                   </label>
                <input type="email" placeholder="Correo Electronico" class="input-content-input" id="correo">
            </div>
            <div class="input-content small-top-space" id="input-content-2-id">
               <label for="password">
                   <img src="assets/img/pass.png" alt="">
               </label>
                <input type="password" placeholder="Contraseña" class="input-content-input" id="password">
            </div>
            <input type="submit" class="input-content-submit small-top-space" value="Iniciar Sesión">
            <div class="forgot-pass text-right">¿Olvidaste tu contraseña?<a href="">Sí, lo olvide</a></div>    
	        </form>
   </div>
    </div>    
</body>
</html>