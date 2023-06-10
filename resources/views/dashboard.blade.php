{{-- @extends('layouts.header') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen Parkir Fasilkom Unej</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4579/bootstrap-table.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->

    <body>
        <div id='wrapper'>
            <nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
                <div class='navbar-header'>
                    <button type='button' class='navbar-toggle' data-toggle='collapse'
                        data-target='.navbar-hamburger-delicious'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand'>Dashboard Admin</a>
                </div>

                <div class='collapse navbar-collapse navbar-hamburger-delicious'>
                    <ul class='nav navbar-nav side-nav fadeInLeft'>
                        <li class='toggle-nav visible-lg visible-md visible-sm'><a><i
                                    class='fa fa-lg fa-arrow-left'></i>Hide Menu</a></li>
                        {{-- <li class='dashboard'><a href='#'><i class='fa fa-lg fa-dashboard'></i>Dash</a></li> --}}
                        <li class='active docs'><a href='#docs'><i class='fa fa-lg fa-folder-open'></i>Docs</a></li>
                        <li class='admin'><a href='#admin'><i class='fa fa-lg fa-user'></i>Admin</a></li>
                        <li class='divider'>
                            <hr>
                        </li>
                        {{-- <li class='person-lookup'><a href='#personLookup'><i class='fa fa-lg fa-phone-square'></i>Person Lookup</a></li>
					<li class='software-support'><a href='#softwareSupport'><i class='fa fa-lg fa-question-circle'></i>Support</a></li>
					<li class='dashboard-updates'><a href='#dashboardUpdates'><i class='fa fa-lg fa-arrow-up'></i>Updates</a></li>
					<li class='print'><a><i class='fa fa-lg fa-print'></i>Print</a></li> --}}
                    </ul>
                    <ul class='nav navbar-nav navbar-right navbar-user'>
                        <li class='dropdown user-dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span
                                    class="js-user-name">{{ Auth::user()->name }}</span><b class='caret'></b></a>
                            <ul class='dropdown-menu'>
                                {{-- <li class='settings'><a href='#settings'><i class='fa fa-lg fa-gear'></i> Settings</a></li> --}}
                                <li class='settings'><a href='{{ route('logout') }}'><i class='fa fa-lg fa-sign-out'></i>
                                        Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>

            <div id='page-wrapper'>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>Documents</h2>
                            <hr />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12 js-content">
                            <div class="docs-table">
                                <table data-toggle="table" data-show-toggle="true" data-show-columns="true"
                                    data-search="true" data-striped="true">
                                    <thead>
                                        <tr>
                                            <th data-field="Type">Type</th>
                                            <th data-field="Name">Name</th>
                                            <th data-field="Description">Description</th>
                                            <th data-field="Tags">Tags</th>
                                            <th data-field="LastViewed">Last Viewed</th>
                                            <th data-field="Expiration">Expiration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-file-excel-o"></i></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        {{-- <tr>
					
                    <td><i class="fa fa-file-powerpoint-o"></i></td>
                    <td>EVAMs presentation</td>
                    <td>This is presentation for the EVAM occuring later this month</td>
                    <td>EVAM</td>
                    <td>a day ago</td>
                    <td>Sep 13, 2015</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-file-word-o"></i></td>
                    <td>Xmas Party list</td>
                    <td>List of all the people who will be attending the holiday party</td>
                    <td>list</td>
                    <td>a few mins ago</td>
                    <td>Dec 25, 2015</td>
                  </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </body>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4579/bootstrap.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4579/bootstrap-table.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
