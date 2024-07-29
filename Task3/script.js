
$(document).ready(function ()//for loading the whole document
{ 
	$('.increment-btn').click(function (e){
		e.preventDefault();//cancels if it is cancelable
		var qty=$(this).closest('.gallery').find('.input-qty').val();
        var value=parseInt(qty,10);
		value=isNaN(value) ? 0 : value;
		if(value < 10)
		{
			value++;
		  $(this).closest('.gallery').find('.input-qty').val(value);
       }
	});
	$('.decrement-btn').click(function (e){
		e.preventDefault();
		var qty=$(this).closest('.gallery').find('.input-qty').val();
        var value=parseInt(qty,10);
		value=isNaN(value) ? 0 : value;
		if(value > 1)
		{
			value--;
		  $(this).closest('.gallery').find('.input-qty').val(value);
        }
	});
	$('.addTocartBtn').click(function (e){
		e.preventDefault();
		var qty=$(this).closest('.gallery').find('.input-qty').val();
        var prod_id=$(this).val();
         $.ajax({//exhanging data between servers 
         	method:"POST",
         	url:"handlecart.php",
         	data:{ "prod_id":prod_id,
         	        "prod_qty":qty,
         	        "scope":"add"
         	},
         	success: function (response){
         		if(response==201)
         		{
         			alert("Added to Cart");
         		}
         		else if(response=="existing")
         		{
         			alert("Already added to cart");
         		}
         		else if(response==401)
         		{
         			alert("Login to continue");
         		}
         		else if(response==500)
         		{
         			alert("Something went wrong");
         		}



         	}

         });

		
	});

	$(document).on('click','.updateQty', function() {
        var qty=$(this).closest('.gallery').find('.input-qty').val();
        var prod_id=$(this).closest('.gallery').find('.prodId').val();
    

        $.ajax({
          method: "POST",
          url:"handlecart.php",
          data:{ "prod_id":prod_id,
         	      "prod_qty":qty,
         	      "scope":"update"
         	},
          success:function(response)
          {
           //alert(response);
          }
        });
    });
       
    $(document).on('click','.deleteItem',function(){
       var cart_id=$(this).val();
       $.ajax({// AJAX is about loading data in the background and display it on the webpage, without reloading the whole page
          method: "POST",
          url:"handlecart.php",
          data:{ "cart_id":cart_id,
                  "scope":"delete"
            },
          success:function(response) {
            if(response==200)
            {
              alert("Item deleted successfully");
              $('#mycart').load(location.href + " #mycart");
             }
            else
            {
                alert(response);
            }
           }
        });
    });
      
});

