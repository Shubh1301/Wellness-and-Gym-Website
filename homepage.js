
  window.onclick = function(){
    var mybutton = document.getElementById("myBtn");
    if(document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000){
       mybutton.style.display = "block";
    }
    else{
           mybutton.style.display = "none";
    }
}
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
var opacity = 0;
  var intervalID = 0;
  window.onload = fadeIn;

function fadeIn() {
      setInterval(show, 600);
  }

function show() {
      var body = document.getElementById("fade");
      opacity = Number(window.getComputedStyle(body)
                       .getPropertyValue("opacity"));
      if (opacity < 1) {
          opacity = opacity + 0.1;
          body.style.opacity = opacity
      } else {
          clearInterval(intervalID);
      }
  }
if(document.images) {
    var image1 = new Image();     
    image1.src = "gold.jpg";
    var image2 = new Image();     
    image2.src = "workout.webp";
 }
 
 
 var imgObj = null;
 var animate ;
 function init() {
    imgObj = document.getElementById('myImage');
    imgObj.style.position= 'relative'; 
    imgObj.style.left = '0px'; 
 }
 function moveRight() {
    imgObj.style.left = parseInt(imgObj.style.left) + 10 + 'px';
    animate = setTimeout(moveRight,60);    
 }
 function stop() {
    clearTimeout(animate);
    imgObj.style.left = '0px'; 
 }
 window.onscroll = init;
  
 function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("username");
  if (user != "") {
    alert("Welcome again " + user);
  } else {
     user = prompt("Please enter your name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}
