<template>
    <div>
        <Header />
        <main>
            <div class="inner mt-36">
                <div class="single_contents">
                    <h1>{{ article.title }}</h1>
                    <p>{{ formatDate(article.created_at) }}</p>
                    <div class="mt-12">
                        <img :src="`/img/articles/${article.id}-main.jpg`" alt="" class="article-image">
                    </div>
                    <p v-html="article.body"></p>
                    <!-- <inertia-link href="{{ route('articles.index') }}">戻る</inertia-link> -->
                    <a :href="`/articles`">戻る</a>
                </div>
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
        },
        methods: {
            formatDate(dateString) {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                const date = new Date(dateString);
                return date.toLocaleDateString('ja-JP', options);
            }
        }
    }
</script>