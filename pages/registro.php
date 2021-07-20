<!DOCTYPE html>
<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>TezoroAntiguo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body id="top">

    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/image.jpg');">
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_left">
                    <ul class="nospace">
                        <li><i class="fas fa-phone"></i> +52 771281913</li>
                        <li><i class="far fa-envelope"></i> etas04@gmail.com</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <!-- ################################################################################################ -->
                <div id="logo" class="fl_left">
                    <h1><a href="">Tezoro-Antiguo</a></h1>
                </div>
                <!-- ################################################################################################ -->
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li><a class="" href="pages/full-width.html">Nosotros</a>
                        <li><a href="pages/gallery.html">Galeria</a></li>
                        <li><a href="pages/sidebar-left.html">App Movil</a></li>
                        <li><a href="pages/sidebar-right.html">Rutas</a></li>
                        <li><a href="pages/basic-grid.html">Contacto</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article class="center">
                <h3 class="heading underline">Un Viaje al centro de Tizantloca (Tezontepec)</h3>
                <br>
                <!--<footer><a class="btn" href="#">Morbi accumsan ligula</a></footer>-->
            </article>
        </div>
        <!-- ################################################################################################ -->
    </div>
    <br>

    <div class="wrapper row3">
        <main class="hoc container clear">

            <form method="post" action="" name="signup-form">
                <div class="form-element">
                    <label>Nombre</label>
                    <input type="text" name="username"  required />
                </div>
                <div class="form-element">
                    <label>Email</label>
                    <input type="email" name="email" required />
                </div>
                <button type="submit" name="register" value="register">Registrar</button>
            </form>
        </main>
    </div>


    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2021 - Reservados todos los derechos<a href="#"></a></p>
            <p class="fl_right">ETAS </p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>


<style>
    	

 

 
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
 
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
 
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
 
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
 
div.form-element {
    margin: 20px 0;
}
 
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: none;
}
 
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
 
p.error {
    background: orangered;
}
</style>