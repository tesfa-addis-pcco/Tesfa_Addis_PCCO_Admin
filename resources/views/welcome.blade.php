<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all" />
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all" />
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all" />

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all" />
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all" />
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all" />
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all" />
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <span>
                        <img src="images/icon/logo.png" style='width:2.5rem; display: inline;' alt="TAPCCO" />
                        <h1 style='font-size:20px; display: inline;'>TAPCCO Admin</h1>
                    </span>

                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="home.html">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="chart.html"> <i class="fas fa-chart-bar"></i>Medicines</a>
                        </li>
                        <li>
                            <a href="table.html"> <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>


                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image" style="position: relative;">
                                            <i class="fa fa-user" aria-hidden="true"
                                                style="font-size: 1.5rem; position: absolute; top: 5px; right: 5px;"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#"> <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add a New patient</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                            <div class="modal-body">
                                <div>
                                    <div class="card">

                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="child_name" class=" form-control-label">Child's Name</label>
                                                <input type="text" id="child_name" placeholder="Enter the child's name"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="parent_name" class=" form-control-label">Parent's
                                                    Name</label>
                                                <input type="text" id="parent_name"
                                                    placeholder="Enter the parent's name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class=" form-control-label">Age</label>
                                                <input type="number" id="Age" placeholder="Enter child's age"
                                                    class="form-control">
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="sex" class=" form-control-label">Gender</label>
                                                        <div id='sex' class="form-check">
                                                            <div class="radio">
                                                                <label for="male" class="form-check-label ">
                                                                    <input type="radio" id="male" name="radios"
                                                                        value="male" class="form-check-input">Male
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label for="female" class="form-check-label ">
                                                                    <input type="radio" id="female" name="radios"
                                                                        value="female" class="form-check-input">Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="diagnose" class=" form-control-label">Diagnose</label>
                                                <input type="text" id="diagnose" placeholder="Child's diagnose"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date" class=" form-control-label">Entrance Date</label>
                                                <input type="date" id="date" placeholder="Entrance Date"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="education" class=" form-control-label">Education</label>
                                                <input type="text" id="education" placeholder="Education"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="region" class=" form-control-label">Region</label>
                                                <input type="text" id="region" placeholder="Region"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="woreda" class=" form-control-label">Woreda</label>
                                                <input type="text" id="woreda" placeholder="Woreda"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="center_location" class=" form-control-label">Center
                                                    Location</label>
                                                <input type="text" id="center_location" placeholder="Center Location"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>


                </div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Patients List</h2>
                                    <button onclick='handleAddPatient()' type="button" class="btn btn-primary"
                                        data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="zmdi zmdi-plus"></i>add a new patient</button>
                                </div>

                            </div>
                            <div class="shadow p-3 rounded table-data__tool-left m-l-25 m-t-10">
                                        <div class="rs-select2--light rs-select2--sm">
                                          <label for="age">Age</label>
                                            <select id="age" class="js-select2" name="property">
                                                <option selected="selected">All Ages</option>
                                                <option value="">&#60;10</option>
                                                <option value="">&#62;10</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                          <label for="gender">Gender</label>
                                            <select id="gender" class="js-select2" name="time">
                                                <option selected="selected">All Genders</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                          <label for="region">Region</label>
                                            <select id="region" class="js-select2" name="time">
                                                <option selected="selected">All regions</option>
                                                <option value="">Afar Region</option>
                                                <option value="">Amhara Region</option>
                                                <option value="">Dire Dawa</option>
                                                <option value="">Gambela Region</option>
                                                <option value="">Harari Region</option>
                                                <option value="">Oromia Region</option>
                                                <option value="">Sidama Region</option>
                                                <option value="">Somali Region</option>
                                                <option value="">South West Ethiopia Peoples' Region</option>
                                                <option value="">Southern Nations, Nationalities, and Peoples' Region (SNNPR)</option>
                                                <option value="">Tigray Region</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md">
                                          <label for="status">Status</label>
                                            <select id="status" class="js-select2" name="time">
                                                <option selected="selected">All</option>
                                                <option value="">Active</option>
                                                <option value="">Non-active</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="fas fa-undo"></i>Reset Filters</button>
                                    </div>
                        </div>

                            <div class="row">
                                <div style="width: 95% ; margin:auto">
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning ">
                                            <thead>
                                                <tr>
                                                    <th>Child's name</th>
                                                    <th>Parent's name</th>
                                                    <th>Age</th>
                                                    <th>sex</th>
                                                    <th>diagnose</th>
                                                    <th>entrance date</th>
                                                    <th>active</th>
                                                    <th>education</th>
                                                    <th>region</th>
                                                    <th>woreda</th>
                                                    <th>center location</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patients as $patient)
                                                    <tr>
                                                        <td>{{ $patient->child_name }}</td>
                                                        <td>{{ $patient->parent_name }}</td>
                                                        <td>{{ $patient->age }}</td>
                                                        <td>{{ $patient->sex }}</td>
                                                        <td>{{ $patient->diagnose }}</td>
                                                        <td>{{ $patient->entrance_date }}</td>
                                                        <td>{{ $patient->is_active }}</td>
                                                        <td>{{ $patient->education }}</td>
                                                        <td>{{ $patient->region }}</td>
                                                        <td>{{ $patient->woreda }}</td>
                                                        <td>{{ $patient->center_location }}</td>
                                                    </tr>
                                                @endforeach

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
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
<!-- end document-->
