<template>
    <div v-if="status == 'Login'">
    </div>
        <div v-else>
            <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
                <div class="logo">
                    <a href="/Home" class="simple-text logo-normal">SiMail</a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                    <router-link tag="li" v-bind:to="{name : 'Home'}" class="nav-item">
                        <a class="nav-link">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </router-link>
                    <router-link tag="li" v-bind:to="{name : 'SuratMasuk'}" class="nav-item">
                        <a class="nav-link">
                            <i class="material-icons">library_books</i>
                            <p>Surat Masuk</p>
                        </a>
                    </router-link>
                    <router-link tag="li" v-bind:to="{name : 'SuratKeluar'}" class="nav-item">
                        <a class="nav-link">
                            <i class="material-icons">library_books</i>
                            <p>Surat Keluar</p>
                        </a>
                    </router-link>
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
