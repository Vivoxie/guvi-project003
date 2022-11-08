$(function () {
  $("#user_login_form").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
      },
    },
    messages: {
      email: {
        required: "Enter the Email",
        email: "Invalid Email",
      },
      password: {
        required: "Enter the Password",
      },
    },
    submitHandler: function (frm) {
      $.ajax({
        url: $(frm).attr("action"),
        method: $(frm).attr("method"),
        processData: false,
        dataType: "json",
        contentType: false,
        success: function (result) {
          if (result.status == 0) {
            alert("error");
            toastr.error(result.msg);
          } else {
            window.location.href = result.msg;
          }
        },
      });
      return false;
    },
  });
});
