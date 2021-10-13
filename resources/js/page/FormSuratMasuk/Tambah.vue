<template>
    <div class="dark-edition">
        <div class="wrapper">

            <Header></Header>

            <div class="main-panel">
                <nav
                    class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "
                    id="navigation-example">

                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:void(0)">Tambah Surat Masuk</a>
                        </div>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            aria-controls="navigation-index"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                            data-target="#navigation-example"
                        >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div
                            class="collapse navbar-collapse justify-content-end"
                        >
                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="javascript:void(0)"
                                    >
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div
                                        class="card-header card-header-primary"
                                    >
                                        <h4 class="card-title">Tambah Surat Masuk</h4>
                                        <p class="card-category">
                                            Complete your profile
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Company
                                                            (disabled)</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Username</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Email
                                                            address</label
                                                        >
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Fist Name</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Last Name</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Adress</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >City</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Country</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Postal Code</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Me</label>
                                                        <div class="form-group">
                                                            <label
                                                                class="bmd-label-floating"
                                                            >
                                                                Lamborghini
                                                                Mercy, Your
                                                                chick she so
                                                                thirsty, I'm in
                                                                that two seat
                                                                Lambo.</label
                                                            >
                                                            <textarea
                                                                class="form-control"
                                                                rows="5"
                                                            ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                type="submit"
                                                class="btn btn-primary pull-right"
                                            >
                                                Update Profile
                                            </button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import header from "../../components/Tamplate/Header";

    export default {
        data () {
            return {
                Title : "Tambah Surat Masuk | Simail",
            }
        },
        components: {
            'Header' : header
        },
        watch: {
            title: {
                immediate: true,
                handler() {
                    document.title = this.Title;
                }
            },
        },
        created() {
            this.$emit('seturl', `${this.$route.path}`);
            this.instanceScroll();
        },
        methods: {
            instanceScroll: function(){
                // (function() {
                //     const isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

                //     if (isWindows) {
                //         // if we are on windows OS we activate the perfectScrollbar function
                //         $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                //         $('html').addClass('perfect-scrollbar-on');
                //     } else {
                //         $('html').addClass('perfect-scrollbar-off');
                //     }
                // })();
                // jangan pake vue gw cape
            }
        }
    }
</script>