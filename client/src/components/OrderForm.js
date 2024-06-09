import React, { useState } from 'react';
import axios from 'axios';

function OrderForm() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    quantity: '',
    color: '',
    size: '',
    material: ''
  });

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    axios.post('http://localhost:5000/api/order', formData)
      .then(response => {
        alert('Order placed successfully!');
        setFormData({
          name: '',
          email: '',
          phone: '',
          quantity: '',
          color: '',
          size: '',
          material: ''
        });
      })
      .catch(error => {
        console.error('There was an error placing the order!', error);
      });
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Name:
        <input type="text" name="name" value={formData.name} onChange={handleChange} required />
      </label>
      <label>
        Email:
        <input type="email" name="email" value={formData.email} onChange={handleChange} required />
      </label>
      <label>
        Phone:
        <input type="tel" name="phone" value={formData.phone} onChange={handleChange} required />
      </label>
      <label>
        Quantity:
        <input type="number" name="quantity" value={formData.quantity} onChange={handleChange} required />
      </label>
      <label>
        Color:
        <input type="text" name="color" value={formData.color} onChange={handleChange} required />
      </label>
      <label>
        Size:
        <input type="text" name="size" value={formData.size} onChange={handleChange} required />
      </label>
      <label>
        Material:
        <input type="text" name="material" value={formData.material} onChange={handleChange} required />
      </label>
      <button type="submit">Submit</button>
    </form>
  );
}

export default OrderForm;
