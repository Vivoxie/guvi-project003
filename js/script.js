$(function () {
  $("#register_form").validate({
    rules: {
      firstname: {
        required: true,
      },
      lastname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      new_password: {
        required: true,
        minlength: 3,
        maxlength: 30,
      },
      confirm_password: {
        required: true,
        minlength: 3,
        maxlength: 30,
        equalTo: "#new_password",
      },
    },
    messages: {
      firstname: {
        required: "Enter the First Name",
      },
      lastname: {
        required: "Enter the Last Name",
      },
      email: {
        required: "Enter the Email",
        email: "Invalid Email Address",
      },
      new_password: {
        required: "Enter new Password",
      },
      confirm_password: {
        required: "Retype the password",
      },
    },
    submitHandler: function (frm) {
      $.ajax({
        url: $(frm).attr("action"),
        method: $(frm).attr("method"),
        data: new FormData(frm),
        processData: false,
        dataType: "json",
        contentType: false,
        success: function (result) {
          if (result.status == 0) {
            toastr.error(result.msg);
          } else {
            toastr.success(result.msg);
            frm.reset();
          }
        },
      });
      return false;
    },
  });
});
