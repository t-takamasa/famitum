<template>
    <div>
        <Header />
        <main>
            <h1>お問い合わせフォーム</h1>
            <form @submit.prevent="submitForm">
            <div>
                <label for="name">お名前:</label>
                <input type="text" v-model="form.name" required>
            </div>

            <div>
                <label for="email">メールアドレス:</label>
                <input type="email" v-model="form.email" required>
            </div>

            <div>
                <label for="message">メッセージ:</label>
                <textarea v-model="form.message" rows="5" required></textarea>
            </div>

            <button type="submit">送信</button>

            <div v-if="errors.length">
                <ul>
                <li v-for="(error, index) in errors" :key="index">{{ error }}</li>
                </ul>
            </div>

            <p v-if="successMessage">{{ successMessage }}</p>
            </form>
            </main>
        <Footer />
    </div>
</template>
  
<script>
    import Header from '@/Components/Header.vue';
    import Footer from '@/Components/Footer.vue';
    import axios from 'axios';

    export default {
        components: {
            Header,
            Footer
        },
        data() {
            return {
                form: {
                    name: '',   // お名前フィールド
                    email: '',  // メールアドレスフィールド
                    message: '' // メッセージフィールド
                },
                errors: [],
                successMessage: ''
            };
        },
        methods: {
            submitForm() {
            this.errors = [];
            this.successMessage = '';
            axios.post('/api/contact', this.form)
                .then(response => {
                    this.successMessage = 'お問い合わせが送信されました！';
                    this.form = { name: '', email: '', message: '' }; // フォームをリセット
                })
                .catch(error => {
                    if (error.response && error.response.data.errors) {
                        this.errors = Object.values(error.response.data.errors).flat();
                    }
                });
            }
        }
    };
</script>



<style scoped>
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 500px;
    width: 100%;
    box-sizing: border-box;
}

/* ラベルと入力フィールドのスタイル */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    border-color: #0073E6; /* メインカラー */
    outline: none;
    box-shadow: 0 0 5px rgba(0, 115, 230, 0.3);
}

/* テキストエリアの高さ */
textarea {
    resize: vertical;
    min-height: 100px;
}

/* 送信ボタンのスタイル */
button {
    display: inline-block;
    background-color: #0073E6; /* メインカラー */
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #005bb5;
}

/* エラーメッセージのスタイル */
ul {
    padding-left: 20px;
    color: #e63946;
}

li {
    margin-bottom: 8px;
}

/* 成功メッセージのスタイル */
p {
    color: #28a745;
    font-weight: bold;
    text-align: center;
}

/* レスポンシブデザイン */
@media (max-width: 600px) {
    form {
        padding: 15px;
    }

    h1 {
        font-size: 24px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        font-size: 14px;
    }

    button {
        font-size: 14px;
    }
}
</style>
