// src/public/js/payment.js

document.addEventListener('DOMContentLoaded', function() {
  // Render the PayPal button
  paypal.Buttons({
    createOrder: function(data, actions) {
      return fetch('/api/payment/create-order', {
        method: 'post',
        headers: {
          'content-type': 'application/json'
        },
        body: JSON.stringify({
          amount: '10.00' // Example price
        })
      }).then(function(res) {
        return res.json();
      }).then(function(data) {
        return data.id; // Return the order ID
      });
    },
    onApprove: function(data, actions) {
      return fetch('/api/payment/capture-order', {
        method: 'post',
        headers: {
          'content-type': 'application/json'
        },
        body: JSON.stringify({
          orderID: data.orderID
        })
      }).then(function(res) {
        return res.json();
      }).then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name + '!');
        console.log(details);
      });
    }
  }).render('#paypal-button-container'); // Display the PayPal button
});