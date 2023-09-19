<template>
    <form>
        <input type="text" name="location" style="margin: 20px 0;" class="form-control"
               placeolder="Enter an address or zipcode" v-model="userInput"/>
        <button type="submit" class="btn btn-primary" v-on:click.prevent="auth">Get Weather</button>
    </form>
</template>

<script>

export default {
    name: "coinbase.vue",

    data() {


    },

    methods: {
        auth: function () {
            let crypto = require('crypto-js');
            let secret = 'IBDq1gsp53ST59ijNT7gerrr1vZK0XdIsPvFagbKEA9gQwuBX7M7Cjf0xMZKMU/IR5BZ9+W5ShyKVRBgKo6ROw==';
            let timestamp = crypto.enc.Utf8.parse(Date.now() / 1000);

            let ts = Date.now() / 1000;
            let requestPath = '/'
            let method = 'GET';

            let what = timestamp + method + requestPath;

            let key = crypto.enc.Utf8.parse(secret);
            let hmac = crypto.enc.Hex.stringify(crypto.HmacSHA256(timestamp, key));



            axios.post('https://cors-anywhere.herokuapp.com/https://api.pro.coinbase.com/products/BTC-USD/trades', {
                    headers: {
                        'CB-ACCESS-KEY': '75a3693f4e997839b76772b2164ee78a',
                        'CB-ACCESS-SIGN': hmac,
                        'CB-ACCESS-TIMESTAMP': ts,
                        'CB-ACCESS-PASSPHRASE': 'Seldovia1',
                        'Content-Type': 'application/json'
                    }
                })
        }
    },
}






</script>

<style scoped>

</style>
