const express = require('express');
const PaymentController = require('../controllers/paymentController');

const router = express.Router();
const paymentController = new PaymentController();

function setPaymentRoutes(app) {
    router.post('/create-order', paymentController.createOrder.bind(paymentController));
    router.post('/capture-order/:orderId', paymentController.captureOrder.bind(paymentController));
    
    app.use('/api/payments', router);
}

module.exports = setPaymentRoutes;