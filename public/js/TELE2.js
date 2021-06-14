$(document).ready(function(){

  $("#delete_khoaHoc").click(()=>{
       var result = confirm("bạn có chắc chắn muốn xóa");
       const article = document.querySelector('#delete_khoaHoc');
       let kq=article.dataset.columns;

        if(result)  {

            alert();

        } else {
            alert("Bye!");
        }
  });



});
function ahi(data){
  // alert(data);
            alert('<h1>hello</h1>');

}


 var baseUrl='http://localhost/PHP_TRAINING';
   function ConfirmDelete(data)
   {
         if (confirm("Delete Account?")){
              location.href=baseUrl+'/home_admin/delete_Account/'+data;
         }
   }

function ConfirmDelete_kk(data){
   if (confirm("Delete Product ?."))
        location.href=baseUrl+'/home_admin/delete_kk/'+data;
}