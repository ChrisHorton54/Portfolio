<?php
    if(isset($_POST['message_name'])){
        $to = "info@christopher-horton.co.uk";
        $subject = "Contact Form";

        $message = " Message Has been sent from the contact form from:
        
        Name: ".$_POST['message_name']."
        Email: ".$_POST['message_email']."
        Number: ".$_POST['message_number']."
        
        
        Message:
        
        ".$_POST['message_content'];

        $headers .= 'From: '.$_POST['message_email'];

        mail($to,$subject,$message,$headers);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Christopher Horton - Portfolio</title>
    <meta name="keywords" content="website, developer, development, christopher, horton, staffordshire, university, stafford, uk, portfolio" />
    <meta property="og:title" content="Christopher Horton - Portfolio" />
    <meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.christopher-horton.co.uk" />
	<meta property="og:image" content="http://www.christopher-horton.co.uk/img/portfolio-photo-circle.png" />
    <meta property="og:site_name" content="Christopher Horton" />
	<meta property="og:description" content="Portfolio website developed to allow visitors to read about Christopher Horton, understand various Skills and showcase portfolio work." />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top white">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#">Christopher Horton</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home-tag" class="active"><a class="scroll-tag" href="#home">Home</a></li>
            <li id="skills-tag"><a class="scroll-tag" href="#skills">Skills</a></li>
            <li id="about-tag"><a class="scroll-tag" href="#about">About</a></li>
            <li id="portfolio-tag"><a class="scroll-tag" href="#portfolio">Portfolio</a></li>
            <li id="contact-tag"><a class="scroll-tag" href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <a name="home" id="home"></a>
    <div class="site-wrapper black-bg">
        <div class="site-wrapper-inner">
            <div class="container">
                <h1 class="h1-name hidden-xs">Christopher Horton</h1>
                <div class="break"></div>
                <img class="portfolio-image" src="img/portfolio-photo-circle.png" alt="Christopher Horton" title="Christopher Horton" />
                <div class="break"></div>
                <p>Hi! My name is Christopher Horton, I'm a Staffordshire based Web Developer currently studying BSc Computing Science at Staffordshire University.</p>
                <p>I have developed a wide variety of skills such as front-end development, back-end development, website design and application development.</p>
            </div>
            <a class="scroll-tag next-section" href="#skills"></a>
        </div>
    </div>
    <a name="skills" id="skills"></a>  
    <div class="site-wrapper white-bg">
        <div class="site-wrapper-inner">
            <div class="container">
                <h2>Skills</h2>
                <div class="break"></div>
                <p>Through my years in education and work experience, i have gathered valuable knowledge in different areas of website development and design. This includes understanding front-end development <strong>(HTML, CSS, Javascript/jQuery, Responsive)</strong>, back-end development <strong>(PHP, ASP.Net)</strong>, content management systems <strong>(WordPress, Concrete5)</strong>, databases <strong>(MySQL)</strong>, frameworks <strong>(Skeleton, Foundation, Bootstrap)</strong> and application development <strong>(Objective-C, Java, PhoneGap)</strong>.</p>
            </div>
            <div class="break"></div>
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/html-5.png"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/css-3.png"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/js-logo.png"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/php-img.png"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/wordpress.png"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/concrete-5.png"/>
                </div>
            </div>
            <div class="break"></div>
            <a class="scroll-tag next-section" href="#about"></a>
        </div>
    </div>
    <a name="about" id="about"></a>  
    <div class="site-wrapper black-bg">
        <div class="site-wrapper-inner">
            <div class="container">
                <h2>About</h2>
                <div class="break"></div>
                <p>As mentioned, I'm currently a Staffordshire University student looking to graduate this year. I'm currently studying BSc Computing Science where i have decided to branch of into web development where i love to keep up-to-date with the latest web trends and functionality.</p> 
                <p>I'm a huge sports fanatic. Being an active person, i love to play in any competitive sports <strong>(Currently playing Football and Dodgeball)</strong>. However I do like to relax with friends and family play video games and simply mess around with various pieces of code to develop new and interesting things.</p> 
            </div>
            <a class="scroll-tag next-section" href="#portfolio"></a>
        </div>
    </div>
    <a name="portfolio" id="portfolio"></a>  
    <div class="site-wrapper white-bg">
        <div class="site-wrapper-inner">
            <div class="break"></div>
            <div class="container">
                <h2>Portfolio</h2>
                <div class="break"></div>
                <div class="porfolio-work">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="port-content-image portfolio-1 active active-opacity">
                            <a href="http://www.safaridrive.com/" target="_blank"><img src="img/safari-drive-large.jpg"/></a>
                            <div class="text-content">
                                <h3>Safari Drive</h3>
                                <p>Safari Drive offers Self Drive safari holidays throughout the African region. The website itself is built using a content management system called Concrete5. With Concrete5, front-end content can be easily added along with changing the style of each page by adding in different elements.The reason for using Concrete5 as the content management system is to allow for more front-end control over the website.</p>
                            </div>
                        </div>
                        <div class="port-content-image portfolio-2">
                            <a href="http://bigmouthclothing.com/" target="_blank"><img src="img/bmc-large.jpg"/></a>
                            <div class="text-content">
                                <h3>Big Mouth Clothing</h3>
                                <p>Big Mouth Clothing is an online website that sells a variety of clothing ranging from categories such as Geek clothing, Retro clothing and Indie clothing. Built from scratch, the website uses a combination of different codes such as HTML, CSS, JavaScript/jQuery and PHP.</p>
                            </div>
                        </div>
                        <div class="port-content-image portfolio-3">
                            <a href="http://somethinggeeky.com/" target="_blank"><img src="img/something-geeky-large.jpg"/></a>
                            <div class="text-content">
                                <h3>Something Geeky</h3>
                                <p>Something Geeky is an on-line e-commerce shop that offers a wide range of geeky clothing and accessories. The fully responsive website was built using the Bootstrap framework to allow for a much better user experience over each platforms.</p>
                            </div>
                        </div>
                        <div class="port-content-image portfolio-4">
                            <a href="http://thenudge.com/" target="_blank"><img src="img/the-nudge-large.jpg"/></a>
                            <div class="text-content">
                                <h3>The Nudge</h3>
                                <p>The Nudge is a website that gives its users a guide to what's going on in and around the London area. Showing recommendations, offering special offers and having competitions allows for a better viewing of what can be offered around London. The website was built from the ground up also having catering for mobile users.</p>
                            </div>
                        </div>
                        <div class="port-content-image portfolio-5">
                            <a href="http://myhottap.co.uk/" target="_blank"><img src="img/my-hot-tap-large.jpg"/></a>
                            <div class="text-content">
                                <h3>My Hot Tap</h3>
                                <p>My Hot Tap is a one page scrolling website where customers can register a tap they have brought from the company. This site combines current web trends to allow for a better user experience along with using the Bootstrap framework to allow for a better looking wire-frame.</p>
                            </div>
                        </div>
                        <div class="port-content-image portfolio-6">
                            <img src="img/teamanage-large.jpg"/>
                            <div class="text-content">
                                <h3>Teamanage</h3>
                                <p>Teamanage is my personal Final Year Project application that allows for club management and fan interaction. This application allows users to control squad management, event management, club finances and squad statistics all through a mobile application. Built with Phonegap, this application can be used on Android devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="break"></div>
            <div class="container portfolio-thumbnails">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/safari-drive-small.jpg" onclick="togglePortfolio('portfolio-1')"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/bmc-small.jpg" onclick="togglePortfolio('portfolio-2')"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/something-geeky-small.jpg" onclick="togglePortfolio('portfolio-3')"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/the-nudge-small.jpg" onclick="togglePortfolio('portfolio-4')"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/my-hot-tap-small.jpg" onclick="togglePortfolio('portfolio-5')"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <img src="img/teamanage-small.jpg" onclick="togglePortfolio('portfolio-6')"/>
                </div>
            </div>
            <div class="break"></div>
            <a class="scroll-tag next-section" href="#contact"></a>
        </div>
    </div>
    <a name="contact" id="contact"></a>  
    <div class="site-wrapper black-bg">
        <div class="site-wrapper-inner">
            <div class="container">
                <h2>Contact</h2>
                <div class="break"></div>
                <p>If you would like to get in contact with me or simply just chat, please fill out the contact form below, email me at info@christopher-horton.co.uk or message me on any of the social media sites below. Don't worry, i wont bite!</p> 
            </div>
            <div class="break"></div>
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <form method="post" name="contact-form">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Name</span>
                          <input type="text" class="form-control" placeholder="Name" name="message_name" aria-describedby="basic-addon1" required>
                        </div>
                        <br/>
                        <div class="input-group">
                          <input type="email" class="form-control" placeholder="Your Email" name="message_email" aria-describedby="basic-addon2" required>
                          <span class="input-group-addon" id="basic-addon2">@example.com</span>
                        </div>
                        <br/>
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Contact</span>
                          <input type="tel" class="form-control" placeholder="Number" name="message_number" aria-describedby="basic-addon1" required>
                        </div>
                        <br/>
                        <textarea class="form-control" name="message_content" rows="5" data-fv-field="content" required>Your Message!</textarea>
                        <br/>
                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="social-media" target="_blank" href="https://www.facebook.com/chris.hortonis"><img src="img/facebook.jpg"/><p>Facebook</p></a>
                    <div class="clearfix"></div>
                    <a class="social-media" target="_blank" href="https://twitter.com/chrishorton54"><img src="img/twitter.jpg"/><p>Twitter</p></a>
                </div>
            </div>
        </div>
    </div>
      <div class="alert alert-success notification-bar <?php if(isset($_POST['message_name'])){ echo 'active'; }?> " role="alert"><p><strong>Thank you</strong> - I will get back to you as fast as I can!</p></div>      
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>