$(document).ready(function(){
// console.log("cart.js");

$('.addtocart').click(function(){

   var id = $(this).data("id");
      var q = $("#qty").val();
      console.log(q);
   // console.log(id);
   if(id){
      $.ajax({
         url:"models/cart/addToCart.php",
         method:"post",
         dataType:"json",
         data:{
            id:id,
            q:q,
            send:true
         },
         success:function(data){
            console.log(data);
         },
         error:function(xhr,status,data){
            console.log(xhr.status + status);
         }
      });
   }
});
$('.cartDel').click(function(){
console.log("The world sayes hello");
var id = $(this).data("id");
if(id){
   $.ajax({
      url:"models/cart/deleteCartItem.php",
      method:"post",
      dataType:"json",
      data:{
         id:id,
         send:true
      },
      success:function(data){
         console.log(data);
      },
      error:function(xhr,status,data){
         console.log(xhr.status + status);
         if(data = 201){
            alert("Please refresh page");
         }
      }
   });
}


});

$('.order').click(function(){
   var id = $(this).data("id");
   var data = [];
   data.push(id);
   console.log(id);
   if(id){
      $.ajax({
         url:"models/cart/order.php",
         method:"post",
         dataType:"json",
         data:{
            id:id,
            send:true
         },
         success:function(data){
            console.log(data);
            var succ = document.querySelector("#successOr");
            succ.textContent ="Your order has been sent.";
         },
         error:function(xhr,status,data){
            console.log(xhr.status + status);
            if(xhr.status === 201){
            var succ = document.querySelector("#successOr");
            succ.textContent ="Your order has been sent.";}
         }
      });
   }
})

});