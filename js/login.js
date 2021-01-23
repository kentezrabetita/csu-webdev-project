$(document).ready(function(){
    var User = {
        userLogin: function(uname, pwd){
            var u_user = {
                uname,
                pwd
            };
            $.ajax({
                type: "POST",
                url: "php/user.php",
                data: { data: u_user, action: "log_user"},
                success: function(data){
                    alert(data);
                }
            })
        }
    };
    $("#login").click(function(){
        User.userLogin($("#username").val(),$("#password").val(),);
    });
});