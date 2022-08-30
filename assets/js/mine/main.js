$(document).ready(function(){

   $("#searchPlants").keyup(function(){
      let value = $(this).val().toLowerCase();
    
      console.log(value);
      $.ajax({
            url:"models/products/search.php",
            method:"POST",
            dataType:"json",
            data:{
               keyword:value
            },
            success:function(data){
               console.log(data);
               writtingPlants(data);
               if(data.plant.length == 0){
$("#allPlants").html("<h2>Sorry but there are no plants with that name.</h2>");
               }
               
            },
            error: function(xhr, status, error) {
               console.log(error);
               console.log(xhr.responseText);
               console.log(xhr.status);
           }
      });
   });




   function writtingPlants(data){
    
      let html = "";
      html += `<div class="row" id="products">`;
      
      for(let p of data.plant){
         html += ` <div class="col-12 col-sm-6 col-lg-4">
         <div class="single-product-area mb-50">
             <!-- Product Image -->
             <div class="product-img">
                 <a href="index.php?page=shop-details&id=${p.id}"><img src="assets/img/img/${p.img}" alt="${p.name}"></a>
                 <!-- Product Tag -->
                 ${ifHot(p.hot)}
             </div>
             <!-- Product Info -->
             <div class="product-info mt-15 text-center">
                 <a href="shop-details.php">
                     <p>${p.name}</p>
                 </a>
                 <h6>$${p.price}</h6>
             </div>
         </div>
     </div>`;
     function ifHot(hot){
 if(hot){
    return `<div class="product-tag">
                       
    <a href="#">Hot</a>   
 </div>`;
 }
 
   }
   
}

    html += `</div>`;
   ! console.log(html);
     $("#allPlants").html(html);
     
    }
 





   console.log('Hello')
//edit product

$('.editProduct').hide()
$('.edit_product').click(function(){
   $('.editProduct').show()
   var id = $(this).data('id')
   console.log(id)
   $.ajax({
      method:'POST',
      url:"../../../../models/products/get_one.php",
      dataType:'json',
      data:{
         id:id
      },
      success:function(data){
         console.log(data);
         $("#editPname").val(data.name);
         $("#editPdescription").val(data.description);
         $("#editPprice").val(data.price);
         $("#imageDiv").html('<img src="../../../../assets/img/img/'+data.img+'"alt="Slika" height="50px"></img><label for="editPimage">Image</label><input type="file" name="editPimage" id="editPimage" value="">');
         $("#idOfPrCol").val(data.id);
         $("#typeSel").val(data.type_id);
      },
      error:function(xhr,statusiTxt,error){
         var status = xhr.status;
         switch(status){
            case 500:
               alert("Server side error");
               break;
               case 404:
                  alert("Page not found");
                  break;
               default:
                  alert("Error:" + status + " " + error);
                  break;   
         }
      }
   });
   
});
//edit color
$('.editColor').hide();
$('.btnEditC').click(function(){

   $('.editColor').show();
   var id = $(this).data('id');
   console.log(id);
   $.ajax({
      method:'POST',
      url:"../../../../models/colors/get_one.php",
      dataType:'json',
      data:{
         id:id
      },
      success:function(data){
         console.log(data);
         $("#ColEdname").val(data.name);
         $("#idOfEdCol").val(data.id);
      },
      error:function(xhr,statusiTxt,error){
         var status = xhr.status;
         switch(status){
            case 500:
               alert("Server side error");
               break;
               case 404:
                  alert("Page not found");
                  break;
               default:
                  alert("Error:" + status + " " + error);
                  break;   
         }
      }
   })
});
//edit menu

$('.editMenu').hide();
$('.btnEditM').click(function(){

   $('.editMenu').show();
   var id = $(this).data('id');
   console.log(id);
   $.ajax({
      method:'POST',
      url:"../../../../models/menu/get_one.php",
      dataType:'json',
      data:{
         id:id
      },
      success:function(data){
         console.log(data);
         $("#MenuEdname").val(data.name);
         $("#MenuEdhref").val(data.href);
         $("#idOfEdTy").val(data.id);
      },
      error:function(xhr,statusiTxt,error){
         var status = xhr.status;
         switch(status){
            case 500:
               alert("Server side error");
               break;
               case 404:
                  alert("Page not found");
                  break;
               default:
                  alert("Error:" + status + " " + error);
                  break;   
         }
      }
   })
});


//edit type
$('.editType').hide();
$('.btnEditT').click(function(){

   $('.editType').show();
   var id = $(this).data('id');
   console.log(id);
   $.ajax({
      method:'POST',
      url:"../../../../models/types/get_one.php",
      dataType:'json',
      data:{
         id:id
      },
      success:function(data){
         console.log(data);
         $("#TypeEdname").val(data.name);
         $("#idOfEdTy").val(data.id);
      },
      error:function(xhr,statusiTxt,error){
         var status = xhr.status;
         switch(status){
            case 500:
               alert("Server side error");
               break;
               case 404:
                  alert("Page not found");
                  break;
               default:
                  alert("Error:" + status + " " + error);
                  break;   
         }
      }
   })
});

//delete menu
$('.delete_menu').click(function(){
   var id = $(this).data('id');
   console.log("delete" + id);
   $.ajax({
      method:'POST',
      url:"../../../../models/menu/delete.php",
      dataType:'json',
      data:{
         id:id
      },
      success:function(menu){
         alert("A menu link was deleted")
      },
      error:function(xhr,statusText,error){
         var status = xhr.statusText;
         switch(status){
            case 500:
               alert("Server Error");
               break;
            case 404:
               alert("Page not found")
               break;
            default:
            alert("Error " + status + statusText);
            break;      
         }
      }
   });
});

//delete color
   $('.delete_color').click(function(){
      var id = $(this).data('id');
      console.log("delete" + id);
      $.ajax({
         method:'POST',
         url:"../../../../models/colors/delete.php",
         dataType:'json',
         data:{
            id:id
         },
         success:function(colors){
            alert("A color was deleted")
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });
//delete type
   $('.delete_type').click(function(){
      var id = $(this).data('id');
      console.log("delete" + id);
      $.ajax({
         method:'POST',
         url:"../../../../models/types/delete.php",
         dataType:'json',
         data:{
            id:id
         },
         success:function(types){
            alert("A type was deleted")
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });

   //pr delete
   $('.delete_product').click(function(){
      var id = $(this).data('id');
      console.log("delete" + id);
      $.ajax({
         method:'POST',
         url:"../../../../models/products/delete.php",
         dataType:'json',
         data:{
            id:id
         },
         success:function(products){
            alert("A product was deleted")
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });
//add color
   $('.add_color').click(function(){
      var name = $("input[name='name']").val();
      
      console.log(name);
      $.ajax({
         method:'POST',
         url:"../../../../models/colors/add.php",
         dataType:'json',
         data:{
            name:name
         },
         success:function(colors){
            alert("A color was added");
            header("Location:../../../../views/pages/admin/pages/color.php");
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });

   //add menu

   $('.add_menu').click(function(){
      var name = $("input[name='name']").val();
      var href = $("input[name='href']").val();
      console.log(name);
      $.ajax({
         method:'POST',
         url:"../../../../models/menu/add.php",
         dataType:'json',
         data:{
            name:name,
            href:href
         },
         success:function(types){
            alert("A menu link was added");
            header("Location:../../../../views/pages/admin/pages/menu.php");
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });

   //add type
   $('.add_type').click(function(){
      var name = $("input[name='name']").val();
      
      console.log(name);
      $.ajax({
         method:'POST',
         url:"../../../../models/types/add.php",
         dataType:'json',
         data:{
            name:name
         },
         success:function(types){
            alert("A type was added");
            header("Location:../../../../views/pages/admin/pages/types.php");
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });
   //add product
   $('.add_product').click(function(){
      var name = $("#name").val();
      var description = $("#description").val();
      var price = $("#price").val();
      var color = $(".colors:checked");
      var colors=[];
      var type = $("#typeSel option:selected").val();
      console.log(type);
      var empty = 0;

      if(name == ""){
         console.log("No name added");
         empty++;
      }
      if(price == 0){
         console.log("No price added");
         empty++;
      }
      if(description == ""){
         console.log("No desc added");
         empty++;
      }
      if(color.length==0){
         console.log("No color added");
         empty++;
      }
      else{
         color.each(function(){
            colors.push($(this).val());
         })
         
      }
      if(type == 0){
         console.log("Choose a type")
         empty++;
      }
      if(empty>0){
         console.log("Not good")
      }
      else{
         console.log("everything is good")
      }

      $.ajax({
         method:'POST',
         url:"../../../../models/products/add.php",
         dataType:'json',
         data:{
            name:name,
            description:description,
            price:price,
            colors:colors,
            type:type,
            send:true
         },
         success:function(products){
            alert("A product was added");
         },
         error:function(xhr,statusText,error){
            var status = xhr.statusText;
            switch(status){
               case 500:
                  alert("Server Error");
                  break;
               case 404:
                  alert("Page not found")
                  break;
               default:
               alert("Error " + status + statusText);
               break;      
            }
         }
      });
   });

  //183 serach
 


    




});