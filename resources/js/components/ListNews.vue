<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center col-sm-12 col-md-10">
                <div class="card col-md-3 col-sm-12" v-for="item in news">
                    <div class="card-image">
                        <img v-if="item.urlToImage" :src="item.urlToImage">
                        <img v-else src="https://image.shutterstock.com/image-vector/no-image-available-sign-internet-600w-261719003.jpg">
                    </div>
                    <div class="card-content">
                        <h5 class="text-justify">{{item.title}}</h5>
                        <p class="text-justify">{{item.description}}</p>
                    </div>
                    <div class="card-action">
                        <a class="btn btn-primary" :href="item.url" target="_blank">Ver nota completa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                news: []
            }
        },
        mounted() {
            let refer = this;
            fetch('https://newsapi.org/v2/top-headlines?country=mx&apiKey=8a8b1a9f6e9d48e687095242d1485b85', {method: 'GET'})
            .then(response => response.json())
            .then(data => {
                refer.news = data.articles;
                console.log(refer.news);
            });
        },
        methods: {

        },
    }
</script>
<style>
    img {
        vertical-align: middle;
        border-style: none;
        width: -moz-available;
    }
    .card {
        margin-bottom: 15px;
        margin-left: 5px;
        margin-right: 5px;
    }
</style>
