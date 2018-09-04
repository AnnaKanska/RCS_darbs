@extends ('layout')



<!--bootsnip-->

@section('css')
    <link rel="stylesheet" type="text/css" media="screen" href="css/kontakti.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="js/showmsg.js"></script>
@endsection

@section('content')

    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17408.914054473596!2d24.0939328!3d56.9468437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfd69b51f399%3A0xa80c38f152dcf7ec!2sGr%C4%93cinieku+iela+1-7%2C+Centra+rajons%2C+R%C4%ABga!5e0!3m2!1sen!2slv!4v1534340767767" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact-form">
            <h1 class="title">Contact Us</h1>
            <div id="successMsg" class="alert alert-success" style="display:none">
                This is a success alert—check it out!
            </div>
            <form method="post" action="contacts.php">
                <input type="text" name="name" placeholder="Your Name" />
                <input type="email" name="e-mail" placeholder="Your E-mail Adress" />
                <input type="tel" name="phone" placeholder="Your Phone Number"/>
                <textarea name="text" id="" rows="8" placeholder="Your Message"></textarea>
                <input type="submit" class="btn-send" value="submit"></button>
            </form>
        </div>
    </div>
    <script>
        let showmsg=false;

        if (localStorage.getItem("msg")){
            let showmsg=true;
            let msg=localStorage.getItem("msg");
            document.getElementById("successMsg").innerHTML = localStorage.getItem("msg");
            document.getElementById("successMsg").style.display='block';
            localStorage.removeItem("msg");
        }

    </script>

@endsection
