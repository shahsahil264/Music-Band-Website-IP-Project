<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet"><link href="http://allfont.net/allfont.css?fonts=squealer-embossed" rel="stylesheet" type="text/css" />    </head>
    <style>
       @import url(https://db.onlinewebfonts.com/c/a14103b8dff609a2927b557096f1716a?family=BOOTLE);
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        navbar-toggle:hover {
            background-color: TRANSPARENT !important;
        }
        .navbar-toggle{
            border: none;
        }
        .navbar-inverse{
            background-color: transparent !important;
            border:none;
            
        }
        .navbar-inverse li a{
            color: #fff !important;
            z-index: 2;
            text-transform: uppercase;
        }
        .nv-br{
            font-size: 30px;
            letter-spacing: 2px;
            font-family: 'BOOTLE';
            font-weight: 400;
            color: #fff;
        }
        .full-size{
            height: 100vh;
        }
        .fullscr{
            height: 100%;
            width: 100%;
        }
        .navbar-inverse.scrolled{
            background-color: rgba(0,0,0,0.7) !important;
             
            
        }
        .fukat{
            height:1000px;
        }
        #intro{
            height: 100vh;
            width: 100%;
        }
        #intro{
            background: url("assets/images/intro1.jpg")no-repeat center center fixed;
            background-size: cover;
            background-color: rgba(38,38,38,0.6);
            display: table;
        }
        #intro-container{
            height: 100%;
            width: 100%;
            padding: 0px !important;
            background: rgba(38,38,38,0.5);
            display: table-cell;
            vertical-align: middle;
        }
        .intro-cont{
            
            color: #fff;
            text-shadow:1px 1px #000;
        }
        h2.intro-cont{
            
            letter-spacing: 2px;
            font-family: 'BOOTLE';
            font-size: 120px;
            
        }
        h2.intro-cont::after{
            background-color: #fff;
            content: '';
            height: 5px;
            border-radius: 20px;
            text-align: center;
            margin: 0 auto;
            display: block;
            margin-top: 20px;
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
            position: unset;
        }
        p.intro-cont{
            font-size: 26px !important;
            font-family: "serif";
            letter-spacing: 3px;
        }
        #introrow{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        #intro-container-cont{
            text-align: center;
            width: 600px;
            margin: 0 auto;
        }
        @media screen and (max-width: 768px){
            #intro-container-cont{
                width: initial;
            }
            h2.intro-cont{
                font-size: 48px;
            }
            h2.intro-cont::after{
                width: 80%;
            }
        
        }
        .custBtn{
            background: transparent;
            border: none;
            border: 3px solid white;
            padding: 10px;
            color: white;
            border-radius: 10px;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: 600;

        }
        .custBtnblk{
            background: transparent;
            border: none;
            border: 3px solid #414141;
            padding: 10px;
            color: #414141;
            border-radius: 10px;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: 600;
            margin-top: 20px;
           

        }
        #about1{
            height: 100vh;
            width: 100%;
            display: table;
        }
        #about1{
            background: url("assets/images/aboutimg.jpg")no-repeat center center fixed;
            background-size: cover;
            background-color: rgba(38,38,38,0.6);
        }
        #about-container{
            height: 100%;
            width: 100%;
            padding: 0px !important;
            background: rgba(38,38,38,0.5);
            display: table-cell;
            vertical-align: middle;
        }
       .sections{
            padding: 0px 150px;
        }
        @media screen and (max-width: 768px){
            .sections{
               padding: 0px 15px;
            }
        }
        .aboutH{
            color: white;
            font-size: 68px;
            font-family: 'BOOTLE';
        }
        .aboutHBlack{
            color: #000;
            font-size: 48px;
            
        }
        h1.aboutH{
            margin-bottom: 30px;
            
        }
        h4.aboutHBlack{
            color: rgba(38,38,38,0.7);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 26px;
            line-height: 1.25em;
            letter-spacing: 2px;
            margin-top: 20px
            
            

        }
        h4.aboutH{

            padding-top: 20px;
            font-size: 30px;
            font-family: cursive;
            letter-spacing: 2px;
            line-height: 1.25em;
        }
        @media screen and (max-width: 768px){
            .aboutH{
                font-size: 48px;
            }
            h4.aboutH{
                font-size: 24px;
            }
        }
        button{
            outline: transparent;
        }
        #tour{
           
            height: 70vh;
            width: 100%;
           
        }
        .tourImg{
           
            height: 70vh;
            width: 100%;
        }
        .tourbkg{
            background: url("assets/images/tour1.jpg")no-repeat  center center ;
            -o-object-fit: contain;
		object-fit: contain;
        background-size: cover;
            
            
        }
        .sectionLg{
            margin: 70px 50px;
        }
        .tableCont{
            height: 70vh;
            display: table;
        }
        .tablecellCont{
            display: table-cell;
            vertical-align: middle;
        }
        @media screen and (max-width: 768px){
            #tour{
                height: unset;
                margin-bottom: 50px;
            }
            .tourbkg{
                height: 55vh;
            }
            .tableCont{
                display: block;
                height: 45vh;
            }
            .tablecellCont{
                display: block;
            }
            .sectionLg{
                margin: 0px;
            }
            
        }
        .bookH{
            letter-spacing: 2px;
            font-family: 'BOOTLE';
            font-size: 68px;
        }
        .infoField{
            color: rgba(38,38,38,0.5);
            font-size: 12px;
        }
        p.infoField{
            margin-bottom: 0px;
        }
       
        .bookBtn{
            background: transparent;
            border: none;
            border: 3px solid #777;
            padding: 5px;
            color: #777;
            border-radius: 10px;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: 600;
            margin-top: 20px;
           
        }
        .booking{
            height: 510px;
            width: 100%;
        }
        .bookbkg{
            background: url(assets/images/book1.jpg)no-repeat 50%;
            background-size: contain;
            background-color: #ffcd1e;
            height: 100%;
        }
        .form-wrapper{
            padding: 20px 0px;
        }
        .modal-header, .close {
            background-color: #333;
            color: #fff !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-header, .modal-body {
            padding: 40px 50px;
        }
        @media screen and (max-width: 768px){
            .booking{
                height: 350px;
            }
            .infoField{
                font-size: 10px;
            }
        }
        .modal-header, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
      
    </style>
    <body>
   
        
            <div class="compnav">
                    <nav id="mynav" class="navbar navbar-inverse navbar-fixed-top ">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                </button>
                                <a class="navbar-brand" href="#">
                                    <p class="nv-br">Nirvana</p>
                                </a>
                            </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                               <li><a href="#pricing">MY TICKETS</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                                <li><a href="#"><?php echo $login_session; ?></a></li>
                                <li><a id="logout" href="logout.php">Log Out</a></li>
                                <!-- <div id="profile">
<b id="welcome">Welcome : <i></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div> -->
                            </ul>
                        </div>
                        </div>
                    </nav>
            </div>
            
            <div id="intro" >
                <div id="intro-container" class="container-fluid">
                    <div id="intro-container-cont">
                        <h2 class="intro-cont">Nirvana</h2>
                        <p class="intro-cont">Where music meets reality.</p>
                        <button class="custBtn" style="margin-top: 70px;">Book tickets now</button>
                    </div>
                </div>
            </div>
            <div id="about1">
                <div id="about-container"class="container-fluid">
                    <div class="sections">
                        <div class="row">
                            <div  class="col-md-7 col-sm-7 col-lg-7">
                                <h1 class="aboutH"> Nirvana</h1>
                                <h4 class="aboutH">Nirvana is of people for  people by  people who love music and dancing to their own rythm. It defines the importance music plays in our life. And how different emotions, different aspects of life can be easily spoken through music.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionLg">
            <div id="tour" >
                <div class="container-fluid">
                    <div class="row">
                        <div  class="col-sm-7 col-md-7 col-lg-7 tourbkg">
                            <div class="tourImg"></div>
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 tableCont">
                            <div class="tablecellCont">
                           <h2 class="aboutHBlack text-right" style="font-weight: 700; font-size: 47px;">We are coming near you.</h2>
                           <h4 class="aboutHBlack text-right">Are you joining us in this magical ride ? Find your true love for music and discover whole new realm of possibilities, come join us in our tour "Tour de Nirvana".</h4>
                           <button class="custBtnblk pull-right">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="contact">
            <div class="container-fluid text-center">
                    <h2 class="bookH text-justify-center" >Find us at</h2>
                    <h4 class="aboutHBlack">Come meet us.</h4>
                </div>
                <div class="container-fluid sectionLg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8707329579806!2d72.86749211485113!3d19.06942028709174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8ec2ece74bf%3A0x302c3126b7fc8368!2sStarbucks%20Coffee!5e0!3m2!1sen!2sin!4v1570368940342!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
            </div>
            <div class="footer" style="background-color: rgba(0,0,0,0.7);padding:20px;">
                <div class="contianer text-center">
                    <p class="aboutH" style="margin :0px; font-size:initial;font-family:cursive;">Copyright &copy; 2019</p>
                </div>
            </div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
    
            $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar-fixed-top, .navbar-inverse, .navbar-inverse>li>a, .navbar-brand, .navbar-brand>img");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
          </script>
</html>