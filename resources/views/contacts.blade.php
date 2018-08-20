<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Gala Projekts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="kontakti.css" />
    <script src="proj.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Acme|Dancing+Script|Lobster|Limelight|Quicksand:700&amp;subset=latin-ext" rel="stylesheet">
        <!--bootsnip-->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        </style> 
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
</head>


<body>
    <header class="header">
        <nav>
            <div class="nosaukums">
                <a href="index.html">Nosaukums</a>
            </div>

            <ul class="nav_items"> <!-- css float right-->
                <li  class="nav_item">
                    <a href="/">Menu</a>
                </li>
                <li  class="nav_item">
                        <a href="/" id="otr">Menu2</a>
                    </li>
                 <li  class="nav_item">
                        <a href="kontakti.html" id="tre">Kontakti</a>
                     </li>
            </ul>
        </nav>
    </header>
<!--bootsnip-->
<div class="container">
        <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17408.914054473596!2d24.0939328!3d56.9468437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd69b51f399%3A0xa80c38f152dcf7ec!2sGr%C4%93cinieku+iela+1-7%2C+Centra+rajons%2C+R%C4%ABga!5e0!3m2!1sen!2slv!4v1534340767767" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
        <div class="contact-form">
            <h1 class="title">Contact Us</h1>
            <form action="">
                <input type="text" name="name" placeholder="Your Name" />
                <input type="email" name="e-mail" placeholder="Your E-mail Adress" />
                <input type="tel" name="phone" placeholder="Your Phone Number"/>
                <textarea name="text" id="" rows="8" placeholder="Your Message"></textarea>
                <button class="btn-send">Submit</button>
            </form>
        </div>
    </div>

<!--     -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#8679</button>
    <footer>
            <p class="copyright">Copyright &copy; <?php echo date("Y");?> </p>
            <p class="developed">Developed by Anna</p>
         </footer>   
</body>
</html>