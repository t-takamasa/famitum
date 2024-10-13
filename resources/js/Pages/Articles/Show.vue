<template>
    <div>
        <Header />
        <main>
            <div class="single_contents">
                <h1>{{ article.title }}</h1>
                <img :src="`/img/articles/${article.id}/main.jpg`" alt="" class="article-image">
                <p v-html="article.body"></p>
                <!-- <inertia-link href="{{ route('articles.index') }}">戻る</inertia-link> -->
                <a :href="`/articles`">戻る</a>
            </div>
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
            article: Object
        }
    }
</script>