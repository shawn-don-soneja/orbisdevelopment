<html>
<body onload='updatePage(0);'>
    
<?php 

//--Project Description Content: 

//Hexient
$HexDesc = "
<h3>Summary:</h3>
<p>Fueled by a robust back-end, Hexient Solutions is an HR platform focused on non-technical skills assessments. In this project, our team created a completely customized web-based platform (no drag-and-drops, or plug-ins to be found anywhere), optimized for both mobile and desktop devices and supporting all modern browsers. The platform consists of a custom-built dashboard, focused on delivering value to Hexient Solutions' customers. We created a secure and intuitive online assessment, with a complete set of 'brains' behind it all that we helped to design.</p>
<h3>Technologies:</h3>
<ul>
    <li>MySQL + PHP Backend</li>
    <li>d3 Visualization Library</li>
    <li>HTML5, CSS3, and JS for a responsive and multi-browser compatible build</li>
</ul>

<h3>Link</h3>
<p><a href='http://www.hexientsolutions.com'>www.hexientsolutions.com</a></p>
";

//CarryOn
$CarryOnDesc_1 = "
<h3>Summary:</h3>
<p>An in-house project aimed at helping travelers around the world to create the experiences they want. Users will be able to quickly and efficiently research travel destinations in one place. Our platform will show popular vacations around the world, with breakdowns of all the places, activites, and eats our users need to experience for themselves. CarryOn is powered by an innovative, AI-powered trip planner, providing a trip catered exacty to a user's interests.<br><br> Following a great deal
of industry research, and a few iterations of a sample MVP, we're preparing for CarryOn to go live in Fall of 2020.</p>
";
$CarryOnDesc_2 = "
<h3>Technologies:</h3>
<ul>
    <li>Swift (iOS)</li>
    <li>MySQL database</li>
    <li>Platform-specific, Custom API</li>
    <li>Several innovative API Integrations</li>
</ul>
";

//Sportmaster
$SportDesc = "
<h3>Summary:</h3>
<p>Robust and updatable website, tailored to fit the needs of this vendor. Accessible on all mediums, simple, and translatable for the many different customers that are visiting Sportmaster. Implemented an internal means for Sportmaster to update all of their website's information, on their own.
  <br>
  Implementing a live tracking system for local deliveries
  
  <br>
  Creating a full-scale inventory management and analysis system for use in-house
  
  </p>
<h3>Technologies:</h3>
<ul>
    <li>MySQL + PHP Backend</li>
    <li>Secure Content Management Page for ongoing vendor customization</li>
    <li>HTML5, CSS3, and JS for a responsive and multi-browser compatible build</li>
    <li>Shopify Integration for online sales - Live in Fall 2020</li>
    <li>Custom Web solution for mobile sales, with live tracking and updates from vendor</li>
</ul>
<h3>Link</h3>
<p><a href='http://www.sportmasterbaitandtackle.com'>www.sportmasterbaitandtackle.com</a></p>
";

?>

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico?v=2" type="image/x-icon">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Poppins|Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!----------------------------BEG STYLE-->
  <style>
/*overall page code -- beg*/
body{
  background:black;
  overflow:hidden;
  margin:0;
  font-family: 'Poppins', sans-serif;
}
.IE_Cover{
  position:absolute;
  width:100%;
  height:100%;
  background:lightgray;
  z-index:20;
  display:none;
  align-items:center;
  justify-content:center;
}
.IE_Cover p{border:1px solid gray;text-align:left;background:rgb(70,70,70);border-radius:5px;box-shadow:0px 0px 10px 0px black;user-select:none;color:rgb(200,200,200);padding:25px;}
a{text-decoration:none;color:rgba(240,240,240,0.4)}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .IE_Cover{display:flex;}
}
/*color covers*/
#colorSubCover{
  /*initial color of page should be set*/
  background:;
  height:100%;
  width:100%;
  position:absolute;
  z-index:5;
  transition:0.2s;
  filter: blur(8px);
  overflow:hidden !important;
}
#circle{
  position:absolute;
  height:100px;
  width:100px;
  border-radius:50%;
  background:gray;
  z-index:6;
  opacity:0;
  animation:flyIn 3s 1s forwards ease-out;
}
#colorMainCover{
  background:linear-gradient(145deg, rgba(0,0,0,0.45), rgba(0,0,0,1) 70%);
  height:100%;
  width:100%;
  position:absolute;
  z-index:10;
}
#mainContainer{
  background:blue;
  border:0px solid blue;
  height:100%;
  width:100%;
}

/*navigation*/
#navContainer{
  position:absolute;
  left:0;
  top:0;
  height:100%;
  width:120px;
  border-right:0px solid blue;
  z-index:11;
}
#navContainer:hover #mainNav{
  width:100%;
}
#navContainer:hover #mainNav li{
  font-size:18px;
}
#navContainer:hover #logo{
  height:80px !important;
}
#navContainer #logo{transition:0.4s;}
#mainNav{
  position:absolute;
  left:0;
  top:0;
  height:100%;
  width:65px;
  border-right:0px solid green;
  z-index:12;
  transition:0.20s ease-out;
  background:rgba(170,170,170,0.6);
  border-radius:0px 3px 3px 0px;
  box-shadow:0px 0px 5px 0px;
}
#mainNav li{
  list-style-type:none;
  border:0px solid blue;
  height:35px;
  width:100%;
  text-align:center;
  cursor:pointer;
  padding-top:10px;
  transition:0.1s;
  font-family:"Helvetica";
  color:rgba(70,70,70,0.9);
}
#mainNav li:hover{
  color:gray;
}
#mainNav li:active{
  opacity:0.7;
}
#mobileHam{
  display:none;
} 
#mobileMenu{
  display:none;
  position:fixed;
  height:332px;
  width:100%;
  opacity:0;
  transition:0.25s ease-in;
  z-index:11;
}
#mobileMenu .navItem{
  padding:10px;
  border-top:1px solid gray;
  text-align:center;
  font-size:17px;
  z-index:15;
  position:11;
}
h1,h2,p{
  text-align:center;
  padding:10px;
  color:rgba(200,200,200,0.7);
}
p{margin:0px;}
li{color:rgba(200,200,200,0.7);}
.glow{border:1px solid rgba(40,40,40,0.5);
  transition:0.15s ease-in;}
.glow:hover{
  box-shadow:0px 2px 10px 0px rgba(40,40,40,0.9);
}
.glow:active{
  opacity:0.5;
}
.pButton{width:100%;height:30px;background:green;}
.pButton:hover{opacity:0.5;}
.pageButton{margin:auto;width:40%;padding:10px;background:#003366;text-align:center;border-radius:5px;margin-top:80px;cursor:pointer;margin-bottom:30px;max-height:30px;z-index:50;position:relative;}
.pageButton:active{opacity:0.7;transition:0.2s;}
.pageButton:hover{opacity:0.5;}
/*img classes*/
.wide{width:100%;}
.tall{height:100%;margin:auto;max-width:300px;max-height:100%;} 
img {
   display: block;
   width: auto;
   margin: auto;
}

/*characteristic classes*/
.flexCenter{
  display:flex;
  margin: auto;
}

/*overall page code -- end*/




/*     --- page-related code ---      */
.pageContent{
  border:0px solid red;
  height:100%;
  width:calc(100% - 120px);
  margin-left:120px;
  color:white;
  overflow-y:scroll;
  z-index:15;
  position:relative;
}
.nextButton{}

/*home*/
.featured{
  position:relative;
  min-height:400px;
  width:80%;
  max-width:1300px;
  margin:auto;
  border:0px solid green;
  
}
.featured .item{
  position:relative;
  border-radius:3px;
  min-height:30px;
  width:30%;
  float:left;
  cursor:pointer;
  overflow:hidden;
}
.featured h3{margin:15px;}
.featured h4{margin:15px;color:gray;}
.featured .push{
  margin-left:4.5%;
}
.featured .container{max-height:200px;margin:auto;border:0px solid red;overflow:hidden;position:relative;}

/*services*/
.services{
  margin:auto;
  margin-top:60px;
  min-height:370px;
  width:80%;
  background:none;
  border:0px solid blue;
}
.services .item{
  width:33%;
  min-height:100px;
  background:none;
  float:left;
  border:0px solid green;
}
.services li{padding:5px;}
.services .serviceTitle{
  width:100%;
  height:60px;
  background:rgba(250,250,250,0.2);
  font-size:26px;
  display:flex;
  align-items:center;
  justify-content:center;
}
.services ul{
  border:0px solid blue;
  padding-top:20px;
  margin:auto;
  width:80%;
  color:rgb(200,200,200);
}
 
/*projects*/
.projects p{
  text-align:left;
}
.projects{
  border:0px solid green;
  height:80%;
  position:relative;
  z-index:;
}
.projectsMobile{
  display:none;
}
.projectMobileItem{
  text-align:left !important;
  display:none;
  min-height:200px;
  width:100%;
  margin:auto;
  max-width:300px;
  border:0px solid blue;
}
.projectMobileItem p{text-align:left;}
.projects #desc{
  width:66%;
  left:0;
  
}
.projects #desc2,.projects #desc3{
  width:33%;
  opacity:0;
 
}
#desc2{left:0;}
#desc3{left:66%;}
.projects #desc,.projects #desc2,.projects #desc3{
  user-select:none;
  --height:47px;
  position:absolute;
  min-height:400px;
  height:calc(100% - var(--height));
  top:calc(var(--height) - 1px);
  background:linear-gradient(rgba(07,19,01,1) 80%, transparent);
  transition:0.2s ease-out;
  opacity:0;
  border:0px solid blue;
}
.projects .item,.projects .item2{
  height:100%;
  width:33%;
  float:left;
  border:0px solid blue;
  position:relative;
}
.item2 .tall{max-height:250px;}
.projects .button{
  width:100%;
  text-align:center;
  padding-top:10px;
  padding-bottom:10px;
  border:1px solid lightgray;
  transition:0.2s, color 0.1s;
  cursor:pointer;
}
.projects h3{padding-left:8px;color:rgb(200,200,200);}
.projects p{padding-top:0px;}
.button:hover{background:rgba(100,100,100,0.1)}
.button:active{color:gray;border-color:gray;background:rgba(100,100,100,0.0);}
/*
 fillers (below) are made to fill in each project item
 so that it has a top half and a bottom half 
*/
.projects .filler{
  height:50%;
  max-height:50%;
  background:;
}
.projects .item:hover{
  cursor:pointer;
  background:lightblue;
}

/*team*/
.team{
  margin:auto;
  width:60%;
  border:0px solid blue;
  min-height:450px;
  margin-top:2%;
  margin-bottom:40px;
}
.team .item{
  height:380px;
  width:50%;
  float:left;
  /*background:linear-gradient(30deg, white,blue);*/
}
.team .item p{padding:10px;text-align:left;font-size:12px;}

/*contact*/
.contact{
  margin:auto;
  height:350px;
  width:70%;
  border:0px solid blue;
}
.contact .item{
  height:300px;
  width:50%;
  float:left;
  background:linear-gradient(30deg, white,blue);
}

.mobileCorrection{display:none;}
/*responsive code*/

/*large screens*/
@media screen and (min-width:1600px){
    .featured .item{border:2px solid rgba(200,200,200,0.2);width:29%;}
.featured .item:hover{box-shadow:0px 0px 10px 5px rgba(200,200,200,0.2);}
    
/*
.glow{border:2px solid rgba(200,200,200,0.2);}
.glow:hover{
    box-shadow:0px 2px 15px 0px rgba(200,200,200,0.9) !important;
}
.featured .item{width:29%;}


.featured .item{border:2px solid rgba(200,200,200,0.2);width:29%;}
.featured .item:hover{box-shadow:0px 0px 10px 5px rgba(200,200,200,0.2);}
*/
/*    
.glow{border:3px solid rgba(40,40,40,0.5);
transition:0.15s ease-in;}
.glow:hover{
box-shadow:0px 2px 15px 0px rgba(40,40,40,0.9);
}
.glow:active{
opacity:0.5;
}
*/
}
    
/*mobile screens*/ 
@media screen and (max-width:900px){
  body{
    font-family:"Roboto";
    font-stretch: condensed !important;
    font-weight:thinner;
    overflow:visible;
    height:100%;
    
  }
  #navContainer{ 
    width:100%;
    height:40px;
  }
  #mainNav{
    position:fixed;
    height:40px;
    width:100%;
    background:linear-gradient(120deg,rgba(170,170,170,0.6) 50%,transparent)
  }
  
  #mobileHam{
    width:15%;
    display:block;
    color:rgba(80,80,80,1);
    font-size:30px;
    text-align:center;
    margin-top:5px;
    border:0px solid blue;
    transform:rotate(180deg);
  }
  #mobileHam:active{
    color:gray;
    box-shadow:inset 0px 0px 10px 0px black;
  }
  #mobileMenu{
    display:block;
    margin-left:-100%;
  }
  #desktopNav{
    display:none;
  }
  #colorSubCover{height:90%}
  #colorMainCover{display:inline-block;}
  .pageContent{
    margin-top:60px;
    margin-left:0 !important;
    width:100% !important;
    animation:!important;
    overflow:visible;
  }
  .mobileCorrection{display:block;}
  .featured .item,.services .item{
    float:none;
    width:100%;
    min-height:250px;
    margin-bottom:40px;
  }
  .services{min-width:280px !important;border:0px solid blue;}
  .featured .item{border:1px solid rgba(200,200,200,0.2);}
  .featured{
    width:40%;
    min-width:250px;
  }
  
  .featured .push{
    margin-left:0%;
  }
  .projects{
    display:none;
  }
  .projects .item{
    float:none;
  }
  .projectMobile{display:block;}
  .projectMobileItem{display:block;margin-bottom:20px;border:1px solid rgb(100,100,100);padding:20px;border-radius:3px;}
  
  
  .services{
    width:40%;
    min-width:200px;
  }
  .team{border:0px solid blue;width:80%;}
  .team .item{
    border-radius:3px;
    min-height:430px;
    width:100%;
    float:none;
    margin-bottom:20px;
    border:1px solid rgba(100,100,100,0.7);
    padding:10px;
  }
  .contact{
    width:90%;
  }
  
}



/*animations*/
@keyframes fadeInBottom{
  0%{
    margin-top:-10px;
    opacity:0;
  } 
  
  100%{
    opacity:1;
  }
} 
@keyframes fadeIn{
  0%{
    margin-top:10px;
    opacity:0;
  } 
  
  100%{
    opacity:1;
  }
} 
@keyframes fade{
  0%{
    opacity:0;
  }
  100%{
    opacity:1;
  }
}  
@keyframes flyIn{
  0%{
    top:00px;
    left:000px;
    opacity:0.1;
  }
  40%{
    left:90%;
  }
  100%{ 
    opacity:0.6;
    top:500px;
    left:100%;
  }
}       
  </style>
  <!----------------------------END STYLE --> 
  
  <script>
//--------------------------------------------
var pageIndex = 0;
function updatePageIndicator(num){
  var pages = document.getElementsByClassName("pageIndicator");
  
  //update page indicators (nav bar)
  for(var a=0;a<pages.length;a++){
    if(a == num){
      pages[a].style.textDecoration = 'underline';
    }else{
      pages[a].style.textDecoration = 'none';
    }
  }
  
  var colorCover = document.getElementById("colorSubCover");
  switch(num){
    case 0:
      colorCover.style.background = '#3b435b';
      break;
    case 1:
      colorCover.style.background = '#4d7c65';
      break;
    case 2:
      colorCover.style.background = '#8a2828';
      break;
    case 3:
      colorCover.style.background = 'white';
      break;  
    case 4:
      colorCover.style.background = 'gray';
      break;
      
    default:
      break;
  }  
} 
function updatePage(num){
  var animation = "";
  var time = "0.6";
  if(num > pageIndex){
    animation = 'fadeIn '+time+'s ease-out';
  }else if(num < pageIndex){
    animation = 'fadeInBottom '+time+'s 0s ease-out';
  }else{//do nothing if you're already on selected page
  }
  pageIndex = num;
  var mobileMenu = document.getElementById("mobileMenu");
  var pages = document.getElementsByClassName("pageContent");
  for(var i=0;i<pages.length;i++){
    if(i==num){ 
      pages[i].style.display = 'block';
      pages[i].style.animation = animation;
    }else{
      pages[i].style.display = 'none';
    } 
  }
  window.scrollTo(0,0);
  updatePageIndicator(num);
}
function openMenu(){
  var mobileMenu = document.getElementById("mobileMenu");
  
  if(menuStatus == "open"){
    mobileMenu.style.marginLeft = "-100%";
    mobileMenu.style.background = 'rgba(200,200,200,0.95)';
    mobileMenu.style.opacity = "0";
    menuStatus = "closed";
  }else{
    mobileMenu.style.marginLeft = "0";
    mobileMenu.style.background = 'rgba(200,200,200,0.95)';
    mobileMenu.style.opacity = "1";
    menuStatus = "open";
  }
  
}
var menuStatus = 'closed';

function mobilePageUpdate(arg){
  updatePage(arg);
  openMenu();
}
//actual function calls: 
//updatePageIndicator(0);
//updatePage(0);



//helper fxns:
function moveDescriptor(arg){
  var desc = document.getElementById("desc");
  var desc2 = document.getElementById("desc2");
  var desc3 = document.getElementById("desc3");
  
  //2 descriptions on same block
  var HexDesc = document.getElementById("HexDesc");
  var SportDesc = document.getElementById("SportDesc");
  
  switch (arg){
    case 1:    
      //Hexient
      HexDesc.style.display = 'block';
      SportDesc.style.display = 'none';
      
      desc.style.opacity = "1";
      desc.style.left = "33%";
      desc.style.zIndex = "16";
      
      desc2.style.opacity = "0";
      desc2.style.zIndex = "15";
      
      desc3.style.opacity = "0";
      desc3.style.zIndex = "15";
      break;
    case 2: 
      //CarryOn
      desc.style.opacity = "0";
      desc.style.zIndex = "15";
      
      desc2.style.opacity = "1";
      desc2.style.zIndex = "16";
      
      desc3.style.opacity = "1";
      desc3.style.zIndex = "16";
      break;
    case 3: 
      //Sportmaster
      HexDesc.style.display = 'none';
      SportDesc.style.display = 'block';
      
      desc.style.opacity = "1";
      desc.style.left = "0%";
      desc.style.zIndex = "16";
      
      desc2.style.opacity = "0";
      desc2.style.zIndex = "15";
      
      desc3.style.opacity = "0";
      desc3.style.zIndex = "15";
      break;
  }
}
//--------------------------------------------
  </script>
  
</head>

<div id='colorSubCover'>
  <div id='circle'></div>
</div> 
<div id='colorMainCover'>
  <div class='IE_Cover'>
    <p>
      It looks like you're using <u style='color:white;'>Internet Explorer, or another unsupported browser.</u>
      <br><br>Orbis Development uses the most up to date technologies for our development, including for our website.<br>Therefore, to access our website, you'll need to use a more modern browser.<br><br>The following are browsers we support:<br>
      <b style='color:white;'>Microsoft Edge, Google Chrome, Mozilla Firefox, and Safari</b>
    </p>
    <br>
  </div>
  
  <!--home-->
  <div class='pageContent'>
    <h1>Orbis Development</h1>
    <p>Personalized, scalable solutions, because your problems aren't out of the box</p>
    <br>
    <div class='mobileCorrection'></div>
    <div class='featured'>
      <div class='item glow' onclick='updatePage(1);moveDescriptor(1)'>
        <div class='container'>
        <img class='wide' src='/images/HexHome.PNG'>
        </div>
        <h3>Software Creation</h3>
        <h4>Completely custom, easily accessible solutions of all scales</h4>
      </div> 
      <div class='item push glow' onclick='updatePage(1);moveDescriptor(2);'>
        <div class='container' style=''> 
          <img class='tall' src='/images/CarryOn_Map.png' style='margin:auto;max-height:200px;'>
        <!--
        <img class='tall' src='https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80'>-->
        </div> 
        <h3>Mobile development</h3>
        <h4>User-friendly applications using the lastest back-end technologies</h4>
      </div>
      <div class='item push glow' onclick='updatePage(1);moveDescriptor(3)'>
        <div class='container'>
        <img class='wide' src='/images/Sportmaster.png'>
        </div><!--end container-->
        <h3>Web solutions</h3>
        <h4>We're versed in everything you'll need to give your business the web presence you've been looking for</h4>
      </div><!--end item-->
    </div>
    <div class='mobileCorrection'><div class='pageButton' onclick='updatePage(1)' style='margin-top:20px;'>Our Projects</div><br><br></div>
  </div>
  
  <!--projects-->
  <div class='pageContent'>
    <h2>Here are some of the highlights of our work</h2>
    <div class='projects'>
      <div id='desc'>
        <div id='HexDesc'>
        <!-- descriptions of each tab --> 
          <?php print($HexDesc); ?>
          <div class='pageButton' onclick='updatePage(2)' style='margin-top:20px;'>View our Services</div>
        </div><!--end hex desc-->
        
        <div id='SportDesc'>
        <!-- descriptions of each tab --> 
         <?php print($SportDesc); ?>
        <div class='pageButton' onclick='updatePage(2)' style='margin-top:20px;'>View our Services</div>
        </div><!--end sport desc-->
        
      </div><!--end desc block-->
      <div id='desc2'>
        <?php print($CarryOnDesc_1); ?>
        <div class='pageButton' onclick='updatePage(2)' >View our Services</div>
      </div>
      <div id='desc3'>
        <?php print($CarryOnDesc_2); ?>
      </div>
      <div class='item2'>
        <div class='button' onclick='moveDescriptor(1)'>Hexient Solutions</div>
        <img class='wide' src='/images/HexHome.PNG'>
        <h3>Full-scale, Enterprise HR Platform</h3>
      </div>
      <div class='item2' onclick='moveDescriptor(2)'>
        <div class='button'>CarryOn</div>
        <img class='tall' src='/images/CarryOn_Map.png'>
        <h3>Global Travel application</h3>
      </div>
      <div class='item2'>
        <div class='button' onclick='moveDescriptor(3)'>
          Sportmaster
        </div>
        <img class='wide' src='/images/Sportmaster.png'>
        <h3>Custom-built Retail Solution</h3>
      </div>
    </div><!-- end projects (desktop)-->
    
    <!--mobile version of projects--> 
    <style>.mobileTitle{
    border:1px solid lightgray;padding:5px;display:inline-block;border-radius:2px;
    background:black;font-weight:bold;color:rgba(200,200,200,0.7);
    }</style>
    <div class='projectMobile'>
      <!--cells stacking on top of each other--> 
      <div class='projectMobileItem'>
        <h3 class='mobileTitle'>Hexient Solutions</h3>
        <img class='wide' src='/images/HexHome.PNG'>
        <?php print($HexDesc); ?>
      </div>
      
      <div class='projectMobileItem'>
          <h3 class='mobileTitle'>CarryOn</h3>
        <img class='wide' src='/images/CarryOn_Map.png'>
        <?php print($CarryOnDesc_1);print($CarryOnDesc_2); ?>
      </div>
      
      <div class='projectMobileItem'>
        <h3 class='mobileTitle'>Sportmaster Bait & Tackle</h3>
        <img class='wide' src='/images/Sportmaster.png'>
        <?php print($SportDesc); ?>
      </div>
      
      <div class='pageButton mobileCorrection' onclick='updatePage(2)' style=''>View our Services</div>
      <br><br>
    </div><!-- end projects (mobile) --> 
    
  </div><!--end pageContent: Projects--> 
  
  <!--services-->
  <div class='pageContent'>
    <h2>Here to help build ideas and create solutions.</h2>
    <p style='text-align:left;max-width:1000px;margin:auto;'>Your ideal partners for MVP Development, Solution Architecture Design, and technical solutions for web-based and mobile devices. <br><br>We foster transformation and improve businesses by melding the tools and skills needed to help organizations succeed. By giving our clients the ability to utilize artificial intelligence, big data, and other cutting edge technologies, we facilitate their ability to reach new heights.
</p>
    <div class='services'>
      
      <div class='item' style='margin-bottom:0px !important;'>
        <div class='serviceTitle' >
          Consulting
        </div>
        <ul>
          <li>Consulting <u>Industry Expertise</u></li>
          <li><u>Advisory Services</u> for Software and Web Solutions</li>
          <li>Solution Design, Implementation and Oversight</li>
        </ul>
      </div>
      <div class='item'>
        <div class='serviceTitle'>
          Development
        </div>
        <!-- note to shawn i think this page should be divided differently -->
        <ul>
          <li>Fully Responsive <u>Websites</u> and <u>Mobile Applications</u></li>
          <li>Create user-centric digital experiences</li>
          <!--
          <li>Utilize current data to create novel solutions</li>
          -->
          <li> Improve on current digital infrastructure</li>
          <li> Apply <u>cloud storage</u> capabilities </li>
          
          <li>Scalable <u>Database Design and Implementation</u></li>
          
          <li>Open Source Library Integration</li>
        </ul>
      </div>
      <div class='item'>
        <div class='serviceTitle'>
          Additional
        </div>
        <ul>
          <li>Unity Game Development</li>
          <li>Advanced <u>Data Analytics, AI, and Machine Learning</u></li>
          <li> Exploit modern technological services: <u>AWS, Shopify, Stripe, SerAPi, Microsoft Azure, Twilio</u> <!--(AWS, Shopify, Stripe, SerAPi, Microsoft Azure, Twilio) --></li>
          <li><u>Salesforce</u> Administration and Development</li>
        </ul>
      </div>
      
    </div><!--end services -->
    <div class='pageButton' onclick='updatePage(3)'>Meet the Team</div>
    <div class='mobileCorrection'><br><br></div>
  </div>
  
  <!--team-->
  <style>.teamPhoto{margin:auto;}</style>
  <div class='pageContent' style=''>
    <div class='team'>
      <div class='item'>
        <img src='/images/shawn.jpeg' class='teamPhoto'>
        <br>
        <span style='padding:5px;'><b>Shawn Soneja</b></span><br>
        <span style='padding:5px;'><b>Co-founder, Advisor</b></span>
        <p>
        Shawn Soneja went to NYU's Stern School of Business for his undergraduate education, where he graduated with a degree in Finance, minoring in Computer Science and Mathematics. He's now a practicing Technology Consultant.
        <br><br>
        Shawn excels in front-end technologies, design, and project management.
        </p>
      </div>
      <div class='item'>
        <img src='/images/bonga.jpeg' class='teamPhoto'>
        <br>
        <span style='padding:5px;'><b>Siyabonga Matchaba</b></span><br>
        <span style='padding:5px;'><b>Co-founder, Project Lead</b></span>
        <p>
        Siyabonga has both an undergraduate and graduate education. For his undergraduate studies, Siyabonga attended NYU's Stern School of Business, majoring in Finance and Data Science and minoring in Philosophy. He's currently acheiving his graduate degree at Northwestern's Master of Science in Artificial Intelligence Program (MSAI).
        <br><br>
        Siyabonga's strengths are innovate, cutting-edge back-end technologies (AI and ML), ideation, and advanced analytics.
        </p>
      </div>
    </div>
    <div class='pageButton' onclick='updatePage(4)'>Contact Us!</div>
    <div class='mobileCorrection'><br><br></div>
  </div>
  
  <!--contact-->
  <style>textarea{min-height:200px;}
    .submit{}
    .submit{color:white;border-width:0px;margin-left:30%;width:40%;padding:10px;background:#003366;text-align:center;border-radius:5px;margin-top:40px;cursor:pointer;margin-bottom:30px;z-index:50;position:relative;font-family:"Poppins";}
    .submit:active{opacity:0.7;transition:0.2s;}
    .submit:hover{opacity:0.5;}
  </style>
  <div class='pageContent'>
    <h2>Drop us a line</h2>
    <p>We'll get back to you within 24 hrs, guaranteed</p>
    <div class='contact'>
      <input type='text' style='width:100%' placeholder='Subject'/>
      <textarea style='width:100%' placeholder='Inquiry, Project Descriptions, Questions, etc.'></textarea>
      <input type='submit' class='submit'/>
      <!--
      <p>Or reach out directly</p>
      shawn@orbis
      bonga@orbis <i> should probably have an overall email intead of asking them to pick</i>
      -->
    </div>
  </div>
</div><!--end colorMainCover--> 

<div id='mobileMenu'>
    <div class='navItem' onclick='mobilePageUpdate(0)' style='height:60px;margin-top:40px;'><img style='max-height:100%;border:0px solid red;transition: width 0.5s;margin:0;padding:0;margin:auto;'  src='/images/OrbisLogo.PNG'></div>       
    <div class='navItem' onclick='mobilePageUpdate(0)'>Home</div>
    <div class='navItem' onclick='mobilePageUpdate(1)'>Projects</div>
    <div class='navItem' onclick='mobilePageUpdate(2)'>Services</div>
    <div class='navItem' onclick='mobilePageUpdate(3)'>Team</div>
    <div class='navItem' onclick='mobilePageUpdate(4)' style='border-bottom:1px solid gray;'>Contact</div>
</div>
<!-- main Nav --> 
<div id='navContainer'>
  <div id='mainNav'>
      
    <i class="material-icons" id='mobileHam' onclick='openMenu()'>line_weight</i>
    <div id='desktopNav'>
      <li style='height:60px;border:0px solid blue;padding:0;' id='logo'>
        <img style='max-height:100%;border:0px solid red;transition: width 0.5s;margin:0;padding:0;margin:auto;'  src='/images/OrbisLogo.PNG'>
        
      </li>
      <li class='pageIndicator' onclick='updatePage(0);'>Home</li>
      <li class='pageIndicator' onclick='updatePage(1);'>Projects</li>
      <li class='pageIndicator' onclick='updatePage(2);'>Services</li>
      <li class='pageIndicator' onclick='updatePage(3);'>Team</li>
      <li class='pageIndicator' onclick='updatePage(4);'>Contact</li>
    </div>
  </div>
</div><!--end nav container--> 

</body>
</html>