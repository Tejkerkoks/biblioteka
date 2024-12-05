<template>
    <div>
        <h1>Dodaj Książkę</h1>
        <form @submit.prevent="addBook">
            <input type="text" v-model="form.title" placeholder="Tytuł" required />
            <input type="text" v-model="form.author" placeholder="Autor" required />
            <input type="number" v-model="form.publication_year" placeholder="Rok wydania" required />
            <textarea v-model="form.description" placeholder="Opis"></textarea>
            <button type="submit">Dodaj</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            form: {
                title: '',
                author: '',
                publication_year: '',
                description: '',
            },
        };
    },
    methods: {
        async addBook() {
            try {
                const response = await axios.post('/api/books', this.form);
                alert('Książka dodana!');
            } catch (error) {
                console.error(error);
                alert('Błąd podczas dodawania książki.');
            }
        },
    },
};
</script>
