// dark mode
const enableDarkModeButton = document.querySelector('.enable-dark-mode');
const disableDarkModeButton = document.querySelector('.disable-dark-mode');
if (enableDarkModeButton && disableDarkModeButton) {
  // Set initial state based on local storage
  if (localStorage.getItem('dark-mode') === 'true') {
    document.documentElement.classList.add('dark');
  }
  enableDarkModeButton.addEventListener('click', () => {
    document.documentElement.classList.add('dark');
    localStorage.setItem('dark-mode', true);
  });
  disableDarkModeButton.addEventListener('click', () => {
    document.documentElement.classList.remove('dark');
    localStorage.setItem('dark-mode', false);
  });
};
const enableDarkModeButton2 = document.querySelector('.enable-dark-mode2');
const disableDarkModeButton2 = document.querySelector('.disable-dark-mode2');
if (enableDarkModeButton2 && disableDarkModeButton2) {
  // Set initial state based on local storage
  if (localStorage.getItem('dark-mode') === 'true') {
    document.documentElement.classList.add('dark');
  }
  enableDarkModeButton2.addEventListener('click', () => {
    document.documentElement.classList.add('dark');
    localStorage.setItem('dark-mode', true);
  });
  disableDarkModeButton2.addEventListener('click', () => {
    document.documentElement.classList.remove('dark');
    localStorage.setItem('dark-mode', false);
  });
};


document.addEventListener("DOMContentLoaded", function() {
  var checkbox = document.getElementById("c11");
  var zabanLink = document.getElementById("zaban");

  checkbox.addEventListener("change", function() {
    if (this.checked) {
      zabanLink.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
// slyder
let defaultTransform = 0;
function goNext() {
  defaultTransform = defaultTransform - 300;
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.4) defaultTransform = 0;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
  else defaultTransform = defaultTransform + 300;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

//slyder end

function openNav2(){
    var element = document.querySelector("#main-nav");
   element.classList.replace("sidenav", "sidnav-t");
   var element = document.querySelector(".main-content-smallNav");
   element.classList.replace("main-content-smallNav", "main-content-activeNav");
   var element = document.querySelector(".main-content-smallNav2");
   element.classList.replace("main-content-smallNav2", "main-content-activeNav2");
   element.classList.replace("sidenav", "sidnav-t");
   document.getElementById("open00").style.display = 'flex';
   document.getElementById("close00").style.display = 'none';
   document.getElementById("close-nav-btn").style.display = 'flex';
   document.getElementById("open-nav-btn").style.display = 'none';

  } ;
  function closeNav2(){
    var element = document.querySelector("#main-nav");
   element.classList.replace("sidnav-t", "sidenav");
   var element = document.querySelector(".main-content-activeNav");
   element.classList.replace("main-content-activeNav", "main-content-smallNav");
   var element = document.querySelector(".main-content-activeNav2");
   element.classList.replace("main-content-activeNav2", "main-content-smallNav2");
   document.getElementById("open00").style.display = 'none';
   document.getElementById("close00").style.display = 'flex';
   document.getElementById("close-nav-btn").style.display = 'none';
   document.getElementById("open-nav-btn").style.display = 'flex';
  };

  
  function fillterContainerMobile() {
    document.getElementById("fillterContainer").style.display = "block";
  }
  function closeFillterContainerMobile() {
    document.getElementById("fillterContainer").style.display = "none";
  }

  // range pricer fillter
  var slider = document.getElementById("rangePrice");
  var output = document.getElementById("priceFillter");
  output.innerHTML = slider.value; // Display the default slider value

  // Update the current slider value (each time you drag the slider handle)
  slider.oninput = function () {
    output.innerHTML = this.value;
  };
 
  


  