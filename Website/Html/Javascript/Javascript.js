

  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change slide every 2 seconds
    // Select the necessary elements

    // Settings button section
    var settingsButton = document.getElementById("settings-button");
    var settingsOverlay = document.querySelector(".settings-overlay");

    // Toggle the settings overlay when the button is clicked
    settingsButton.addEventListener("click", function () {
      settingsOverlay.classList.toggle("open");
    });
  }
