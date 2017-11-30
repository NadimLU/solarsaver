<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>photography</title>
	<link rel="stylesheet" href="<?php echo site_url()?>assets/client/style.css">
	<link rel="stylesheet" href="<?php echo site_url()?>assets/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/client/animate.css">
    <link rel="stylesheet" href="<?php echo site_url()?>assets/client/css/custom.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .gallery {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    max-width: 1140px;
    height: 100%;
    margin: 0 auto;
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    padding: 20px 10px;
  }
  .thumbnail {
    background-color:rgba(0,0,0,0.1);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 33vh;
    max-height: 220px;
    min-width: 320px;
    max-width: 25%;
    cursor: pointer;
    border: none;
    -ms-flex-preferred-size: 18%;
        flex-basis: 18%;
    margin-bottom: 30px;
    -ms-flex-line-pack: center;
        align-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -ms-flex-flow: column nowrap;
        flex-flow: column nowrap;
    text-align: center;
    color: #ccc;
    font-weight: 300;
    font-size: 1em;
    -webkit-transition: background 500ms linear;
    transition: background 500ms linear;
  }
  .thumbnail .title {
    margin-top: auto;
    padding: 0 0 20px 0;
  }
  .folder {
    position: relative;
    height: 40%;
    width: 55%;
    margin-top: auto;
    background: #ff6347;
    border-radius: 0 4px 0 0;
  }
  .folder,
  .folder:before {
    -webkit-transition: background 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
    transition: background 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
  }
  .folder:after,
  .folder:before {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
  }
  .folder:after {
    -webkit-transform: scaleY(1) skewX(-2deg);
            transform: scaleY(1) skewX(-2deg);
    border-radius: 4px 4px 0 0;
    -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
    background: #ff7359;
    -webkit-transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
    transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95) 150ms;
  }
  .folder:before {
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    height: 10px;
    width: 30%;
    background: #ff6347;
    border-radius: 2px 6px 0 0;
  }
  .folder .file {
    -webkit-transform: scale(0.93, 0.94) skewX(-2deg) translate(-2px, 0);
            transform: scale(0.93, 0.94) skewX(-2deg) translate(-2px, 0);
  }
  .folder .file,
  .folder .file:after,
  .folder .file:before {
    position: absolute;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: #fff;
    box-shadow: -1px -1px 1px rgba(255,58,22,0.3);
  }
  .folder .file:before {
    content: '';
    -webkit-transform: scale(1, 0.95) skewX(-3deg) translate(1px, 0);
            transform: scale(1, 0.95) skewX(-3deg) translate(1px, 0);
    -webkit-transition: all 250ms cubic-bezier(0.77, 0, 0.175, 1) 250ms;
    transition: all 250ms cubic-bezier(0.77, 0, 0.175, 1) 250ms;
  }
  .folder .file:after {
    content: '';
    -webkit-transform: scale(1, 0.88) skewX(-4deg) translate(3px, 0);
            transform: scale(1, 0.88) skewX(-4deg) translate(3px, 0);
  }
  .thumbnail:hover {
    border: 1px dotted #ddd;
  }
  .thumbnail:hover .folder,
  .thumbnail:hover .folder:before {
    background: #ff826c;
  }
  .thumbnail:hover .folder:after {
    -webkit-transform: scaleY(0.9) skewX(-6deg);
            transform: scaleY(0.9) skewX(-6deg);
    background: #ff6347;
  }
  .thumbnail:hover .folder .file:before {
    -webkit-transform: scale(1, 0.95) skewX(-4deg) translate(15px, -30%) rotate(25deg);
            transform: scale(1, 0.95) skewX(-4deg) translate(15px, -30%) rotate(25deg);
    box-shadow: -1px 1px 1px rgba(255,58,22,0.3);
  }
  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);

.gal-container{
	padding: 12px;
}
.gal-item{
	overflow: hidden;
	padding: 3px;
}
.gal-item .box{
	height: 350px;
	overflow: hidden;
}
.box img{
	height: 100%;
	width: 100%;
	object-fit:cover;
	-o-object-fit:cover;
}
.gal-item a:focus{
	outline: none;
}
.gal-item a:after{
	content:"\e003";
	font-family: 'Glyphicons Halflings';
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 3px;
	left: 3px;
	top: 3px;
	bottom: 3px;
	text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
	opacity: 1;
}
.modal-open .gal-container .modal{
	background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
	padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
	box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
	outline: none;
}
.modal-open .gal-item button.close span{
	position: relative;
	top: -3px;
	font-weight: lighter;
	text-shadow:none;
}
.gal-container .modal-dialogue{
	width: 80%;
}
.gal-container .description{
	position: relative;
	height: 40px;
	top: -40px;
	padding: 10px 25px;
	background-color: rgba(0,0,0,0.5);
	color: #fff;
	text-align: left;
}
.gal-container .description h4{
	margin:0px;
	font-size: 15px;
	font-weight: 300;
	line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
    </style>
    
    
</head>
<body>
	
<!--background slider-->	
<div class="container-fluid fluid_margin_padding">
  <div class="raw fluid_margin_padding">
  <div class="col-md-12 fluid_margin_padding">    




<nav class="navbar navbar-default navbar-fixed-top navbar-inverse nav_background" role="navigation">
    <div class="container-fluid">
       <div class="row">
         <div class="col-md-3 col-xs-12">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="padding-top:10px;margin-left:22%;height: 100px;width: 230px;" class="img-responsive" src="<?php echo base_url()?>assets/client/image/jbjb.png">
            </div>
         </div>
        <div class="col-md-7 col-xs-12">
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="nav navbar-nav navbar-right navlist">
               
                <li><a href="<?php echo site_url('home')?>">home</a></li>
                <li><a href="#about">About</a></li>
                <li  class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">protfolio
                <span class="caret"></span></a>
                    <ul class="drop dropdown-menu">
                      <li><a href="#">home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">price</a></li>
                      
                      <li><a href="#">service</a></li>
                    </ul>
                </li>
				<li><a href="<?php echo site_url('albums');?>">client album</a></li>
                <li><a href="#service">service</a></li>
                <!-- <li><a href="#team">team</a></li> -->
                <li><a href="#price">price</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
               
            </ul>
        </div>
         </div> 
         <div class="col-md-2 col-xs-12"> 
            <ul class=" pull-left list-inline navlist">
                  
                <li><a class="btn btn-social-icon btn-facebook"><span style="font-size:17px" class="fa fa-facebook"></span></a></li>
                
                <li><a class="btn btn-social-icon btn-twitter"><span style="font-size:17px"  class="fa fa-twitter"></span></a></li>
                
                <li><a class="btn btn-social-icon btn-google"><span style="font-size:17px"  class="fa fa-google"></span></a></li>
               
                   
             </ul>
          </div>     
           
        </div>
    </div>
</nav>

        