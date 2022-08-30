$(document).ready(function(){

   console.log("Hello");
   //contact admin
      $('.contactAdminBtn').click(function(){

console.log("Usli");
            var name = $("#contact-name").val();
            var email = $('#contact-email').val();
            var subject = $('#contact-subject').val();
            var msg = $('#message').val();

            var regName =  /^[A-ZČĆŽŠĐ][a-zčćžšđ]{1,30}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{1,30})*$/
            var regEmail = /^[a-z]{3,}(\.)?[a-z\d]{1,}(\.[a-z0-9]{1,})*\@[a-z]{2,7}\.[a-z]{2,3}(\.[a-z]{2,3})?$/
            var regSub = /^[A-ZŠĐŽČĆa-zšđžčć\.\d\s\-]{1,100}$/


            let nameEr = document.querySelector("#nameEr");
            let emEr = document.querySelector("#emEr");
            let subEr = document.querySelector("#subEr");
            let msgEr = document.querySelector("#msgEr");

            var valid = true;
            var erors=[];
            var data=[];

            if(name == ""){
               erors.push("<b>You must enter your name</b>");
               nameEr.textContent="You must enter your name";
               valid = false;
            }else{
               if(!regName.test(name)){
                  erors.push("<b>You must enter your name in a good format</b>");
               nameEr.textContent ="You must enter your name in a good format";
               valid = false;
               }else{
                  nameEr.textContent = "";
                  data.push(name)
               }
            }
            if(email == ""){
               erors.push("<b>You must enter your email</b>");
               emEr.textContent="You must enter your email";
               valid = false;
            }else{
               if(!regEmail.test(email)){
                  erors.push("<b>You must enter your email in a good format</b>");
               emEr.textContent ="You must enter your email in a good format";
               valid = false;
               }else{
                  emEr.textContent = "";
                  data.push(email)
               }
            }
            if(subject == ""){
               erors.push("<b>You must enter the subject of the message.</b>");
               subEr.textContent="You must enter the subject";
               valid = false;
            }else{
               if(!regSub.test(subject)){
                  erors.push("<b>You must enter your subject in a good format</b>");
               subEr.textContent ="You must enter your subject in a good format";
               valid = false;
               }else{
                  subEr.textContent = "";
                  data.push(subject)
               }
            }
            if(msg == ""){
               erors.push("<b>You must enter a message.</b>")
               
               valid = false;
            }else{
               msgEr.textContent = "";
               data.push(msg);
            }


            if(erors.length == 0){
               $.ajax({
                  url:"models/contact/contactAdmin.php",
                  method:"post",
                  dataType:"json",
                  data:{
                     name:name,
                     email:email,
                     subject:subject,
                     msg:msg,
                     send:true
                  },
                  success:function(data){
                     console.log(data);
                     var succ = document.querySelector("#suc");
                     succ.textContent ="Your message has been sent.";
                  },
                  error:function(xhr,status,data){
                     console.log(xhr.status + status);
                  }
               }); 
            }
      });

   });