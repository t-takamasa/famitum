<template>
    <header>
      <a href="/">
        <img :src="`/img/logo.png`" alt="" class="famitum img_anchor">
      </a>
      <nav>
        <ul>aaa
          <li><a href="/">Home</a></li>
          <li><a href="/articles">記事</a></li>
          <!-- <li><a href="/contact">お問い合わせ</a></li> -->
        </ul>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header',
  };
  </script>
  
  <style scoped>
  /* 必要に応じてスタイルを追加 */
  header {
    background-color: #fff;
    color: white;
    padding: 1em;
  }
  
  nav ul {
    list-style: none;
    padding: 0;
  }
  
  nav ul li {
    display: inline;
    margin-right: 1em;
  }
  </style>