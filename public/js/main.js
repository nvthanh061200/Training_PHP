$(document).ready(function(){

  $("#username").keyup(function(){
      let username=$(this).val();
      $.post("./register/check_username",{
        un:username
      },function(data){
        $("#message").html(data);
       
      })
  	
  });
});
