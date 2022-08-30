$(document).ready(function(){
   $('#surveyBtn').click(function(){
      console.log("ok");

      var option = document.getElementsByName('option');
      
      for(i=0;i<option.length;i++){
         if(option[i].checked){
            var odgovor = option[i].value;
            console.log(odgovor);
         }
      }
      $.ajax({
         url:"../../../../models/surveyCheck.php",
         method:"post",
         dataType:"json",
         data:{
            odgovor:odgovor,
            send:true
         },
         success:function(data){
            console.log(data);
            var odg = document.querySelector("#odg");
            odg.textContent ="Your message has been sent.";
         },
         error:function(xhr,status){
            console.log(xhr.status + status);
         }
      });
   })
})