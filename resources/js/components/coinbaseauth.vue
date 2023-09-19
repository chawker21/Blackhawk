<template>
    <form>
        <input type="text" name="location" style="margin: 20px 0;" class="form-control"
               placeolder="Enter an address or zipcode" v-model="userInput"/>
        <button type="submit" class="btn btn-primary" v-on:click.prevent="auth" v-show="userInput">Get Stock</button>
    </form>
    <ul>
   <h3> <li v-for="value in coin.product">
        Time: {{ value.time }}
        Trade Id: {{ value.trade_id }}
        Price: {{ value.price }}
        Size: {{ value.size }}
        Side: {{ value.side }}
    </li></h3>
    </ul>
</template>

<script>
export default {
    name: "coinbaseauth.vue",
    props:{
        currency: '',
    },
    data() {
        return {
            userInput:'',
                coin:{
                    product: {
                        time: '',
                        trade_id:'',
                        price:'',
                        size:'',
                        side:'',
                    }
                }


        }


    },


    methods: {
        auth: function(){


        let crypto = require('crypto-js');
        let vm = this;
        var req = {
            timestamp: Math.floor(Date.now() / 1000), // seconds since Unix epoch
            method: 'GET',
            path: 'https://api.pro.coinbase.com/',
            body: '', // empty for GET requests
            message: undefined,
            secret: 'IBDq1gsp53ST59ijNT7gerrr1vZK0XdIsPvFagbKEA9gQwuBX7M7Cjf0xMZKMU/IR5BZ9+W5ShyKVRBgKo6ROw==', // read value from collection variable
            hmac: undefined,
            signature: undefined,
        };

            req.message = req.timestamp + req.method + req.path + req.body;
            req.hmac = crypto.HmacSHA256(req.message, req.secret);
            req.signature = req.hmac.toString(crypto.enc.Hex);

            console.info("request: ", req);
            let currency = vm.userInput;
           return axios.get(`https://cors-anywhere.herokuapp.com/https://api.pro.coinbase.com/products/${currency}-USD/trades`, {
                headers: {
                    'CB-ACCESS-KEY': '75a3693f4e997839b76772b2164ee78a',
                    'CB-ACCESS-SIGN': req.signature,
                    'CB-ACCESS-TIMESTAMP': req.timestamp,
                    'CB-ACCESS-PASSPHRASE': 'Seldovia1',
                    'Content-Type': 'application/json'

                },


            }).then(response => {
               let res = response;
               vm.coin.product = res.data;



           })
        }
},
}
</script>

<style scoped>

</style>
