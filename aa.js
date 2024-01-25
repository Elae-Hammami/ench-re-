function submitCommanderForm(productId) {
    // Your function code here
        function submitCommanderForm(productId) {
        var form = document.getElementById("commanderForm" + productId)   
        if (form.checkValidity()) {  
          $.ajax({  
           type: "POST",  
           url: "commande.php",  
           data: $(form).serialize(),  
           success: function(response) {  
             alert(response)    // Display the response from commande.php
             form.reset()   
             $("#modal" + productId).modal("hide")     // Close the modal after submission
             // You may want to remove the product card from the UI at this point  
           },  
           error: function(error) {  
             alert("Error submitting form: " + error.responseText)   
           }  
         })   
       } else {  
         // Handle form validation errors if any  
       }  
     }  
   
    console.log("Form submitted for product ID: " + productId) 
}
