<template>
    <div v-show="isVisible">
    <div class="card">
        <h5 class="card-header">{{ header }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">{{ text }}</p>
            <a href="#" class="btn btn-primary">{{  button }}</a>
            <button type="button"  @click="isVisible = false">x</button>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    name: "basiccard.vue",
    props: ['header', 'title', 'text', 'button'],
    data(){
        return{
            isVisible: true
        };
    },


};

</script>

<style scoped>

</style>
