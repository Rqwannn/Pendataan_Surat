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
                                >Table List</a
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
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input
                                        type="text"
                                        value=""
                                        class="form-control"
                                        placeholder="Search..."
                                    />
                                    <button
                                        type="submit"
                                        class="btn btn-default btn-round btn-just-icon"
                                    >
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="javascript:void(0)"
                                    >
                                        <i class="material-icons">dashboard</i>
                                        <p class="d-lg-none d-md-block">
                                            Stats
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                        class="nav-link"
                                        href="javscript:void(0)"
                                        id="navbarDropdownMenuLink"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="material-icons"
                                            >notifications</i
                                        >
                                        <span class="notification">5</span>
                                        <p class="d-lg-none d-md-block">
                                            Some Actions
                                        </p>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbarDropdownMenuLink"
                                    >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0)"
                                            >Mike John responded to your
                                            email</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0)"
                                            >You have 5 new tasks</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0)"
                                            >You're now friend with Andrew</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0)"
                                            >Another Notification</a
                                        >
                                        <a
                                            class="dropdown-item"
                                            href="javascript:void(0)"
                                            >Another One</a
                                        >
                                    </div>
                                </li>
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
                                        <h4 class="card-title ">
                                            Simple Table
                                        </h4>
                                        <p class="card-category">
                                            Here is a subtitle for this table
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Country
                                                    </th>
                                                    <th>
                                                        City
                                                    </th>
                                                    <th>
                                                        Salary
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Dakota Rice
                                                        </td>
                                                        <td>
                                                            Niger
                                                        </td>
                                                        <td>
                                                            Oud-Turnhout
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $36,738
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Minerva Hooper
                                                        </td>
                                                        <td>
                                                            Curaçao
                                                        </td>
                                                        <td>
                                                            Sinaai-Waas
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $23,789
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Sage Rodriguez
                                                        </td>
                                                        <td>
                                                            Netherlands
                                                        </td>
                                                        <td>
                                                            Baileux
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $56,142
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Philip Chaney
                                                        </td>
                                                        <td>
                                                            Korea, South
                                                        </td>
                                                        <td>
                                                            Overland Park
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $38,735
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Doris Greene
                                                        </td>
                                                        <td>
                                                            Malawi
                                                        </td>
                                                        <td>
                                                            Feldkirchen in
                                                            Kärnten
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $63,542
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Mason Porter
                                                        </td>
                                                        <td>
                                                            Chile
                                                        </td>
                                                        <td>
                                                            Gloucester
                                                        </td>
                                                        <td
                                                            class="text-primary"
                                                        >
                                                            $78,615
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card card-plain">
                                    <div
                                        class="card-header card-header-primary"
                                    >
                                        <h4 class="card-title mt-0">
                                            Table on Plain Background
                                        </h4>
                                        <p class="card-category">
                                            Here is a subtitle for this table
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="">
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Country
                                                    </th>
                                                    <th>
                                                        City
                                                    </th>
                                                    <th>
                                                        Salary
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Dakota Rice
                                                        </td>
                                                        <td>
                                                            Niger
                                                        </td>
                                                        <td>
                                                            Oud-Turnhout
                                                        </td>
                                                        <td>
                                                            $36,738
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Minerva Hooper
                                                        </td>
                                                        <td>
                                                            Curaçao
                                                        </td>
                                                        <td>
                                                            Sinaai-Waas
                                                        </td>
                                                        <td>
                                                            $23,789
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Sage Rodriguez
                                                        </td>
                                                        <td>
                                                            Netherlands
                                                        </td>
                                                        <td>
                                                            Baileux
                                                        </td>
                                                        <td>
                                                            $56,142
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Philip Chaney
                                                        </td>
                                                        <td>
                                                            Korea, South
                                                        </td>
                                                        <td>
                                                            Overland Park
                                                        </td>
                                                        <td>
                                                            $38,735
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Doris Greene
                                                        </td>
                                                        <td>
                                                            Malawi
                                                        </td>
                                                        <td>
                                                            Feldkirchen in
                                                            Kärnten
                                                        </td>
                                                        <td>
                                                            $63,542
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Mason Porter
                                                        </td>
                                                        <td>
                                                            Chile
                                                        </td>
                                                        <td>
                                                            Gloucester
                                                        </td>
                                                        <td>
                                                            $78,615
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

                                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://www.creative-tim.com">
                                        Creative Tim
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://creative-tim.com/presentation"
                                    >
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="http://blog.creative-tim.com">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.creative-tim.com/license"
                                    >
                                        Licenses
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right" id="date">
                            , made with
                            <i class="material-icons">favorite</i> by
                            <a
                                href="https://www.creative-tim.com"
                                target="_blank"
                                >Creative Tim</a
                            >
                            for a better web.
                        </div>
                    </div>
                </footer>

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
        }
    }
</script>