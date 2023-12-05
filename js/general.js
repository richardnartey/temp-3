// Applying the sticky class to the page nav to make it stick at the top of the page
window.onscroll = function() {stickyFunction()};

let header = document.querySelector(".main-nav");
let sticky = header.offsetTop;

function stickyFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
};


// Show images after page has fully loaded
let blur_backgrounds = document.querySelectorAll(".blur-background");
blur_backgrounds.forEach(blur_background => {
    function loaded() {
        // show images
        blur_background.classList.add("loaded")
    }

    if(blur_background.complete) {
        loaded()
    } else{
        blur_background.addEventListener("load", loaded)
    }
})

// Displaying different content in the desktop dropdown menu when the dropdown buttons are clicked
let dropdown_btns = document.querySelectorAll(".dropdown-btn");
let dropdown_content_container_lists = document.querySelectorAll(".dropdown-content-container > li");

function show_dropdown_content (content_name) {
  for (dropdown_btn of dropdown_btns) {
    dropdown_btn.classList.remove("active");
  }

  for (dropdown_content_container_list of dropdown_content_container_lists) {
    dropdown_content_container_list.classList.remove("active");
  }
  event.currentTarget.classList.add("active");
  document.getElementById(content_name).classList.add("active");
}


// Changing the theme mode of the page
let theme_toggle = document.querySelector(".theme-toggle");

theme_toggle.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  theme_toggle.innerHTML = "<span class='light-mode'><i class='fa fa-moon'></i></span> Dark";
})


// Showing and hidding modal
let modal_closes = document.querySelectorAll(".modal-close");
let modal = document.querySelector(".modal");

for (modal_close of modal_closes) {
  modal_close.onclick = () => {
    modal.classList.remove("active");
  }
}


// Questions & Answers - Expanding or Collasping the accordion 
let accordion_buttons = document.querySelectorAll(".accordion-button");
accordion_buttons.forEach(accordion_button  => {
  accordion_button.addEventListener("click", () => {
    accordion_button.classList.toggle("active")
  })
})

//  










document.addEventListener("click", e => {
  let handle;
  if(e.target.matches(".handle")) {
    handle = e.target

  } else {
    handle = e.target.closest(".handle")
  }

  if(handle != null) onHandleClick(handle)
})


function onHandleClick(handle) {
  const slider = handle.closest(".slider-container").querySelector(".slider");

  const sliderIndex = parseInt(getComputedStyle(slider).getPropertyValue("--slider-index"))

  if(handle.classList.contains("left-handle")) {
    slider.style.setProperty("--slider-index", sliderIndex  - 1)
  }

  if(handle.classList.contains("right-handle")) {
    slider.style.setProperty("--slider-index", sliderIndex  + 1)
  }
}