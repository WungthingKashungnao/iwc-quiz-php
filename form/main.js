$("#submitForm").on("click", function (e) {
  $("#submitType").val("submit");
  submitForm();
});

// submit form start
function submitForm() {
  let submitType = $("#submitType").val();
  if (validationEmpty() == false) {
    $("#statusBlock").html(
      '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle" style="font-size:40px"></i>Please fill required fields!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
    );
    setTimeout(function () {
      $("#statusBlock").html("");
    }, 3000);
    return false;
  }
  let mobile = $("#phone").val();
  if (checkIfValidIndianMobileNumber(mobile) == false) {
    $("#phone").css({ "border-color": "red" });
    $("#statusBlock").html(
      '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle" style="font-size:40px"></i>Invalid contact number!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
    );
    setTimeout(function () {
      $("#statusBlock").html("");
    }, 3000);
    return false;
  } else {
    $("#phone").css({ "border-color": "" });
  }

  let pswd = $("#pswd").val();
  let cpswd = $("#cpswd").val();
  if (pswd != cpswd) {
    $("#pswd").css({ "border-color": "red" });
    $("#cpswd").css({ "border-color": "red" });
    $("#statusBlock").html(
      '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle" style="font-size:40px"></i>Passwords do not match!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
    );
    setTimeout(function () {
      $("#statusBlock").html("");
    }, 3000);
    return false;
  } else {
    $("#pswd").css({ "border-color": "" });
    $("#cpswd").css({ "border-color": "" });
  }

  let confirm = "";
  if (submitType == "save") {
    confirm = "Save";
  } else {
    confirm = "Submit";
  }
  let formData = $("#formRgstr").serialize();
  console.log("form data=>", formData);

  mscConfirm(confirm, "Are you sure you want to continue?", function () {
    // $("#submitForm").attr("disabled", true);
    $("#submitForm").prop("disabled", true);
    $.ajax({
      url: "control.php",
      type: "POST",
      data: $("#formRgstr").serialize() + "&action=insert",
      // processData: false,
      // contentType: false,
      success: function (res) {
        console.log(res);
        $("#submitForm").prop("disabled", false);
      },
    });
  });
}
// submit form end

// fucntion to check all input fields of form validation start
function validationEmpty() {
  var error = 0;
  var is_focused = 0;
  var checkboxName = "";
  $(".required").each(function () {
    if ($(this).attr("type") == "radio") {
      var name = $(this).attr("name");
      if ($('input[name="' + name + '"]:checked').length == 0) {
        error = 1;
        if (is_focused == 0) {
          is_focused = 1;
          $(this).focus();
        }
        $(this).next("span").css({ border: "1px solid red" });
      } else {
        $('input[name="' + name + '"]')
          .next("span")
          .css({ border: "" });
      }
    } else if ($(this).attr("type") == "checkbox") {
      var name = $(this).attr("name");
      var shortname = name.substring(0, name.length - 1);
      var shortname1 = name.substring(0, name.length - 2);
      if (checkboxName == shortname) {
        checkboxName = shortname;
      } else if (checkboxName == shortname1) {
        checkboxName = shortname1;
      } else {
        checkboxName = shortname;
      }

      if ($('input[name*="' + checkboxName + '"]:checked').length == 0) {
        error = 1;
        if (is_focused == 0) {
          is_focused = 1;
          $(this).focus();
        }
        $(this).next("span").css({ border: "1px solid red" });
      } else {
        $('input[name*="' + checkboxName + '"]')
          .next("span")
          .css({ border: "" });
      }
    } else if ($(this).val() == "") {
      error = 1;
      if (is_focused == 0) {
        is_focused = 1;
        $(this).focus();
      }
      if ($(this).hasClass("select2") == true) {
        $(".select2-container--default .select2-selection--single").css({
          "border-color": "red",
        });
      } else {
        $(this).css({ "border-color": "red" });
      }
    } else {
      if ($(this).hasClass("select2") == true) {
        $(".select2-container--default .select2-selection--single").css({
          "border-color": "",
        });
      } else {
        $(this).css({ "border-color": "" });
      }
    }
  });
  if (error == 1) {
    return false;
  } else {
    return true;
  }
}
// fucntion to check all input fields of form validation end

// function for validation  of form phone number start
function checkIfValidIndianMobileNumber(str) {
  // Regular expression to check if string is a Indian mobile number
  const regexExp = /^[6-9]\d{9}$/gi;
  return regexExp.test(str);
}

// function for validation  of form phone number end
