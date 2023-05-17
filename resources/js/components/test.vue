<template>

    <div v-for="category in categories">

    </div>
</template>

<script>
export default {
    name: "test.vue",
    props: {
        categories: String
    },
    data() {
        return {
            categories: ['images', 'books', 'audio', 'video']
        }
    }
}
</script>

<style scoped>

</style>
