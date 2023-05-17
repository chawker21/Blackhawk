<template>
    <div>
    <a :href="link" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ text }}</a>
    </div>
</template>

<script>
export default {
    name: "ahref.vue",
    props: ['link', 'text']
}
</script>

<style scoped>

</style>
