<template>
    <footer>
      <nav>
        <ul>
          <li><a href="/privacy">Privacy Policy</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </nav>
      <p>&copy; 2024 Famitum. All rights reserved.</p>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'Footer',
  };
  </script>
  
  <style scoped>
  footer {
    background-color: #333;
    color: white;
    padding: 1em;
    text-align: center;
  }
  
  footer nav ul {
    list-style: none;
    padding: 0;
  }
  
  footer nav ul li {
    display: inline;
    margin: 0 1em;
  }
  
  footer nav ul li a {
    color: white;
    text-decoration: none;
  }
  </style>