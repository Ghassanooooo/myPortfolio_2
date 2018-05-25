<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';




 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING) ;
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
   $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
   $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
  //set the var :
$mail = new PHPMailer(true);
try {
    //Server settings
    // $mail->isSMTP();
    $mail->Host = 'mail.ghassanaldarwih.online';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@ghassanaldarwih.online';
    $mail->Password = '';
    // $mail->SMTPSecure = 'ssl';
    $mail->Port = 25;
    //Recipients
    // $mail->setFrom('ghassanaldarwish@yahoo.com',"from : " . $username . "<br>". "Email address : " .$email);
     $mail->setFrom($email,$username);
    $mail->addAddress('abeeralsaeed9090gh@gmail.com', 'me');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    =  $message;

    $mail->send();
  // echo 'Message has been sent';
  $username = '';
  $email = '';
  $subject = '';
  $message = '';
} catch (Exception $e) {
  // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

    // $formError = array();
    // if (strlen($username) == "" || strlen($username) > 30 || strlen($username) < 3 ) {
    //     $formError[] = 'please keep the user name btween <strong>3 - 30 characters </strong>';
    //   }
    //
    // if (strlen($message) == "" || strlen($message) > 300 || strlen($message) < 3 ) {
    //     $formError[] = 'please keep the message under <strong> 300 characters </strong>';
    //   }



       // $mail = new PHPmailer();
       //
       //
       //  $mail->isSMTP();
       //  $mail->Host = 'smtp.gmail.com';
       //
       //  $mail->SMTPAuth = true;
       //  $mail->Username = 'abeeralsaeed9090gh@gmail.com';
       //  $mail->Password = 'Tntghatnt90';
       //  $mail->SMTPSecure = 'tls';
       //  $mail->Port = 587;
       //  $mail->setFrom($email,$username);
       //  $mail->addAddress('abeeralsaeed9090gh@gmail.com');
       //  $mail->isHTML(true);
       //  $mail->Subject = $subject ;
       //  $mail->Body = $message ;
       //
       //
       //
       //  if ($mail->send()) {
       //      echo 'Message has been sent';
       //  }else {
       //    echo 'Message could not be sent. Mailer Error: ';
       //  }


            // $header = 'from : ' . $email . "\r\n";
            // $sub = 'contact form';
            // $myEmail = 'abeeralsaeed9090gh@gmail.com';
            //
            //
            // if (empty($formError)) {
            //
            //   mail($myEmail, $sub, $message , $header);
            //
              // $username = '';
              // $email = '';
              // $subject = '';
              // $message = '';
            //
            //  }


    }
     ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <!-- Compatible for IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ghassanoooo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">




    <!-- font awesome -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- main css -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- start header -->
    <header id="home">
      <!-- start navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">



        <!-- <span class="sr-only">Toggle navigation</span> -->
        <i class="fas fa-bars fa-lg"></i>

      </button>
            <h1 class="navbar-brand wow flip" data-wow-delay="7s" data-wow-duration="2s"><a href="#ourTeam" data-scroll="#ourTeam">Ghassanoooo</a></h1>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li data-wow-duration="3s"><a href="#home" data-scroll="#home">Home</a></li>
              <li data-wow-duration="3s"><a href="#Services" data-scroll="#Services">Services</a></li>
              <li data-wow-duration="3s"><a href="#Portfolio" data-scroll="#Portfolio">Portfolio</a></li>
              <li data-wow-duration="3s"><a href="#about" data-scroll="#about">About</a></li>
              <li data-wow-duration="3s"><a href="#contact" data-scroll="#contact">contact</a></li>

            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
      <!-- end navbar -->


      <!-- start the slider -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">


          <div class="item active ">
            <img src="img/1.jpg" alt="...">

            <div class="carousel-caption">

              <h2 class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay="1s">Welcome To Our website!</h2>
              <h3 class="wow bounceIn" data-wow-duration="2s" data-wow-delay="4.5s">It’s nice to Meet you</h3>
              <div class="buttonHeder wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="2.5s" data-wow-offset="0"><a href="#ourTeam" data-scroll="#ourTeam">  tell me more</a></div>

            </div>
          </div>

          <div class="item ">
            <img src="img/2.jpeg " alt="... ">

            <div class="carousel-caption">

              <h2>Welcome To Our website!</h2>
              <h3>It’s nice to Meet you</h3>
              <div class="buttonHeder"><a href="#ourTeam" data-scroll="#ourTeam">  tell me more</a></div>

            </div>
          </div>

          <div class="item ">
            <img src="img/4.jpg " alt="... ">

            <div class="carousel-caption">

              <h2>Welcome To Our website!</h2>
              <h3>It’s nice to Meet you</h3>
              <div class="buttonHeder"><a href="#ourTeam" data-scroll="#ourTeam">  tell me more</a></div>

            </div>
          </div>


          <div class="item ">
            <img src="img/3.jpeg " alt="... ">
            <div class="carousel-caption ">
              <h2>اهلا و سهلا  بكم في موقعنا</h2>
              <h3>يسرنا ان نلتقي بكم</h3>

              <div class="buttonHeder"><a href="#ourTeam" data-scroll="#ourTeam">  اخبرني المزيد</a></div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <!-- <a class="left carousel-control " href="#carousel-example-generic " role="button " data-slide="prev ">
    <span class="glyphicon glyphicon-chevron-left " aria-hidden="true "></span>
    <span class="sr-only ">Previous</span>
  </a>
      <a class="right carousel-control " href="#carousel-example-generic " role="button " data-slide="next ">
    <span class="glyphicon glyphicon-chevron-right " aria-hidden="true "></span>
    <span class="sr-only ">Next</span>
  </a>
    </div> -->

        <!-- end the slider -->


      </div>
    </header>
    <!-- end header -->

    <!--start main body -->
    <main class="main ">
      <section id="Services">
        <div class="container">
          <h2 class="wow swing" data-wow-offset="300" data-wow-duration="1.5s" data-wow-delay="2.5s">services</h2>
          <p class="subTitle wow jello" data-wow-delay="3s" data-wow-offset="300" data-wow-duration="2s">Dedicated web programming services to suit your needs. Contact us!</p>
          <div class="row ">

            <div class="col-xl-4 col-lg-4 col-md-6 paddingBottom wow fadeInLeft " data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="250">

              <span class=" icon ">



                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39" width="40" height="39">
  	<style>
  		tspan { white-space:pre }

  	</style>
  	<path id="Icon-Basket" class="shp0" d="M0.75,12.89c0,-1.9 1.54,-3.44 3.44,-3.44h3.88c0.06,-0.22 0.15,-0.44 0.27,-0.65l4.13,-7.15c0.76,-1.32 2.44,-1.77 3.76,-1.01c1.32,0.76 1.77,2.44 1.01,3.76l-2.91,5.05h11.38l-2.91,-5.05c-0.76,-1.32 -0.31,-3 1.01,-3.76c1.32,-0.76
            3,-0.31 3.76,1.01l4.13,7.15c0.12,0.21 0.21,0.42 0.27,0.65h3.88c1.9,0 3.44,1.54 3.44,3.44c0,1.9 -1.54,3.44 -3.44,3.44h-31.66c-1.9,0 -3.44,-1.54 -3.44,-3.44zM35.28,38.36h-30.5l-1.19,-20.65l32.88,0zM18.65,24.59v8.26c0,0.76 0.62,1.38 1.38,1.38c0.76,0
            1.38,-0.62 1.38,-1.38v-8.26c0,-0.76 -0.62,-1.38 -1.38,-1.38c-0.76,0 -1.38,0.62 -1.38,1.38zM26.91,24.59v8.26c0,0.76 0.62,1.38 1.38,1.38c0.76,0 1.38,-0.62 1.38,-1.38v-8.26c0,-0.76 -0.62,-1.38 -1.38,-1.38c-0.76,0 -1.38,0.62 -1.38,1.38zM10.39,24.59v8.26c0,0.76
            0.62,1.38 1.38,1.38c0.76,0 1.38,-0.62 1.38,-1.38v-8.26c0,-0.76 -0.62,-1.38 -1.38,-1.38c-0.76,0 -1.38,0.62 -1.38,1.38z" />
  </svg>
                </span>
              <h4>e-commerce</h4>
              <p>Financial services including risk and fraud management - Customer service and loyalty programs. Our objective is to provide a consistent brand experience throughout all channels. That is why we have our own in-house e-commerce consulting
                team, who helps you analyse your current online business and provides</p>
            </div>



            <div class="col-xl-4 col-lg-4 col-md-6 paddingBottom wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="250">
              <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 35" width="41" height="35">
                <style>
                tspan { white-space:pre }

                </style>
                <path id="Icon-Laptop" class="shp0" d="M7.36,0.9h26.91c2.23,0 4.04,1.81 4.04,4.04v17.49c0,0.47 -0.08,0.92 -0.23,1.35h0.23v2.69h-4.04v-21.53h-26.91l0,21.53h-4.04v-2.69h0.23c-0.15,-0.42 -0.23,-0.87 -0.23,-1.35v-17.49c0,-2.23 1.81,-4.04
            4.04,-4.04zM3.32,29.15h34.98c1.49,0 2.69,1.21 2.69,2.69c0,1.49 -2.55,2.69 -4.04,2.69h-32.29c-1.49,0 -4.04,-1.2 -4.04,-2.69c0,-1.49 1.2,-2.69 2.69,-2.69zM15.43,32.52c0,0.37 0.6,0.67 1.35,0.67h8.07c0.74,0 1.35,-0.3 1.35,-0.67c0,-0.37 -0.6,-0.67
            -1.35,-0.67h-8.07c-0.74,0 -1.35,0.3 -1.35,0.67zM11.78,16.68l1.89,-1.9c0.52,-0.53 1.37,-0.53 1.89,0l2.48,2.49l8,-8.04c0.52,-0.53 1.37,-0.53 1.89,0l1.89,1.9c0.52,0.53 0.52,1.38 0,1.9l-10.42,10.46c-0.45,0.45 -1.13,0.51 -1.65,0.19c-0.44,0.1 -0.92,-0.01
            -1.26,-0.36l-4.74,-4.76c-0.52,-0.53 -0.52,-1.38 0,-1.9z" />
                </svg></span>


              <h4>responsive design</h4>
              <p>With over 50% of all web traffic coming from a mobile device, creating a mobile-friendly website is no longer optional: it's a necessity. It all starts with responsive web design. Responsive web design allows your website to adapt to and
                provide an optimal experience on any device it's being viewed from</p>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-6 col-md-offset-3 col-lg-offset-0 wow fadeInRight  " data-wow-duration="1.5s" data-wow-offset="250">

              <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 38" width="29" height="38">
  <style>
    tspan { white-space:pre }

  </style>
  <path id="Icon-Locked" class="shp0" d="M14.68,0.63c5.15,0 9.33,3.66 9.33,8.17l0,9.33h1.17c1.93,0 3.5,1.57 3.5,3.5v12.83c0,1.93 -1.57,3.5 -3.5,3.5h-21c-1.93,0 -3.5,-1.57 -3.5,-3.5v-12.83c0,-1.93 1.57,-3.5 3.5,-3.5l1.17,0v-9.33c0,-4.51 4.18,-8.17
            9.33,-8.17zM10.02,8.8v8.17c0,0.41 0.09,0.8 0.27,1.17h8.8c0.17,-0.37 0.27,-0.76 0.27,-1.17v-8.17c0,-1.93 -2.09,-3.5 -4.67,-3.5c-2.58,0 -4.67,1.57 -4.67,3.5zM12.35,32.13c0,1.29 1.04,2.33 2.33,2.33c1.29,0 2.33,-1.04 2.33,-2.33v-1.79c1.39,-0.81
            2.33,-2.32 2.33,-4.04c0,-2.58 -2.09,-4.67 -4.67,-4.67c-2.58,0 -4.67,2.09 -4.67,4.67c0,1.73 0.94,3.24 2.33,4.04z" />
</svg></span>
              <h4>internet security</h4>
              <p>
                Included in your Security services. Remote management of your Internet Security Services: Configure parental-control settings; Monitor activity; Perform a complete scan of the computer; Scan specific areas to detect malware; Fix critical issues; Initiate
                the update-process for the service. A weekly security report: Protection</p>
            </div>



          </div>
        </div>

      </section>
      <section id="Portfolio">
        <div class="container ">
          <h2>our protfolio</h2>
          <p class="subTitle ">the following is part of our project</p>
          <div class="row protfolio ">
            <div class=" col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInRightBig drop-shadow" data-wow-duration="1.3s">
              <a href="https://codepen.io/Ghassanooooo/pen/aqyzbo" class="thumbnail " target="_blank"><img src="img/p1.jpeg" alt="p0"></a>
              <div class="descript-pro ">
                <h4>codepen</h4>
                <p>animation</p>

              </div>

            </div>
            <div class="  col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInLeftBig drop-shadow" data-wow-delay="1" data-wow-duration="1.3s">
              <a href="https://codepen.io/Ghassanooooo/pen/mxqaZG" class="thumbnail " target="_blank"><img src="img/p2.jpeg" alt="p1 "></a>
              <div class="descript-pro ">
                <h4>codepen</h4>
                <p>animation</p>

              </div>
            </div>
            <div class="  col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInRightBig drop-shadow" data-wow-duration="2s" data-wow-delay="1.3">
              <a href="https://codepen.io/Ghassanooooo/pen/YeVmNr" class="thumbnail " target="_blank">  <img src="img/p3.jpeg" alt="p2 "></a>
              <div class="descript-pro ">
                <h4>codepen</h4>
                <p>animation</p>

              </div>
            </div>

            <div class=" col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInDownBig drop-shadow" data-wow-duration="1.3s">
              <a href="https://codepen.io/Ghassanooooo/pen/eVzZjJ" class="thumbnail" target="_blank">  <img src="img/p4.jpeg" alt="p3 "></a>
              <div class="descript-pro ">
                <h4>codepen</h4>
                <p>table</p>

              </div>
            </div>
            <div class=" col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInRightBig drop-shadow " data-wow-delay=".6" data-wow-duration="1.3s">
              <a href="http://www.ghassanaldarwish.online/prj/" class="thumbnail " target="_blank">  <img src="img/p5.png " alt="p4 "></a>
              <div class="descript-pro ">
                <h4>localhost</h4>
                <p>website design</p>

              </div>
            </div>
            <div class=" col-lg-4 col-sm-6 col-md-4 paddingTop wow fadeInDownBig drop-shadow" data-wow-delay="0.3" data-wow-duration="1.3s">
              <a href="https://codepen.io/Ghassanooooo/pen/LQLYXp" class="thumbnail " target="_blank">  <img src="img/p6.jpeg" alt="p5 "></a>
              <div class="descript-pro ">
                <h4>codepen</h4>
                <p>table</p>

              </div>
            </div>
          </div>

        </div>

      </section>
      <!--start about+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
      <section id="about">
        <div class="container ">
          <h2 class="wow fadeInUp" data-wow-duration="1.3s">about us</h2>
          <p class="subTitle wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1.5s">the following is a simple story about us..</p>
          <div class="row about ">



            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 ">
              <div class="row ">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="1.2s">
                  <h4>babylon university</h4>
                  <h4>2007-2012</h4>
                  <p>between ghassan studied since of physics in The University of Babylon, The University of Babylon is a university located in Babylon, Iraq. It consists of 20 colleges within three compounds, located seven kilometers south of the city
                    of Hillah, in Babylon Province</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp drop-shadow" data-wow-delay="1.8s" data-wow-duration="1.3s">
                  <a href="https://en.wikipedia.org/wiki/University_of_Babylon" class="thumbnail " target="_blank">  <img src="img/s1.png " alt="p5 "></a>
                </div>

              </div>




              <div class="row ">

                <div class="col-lg-4 col-lg-push-8 col-md-4 col-md-push-8 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.3s">
                  <h4>germany , berlin</h4>
                  <h4>2015</h4>
                  <p> It seems that when a man is tired of life, he should go to Berlin. 25 years after the fall of the wall, the German capital has been crowned the ultimate fun city, according to a new survey. ... Eleven different factors were compared
                    to create 'The Ultimate Fun City Ranking'.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp drop-shadow" data-wow-duration="1.3s" data-wow-delay="1s">
                  <a href="https://en.wikipedia.org/wiki/Berlin" class="thumbnail " target="_blank">  <img src="img/s2.jpeg " alt="p5 "></a>
                </div>

              </div>




              <div class="row ">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1.3s">
                  <h4>berlin , Devugees</h4>
                  <h4>2017</h4>
                  <p>started 2017 Web developer by developer Digital Career Institute with cool classmates and keep learning </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp drop-shadow" data-wow-duration="1.3s" data-wow-delay="1s">
                  <a href="# " class="thumbnail ">  <img src="img/s4.png " alt="p5 "></a>
                </div>

              </div>





              <div class="row ">

                <div class="col-lg-4 col-lg-push-8 col-md-4 col-md-push-8 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.3s">
                  <h4>if u interesting</h4>
                  <h4>about our story</h4>
                  <p>waiting the rest is coming soon :) ......</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp drop-shadow" data-wow-duration="1.3s" data-wow-delay="1s">
                  <div class="imgStory ">
                    <span>comming soon....</span>
                  </div>
                </div>

              </div>







              <div class="row ">
                <div class="col-lg-4 col-lg-offset-4 hidden-xs hidden-sm hidden-md wow fadeInUp drop-shadow" data-wow-duration="1.3s" data-wow-delay="1s">
                  <div class="imgStory ">
                    <span>comming soon....</span>
                  </div>
                </div>

              </div>




            </div>


          </div>

        </div>

      </section>
      <!--end about-->


      <!--start our team -->
      <section id="ourTeam">
        <div class="container ">
          <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="7s">our amazing team</h2>
          <p class="subTitle wow flipInY" data-wow-duration="3s" data-wow-delay="8s">always we are happy to help you</p>
          <div class="row ">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 ">
              <div class="row ourTeam ">



                <div class="col-lg-4 col-md-4 paddingBottom ">
                  <a href="# " class="thumbnail wow fadeInUpBig drop-shadow" data-wow-duration="2s"><img src="img/t1.jpeg " alt="p8 "></a>
                  <h4 class="wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">internet securty</h4>
                  <p class="wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">comming soon</p>
                  <div class="row wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="3.1s" data-wow-offset="50">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                      <div class="row ">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact facebook "><i class="fab fa-facebook-f wow bounceIn" data-wow-duration="1s" data-wow-delay="4.6s" data-wow-offset="50" ></i></span></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact twitter "><i class="fab fa-twitter wow bounceIn" data-wow-duration="1s" data-wow-delay="5s" data-wow-offset="50" ></i></span></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact codepen "><i class="fab fa-codepen wow bounceIn" data-wow-duration="1s" data-wow-delay="5.4s" data-wow-offset="50" ></i></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 paddingBottom ">
                  <a href="# " class="thumbnail wow fadeInDownBig drop-shadow" data-wow-duration="2s"><img src="img/t2.png " alt="p8 "></a>
                  <h4 class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">web devloper</h4>
                  <p class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">ghassan aldarwish</p>
                  <div class="row wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="4.1s" data-wow-offset="50">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                      <div class="row ">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="https://www.facebook.com/profile.php?id=100010789830008 " target="_blank"><span class="teamContact facebook "><i class="fab fa-facebook-f wow bounceIn" data-wow-duration="1s" data-wow-delay="5.6s" data-wow-offset="50" ></i></span></a></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="https://twitter.com/ghassanaldarwih " target="_blank"><span class="teamContact twitter "><i class="fab fa-twitter wow bounceIn" data-wow-duration="1s" data-wow-delay="6s" data-wow-offset="50" ></i></span></a></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><a href="https://codepen.io/Ghassanooooo/ " target="_blank"><span class="teamContact codepen "><i class="fab fa-codepen wow bounceIn"  data-wow-duration="1s" data-wow-delay="6.4s" data-wow-offset="50" ></i></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 ">
                  <a href="# " class="thumbnail wow fadeInUpBig drop-shadow" data-wow-duration="2s"><img src="img/t3.jpeg " alt="p8 "></a>
                  <h4 class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">web designer</h4>
                  <p class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="1.3s" data-wow-offset="100">comming soon</p>
                  <div class="row wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="5.1s" data-wow-offset="50">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                      <div class="row ">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact facebook"><i class="fab fa-facebook-f  wow bounceIn" data-wow-duration="1s" data-wow-delay="6.6s" data-wow-offset="50" ></i></span></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact twitter"><i class="fab fa-twitter  wow bounceIn" data-wow-duration="1s" data-wow-delay="7s" data-wow-offset="50" ></i></span></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 "><span class="teamContact codepen"><i class="fab fa-codepen  wow bounceIn" data-wow-duration="1s" data-wow-delay="7.4s" data-wow-offset="50" ></i></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-lg-8 col-lg-offset-2 ">
              <p class="teamDescript ">This basic one-pager shows just enough of Enders’ work to pique your interest—and just enough of his personality to make you laugh out loud.</p>
            </div>
          </div>

        </div>

      </section>

      <!--end our team -->


      <!--start loges-->
      <div class="container ">
        <div class="row tecnologic ">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 ">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
              <p><i class="fab fa-php fa-7x wow zoomIn" data-wow-duration="0.4s" data-wow-offset="100"></i></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
              <p><i class="fab fa-sass fa-7x wow zoomIn" data-wow-duration="0.4s" data-wow-delay="0.4s" data-wow-offset="100"></i></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
              <p><i class="fab fa-node fa-7x wow zoomIn" data-wow-duration="0.4s" data-wow-delay="0.8s" data-wow-offset="100"></i></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 ">
              <p><i class="fab fa-wordpress-simple fa-7x wow zoomIn" data-wow-duration="0.4s" data-wow-delay="1.2s" data-wow-offset="100"></i></p>
            </div>
          </div>
        </div>

      </div>
      <!--end loges-->




      <!-- ++++++++++++++++++++++++++contact form +++++++++++++++++++++++++++++++++++++++++++++++++++ -->


      <section class="contactMe " id="contact">

        <div class="container ">
          <h2 class="wow lightSpeedIn" data-wow-duration="1.5s" data-wow-delay="1.5s">contact us</h2>
          <p class="subTitle wow fadeIn" data-wow-duration="1s" data-wow-delay="2.5s">we help you build a fantastic website.</p>

          <div class="row ">
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">




              <div class="col-lg-6 col-md-6">
                <div class=" ast form-group wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="3.5s">



                  <input autocomplete="off" type="text" class="user  form-control input-lg " placeholder="your name" name="username" required value="<?php if (isset($username)) {
                echo $username ;
                } ?>">
                  <div class="alert alert-warning inputAlert" role="alert">
                    please keep the user name btween <strong>5 - 30 characters </strong>
                  </div>

                </div>
                <div class=" ast form-group wow bounceInLeft" data-wow-duration="2s" data-wow-delay="5.5s">


                  <input autocomplete="off" type="email" class="mail form-control input-lg " placeholder="your e-mail" name="email" required value="<?php if (isset($email)) {
                echo $email ;
                } ?>">

                  <div class="alert alert-warning inputAlert" role="alert">
                    please keep the e-mail under <strong> 50 characters </strong>
                  </div>


                </div>
                <div class=" form-group wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="2.8s">

                  <input autocomplete="off" type="text" class="subject form-control input-lg " placeholder="subject" name="subject" value="<?php if (isset($subject)) {
                echo $subject ;
                } ?>">

                  <div class="alert alert-warning inputAlert" role="alert">
                    please keep the subject btween <strong>5 - 30 characters </strong>
                  </div>



                </div>
              </div>
              <div class="col-lg-6 col-md-6 ">

                <div class=" msgAst form-group wow bounceInRight" data-wow-duration="1.8s" data-wow-delay="3.8s">

                  <textarea class="message input-lg form-control textarea " placeholder="your message" name="message" required><?php if (isset($message)) {
                echo $message ;
                } ?></textarea>
                  <div class="alert alert-warning inputAlert" role="alert">
                    please keep the subject btween <strong>12 - 300 characters </strong>
                  </div>


                </div>

              </div>
              <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 wow bounceInDown" data-wow-duration="1.5s" data-wow-offset="50">
                <button class="button" title="please
Fill the fields above" disabled type="submit" name="button ">send message</button>
              </div>
            </form>
          </div>

        </div>

      </section>


      <!-- ++++++++++++++++++++++++++ end contact form +++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </main>

    <!--end main body -->
    <footer>
      <div class="container ">
        <div class="row footer ">
          <div class="col-lg-5 col-md-8 col-sm-7 col-xs-12 ">
            <p>&copy;2018-web devloper website ,with <i class="far fa-heart" style="color:red"></i></p>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-5 col-xs-8 col-xs-offset-1">
            <div class="row ">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "><a href="https://codepen.io/Ghassanooooo/ " target="_blank"><span class="codepen "><i class="fab fa-codepen "></i></span></a></div>

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "><a href="https://www.facebook.com/profile.php?id=100010789830008 " target="_blank"><span class="facebook "><i class="fab fa-facebook-f "></i></span></a></div>

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "><a href="https://twitter.com/ghassanaldarwih " target="_blank"><span class="twitter "><i class="fab fa-twitter "></i></span></a></div>

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "><a href="https://github.com/Ghassanooooo " target="_blank"><span class="github "><i class="fab fa-git "></i></span></a></div>
            </div>
          </div>

        </div>
      </div>

    </footer>

    <!-- start Create The Loading Screen -->

    <div class="loadingScreen">
      <span>Please Wait</span>
      <div class="lds-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <!-- end Create The Loading Screen -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.nicescroll.min.js "></script>
    <script src="js/main.js "></script>
    <script src="js/form.js "></script>
    <script src="js/wow.min.js "></script>


  </body>

  </html>
