/* Author: Nguyen Thi Bich Phuong, 17520926 */

/* Scroll to top */
var mybutton = document.getElementById("myBtn");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

/* Button Search */
const searchBtn = document.querySelector(".search-btn");
const cancelBtn = document.querySelector(".cancel-btn");
const searchBox = document.querySelector(".search-box");
const searchInput = document.querySelector("input");
searchBtn.onclick = () => {
  searchBox.classList.add("active");
  searchInput.classList.add("active");
  cancelBtn.classList.add("active");
}

cancelBtn.onclick = () => {
  searchBox.classList.remove("active");
  searchInput.classList.remove("active");
  cancelBtn.classList.remove("active");
}

// Xem Thêm: Phùng Thế Hùng
var x = 6;
function xemThem() {

  var xemThem = document.querySelectorAll(".hs-item");
  if (x == xemThem.length) {
    var btnXemThem = document.querySelector("#btnXemThem");
    btnXemThem.disabled = true;
    btnXemThem.innerHTML = "Không còn gì để xem";
    btnXemThem.style.border = "1px solid transparent";

  }
  var i;
  for (i = 3; i < x; i++) {
    xemThem[i].classList.remove("d-none");

  }
  i = i + 2;
  x = x + 2;

}

window.onscroll = function () {
  fixed = document.querySelector(".navbar-sticky")
  fixed2 = document.querySelector(".header-logo")
  if (window.scrollY > 500) {
    fixed.classList.add('backgroundWhite');
    fixed2.classList.add('logo-none');
  }
  else {
    fixed.classList.remove('backgroundWhite');
    fixed.classList.add('transition');
    fixed2.classList.add('transition');
    fixed2.classList.remove('d-none');
    fixed2.classList.remove('logo-none');
  }
}