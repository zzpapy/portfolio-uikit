<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/uikit-rtl.min.css">
    <link rel="stylesheet" href="../styles/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/components/dotnav.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/components/progress.min.css">
    <style>
        .container{
            width:1000px;
            height:1000px;
            border: 1px solid black;
            /* justify-content:space-around; */
        }
        .box{
            width:250px;
            height:250px;
            border: 1px solid black;
        }
        progress[value] {
  width: 250px;
  height: 20px;
  background:red;
}
    </style>
</head>
<body>
<div class="uk-panel uk-panel-box uk-panel-box-secondary">
    <h1>Progress bar Animation</h1>
    <div id="progressbar" class="uk-progress uk-progress-success">
      <div class="uk-progress-bar" style="width: 0%;">0%</div>
    </div>
    <ul id="content" class="uk-switcher">
      <li class="uk-active"><h1>1</h1></li>
      <li><h1>2</h1></li>
      <li><h1>3</h1></li>
      <li><h1>4</h1></li>
      <li><h1>5</h1></li>
    </ul>
    <ul class="uk-dotnav uk-flex-center small" data-uk-switcher="{connect:'#content'}">
      <li class="uk-active"><a href="">...</a></li>
      <li><a href="">...</a></li>
      <li><a href="">...</a></li>
      <li><a href="">...</a></li>
      <li><a href="">...</a></li>
    </ul>
   </div>
    <div class="container uk-flex uk-flex-around uk-flex-column uk-flex-middle "uk-scrollspy="target: > div; cls:uk-animation-slide-left; delay: 500;repeat: true">
        <div class="box uk-card uk-card-default uk-card-body uk-card uk-card-default  "></div>
        <div class="box uk-card uk-card-default uk-card-body uk-card uk-card-default uk-card-body" uk-scrollspy-class="uk-animation-slide-right"></div>
        <div class="box uk-card uk-card-default uk-card-body uk-card uk-card-default  "></div>
       
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/uikit-icons.min.js"></script>
<script type="text/javascript" src="../scripts/uikit.min.js"></script>
<script>
// UIkit.util.ready(function () {

//   var bar = document.getElementById('js-progressbar');

//   var animate = setInterval(function () {

//       bar.value += 10;

//       if (bar.value >= bar.max) {
//           clearInterval(animate);
//       }

//   }, 1000);

// });
// $( window).scroll(function() {

//   UIkit.util.ready(function () {

//     var bar = document.getElementById('js-progressbar');
//     bar.value =0;
//     var animate = setInterval(function () {
//         bar.value += 10;
//         if (bar.value >= bar.max) {
//             clearInterval(animate);
//         }
  
//     }, 1000);
  
//   });
//   })
var bar = $("#progressbar").find(".uk-progress-bar");
  var list = $("#content").find("li").length;
  $('[data-uk-switcher]').on('show.uk.switcher', function(event, area){
    var itemActive = $("#content").find("li.uk-active").index() + 1;
    var percent = Math.floor(itemActive / list * 100);
    console.log('toto')
    bar.css("width", percent+"%").text(percent+"%");
  });

</script>
<script type="text/javascript" src="../scripts/script.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html>
  <head>
   <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/uikit.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/components/dotnav.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/css/components/progress.min.css">
  <style>
  .uk-progress-bar{
      background:red;
  }
  </style>
  </head>
  <body style="height:200vh"> 
   <div id="#target"class="uk-panel uk-panel-box uk-panel-box-secondary" >
        <h1>Progress bar Animation</h1>
        <div id="progressbar" class="uk-progress " uk-scroll>
        <div class="uk-progress-bar" style="width: 0%;"uk-scroll></div>
        </div>
        <ul id="content" class="uk-switcher">
        <li class="uk-active"><h1>1</h1></li>
        <li><h1>2</h1></li>
        <li><h1>3</h1></li>
        <li><h1>4</h1></li>
        <li><h1>5</h1></li>
        </ul>
        <ul class="uk-dotnav uk-flex-center small" data-uk-switcher="{connect:'#content'}">
        <li class="uk-active"><a href="">...</a></li>
        <li><a href="">...</a></li>
        <li><a href="">...</a></li>
        <li><a href="">...</a></li>
        <li><a href="">...</a></li>
        </ul>
   </div>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.25.0/js/uikit.min.js"></script>
   <script src="script.js"></script>
  </body>
</html>
