$(document).ready(function(){

  var user = {
    login: function(username, password){
      var current_user = {
        username,
        password
      };
      $.ajax({
        type: "POST",
        data: { data: current_user, action: 'login_user'}, // login_user function in auth.php
        url: "auth.php",
        success: function(data){
          location.href = "../index.php";
        }
      })
    }
  };

  $('#login').click(function() {
    user.login($('#username').val(),$('#password').val());
    $('#username').val(""); 
    $('#password').val("");
  });

});