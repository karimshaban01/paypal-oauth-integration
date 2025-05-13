# PayPal Integration Project

This project demonstrates how to integrate PayPal payment processing into a web application using the PayPal SDK.

## Project Structure

- **src/config/paypal.js**: Configuration for the PayPal API, including client ID and secret.
- **src/controllers/paymentController.js**: Contains the `PaymentController` class with methods to create and capture orders.
- **src/routes/paymentRoutes.js**: Sets up the routes for payment processing.
- **src/public/css/style.css**: Styles for the payment interface.
- **src/public/js/payment.js**: Client-side JavaScript for interacting with the PayPal SDK.
- **views/index.html**: Main HTML page with the PayPal button.
- **server.js**: Entry point of the application, sets up the Express server.
- **package.json**: npm configuration file listing project dependencies.

## Setup Instructions

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd paypal-integration
   ```

3. Install the dependencies:
   ```
   npm install
   ```

4. Configure your PayPal credentials in `src/config/paypal.js`.

5. Start the server:
   ```
   node server.js
   ```

6. Open your browser and navigate to `http://localhost:3000` to see the application in action.

## Usage Guidelines

- Ensure you have a valid PayPal account and obtain your client ID and secret.
- Modify the payment amount and other parameters as needed in the `paymentController.js` file.
- Customize the styles in `style.css` to match your application's design.