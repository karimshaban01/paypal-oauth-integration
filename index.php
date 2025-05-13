<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Integration Demo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #003087;
            text-align: center;
            margin-bottom: 30px;
        }
        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .product-image {
            width: 200px;
            height: 200px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .product-details {
            text-align: center;
            margin-bottom: 20px;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 22px;
            color: #2c7c05;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .product-description {
            color: #666;
            margin-bottom: 20px;
        }
        .paypal-button-container {
            width: 250px;
        }
        .info-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #f0f7ff;
            border-radius: 8px;
        }
        .info-section h2 {
            color: #003087;
            margin-top: 0;
        }
        .code-sample {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: monospace;
            margin: 15px 0;
        }
        .payment-methods {
            margin-top: 20px;
            text-align: center;
            padding: 15px;
            border-top: 1px solid #eee;
        }
        .payment-methods img {
            height: 24px;
            margin: 0 10px;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PayPal Payment Integration Demo</h1>
        
        <div class="product">
            <div class="product-image">
                <img src="/api/placeholder/200/200" alt="Premium Widget" />
            </div>
            <div class="product-details">
                <div class="product-title">Premium Widget</div>
                <div class="product-price">$49.99</div>
                <div class="product-description">High-quality premium widget with lifetime warranty</div>
            </div>
            
            <!-- PayPal Button Container -->
            <div class="paypal-button-container" id="paypal-button-container"></div>
            
            <!-- Payment Methods Section -->
            <div class="payment-methods">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/visa.svg" alt="Visa">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/mastercard.svg" alt="Mastercard">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/americanexpress.svg" alt="American Express">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/applepay.svg" alt="Apple Pay">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/googlepay.svg" alt="Google Pay">
            </div>
        </div>
        
        <div class="info-section">
            <h2>How This Integration Works</h2>
            <p>This page demonstrates the integration of PayPal's Smart Payment Buttons using the JavaScript SDK. When implemented on a real site:</p>
            <ul>
                <li>The PayPal SDK loads from PayPal's servers</li>
                <li>The buttons render in the designated container</li>
                <li>When clicked, customers complete payment in a secure popup or redirect</li>
                <li>Your server receives webhooks for transaction status updates</li>
            </ul>
            
            <h3>Implementation Notes:</h3>
            <p>In a real implementation, you would:</p>
            <ul>
                <li>Replace "test" with your actual PayPal client ID</li>
                <li>Implement server-side order creation and validation</li>
                <li>Set up proper error handling and transaction management</li>
                <li>Configure webhook endpoints to process payment events</li>
            </ul>
        </div>
    </div>

    <!-- PayPal JavaScript SDK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Simulate PayPal button rendering since we can't load the actual SDK
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('paypal-button-container');
            
            // Create a styled button that resembles PayPal checkout
            const paypalButton = document.createElement('div');
            paypalButton.style.backgroundColor = '#0070ba';
            paypalButton.style.color = 'white';
            paypalButton.style.padding = '12px 20px';
            paypalButton.style.borderRadius = '25px';
            paypalButton.style.cursor = 'pointer';
            paypalButton.style.fontWeight = 'bold';
            paypalButton.style.textAlign = 'center';
            paypalButton.style.boxShadow = '0 2px 4px rgba(0,0,0,0.2)';
            paypalButton.style.margin = '10px 0';
            paypalButton.innerHTML = 'PayPal Checkout';
            
            // Add click event
            paypalButton.addEventListener('click', function() {
                alert('In a real implementation, this would open the PayPal checkout flow.\n\nThe actual implementation would use the PayPal JavaScript SDK with your merchant credentials.');
            });
            
            container.appendChild(paypalButton);
            
            // Add a second button for card payments
            const cardButton = document.createElement('div');
            cardButton.style.backgroundColor = '#eee';
            cardButton.style.color = '#333';
            cardButton.style.padding = '12px 20px';
            cardButton.style.borderRadius = '25px';
            cardButton.style.cursor = 'pointer';
            cardButton.style.fontWeight = 'bold';
            cardButton.style.textAlign = 'center';
            cardButton.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
            cardButton.innerHTML = 'Debit or Credit Card';
            
            cardButton.addEventListener('click', function() {
                alert('This would normally open the card payment flow through PayPal.');
            });
            
            container.appendChild(cardButton);
            
            // Add explanation text below buttons
            const explanation = document.createElement('div');
            explanation.style.fontSize = '12px';
            explanation.style.color = '#666';
            explanation.style.marginTop = '15px';
            explanation.style.textAlign = 'center';
            explanation.innerHTML = 'Note: This is a demonstration - buttons will not process real payments';
            container.appendChild(explanation);
        });
    </script>
    
    <!-- Real implementation would use the following script -->
    <script src="https://www.paypal.com/sdk/js?client-id=&currency=USD"></script>
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                // This function sets up the details of the transaction
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '49.99'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }
        }).render('#paypal-button-container');
    </script>
</body>
</html>