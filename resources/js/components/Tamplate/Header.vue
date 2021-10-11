<template>
    <div v-if="status == 'Login'">
    </div>
        <div v-else>
            <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                    <router-link tag="li" v-bind:to="{name : 'Home'}" class="nav-item">
                        <a class="nav-link">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </router-link>
                    <li class="nav-item ">
                        <a class="nav-link" href="./user.html">
                            <i class="material-icons">library_books</i>
                            <p>Surat Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./tables.html">
                            <i class="material-icons">library_books</i>
                            <p>Surat Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props: ['status'],
    }
</script>