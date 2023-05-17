<template>
    <div>
        <!-- Your HTML here -->
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: 'openAI.vue',

    data() {
        return {
            openAIParams: {
                model: '',
                prompt: '',
                max_tokens: 0,
                temperature: 0
            },
            openAIResponse: '',
        }
    },


    methods: {
        getAIResponse: function () {

            let vm = this;

            const prompt = vm.userInput;
            const maxTokens = 100; // The maximum number of tokens to generate.

           // axios.post('https://blackhawk21.azurewebsites.net/api/BasicOpenAi?',
                //{
            axios.post('https://api.openai.com/v1/engines/' + vm.openAIParams.model + '/completions',
                        {
                        prompt: vm.openAIParams.prompt,
                        max_tokens: vm.openAIParams.max_tokens,
                        temperature: vm.openAIParams.temperature
                    },
                    {
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': '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'
                    }
                }).then(function (response) {
                let res = response.data;
                vm.openAIResponse = res.choices[0].text.trim();
            })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
};
</script>

<style scoped>
/* Your CSS here */
</style>
