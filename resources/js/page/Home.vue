<template>
    <div>
      <div class="dark-edition">
        <div class="wrapper">

            <Header></Header>

            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Jumlah Surat Masuk</p>
                  <h3 class="card-title">1
                    <small>Surat</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Jumlah Surat Keluar</p>
                  <h3 class="card-title">1
                    <small>Surat</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Jumlah Keseluruhan</p>
                  <h3 class="card-title">2
                    <small>Surat</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Jumlah Surat Masuk</h4>
                  <p class="card-category">jumlah dari keselurahan surat yang masuk</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>SUBJECT</th>
                      <th>TITLE</th>
                      <th>TO</th>
                      <th>FROM</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kerja Sama</td>
                        <td>CEO</td>
                        <td>Ms Sunandar</td>
                        <td>PT ABDI JAYA MAKMUR</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Jumlah Surat Keluar</h4>
                  <p class="card-category">jumlah dari keselurahan surat yang Keluar</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>SUBJECT</th>
                      <th>TITLE</th>
                      <th>TO</th>
                      <th>FROM</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kerja Sama</td>
                        <td>CEO</td>
                        <td>Ms Sunandar</td>
                        <td>PT ABDI JAYA MAKMUR</td>
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
    import header from '../components/Tamplate/Header'

    export default{
        data () {
            return {
                Title : "Home | Simail",
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
            this.$emit('header', 'Login');
            this.$emit('seturl', `${this.$route.path}`)
        }
    }
</script>
