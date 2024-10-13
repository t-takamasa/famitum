<template>
    <div>
        <Header />
        <main>
            <h1>記事一覧</h1>
            <ul class="article-list">
                <li v-for="article in articles" :key="article.id" class="article-item">
                    <a :href="`/articles/${article.id}`">
                        <img :src="`/img/articles/${article.id}/main.jpg`" alt="" class="article-image">
                        <h2 class="article-title">{{ article.title }}</h2>
                    </a>
                    <!-- <inertia-link :href="route('articles.show', article.id)">詳細を見る</inertia-link> -->
                </li>
            </ul>
        </main>
        <Footer />
    </div>
</template>
  
<script>
    import Header from '@/Components/Header.vue';
    import Footer from '@/Components/Footer.vue';
    export default {
        components: {
            Header,
            Footer
        },
        props: {
            articles: Array
        }
    }
</script>