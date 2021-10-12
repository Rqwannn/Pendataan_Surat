<template>
    <div class="dark-edition">
        <div class="wrapper">
            <Header></Header>

            <div class="main-panel">
                                <nav
                    class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "
                    id="navigation-example"
                >
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:void(0)"
                                >Jumlah Surat Keluar</a
                            >
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
                                    <div class="card-header card-header-primary d-flex" style="justify-content: space-between;">
                                        <div>
                                            <h4 class="card-title ">
                                                Surat keluar
                                            </h4>
                                            <p class="card-category">
                                                Jumlah dari keselurahan surat yang keluar
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <button class="btn btn-success">Tambah</button>
                                            <button class="btn btn-info ml-2">Update</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <th>SUBJECT</th>
                                                    <th>TITLE</th>
                                                    <th>TO</th>
                                                    <th>FROM</th>
                                                    <th>MAIL</th>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="result in ArrSuratKeluar" :key="result.id">
                                                        <td>
                                                            {{result.subject}}
                                                        </td>
                                                        <td>
                                                            {{result.title}}
                                                        </td>
                                                        <td>
                                                            {{result.to}}
                                                        </td>
                                                        <td>
                                                            {{result.from}}
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            FILE
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
    import header from "../components/Tamplate/Header";

    export default {
        data () {
            return {
                Title : "Surat Keluar | Simail",
                ArrSuratKeluar : [],
                NotData: "",
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
            this.getData();
        },
        methods: {
          getData: function(){
            const Data = JSON.parse(localStorage.getItem('Authentication'));

            const config = {
              headers: {
                "Authorization": `Bearer ${Data.token}`,
              }
            }
            
            axios.get('/api/outgoing_mails', config).then( response => {
              if(response.data.success){
                const DataSurat = response.data.data;
                DataSurat.forEach( result => {
                   this.ArrSuratKeluar.push(result);
                });
              } else {
                  this.NotData += `${response.data.message}`;
              }
            }).catch( error => {
              console.log(error);
            })

            if(this.NotData.length != 0){
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: `${this.NotData}`,
              })
            }
          }
        }
    }
</script>