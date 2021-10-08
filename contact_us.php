<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
<script src="https://smtpjs.com/v3/smtp.js"></script>
    <script type="text/javascript"> 
    function sendEmail() { 
      var name = document.getElementById('name');
      var email = document.getElementById('mail');
      var m_no = document.getElementById('m_no');
      var msg = document.getElementById('msg');
      Email.send({ 
        Host: "smtp.gmail.com", 
        Username: "191203116009@asoit.edu.in", 
        Password: "Jaimin@490", 
        To: 'japrajapati491@gmail.com', 
        From: "191203116009@asoit.edu.in", 
        Subject: "Query for Jp creation", 
        Body: (name.value + " contacts you his/her mail id is " + email.value + " mobile number is "
        + m_no.value +" they want to say that " + msg.value) 
        }) 
        .then(function (message) { 
          alert("WE WILL BACK TO YOU !!") 
        }); 
    } 
    document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}   
function newFunction() {
            document.getElementById("newForm").reset();
         }
  </script> 
</head>
<body style="background-image: url(assets/images/b1.JPG);background-size: cover;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php require_once 'header.html'; ?>

    <section id="about" class="about sections">
        <div class="container">
            <div  style="width: 100%;">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="wrapper">
                         <div style="text-align:center;margin-top:10%"> 
                            <form method="post" id="newForm">
                            <div class="form-group mb-2">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" id="mail" class="form-control" placeholder="Enter Your Email" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="mobile_no" id="m_no" class="form-control" placeholder="Enter Your Contact Number" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" id="msg" class="form-control" placeholder="Write Your Message here ..." required=""></textarea>
                            </div>
                            <div class="button">
                                <button type="button" class="btn btn-big btn-primary" onclick="sendEmail(),newFunction()">Send It</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="Reset" class="btn btn-big btn-primary">Reset</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </section>




    <?php require_once 'footer.html'; ?>


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>


    <script src="assets/js/main.js"></script>
</body>

</html>



