jQuery(window).scroll(function(){
  var sTop = jQuery("body").scrollTop();
    if(sTop<360){
      jQuery(".screem-background").css("-webkit-filter","blur("+(sTop/360*10)+"px)"
      );}
    });
