var largeur = window.innerWidth
console.log(largeur );



$(".recrute_title").click(function() {
  $(".wrapp_recrute").css("display","block");
  $(".wrapp_recrute").hide().fadeIn( 2000);
  $(".recrute_title").css("display","none");
  $(".fixe").css("display","none");
});
$(".ferme").click(function() {
  $(".wrapp_recrute").css("display","none");
  $(".recrute_title").css("display","block");
  $(".fixe").css("display","block");
});

    
    
    // function progress(percent, $element) {
    //   var progressBarWidth = percent * $element.width() / 100;
    //   $element.find('div').animate({ width: progressBarWidth }, 2000);
    // }

    // progress(80, $('#progressBar'));
    // progress(80, $('#progressBar1'));
    // progress(90, $('#progressBar2'));
    // progress(75, $('#progressBar3'));
    // progress(60, $('#progressBar4'));
    // progress(35, $('#progressBar5'));
    // progress(10, $('#progressBar6'));
    // $('#progressBar .bar').append('<psan style="padding-right:1em">HTML 5</span>');
    // $('#progressBar1 .bar').append('<psan style="padding-right:1em">CSS 3</span>');
    // $('#progressBar2 .bar').append('<psan style="padding-right:1em">PHP</span>');
    // $('#progressBar3 .bar').append('<psan style="padding-right:1em">JS</span>');
    // $('#progressBar4 .bar').append('<psan style="padding-right:1em">SQL</span>');
    // $('#progressBar5 .bar').append('<psan style="padding-right:1em">Python</span>');
    // $('#progressBar6 .bar').append('<psan style="padding-right:1em">REACT JS</span>');
    // $( window).scroll(function() {
    //   progress(80, $('#progressBar'));
    //   progress(80, $('#progressBar1'));
    //   progress(90, $('#progressBar2'));
    //   progress(75, $('#progressBar3'));
    //   progress(60, $('#progressBar4'));
    //   progress(35, $('#progressBar5'));
    //   progress(10, $('#progressBar6'));
      
      
    //   setInterval(function(){ 
    //     if ($('.test').visible()==false) {
    //         $(".visible").empty();
    //         $(".flex-compe1").css("top","0vh !important");
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar"><img class="img_compe" style="width:50px"src="images/html.png" alt="logo html"></label></div><div id="progressBar" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar1"><img class="img_compe" src="images/css.png" alt="logo css"></label></div><div id="progressBar1" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar2"><img class="img_compe" src="images/php.png" alt="logo php"></label></div><div id="progressBar2" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div><span class="test"></span>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar3"><img class="img_compe" src="images/js.png" alt="logo javascript"></label></div><div id="progressBar3" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar4"><img class="img_compe" src="images/sql.png" alt="logo sql"></label></div><div id="progressBar4" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar5"><img class="img_compe" src="images/python.png" alt="logo pytjon"> </label></div><div id="progressBar5" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $(".visible").append('<div class="midle_prog"><label for="progressBar6"><img class="img_compe" src="images/react.png" alt="logo pytjon"> </label></div><div id="progressBar6" style="margin:auto"><div class="bar" style=""></div></div>');
    //         $('#progressBar .bar').append('<psan style="padding-right:1em">HTML 5</span>');
    //         $('#progressBar1 .bar').append('<psan style="padding-right:1em">CSS3</span>');
    //         $('#progressBar2 .bar').append('<psan style="padding-right:1em">PHP</span>');
    //         $('#progressBar3 .bar').append('<psan style="padding-right:1em">JS</span>');
    //         $('#progressBar4 .bar').append('<psan style="padding-right:1em">SQL</span>');
    //         $('#progressBar5 .bar').append('<psan style="padding-right:1em">Python</span>');
    //         $('#progressBar6 .bar').append('<psan style="padding-right:1em">REACT JS</span>');
            
    //       }
    //   }, 3000);
    // });

    var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
    var  scrolltrigger = 0.95;
    var elem = document.getElementById("myBar");
    var width = (wintop/(docheight-winheight)*100);
    elem.style.width = width + "%";
    $(window).scroll(function(){

      var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
      var  scrolltrigger = 0.95;
      var elem = document.getElementById("myBar");
      var width = (wintop/(docheight-winheight)*100);
      elem.style.width = width + "%";
  });
 
// $(".anim_titre").hide().html("<h2 style='color: white;font-size: 100px;margin-top:5vh;margin-bottom:5vh;text-shadow: 5px 5px 2px black;'>"+
//     "GREGORY PACE</h2><h1 class='blur'style='overflow:hidden;text-shadow: -10px -10px 2px black;margin:0 12vh;padding:15vh 0;color: white;font-size: 100px;box-shadow: 5px 5px 15px 0px #656565;'>"+
//     "Concepteur Développeur d'Applications</h1>").slideDown(3000);
//     $(".blur").css('background','rgba(43, 47, 102,0.8)');
//     $(".arrow").append("<div class='container_arrow'>"+
//     "<div class='chevron'></div>"+
//     "<div class='chevron'></div>"+
//     "<div class='chevron'></div></div>").slideDown(3000);
// $(window).scroll(function(){
//   if (document.body.scrollTop === 0) {
//     $('.titre').empty();
//     $('.titre').append('<div class="anim_titre"></div>');
//     $('.titre').append('<div class="arrow"></div>');
//     $(".anim_titre").hide().html("<h2 style='color: white;font-size: 100px;margin-top:5vh;margin-bottom:5vh;text-shadow: 5px 5px 2px black;'>"+
//     "GREGORY PACE</h2><h1 class='blur'style='overflow:hidden;text-shadow: -10px -10px 2px black;margin:0 12vh;padding:15vh 0;color: white;font-size: 100px;box-shadow: 5px 5px 15px 0px #656565;'>"+
//     "Concepteur Développeur d'Applications</h1>").slideDown(3000);
//     $(".blur").css('background','rgba(43, 47, 102,0.8)');
//     $(".arrow").append("<div class='container_arrow'>"+
//     "<div class='chevron'></div>"+
//     "<div class='chevron'></div>"+
//     "<div class='chevron'></div></div>").slideDown(3000);
//     $(".arrow").click(function() {
//       $([document.documentElement, document.body]).animate({
//           scrollTop: $("#porte_f").offset().top
//       });
//   });
//   }
//   else{
//     $('.titre').empty();
//   }
// });
$(".arrow").append("<div class='container_arrow'>"+
  "<div class='chevron'></div>"+
  "<div class='chevron'></div>"+
  "<div class='chevron'></div></div>").slideDown(3000);
$(".arrow").click(function() {
  console.log('toto');
  $([document.documentElement, document.body]).animate({
      scrollTop: $("#presentation").offset().top
  });
});
 $(".link_nav").hover(function(){
    $(this).css('box-shadow','2px 2px 0px black');
  }
  , function(){
    $(this).css('box-shadow','0px 0px 0px black');
}
);
console.log('toto');
$(function() {
  $('body').vegas({
    overlay: true,
    // transition: 'fade', 
    transitionDuration: 4000,
    delay: 10000,
    // animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ],
    animationDuration: 20000,
      slides: [
          { src: 'images/pc1.jfif' },
          { src: 'images/pc2.png' },
          { src: 'images/portable.png' }
      ]
  });
});


// if (window.matchMedia("(min-width: 1024)").matches) {
//   console.log("titi");
  // $(".nav").css("display","block");
// } else {
  
// }
$(".collapsed").click(function (){
  console.log("tata");
  // $(".img_burger").css("display","none");
  $(".nav").addClass("show");
  // $(".nav").css("visibility","visible");
  // $(".collapse").css("display","none");
  // $(".nav").css("opacity","1");
  // $(".nav").css("width","100%");
  // $(".nav").css("top","0px");
  // $(".nav").css("left","0");
  // $(".nav").css("position","sticky");
  // $(".nav").css("z-index","1");
});
if (window.matchMedia("(max-width: 780px)").matches) {
  
$(".link_nav").click(function (){
  // $(".burger img").css("display","block");
  // $(".nav").remove("style");
    // $(".collapse").removeClass("show");
    
    console.log($(this+' a').attr("href"));
  //   $([document.documentElement, document.body]).animate({
  //     scrollTop: $("#presentation").offset().top
  // });
    // console.log("titi");
    // $(".nav").css("visibility","hidden");
    // $(".nav").css("opacity","0");
    // $(".nav").css("width","0 !important");
    // $(".nav").css("z-index","-1");
  });
 
}
if (window.matchMedia("(min-width: 1024)").matches) {
  $(".nav").css("display","block");
  $(".nav").css("visibility","visible");
  $(".nav").css("opacity","1");
  $(".nav").css("width","100%");
  $(".nav").css("top","0px");
  $(".nav").css("left","0");
  $(".nav").css("position","sticky");
};
$('.nav-link').click(function () {
  var ref=$(this).attr("href");
  $([document.documentElement, document.body]).animate({
        scrollTop: $(ref).offset().top
    });
  $(".active").removeClass("active");
  $(this ).addClass("active");  
});

$(".title_projet").click(function(){
  
  var titre=$(this).attr('id');
  $('figure').removeAttr('style')
  $('figure').css('visibility:show')
  $(".bloc").removeClass("bloc").hide("slow").addClass("hide");
  $(".color").removeClass("color");
  if(!$(this).hasClass("color")){
    $(this).addClass("color");
  }
  $("."+titre).removeClass("hide");
  $("."+titre).addClass("bloc").hide().show("slow"); 
})

// console.log(document.querySelector(".header"));
if ($('.title_projet').visible()==false) {
  // add class active
}


var options = {
  root: document.querySelector('section'),
  rootMargin: '0px',
  threshold: 1.0
}

function toto(){
  console.log("tata");
};
$( window).scroll(function() {

var observer = new IntersectionObserver(toto, options);
})

// console.log(observer);




