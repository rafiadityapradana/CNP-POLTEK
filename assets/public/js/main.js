(function ($) {
  "use strict";

  if (!sessionStorage.getItem("key_access")) {
    $.ajax({
      type: "GET",
      url:
        $(document.body).data("base") +
        "access-app/" +
        sessionStorage.getItem("key_access") +
        "/" +
        sessionStorage.getItem("start_access"),
      success: function (res) {
        console.log(res);
        sessionStorage.setItem("key_access", res.results.key_access);
        sessionStorage.setItem("start_access", res.results.start_access);
      },
    });
  } else {
    $.ajax({
      type: "GET",
      url:
        $(document.body).data("base") +
        "access-app/" +
        sessionStorage.getItem("key_access") +
        "/" +
        sessionStorage.getItem("start_access"),
      success: function (res) {
        return true;
      },
    });
    setInterval(() => {
      $.ajax({
        type: "GET",
        url:
          $(document.body).data("base") +
          "access-app/" +
          sessionStorage.getItem("key_access") +
          "/" +
          sessionStorage.getItem("start_access"),
        success: function (res) {
          return true;
        },
      });
    }, 500000);
  }

  //sessionStorage.setItem("test", 123);

  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: "scroll",
  });

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  var carousel = function () {
    $(".carousel-testimony").owlCarousel({
      center: true,
      loop: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: [
        '<span class="ion-ios-arrow-back">',
        '<span class="ion-ios-arrow-forward">',
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  };
  carousel();

  $("nav .dropdown").hover(
    function () {
      var $this = $(this);
      // 	 timer;
      // clearTimeout(timer);
      $this.addClass("show");
      $this.find("> a").attr("aria-expanded", true);
      // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").addClass("show");
    },
    function () {
      var $this = $(this);
      // timer;
      // timer = setTimeout(function(){
      $this.removeClass("show");
      $this.find("> a").attr("aria-expanded", false);
      // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").removeClass("show");
      // }, 100);
    }
  );

  $("#dropdown04").on("show.bs.dropdown", function () {
    console.log("show");
  });

  // magnific popup
  $(".image-popup").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom", // class to remove default margin from left and right side
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
    },
  });

  $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false,
  });

  var contentWayPoint = function () {
    var i = 0;
    $(".ftco-animate").waypoint(
      function (direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("ftco-animated")
        ) {
          i++;

          $(this.element).addClass("item-animate");
          setTimeout(function () {
            $("body .ftco-animate.item-animate").each(function (k) {
              var el = $(this);
              setTimeout(
                function () {
                  var effect = el.data("animate-effect");
                  if (effect === "fadeIn") {
                    el.addClass("fadeIn ftco-animated");
                  } else if (effect === "fadeInLeft") {
                    el.addClass("fadeInLeft ftco-animated");
                  } else if (effect === "fadeInRight") {
                    el.addClass("fadeInRight ftco-animated");
                  } else {
                    el.addClass("fadeInUp ftco-animated");
                  }
                  el.removeClass("item-animate");
                },
                k * 50,
                "easeInOutExpo"
              );
            });
          }, 100);
        }
      },
      { offset: "95%" }
    );
  };
  contentWayPoint();

  $(".appointment_date-check-in").datepicker({
    format: "d M yyyy",
    autoclose: true,
  });

  $(".appointment_time").timepicker();
  //My SCRIPT//
  $(".custom-file-input").on("change", function () {
    let fileName = $(this).val().split("\\").pop();
    $(this).next(".custom-file-label").addClass("selected").html(fileName);
  });

  $("#form_experience").hide();
  $("#experience").click(function () {
    $("#experience").attr("disabled", true);
    $("#form_experience").show();
  });
  $("#cansel_form_experience").click(function () {
    $("#experience").attr("disabled", false);
    $("#form_experience").hide();
  });

  $("#form_certificate_update").hide();
  $("#update_certificate").click(function () {
    $("#update_certificate").attr("disabled", true);
    $("#form_certificate_update").show();
  });
  $("#cansel_form_certificate_update").click(function () {
    $("#update_certificate").attr("disabled", false);
    $("#form_certificate_update").hide();
  });

  $("#form_certificate").hide();
  $("#certificate").click(function () {
    $("#certificate").attr("disabled", true);
    $("#form_certificate").show();
  });
  $("#cansel_form_certificate").click(function () {
    $("#certificate").attr("disabled", false);
    $("#form_certificate").hide();
  });

  $("#form_ability").hide();
  $("#ability").click(function () {
    $("#ability").attr("disabled", true);
    $("#form_ability").show();
  });
  $("#cansel_form_ability").click(function () {
    $("#ability").attr("disabled", false);
    $("#form_ability").hide();
  });
  $("#form_update_commanditaire_vennootschap").hide();
  $("#update_commanditaire_vennootschap").click(function () {
    $("#update_commanditaire_vennootschap").attr("disabled", true);
    $("#form_update_commanditaire_vennootschap").show();
  });
  $("#cansel_update_commanditaire_vennootschap").click(function () {
    $("#update_commanditaire_vennootschap").attr("disabled", false);
    $("#form_update_commanditaire_vennootschap").hide();
  });

  $("#form_cv").hide();
  $("#commanditaire_vennootschap").click(function () {
    $("#form_cv").show();
    $("#commanditaire_vennootschap").attr("disabled", true);
  });
  $("#cansel_form_create_cv").click(function () {
    $("#form_cv").hide();
    $("#commanditaire_vennootschap").attr("disabled", false);
  });

  // $('#note').hide()
  // $('#form_personal').hide()
  // $('#completed_personal').click(function () {
  // 	$('#completed_personal').hide()
  // 	$('#form_personal').show()
  // 	$("#fisik").change(function () {
  // 		if ($("#fisik option:selected").val() === "Abnormal") {
  // 			$('#note').show()
  // 		} else {
  // 			$('#note').hide()
  // 		}
  // 	})
  // })
  $("#form_personal_update").hide();
  $("#update_personal").click(function () {
    $("#update_personal").hide();
    $("#form_personal_update").show();
  });
  $("#cansel_personal_update").click(function () {
    $("#update_personal").show();
    $("#form_personal_update").hide();
  });
  $("#lading_profile").hide();
  $("#form-photo").hide();

  $("#form-account").submit(function (e) {
    $("#btn-account").attr("disabled", true);
    $("#btn-photo").attr("disabled", true);
    $("#btn_pass").attr("disabled", true);
    $("#lading_profile").show();
    $("#profile_info").hide();
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        let data = JSON.parse(res);
        setTimeout(function () {
          $("#lading_profile").hide();
          $("#profile_info").show();
          $("#btn-account").attr("disabled", false);
          $("#btn-photo").attr("disabled", false);
          $("#btn_pass").attr("disabled", false);
          if (data.status === "false") {
            $("#form-message_false").html(data.results.msg);
          } else {
            $("#form-message_success").html(data.results.msg);
          }
        }, 5000);
      },
    });
  });
  $("#loading_send_job_appliacation").hide();
  $("#form_send_job_application").submit(function (e) {
    $("#form-message_success").hide();
    $("#form-message_false").hide();
    $("#form_send_job_application").hide();
    $("#loading_send_job_appliacation").show();
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        let data = JSON.parse(res);
        setTimeout(function () {
          if (data.status === "true") {
            $("#form-message_success").show();
            $("#form-message_success").html(data.results.msg);
            $("#form-message_false").hide();
            $("#form_send_job_application").show();
            $("#loading_send_job_appliacation").hide();
            $("#form_send_job_application")[0].reset();
          } else {
            $("#form-message_false").show();
            $("#form-message_false").html(data.results.msg);
            $("#form-message_success").hide();
            $("#form_send_job_application").show();
            $("#loading_send_job_appliacation").hide();
          }
        }, 6000);
      },
    });
  });

  $("#btn-photo").click(function () {
    $("#form-photo").show();
    $("#form-account").hide();
  });
  $("#btn-cansel").click(function () {
    $("#form-photo").hide();
    $("#form-account").show();
  });
  $("#form-passoword").submit(function (e) {
    $("#btn-account").attr("disabled", true);
    $("#btn-photo").attr("disabled", true);
    $("#btn_pass").attr("disabled", true);
    $("#btn_pas").attr("disabled", true);
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        let data = JSON.parse(res);
        let i = 1;
        setInterval(() => {
          let result = i++;
          if (result < 100) {
            let my_css_class = { width: result + "%" };
            $("#loading_proesess").css(my_css_class);
            clearInterval();
            if (result === 99) {
              let my_css_class = { width: 0 + "%" };
              if (data.status === "false") {
                $("#form-password_false").html(data.results.msg);
                $("#btn-account").attr("disabled", false);
                $("#btn-photo").attr("disabled", false);
                $("#btn_pass").attr("disabled", false);
                $("#btn_pas").attr("disabled", false);
              } else {
                $("#btn_pas").attr("disabled", false);
                $("#btn-account").attr("disabled", false);
                $("#btn-photo").attr("disabled", false);
                $("#btn_pass").attr("disabled", false);
                $("#form-password_success").html(data.results.msg);
                $("#form-passoword")[0].reset();
              }
              $("#loading_proesess").css(my_css_class);
            }
          }
        }, 90);
      },
    });
  });
  $("#btn_pass").click(function () {
    $("#form-passoword")[0].reset();
  });
  $(".set_lang").click(function () {
    $.ajax({
      type: "GET",
      url:
        $(this).attr("action_url") +
        "api/app/lang/" +
        $(this).attr("data_lang"),
      success: function (res) {
        // responsiveVoice.speak(
        //   res.results.Lang.switch_voice,
        //   res.results.Lang.language + " Female",
        //   {
        //     volume: 100,
        //   }
        // );
        // setTimeout(() => {
        //   location.reload();
        // }, 17000);
        location.reload();
      },
    });
  });
})(jQuery);
//您已將頁面更改為所選語言，此功能由POLITEKNIK PGRI BANTEN製造，祝您好運
// var action = $(this).attr("action");
// $.ajax({
// 	type: "POST",
// 	url: action,
// 	data: str,
// 	success: function (res) {
// 		let respone = JSON.parse(res);
// 		console.log(respone);
// 		if (respone.status === "true") {
// 			sessionStorage.setItem('lms_token', respone.lms_token);
// 			localStorage.setItem('lms_token', respone.lms_token);
// 			$("#sendmessage").addClass("show");
// 			$("#errormessage").removeClass("show");
// 			$(".contactForm").find("input, textarea").val("");
// 			window.location.href = "app"
// 		} else {
// 			$("#sendmessage").removeClass("show");
// 			$("#errormessage").addClass("show");
// 			$("#errormessage").html(respone.msg);
// 		}
// 	},
// });

/* <script src="https://code.responsivevoice.org/responsivevoice.js?key=KPueOlyI"></script>

<script> function Speek() {
    sessionStorage.setItem('status_speek','true')
    sessionStorage.setItem(
      "speek",
      "Hallo Apa kabarmu hari ini, aku harap kamu baik baik saja ya..."
    );
    if(sessionStorage.getItem('status_speek') == true){
        responsiveVoice.speak(
      sessionStorage.getItem("speek"),
      "Indonesian Female",
      {
        volume: 100,
      }
    );
    sessionStorage.setItem('status_speek','false')
    }
    
  }

  console.log("storage = " + sessionStorage.getItem("speek"));</script> */
