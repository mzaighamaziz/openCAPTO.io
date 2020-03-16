
$(document).ready(function () {
  $('#cancleSearch').hide();
})
$(".toggle-password").click(function () {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});


// search bar Animation

$('.searchBar').click(function () {
  $(this).addClass('SearchActive');
  $('#cancleSearch').fadeIn(500);
})


$('#cancleSearch').click(function () {
  $('.searchBar').removeClass('SearchActive');
  $('#cancleSearch').fadeOut(100);
})


        $('#amount_100').click(function(){
        var value= 3000;
       $.ajax({
           type:'POST',
           url:'charge.php',
           data:'amount=' + value,
           success:function(data){
               console.log("sucess");
           },
           error:function(data){
               alert(value);
           }
       })
     
        });
   