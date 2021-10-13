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
                                            Lengkapi Form Berrikut Ini Untuk Menambahkan Surat Masuk
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST" @submit.prevent="Submit()">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Subject</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="subject"
                                                        />
                                                        <p class="mt-2 text-danger">{{subjectWrong}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >From</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="from"
                                                        />
                                                        <p class="mt-2 text-danger">{{fromWrong}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            > To </label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="to"
                                                        />
                                                        <p class="mt-2 text-danger">{{toWrong}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Title</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="title"
                                                        />
                                                        <p class="mt-2 text-danger">{{titleWrong}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            for="file"
                                                            class="bmd-label-floating"
                                                            style="cursor:pointer;"
                                                            >File <br> <small>click here for input file</small></label
                                                        >
                                                        <input
                                                            id="file"
                                                            type="file"
                                                            class="form-control"
                                                            @change="Upload($event)"
                                                        />
                                                        <img :src="PreviewImg" v-if="PreviewImg != ''" class="ml-3" style="width: 100px;">
                                                        <p class="mt-2 text-danger">{{fileWrong}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Phone</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="phone"
                                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                        />
                                                        <p class="mt-2 text-danger">{{phoneWrong}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label
                                                            class="bmd-label-floating"
                                                            >Content</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="content"
                                                        />
                                                        <p class="mt-2 text-danger">{{contentWrong}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary pull-right">
                                                Tambah Surat
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
                subject: "",
                from: "",
                to: "",
                title: "",
                phone: "",
                content: "",
                file: null,
                subjectWrong: "",
                fromWrong: "",
                toWrong: "",
                titleWrong: "",
                phoneWrong: "",
                contentWrong: "",
                fileWrong: "",
                success: true,
                PreviewImg: ""
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
        },
        methods: {
            Upload (e){
                this.PreviewImg = URL.createObjectURL(e.target.files[0]);
                this.file = e.target.files[0];
            },
            Submit: function(){
                const WrapperData = new FormData();
                const Data = JSON.parse(localStorage.getItem('Authentication'));
                this.success = true;
                this.subjectWrong = "";
                this.fromWrong = "";
                this.toWrong = "";
                this.titleWrong = "";
                this.phoneWrong = "";
                this.contentWrong = "";
                this.fileWrong = "";

                for(let i = 1; i <= 8; i++){
                    if(this.subject.length == 0 && i == 1){
                        this.success = false;
                        this.subjectWrong = "Subject Harus Di Isi"
                    } else if(this.from.length == 0 && i == 2){
                        this.success = false;
                        this.fromWrong = "From Harus Di Isi"
                    } else if (this.to.length == 0 && i == 3){
                        this.success = false;
                        this.toWrong = "To Harus Di Isi";
                    } else if(this.title.length == 0 && i == 4){
                        this.success = false;
                        this.titleWrong = "Title Harus Di Isi";
                    } else if (this.phone.length == 0 && i == 5) {
                        this.success = false;
                        this.phoneWrong = "No Telepon Harus Di Isi";
                    } else if (this.content.length == 0 && i == 6){
                        this.success = false;
                        this.contentWrong = "Isi Surat Harus Di Isi";
                    } else if(this.file == null && i == 7){
                        this.success = false;
                        this.fileWrong = "File Harus Di Isi";
                    } else if(this.success && i == 8){
                        WrapperData.append('title', this.title);
                        WrapperData.append('subject', this.subject);
                        WrapperData.append('from', this.from);
                        WrapperData.append('to', this.to);
                        WrapperData.append('phone', this.phone);
                        WrapperData.append('content', this.content);
                        WrapperData.append('file', this.file);

                        const config = {
                            headers: {
                                "Authorization": `Bearer ${Data.token}`,
                            }
                        }

                        axios.post('/api/outgoing_mails', WrapperData, config).then( response => {
                            if(response.data.success){
                                Swal.fire({
                                    title: 'Berhasil',
                                    text: "Data berhasil di tambahkan",
                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Ok'
                                    }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.$router.push(`/TambahSuratMasuk`).catch(() => {

                                        });
                                    }
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: `${response.data.message}`,
                                })
                            }
                            }).catch( error => {
                            console.log(error);
                        })
                    }
                }
            }
        }
    }
</script>