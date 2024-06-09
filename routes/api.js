const express = require('express');
const Order = require('../models/order');
const router = express.Router();

router.post('/order', async (req, res) => {
    try {
        const order = new Order(req.body);
        await order.save();
        res.status(201).send({ message: 'Order placed successfully' });
    } catch (error) {
        res.status(400).send({ error: error.message });
    }
});

module.exports = router;
