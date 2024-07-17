 
$(document).ready(function () {
  var owl = $('.owl-carousel')
  owl.owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    padding: 0,
    touchDrag: true,
    mouseDrag: true,
    nav: false,
    dots: false,
    smartSpeed: 2000,
    dotsData: true,
    navText: ["<i class='fa-solid fa-arrow-left-long'></i>", "<i class='fa-solid fa-arrow-right-long'></i>"],
    navContainer: '.test-nav',
    responsive: {
      0: {
        items: 1,

      },
      768: {
        items: 2,
      },
      1170: {
        items: 4,
      }
    }
  })

  // Pause carousel on mouseenter
  $('.owl-carousel').mouseenter(function () {
    owl.trigger('stop.owl.autoplay')
  })

  // Resume carousel on mouseleave
  $('.owl-carousel').mouseleave(function () {
    owl.trigger('play.owl.autoplay')
  })
});






   // sticky navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.main-header').addClass("sticky");
  } else {
    $('.main-header').removeClass("sticky");
  }
});



   // sticky navbar
   $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.mob-header').addClass("sticky");
    } else {
      $('.mob-header').removeClass("sticky");
    }
  });




//// scroll top
$(document).ready(function () {
	// This code will run after the document is fully loaded

	// Check the scroll position and show/hide the scroll-top button
	$(window).scroll(function () {
		if ($(this).scrollTop() >= 400) {
			$('.scroll-top').fadeIn();
		} else {
			$('.scroll-top').fadeOut();
		}
	});

	// Scroll to top when the button is clicked
	$('.scroll-top').on('click', function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});
});




// }(jQuery));
jQuery(document).ready(function ($) {
  // Form Validation and Submission for Home Page Form
  $("#contactForm").on("submit", function (e) {
      e.preventDefault();

      // Collect form data
      const h_name = $("#h_name").val();
      const h_phone = $("#h_phone").val();
      const h_email = $("#h_email").val();
      const h_subject = $("#h_subject").val();
      const h_message = $("#h_message").val();

      // Validate all inputs before making the AJAX call
      if (!validateInputs(h_name, "^[a-zA-Z][a-zA-Z. ]{2,40}$")) {
          alert("Please enter a valid name");
          return false;
      }
      if (!validateInputs(h_phone, "^[0-9 -]{10,15}$")) {
          alert("Please enter a valid phone number");
          return false;
      }
      if (!validateInputs(h_email, "^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$")) {
          alert("Please enter a valid email address");
          return false;
      }
      if (!h_subject) {
          alert("Please enter a subject");
          return false;
      }
      if (!h_message) {
          alert("Please enter a message");
          return false;
      }

      // If input validation passes, proceed with the AJAX submission
      var data = new FormData(this);
      data.append('msg', h_message); // Ensure the backend correctly handles the 'msg' key for the message

      if ($("#h_submit").hasClass("process")) {
          alert("Please wait while processing...");
      } else {
          $("#h_submit").addClass("process");
          $.ajax({
              url: "contactmail.php",
              type: "POST",
              data: data,
              processData: false,
              contentType: false,
              cache: false,
              success: function (response) {
                  var result = $.parseJSON(response);
                  if (result[0] === "success") {
                      // If the response is 'success', redirect to the thank-you page
                      window.location.href = "thankyou.php";
                  } else {
                      // Handle other responses accordingly
                      handleResponse(result);
                  }
              },
              error: function () {
                  alert("Error submitting form. Please try again.");
                  $("#h_submit").removeClass("process");
              }
          });
      }
  });

  // Validate input against a regex pattern
  function validateInputs(value, pattern) {
      return new RegExp(pattern).test(value);
  }

  // Handle non-success AJAX responses
  function handleResponse(response) {
      switch (response[0]) {
          case "validation":
              alert("Fill all mandatory fields");
              break;
          case "product":
              alert("Please select a product.");
              break;
          case "tryagain":
              alert("Please try again.");
              break;
          default:
              alert("An unexpected error occurred.");
              break;
      }
      $("#h_submit").removeClass("process");
  }
});

///////


$(window).on('load', function (event) {
  $('#preloader').delay(300).fadeOut(300);
});


document.addEventListener('wheel', function(event) {
  var image = document.getElementById('rotateImage');
  var rotation = parseInt(image.getAttribute('data-rotation') || 0);
  var rotationChange = event.deltaY > 0 ? 10 : -10; // Changes the rotation degree based on scroll direction
  rotation += rotationChange;
  image.style.transform = 'rotate(' + rotation + 'deg)';
  image.setAttribute('data-rotation', rotation);
});



document.addEventListener('DOMContentLoaded', (event) => {
  initializeWhatsAppChat();
});

function initializeWhatsAppChat() {
  const menuToggle = document.querySelector(".whatsapp-float");
  const wrapperMenu = document.querySelector(".nav-whatsapp");
  const closeWA = document.querySelector(".closeWA");
  const inputs = document.querySelectorAll('.Fcontrol input[type=text], .Fcontrol input[type=email], .Fcontrol textarea');

  if (menuToggle && wrapperMenu && closeWA) {
    menuToggle.onclick = () => {
      wrapperMenu.classList.toggle('active');
    };
    closeWA.onclick = () => {
      wrapperMenu.classList.remove('active');
    };
  }

  inputs.forEach(input => {
    input.addEventListener('input', function() {
      const bg = this.value ? 'show' : 'none';
      this.setAttribute('class', bg);
    });
  });

  const whatsappSendButton = document.getElementById('whatsappSend');
  if (whatsappSendButton) {
    whatsappSendButton.onclick = sendToWhatsApp;
  }
}

function sendToWhatsApp() {
  const name = document.getElementById("cName").value;
  const email = document.getElementById("cEmail").value;
  const subject = document.getElementById("cSubject").value;
  const message = document.getElementById("cMessage").value;
  const postLink = window.location.href;

  const errorName = document.getElementById("error_name");
  const errorEmail = document.getElementById("error_email");
  const errorMessage = document.getElementById("error_message");

  if (!name) {
    if (errorName) errorName.textContent = 'Please enter your name';
    return false;
  } else {
    if (errorName) errorName.textContent = '';
  }

  if (email.indexOf("@") === -1 || email.length < 6) {
    if (errorEmail) errorEmail.textContent = 'Please enter a valid email';
    return false;
  } else {
    if (errorEmail) errorEmail.textContent = '';
  }

  if (!message) {
    if (errorMessage) errorMessage.textContent = 'Please enter your message';
    return false;
  } else {
    if (errorMessage) errorMessage.textContent = '';
  }

  let finalMessage = `New message from ${name}\n\n`;
  finalMessage += `*Name:* ${name}\n`;
  finalMessage += `*Email:* ${email}\n`;
  finalMessage += `*Subject:* ${subject}\n`;
  finalMessage += `*Message:* ${message}\n\n`;
  finalMessage += `*Form:* ${postLink}\n`;

  const walink = 'https://api.whatsapp.com/send';
  const phoneNumber = '+919843647168';
  const encodedMessage = encodeURIComponent(finalMessage);
  const whatsappUrl = `${walink}?phone=${phoneNumber}&text=${encodedMessage}`;

  window.open(whatsappUrl, '_blank');
  return true;
}