Spreedly.init("5WeMoCpoorOaBHcoT4JWtzMK1ZH", {
    "numberEl": "spreedly-number",
    "cvvEl": "spreedly-cvv"
  });

  Spreedly.on("ready", function () {
    var submitButton = document.getElementById('submit-button');
    submitButton.disabled = false;
  });


  function submitPaymentForm() {

    var requiredFields = {};
  
    // Get required, non-sensitive, values from host page
    requiredFields["full_name"] = document.getElementById("full_name").value;
    requiredFields["month"] = document.getElementById("exp-month").value;
    requiredFields["year"] = document.getElementById("exp-year").value;
  
    Spreedly.tokenizeCreditCard(requiredFields);
    
  }

  Spreedly.on('paymentMethod', function(token, pmData) {

    // Set the token in the hidden form field
    var tokenField = document.getElementById("payment_method_token");
    tokenField.setAttribute("value", token);
  
    // Submit the form
    var masterForm = document.getElementById('payment-form');
    masterForm.submit();
  
  });
 