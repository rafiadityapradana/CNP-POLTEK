$(document).ready(function () {
  $(".dataTable").DataTable();
});
(function ($) {
  "use strict";

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
  function Set_IP() {
    $.ajax({
      type: "GET",
      url:
        $(document.body).data("base") +
        "access-app/" +
        sessionStorage.getItem("key_access") +
        "/" +
        sessionStorage.getItem("start_access"),
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

  $("#info_color").hide();
  $(".progress").hide();
  $("#form_color").submit(function (e) {
    $(".progress").show();
    $(".color_ac").prop("disabled", true);
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let i = 1;
          setInterval(() => {
            let result = i++;
            if (result < 100) {
              $("#loading_proesess").show();
              let my_css_class = { width: result + "%" };
              $("#loading_proesess").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let css_info_danger = { color: "red" };
                let css_info_success = { color: "blue" };
                if (res.results.status === "false") {
                  $(".progress").hide();
                  $("#info_color").show();
                  $("#info_color").html(res.results.msg);
                  $("#info_color").css(css_info_danger);
                } else {
                  $(".progress").hide();
                  $("#info_color").show();
                  $("#info_color").html(res.results.msg);
                  $("#info_color").css(css_info_success);
                  setTimeout(() => {
                    location.reload();
                  }, 1000);
                }
                $(".color_ac").prop("disabled", false);
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }
      },
    });
  });

  $("#form_account_password").submit(function (e) {
    $(".progress").show();
    $(".button_password").prop("disabled", true);
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
              $("#loading_proesess_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let css_info_danger = { color: "red" };
                let css_info_success = { color: "blue" };
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $(".button_password").prop("disabled", false);
                  $("#info_pass").html(data.results.msg);
                  $("#info_pass").css(css_info_danger);
                } else {
                  $(".button_password").prop("disabled", false);
                  $("#form_account_password")[0].reset();
                  $("#info_pass").html(data.results.msg);
                  $("#info_pass").css(css_info_success);
                }
                $("#loading_proesess_pass").css(my_css_class);
                $(".progress").hide();
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }
      },
    });
  });

  $("#form_account_cnp").submit(function (e) {
    $("#notification_CNP").modal("show");
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let data = JSON.parse(res);
          if (data.status === "false") {
            $("#notification_CNP").modal("show");
            $("#msg-info").html(data.results.msg);
          } else {
            $("#notification_CNP").modal("show");
            $("#msg-info").html(data.results.msg);
          }
        } catch (error) {
          $("#notification_CNP").modal("show");
          $("#msg-info").html("Failed Update Acoount Company !");
        }
        setTimeout(function () {
          $("#notification_CNP").modal("hide");
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
  $("#cuse_file").change(function () {
    READURL(this);
  });
  $("#cuse_job_upload").change(function () {
    READURLJOB(this);
  });
  $("#cuse_in_upload").change(function () {
    READURLIN(this);
  });
  $("#cuse_incre_upload").change(function () {
    READURLINCRE(this);
  });
  function READURLINCRE(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perincre").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image_incre").html(file.files[0].name);
  }
  function READURLIN(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perin").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image_in").html(file.files[0].name);
  }
  function READURL(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perimage_profile").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image").html(file.files[0].name);
  }
  function READURLJOB(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#perjob").attr("src", e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
    $("#name_image_job").html(file.files[0].name);
  }
  $("#reset").click(function () {
    $("#reset-password").modal("hide");
    $("#modal_loading").modal("show");
    $(".progress").show();
    $.ajax({
      type: "GET",
      url: $(this).attr("action"),
      success: function (res) {
        try {
          let data = JSON.parse(res);
          let i = 1;
          setInterval(() => {
            let result = i++;
            if (result < 100) {
              let my_css_class = { width: result + "%" };
              $("#loading_reset_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $("#info_res").html(data.results.msg);
                } else {
                  $("#info_res").html(data.results.msg);
                }
                $("#loading_reset_pass").css(my_css_class);
                $("#modal_loading").modal("hide");
                $("#reset-password_info").modal("show");
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }

        $("#close_info").click(function () {
          location.reload();
        });
      },
    });
  });
  $("#form_account_user").submit(function (e) {
    e.preventDefault();
    $("#modal_loading").modal("show");
    $(".progress").show();
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
              $("#loading_reset_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                } else {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                }
                $("#loading_reset_pass").css(my_css_class);
                $("#modal_loading").modal("hide");
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }

        $("#close_info").click(function () {
          location.reload();
        });
      },
    });
  });
  $("#form_account_company").submit(function (e) {
    e.preventDefault();
    $("#modal_loading").modal("show");
    $(".progress").show();
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
              $("#loading_reset_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                } else {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                }
                $("#loading_reset_pass").css(my_css_class);
                $("#modal_loading").modal("hide");
              }
            }
          }, 90);
        } catch (error) {
          location.reload();
        }

        $("#close_info").click(function () {
          location.reload();
        });
      },
    });
  });
  $("#form_create_Company").submit(function (e) {
    $("#new_company").modal("hide");
    e.preventDefault();
    $("#modal_loading").modal("show");
    $(".progress").show();
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
              $("#loading_reset_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let my_css_class = { width: 0 + "%" };
                if (data.status === "false") {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                } else {
                  $("#info_res_status").html(data.status);
                  $("#info_res_msg").html(data.results.msg);
                  $("#_info").modal("show");
                }
                $("#loading_reset_pass").css(my_css_class);
                $("#modal_loading").modal("hide");
              }
            }
          }, 50);
        } catch (error) {
          location.reload();
        }

        $("#close_info").click(function () {
          location.reload();
        });
      },
    });
  });

  $("#form_cv_send").submit(function (e) {
    e.preventDefault();
    $("#select_studens").modal("hide");
    $("#modal_loading").modal("show");
    $(".progress").show();
    $.ajax({
      type: "POST",
      url: $(this).attr("action") + "api/cv/" + $(this).attr("key"),
      data: $(this).serialize(),
      success: function (res) {
        try {
          let i = 1;
          setInterval(() => {
            let result = i++;
            if (result < 100) {
              let my_css_class = { width: result + "%" };
              $("#loading_reset_pass").css(my_css_class);
              clearInterval();
              if (result === 99) {
                let my_css_class = { width: 0 + "%" };
                if (res.status === "false") {
                  $("#info_res_status").html(res.status);
                  $("#info_res_msg").html(res.results.msg);
                  $("#_info").modal("show");
                  $("#select_studens").modal("show");
                } else {
                  $("#info_res_status").html(res.status);
                  $("#info_res_msg").html(res.results.msg);
                  $("#_info").modal("show");
                }
                $("#loading_reset_pass").css(my_css_class);
                $("#modal_loading").modal("hide");
              }
            }
          }, 50);
        } catch (error) {
          location.reload();
        }
        $("#close_info").click(function () {
          location.reload();
        });
      },
    });
  });

  $(".set_lang").click(function () {
    $.ajax({
      type: "GET",
      url:
        $(this).attr("action_url") +
        "api/app/lang/" +
        $(this).attr("data_lang"),
      success: function (res) {
        // setTimeout(responsiveVoice.speak("Welcome to the Responsive Voice website"),1500);

        location.reload();

        //console.log("OKE");
      },
    });
  });
})(jQuery);

document.getElementById("full").addEventListener(
  "click",
  function () {
    toggleFullScreen();
  },
  false
);
function toggleFullScreen() {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    }
  }
}
