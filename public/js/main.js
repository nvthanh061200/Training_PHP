$(document).ready(function(){

  $("#username").keyup(function(){
      let username=$(this).val();
      $.post("./register/ajax_check_username",{
        un:username
      },function(data){
        console.log(data);
        if(data==1){
          $("#message").html("Tài khoản chưa tồn tại");
        }else if(data==0){
          $("#message").html("tai khoan da ton tai");

        }else{
          $("$message").html(data);
        }
       
      })
  	
  });


});
