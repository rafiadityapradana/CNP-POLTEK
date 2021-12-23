(function ($) {
  "use strict";
  $(".set_lang").click(function () {
    $.ajax({
      type: "GET",
      url:
        $(document.body).data("base") + "app/lang/" + $(this).attr("data_lang"),
      success: function (res) {
        // setTimeout(responsiveVoice.speak("Welcome to the Responsive Voice website"),1500);

        location.reload();

        //console.log("OKE");
      },
    });
  });
  function Set_IP() {
    $.ajax({
      type: "GET",
      url: $(document.body).data("base") + "access-app",
      success: function (res) {
        sessionStorage.setItem("key_access", res.results.key_access);
        sessionStorage.setItem("start_access", res.results.start_access);
      },
    });
  }
  function Get_IP() {
    $.ajax({
      type: "GET",
      url:
        $(document.body).data("base") +
        "access-app/" +
        sessionStorage.getItem("key_access") +
        "/" +
        sessionStorage.getItem("start_access"),
      success: function () {
        return true;
      },
    });
  }
  if (!sessionStorage.getItem("key_access")) {
    Set_IP();
  } else {
    Get_IP();
    setInterval(() => {
      Get_IP();
    }, 500000);
  }
  $("#desc").summernote({
    height: 150,
    toolbar: [
      ["style"],
      ["font"],
      ["fontsize"],
      ["color"],
      ["para", ["ul", "ol", "paragraph"]],
    ],
  });
  $("#form_account").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let data = JSON.parse(res);
          if (data.status === "false") {
            $("#modal-notification-account").modal("show");
            $("#msg-info").html(data.results.msg);
          } else {
            $("#modal-notification-account").modal("show");
            $("#msg-info").html(data.results.msg);
          }
        } catch (error) {
          $("#modal-notification-account").modal("show");
          $("#msg-info").html("Failed Update Acoount !");
        }
        setTimeout(function () {
          $("#modal-notification-account").modal("hide");
          location.reload();
        }, 10000);
      },
    });
    $("#reload_modal_account").click(function () {
      location.reload();
    });
  });

  $(".ques_profile").click(function () {
    $("#" + $(this).attr("data-type")).modal("show");
  });
  $(".ques_sampul").click(function () {
    $("#" + $(this).attr("data-type")).modal("show");
  });
  function READURL(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perimage_profile").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image").html(file.files[0].name);
  }
  function READURL_SAMPUL(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perimage_profile_sampul").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image_sampul").html(file.files[0].name);
  }
  function READURL_JOB(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#per_image_job").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
  }
  function READURL_GALLERY_UPLOAD(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perimage_profile_gallery").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image_gallery_upload").html(file.files[0].name);
  }
  function READURL_GALLERY_UPDATE(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(".perimage_profile_gallery_update").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $(".name_image_gallery_update").html(file.files[0].name);
  }
  $("#cuse_file").change(function () {
    READURL(this);
  });
  $("#cuse_file_sampul").change(function () {
    READURL_SAMPUL(this);
  });
  $("#cuse_file_poster").change(function () {
    READURL_JOB(this);
  });
  $("#cuse_file_gallery_upload").change(function () {
    READURL_GALLERY_UPLOAD(this);
  });
  $(".cuse_file_gallery_update").change(function () {
    READURL_GALLERY_UPDATE(this);
  });
  $("#form_account_company").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let data = JSON.parse(res);
          if (data.status === "false") {
            $("#modal-notification-account").modal("show");
            $("#msg-info").html(data.results.msg);
          } else {
            $("#modal-notification-account").modal("show");
            $("#msg-info").html(data.results.msg);
          }
        } catch (error) {
          $("#modal-notification-account").modal("show");
          $("#msg-info").html("Failed Update Acoount Company !");
        }
        setTimeout(function () {
          $("#modal-notification-account").modal("hide");
          location.reload();
        }, 10000);
      },
    });
    $("#reload_modal_account").click(function () {
      location.reload();
    });
  });
  $("#form_select_decision").submit(function (e) {
    $("#btn_status").prop("disabled", true);
    e.preventDefault();
    if ($("#decision_select").val() != "-") {
      $.ajax({
        type: "POST",
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function (res) {
          try {
            let data = JSON.parse(res);
            if (data.status === "false") {
              $("#msg").html(data.results.msg);
            } else {
              $("#msg").html(data.results.msg);
            }
          } catch (error) {
            $("#msg").html("Failed Update Acoount Company !");
          }
          setTimeout(function () {
            $("#msg").hide();
            location.reload();
          }, 10000);
        },
      });
    }
  });

  $("#form_account_password").submit(function (e) {
    $("#button_password").prop("disabled", true);
    $("#info_pass").html("Please wait ... ");
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let data = JSON.parse(res);
          let i = 1;
          setInterval(() => {
            let result = i++;
            if (result < 100) {
              let my_css_class = { width: result + "%" };
              $("#loading_proesess").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let css_info_danger = { color: "red" };
                let css_info_success = { color: "blue" };
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $("#button_password").prop("disabled", false);
                  $("#info_pass").html(data.results.msg);
                  $("#info_pass").css(css_info_danger);
                } else {
                  $("#button_password").prop("disabled", false);
                  $("#form_account_password")[0].reset();
                  $("#info_pass").html(data.results.msg);
                  $("#info_pass").css(css_info_success);
                }
                $("#loading_proesess").css(my_css_class);
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }
      },
    });
  });
})(jQuery);
