$(document).ready(function(){

    
  
    
$("#rfc-logo").delay(250).fadeTo("slow", 1.0,function(){
    
    $("#menu-home").delay(250).fadeTo("fast", 1.0);
    $("#menu-aboutus").delay(350).fadeTo("fast", 1.0);
    $("#menu-products").delay(450).fadeTo("fast", 1.0);
    $("#menu-acquiredassets").delay(450).fadeTo("fast", 1.0);
    $("#menu-careers").delay(350).fadeTo("fast", 1.0);
    $("#menu-contactus").delay(250).fadeTo("fast", 1.0);
    
    
    
        $("#radio-wealthlogo").delay(600).fadeTo("fast", 1.0, function(){
            
            $("#radio-wealthlogo").animate({'marginTop' : "-80"},600);
         });

    $("#menu-home").addClass("menu-home menu-active");
    
 });
    
    
    

    
    
    
    $('.menu-items').mouseover(function(){
        $(this).animate({borderBottomColor:"#000000"},"fast");
       
    }).mouseout(function(){
        $(this).animate({borderBottomColor:"#ffffff"},"fast");
    }); 
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


$("#team-usbtn").click(function(){
   $("#about-rfc").css("display","none"); 
   $("#team-rfc").css("display","block"); 
   $("#missionvision-rfc").css("display","none"); 
});

$("#about-usbtn").click(function(){
$("#about-rfc").css("display","block"); 
$("#team-rfc").css("display","none"); 
$("#missionvision-rfc").css("display","none"); 
});
    
    
$("#missionvision-usbtn").click(function(){
$("#about-rfc").css("display","none"); 
$("#team-rfc").css("display","none"); 
$("#missionvision-rfc").css("display","block"); 
});

});
