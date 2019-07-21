<template>
    <div>
        <Menu></Menu>
        <router-view></router-view>
    </div>
</template>

<script>
    import Menu from './components/front-end/Menu'
    export default {
        name: "App",
        components:{
            Menu
        }
    }
</script>

<style scoped>

</style>