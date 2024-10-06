var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};

var card = elements.create("card", { style: style });
card.mount("#card-element");

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(ev) {
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  var clientSecret = document.getElementById("client_secret").innerHTML;
  

  stripe.confirmCardPayment(clientSecret, {
    payment_method: {
      card: card,
      billing_details: {
        name: 'Justin Jones'
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      console.log(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.

        // window.location.assign("http://localhost/checkout" clientSecret); 
        // window.location.location("/checkout" + clientSecret); 
        window.location.href = '/checkout/' + new URLSearchParams({
                foo: 'value',
                bar: 2,
            });
//     //     fetch('/spreedly?' + new URLSearchParams({
//     // foo: 'value',
//     // bar: 2,
// }))
      }
    }
  });
});