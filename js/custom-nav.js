document.addEventListener("DOMContentLoaded", function() { 
    //not supported in IE8 

    document.getElementById("navBttn").addEventListener("click", toggleNav);

function toggleNav() {
  

    var toggleNav = document.getElementById("nav-wrap");
    toggleNav.classList.toggle("toggleNav");

}

  });