<template>
    <div class="col-md-8 col-md-offset-3" v-if="step == 1">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h3>Get Current Weather</h3>
            </div>


            <div class="card-body bg-secondary">
                <h3 class="card-title">Enter an address or zip code:</h3>

                <form>
                    <input type="text" name="location" style="margin: 20px 0;" class="form-control"
                           placeolder="Enter an address or zipcode" v-model="userInput"/>
                    <button type="submit" class="btn btn-primary" v-on:click.prevent="getWeather" v-show="userInput">Get Weather</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-md-offset-3" v-if="step == 2">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h1>{{ googleAddress.formatted }}</h1>

                <div class="card-body bg-secondary">
                    <p>Weather Summary</p>
                    <hr/>
                    <ul>
                        <li>Lat: {{ googleAddress.lat }}</li>
                        <li>Lng: {{ googleAddress.lng }}</li>
                    </ul>
                    <ul>
                        <li>Description: {{  openWeather.description }}</li>
                        <li>Current Temp: {{  openWeather.temp }}</li>
                        <li>Feels Like: {{  openWeather.feels }}</li>
                        <li>Current pressure: {{  openWeather.pressure }}</li>
                        <li>Current humidity: {{  openWeather.humidity }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default ({
    name: 'weather.vue',

    data() {
        return {
            step: 1,
            userInput: '',
            googleAddress: {
                formatted: '',
                lat: '',
                lng: '',
            },
            openWeather: {
                description: '',
                temp: '',
                feels: '',
                pressure: '',
                humidity: '',
            }


        }
    },

    methods: {
        getWeather: function () {
            this.step = 2;

            let vm = this;
            axios.get('https://maps.googleapis.com/maps/api/geocode/json', {
                params: {
                    address: vm.userInput,
                    key: 'AIzaSyBMhFtasXQRw1drmRnTgwFIukhntriQyw8'
                }
            }).then(function (response) {
                let res = response.data.results[0];
                vm.googleAddress.formatted = res.formatted_address;
                vm.googleAddress.lat = res.geometry.location.lat;
                vm.googleAddress.lng = res.geometry.location.lng;

                const url = `https://api.openweathermap.org/data/2.5/weather?lat=${res.geometry.location.lat}&lon=${res.geometry.location.lng}&units=imperial&appid=f5b5de1c7c9e635727203d95b2b7e193`

                return axios.get(url);
            }).then( function(response)
            {
                let res2 = response.data;

                vm.openWeather.description = res2.weather[0].description;
                vm.openWeather.temp = res2.main.temp;
                vm.openWeather.feels = res2.main.feels_like;
                vm.openWeather.pressure = res2.main.pressure;
                vm.openWeather.humidity = res2.main.humidity;

            })

        }
    }
});




</script>

<style scoped>

</style>
