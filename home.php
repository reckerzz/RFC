<!DOCTYPE html>
<head>
    <title>Radiowealth Finance Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link href='http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/jlibrary.js"></script>
    
    
    <style>
        #banner{
            width:100%;
            height:489px;
            background-image:url('images/bg-1.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size:cover;
        }
    
       #radio-wealthlogo{
            background-image:url('images/radiowealth-logo.png');   
            height : 269px;
            width : 608px;
            margin:auto;
            opacity:0;
       }
        
      body{
            
         font-family: 'Open Sans', 'sans-serif;  
         background-color: #efefef;
        }
        #main-menu li{
        padding:17px;
        display:block;
        float:left; 
        }
        #main-menu1 li{
        padding:13px;
        display:block;
        float:left; 
        }
        
        .menu-active{
        color:#fff;    
        height: 53px;
        
        border-bottom: 4px solid rgba(255,255,255, 1); 
        }
        
        .menu-items{
            font-family: 'Open Sans', 'sans-serif;   
         height: 53px;
        font-size: 1em;
        color: #93c2cc;   
        
        }
        
        .menu-items:hover{
         cursor:pointer;
         color:#fff;    
         height: 53px;
        
        }
        
        
        #footer-menu li{
         list-style:none;
         color:#fff;
         padding-top:10px;
         margin:auto;
        }
     
        
        
        .footer-menu-active{
         color:#fff;
         height: 25px;
         border-left: 4px solid rgba(255,255,255, 1); 
         vertical-align: middle;
         padding-left:15px;
        }
        
        .footer-menu-items{
         height:25px;
         list-style:none;
         color:#fff;
         padding-left:20px;
        }
        
        .footer-menu-items:hover{
         cursor: pointer;
         color: #fff;
         height:25px;
         border-left: 4px solid rgba(255,255,255, 1);
         padding-left:16px;

        }
        
        
       
        .modal-dialog {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .modal-body {
            overflow-y: auto;
        }
        .modal-footer {
            margin-top: 0;
        }

        @media (max-width: 767px) {
          .modal-dialog {
            width: 100%;
          }
        }   

        #menu-home,#menu-aboutus,#menu-products,#menu-acquiredassets,#menu-careers,#menu-contactus{
         opacity:0;   
        }
        
    </style>
    
    
    
</head>


<body>

<div id="banner">
<div style="width:100%;height:90px;border-bottom: 4px solid rgba(53,103,142, 1);background-color:rgba(41,63,113,0.9);">
    
    
        <div class="container">
                <div style="padding-top: 20px;margin:auto;">
                    <div class="row visible-lg">
                         <div class="col-md-4 visible-lg" style="text-align:center; ">
                              <ul id="main-menu" class="list-inline">
                                <li><div id="menu-home"><b>Home</b></div></li>
                                <li><div id="menu-aboutus" class="menu-items">About Us</div></li>
                                <li><div id="menu-products" class="menu-items">Products & Services</div></li>
                             </ul>
                         </div>
                         <div class="col-xs-4">  
                             <center>
                             <img id="rfc-logo" src="images/rfc-logo.png" height="100" style="margin-top:15px;opacity:0;"> 
                            </center>
                        </div>
                         <div class="col-md-4 visible-lg">
                            <ul id="main-menu" class="list-inline">
                                <li><div id="menu-acquiredassets" class="menu-items">Acquired Assets</div></li>
                                <li><div id="menu-careers" class="menu-items">Careers</div></li>
                                <li><div id="menu-contactus" class="menu-items">Contact Us</div></li>
                            </ul>
                         </div>
                    </div>
                    
                    <div class="second-ver hidden-lg">
                            <!--- Second Nav Bar 
                                <nav class="navbar" role="navigation">
                                  <div class="container-fluid">

                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sider-glimpse">
                                      <a class="btn btn-primary btn-lg" role="button"><b class="glyphicon glyphicon-align-justify"></b></a>
                                      </button>
                                      <a class="navbar-brand" href="#"><img src="images/rfc-logo.png" height="70"> </a>
                                    </div>
                                    <div style="margin-top:15px;">
                                    <div class="collapse navbar-collapse" id="sider-glimpse">

                                        <ul id="main-menu" class="list-inline hidden-xs pull-right">
                                            <li><div id="menu-home" class="menu-active"><b>Home</b></div></li>
                                            <li><a href="about-us.html" role="button" style="text-decoration:none;color:white;"><div id="menu-aboutus" class="menu-items"><b>About Us</b></a></div></li>
                                            <li><div id="menu-products" class="menu-items"><b>Products & Services</b></div></li>
                                              <li><div id="menu-acquiredassets" class="menu-items"><b>Acquired Assets</b></div></li>
                                            <li><div id="menu-careers" class="menu-items"><b>Careers</b></div></li>
                                            <li><div id="menu-contactus" class="menu-items"><b>Contact Us</b></div></li>
                                         </ul>
                                      <ul class="nav navbar-nav visible-xs">
                                            <li>
                                            <div class="list-group">
                                              <a href="#" class="list-group-item active">Home</a>
                                              <a href="about-us.html" class="list-group-item">About Us</a>
                                              <a href="#" class="list-group-item">Products & Services</a>
                                              <a href="#" class="list-group-item">Acquired Assets</a>
                                              <a href="#" class="list-group-item">Careers</a>
                                              <a href="#" class="list-group-item">Contact Us</a>
                                            </div>
                                            </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                </nav>
                         ---> 
                    </div>   
                 </div>
        </div>    


    
        <div class="container">
            
            <div id="radio-wealthlogo"></div>
            
            <center><img src="images/50years.png" height="80" style="margin-top:-80px;"></center>
        
        </div>
    
    
    
    
<!-- end of banner container-->
</div>    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<script src="js/bootstrap.js"></script>
    
  <script>function adjustModalMaxHeightAndPosition(){
  $('.modal').each(function(){
    if($(this).hasClass('in') == false){
      $(this).show();
    };
    var contentHeight = $(window).height() - 60;
    var headerHeight = $(this).find('.modal-header').outerHeight() || 2;
    var footerHeight = $(this).find('.modal-footer').outerHeight() || 2;

    $(this).find('.modal-content').css({
      'max-height': function () {
        return contentHeight;
      }
    });

    $(this).find('.modal-body').css({
      'max-height': function () {
        return (contentHeight - (headerHeight + footerHeight));
      }
    });

    $(this).find('.modal-dialog').css({
      'margin-top': function () {
        return -($(this).outerHeight() / 2);
      },
      'margin-left': function () {
        return -($(this).outerWidth() / 2);
      }
    });
    if($(this).hasClass('in') == false){
      $(this).hide();
    };
  });
};

$(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");

</script>  

    
    
    
<div id="footer" style="position:relative;z-index:5;margin-top:1000px;padding:0;">
<div style="width:100%;background-color:rgba(75,87,103,0.3);;overflow:hidden;">
       <div class="container" style="margin-top:-10px;">
           
           <div class="row"> 
            <div class="col-md-6" style="text-align:center;padding-top:40px;"><p class="lead" style="color:#fff;text-align:center;"> <a href="#" role="button" style="text-decoration:none;color:#2f536e;" data-target="#myBranchLocator" data-toggle="modal"><img src="images/branch-locator.png"> Launch Branch Locator</p></a></div>
            <div class="col-md-6" style="text-align:center;padding-top:43px;"><a href="mailto:rfcmarketing@rfc.com" role="button" style="text-decoration:none;"><p class="lead" style="color:#fff;"><img src="images/email.png"> @ rfcmarketing@rfc.com</p></a></div>
           </div>
       </div>
   </div>
<div style="width:100%;position:absolute;z-index:22;background-color:rgba(75,87,103,0.7);overflow:hidden;">
   
        <div class="container" style="padding-top:30px;">
           <div class="row">

                         <div class="col-sm-4">
                             <h2><p style="color:#fff;">Navigation</p></h2>    
                                <ul id="footer-menu">
                                        <li><div id="menu-home" class="footer-menu-active"><b>Home</b></div></li>      
                                        <li><a href="about-us.html" style="text-decoration:none;color:white;"><div class="footer-menu-items">About Us</div></a></li>    
                                        <li><div class="footer-menu-items">Products & Services</div></li>    
                                        <li><div class="footer-menu-items">Acquired Assets</div></li>    
                                        <li><div class="footer-menu-items">Careers</div></li>    
                                        <li><div class="footer-menu-items">Downloads</div></li>    
                                        <li><div class="footer-menu-items">Contact Us</div></li>    
                                </ul>    
                        </div> 
                        <div class="col-sm-4">
                              <h2><p style="color:#fff;">News</p></h2>    
                              
                                <div style="height:70px;width100%;border-bottom: 1px solid rgba(255,255,255, 1);">
                            <p style="color:#fff;padding-top:10px;">RFC Announces the opening of its business Centers in Bogo</p>
                                </div> 
                                <div style="height:70px;width100%;border-bottom: 1px solid rgba(255,255,255, 1);">
                                 <p style="color:#fff;padding-top:10px;">LMS - Loan Management System</p></div>
                            <div style="height:70px;width100%;border-bottom: 1px solid rgba(255,255,255, 1);">
                             
                                <p style="color:#fff;padding-top:10px;">RFC Cares</p></div>
                            
                            
                        </div>
                        <div class="col-sm-4">
                              <h2><p style="color:#fff;">Join the Community</p></h2>  
                            <p style="color:#fff;">Newsletter</p>
                          
                            <div class="input-group">
                              <input type="text" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-warning" type="button">Subscribe!</button>
                              </span>
                               

                            </div>
                             <p style="color:#fff;padding-top:15px;">Connect with us</p>
                             <ul class="list-inline">
                                <li><a href="https://www.facebook.com/RFC.RadiowealthFinance.Company.Inc?fref=ts" target="_blank"><img src="images/fb.png"></a></li>
                                <li><a href="https://twitter.com/RADIOWEALTH" target="_blank"><img src="images/twitter.png" ></a></li>
                                <li><img src="images/linkedin.png"></li>
                                <li><a href="https://plus.google.com/117776066785995331660/about" target="_blank"><img src="images/google-plus.png"></a></li>
                                
                             </ul>
                            <p style="color:#fff;padding-top:15px;font-size:13px;">Copyright 2014 Radiowealth Finance Company Incorporated</p>
                        </div>
          </div>
        </div>
    
    
</div>   

 
   

    
    
    
</div>
</body>
</html>