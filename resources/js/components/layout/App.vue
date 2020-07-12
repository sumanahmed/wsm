<template>
    <div class="wrapper">
        <nav-menu></nav-menu>
        <sidebar-menu></sidebar-menu>
        <div class="content-wrapper">
            <router-view></router-view>
        </div>
        <footer-menu></footer-menu>
    </div>
</template>

<script>   
    import Navbar from '../includes/Navbar.vue';
    import Sidebar from '../includes/Sidebar.vue';
    import Footer from '../includes/Footer.vue';

    export default {
        name: 'App',
        components:{
            'nav-menu'     : Navbar,
            'sidebar-menu' : Sidebar,
            'footer-menu'  : Footer
        },
        mounted() {
            
        }

    }
</script>