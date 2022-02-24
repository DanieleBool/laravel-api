<template>
    <header>
        <h1>Boolpress</h1>
        <!-- <ul v-if="!eAutenticato">
            <a href="admin/login">accedi</a>
            <a href="admin/register">registrati</a>
        </ul>
        <a v-else href="admin/home">Dashboard</a> -->
        <a href="admin/home">Dashboard</a>
    </header>
</template>

<script>
export default {
    name: "Header",
    // computed:{
    //     eAutenticato: function(){
    //         return window.autenticato;
    //     }
    // }
}
</script>

<style lang="scss scoped">
</style>