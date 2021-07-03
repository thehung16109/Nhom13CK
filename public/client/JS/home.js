/* Author: Nguyen Thi Bich Phuong, 17520926 */

/* Scroll to top */
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

/* Button Search */
const searchBtn = document.querySelector(".search-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const searchBox = document.querySelector(".search-box");
const searchInput = document.querySelector("input");
searchBtn.onclick = () => {
    searchBtn.style.display = 'none';
    cancelBtn.style.display = 'block';
    searchInput.style.visibility = 'visible';
    searchBox.classList.add("active");
    searchInput.classList.add("active");
    cancelBtn.classList.add("active");
}

cancelBtn.onclick = () => {
    searchBtn.style.display = 'block';
    cancelBtn.style.display = 'none';
    searchInput.style.visibility = 'hidden';
    searchBox.classList.remove("active");
    searchInput.classList.remove("active");
    cancelBtn.classList.remove("active");
}