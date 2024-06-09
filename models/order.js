const mongoose = require('mongoose');

const orderSchema = new mongoose.Schema({
    name: String,
    email: String,
    phone: String,
    quantity: Number,
    color: String,
    size: String,
    material: String
});

module.exports = mongoose.model('Order', orderSchema);
