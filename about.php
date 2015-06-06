<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eductional and Economic Statistics Overview</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Eductional and Economic Statistics Overview</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts_generate.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts Generate</a>
                    </li>
                    <li>
                        <a href="about.php"><i class="fa fa-fw fa-file"></i> About Program</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            About Software
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" style="min-height:100vh;">
                    <div class="col-lg-12">
                        <p>Software Version: <b>0.1.2</b></p>
                        <p>Developer: <b>Sithu Hlaing (Database Architech), Phyo Zaw Tun (Frontend Developer)</b></p>
                        <p>Credit: <b><a href="http://ironsummitmedia.github.io/startbootstrap-sb-admin/">Startbootstrap SB Admin Template</a></b></p>
                        <p>License: <b>MIT License. Feel free to do everything.</b></p>
                        <p>Copyright: <b>Sithu Hlaing and Phyo Zaw Tun</b></p>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script>
    // Morris.js Charts sample data for SB Admin template

    $(function() {

        //chart_age_0_14_eco
        Morris.Donut({
            element: 'chart_age_0_14_eco',
            data: [{
                label: "Employed",
                value: 12
            }, {
                label: "Unemployed",
                value: 30
            }, {
                label: "Economically inactive",
                value: 20
            }],
            resize: true
        });

        //chart_age_0_14_edu
        Morris.Donut({
            element: 'chart_age_0_14_edu',
            data: [{
                label: "None",
                value: 12
            }, {
                label: "Primary school (grade 1 - 5)",
                value: 30
            }, {
                label: "Middle school (grade 6 - 9)",
                value: 20
            }, {
                label: " High school (grade 10 - 11) ",
                value: 20
            }, {
                label: "Diploma ",
                value: 20
            }, {
                label: "University/ College",
                value: 20
            }, {
                label: "Post-graduate and above",
                value: 20
            }, {
                label: " Vocational training",
                value: 20
            }],
            resize: true
        });

        //chart_age_14_20_eco
        Morris.Donut({
            element: 'chart_age_14_20_eco',
            data: [{
                label: "Employed",
                value: 12
            }, {
                label: "Unemployed",
                value: 30
            }, {
                label: "Economically inactive",
                value: 20
            }],
            resize: true
        });

        //chart_age_14_20_edu
        Morris.Donut({
            element: 'chart_age_14_20_edu',
            data: [{
                label: "None",
                value: 12
            }, {
                label: "Primary school (grade 1 - 5)",
                value: 30
            }, {
                label: "Middle school (grade 6 - 9)",
                value: 20
            }, {
                label: " High school (grade 10 - 11) ",
                value: 20
            }, {
                label: "Diploma ",
                value: 20
            }, {
                label: "University/ College",
                value: 20
            }, {
                label: "Post-graduate and above",
                value: 20
            }, {
                label: " Vocational training",
                value: 20
            }],
            resize: true
        });

        //chart_age_20_40_eco
        Morris.Donut({
            element: 'chart_age_20_40_eco',
            data: [{
                label: "Employed",
                value: 12
            }, {
                label: "Unemployed",
                value: 30
            }, {
                label: "Economically inactive",
                value: 20
            }],
            resize: true
        });

        //chart_age_20_40_edu
        Morris.Donut({
            element: 'chart_age_20_40_edu',
            data: [{
                label: "None",
                value: 12
            }, {
                label: "Primary school (grade 1 - 5)",
                value: 30
            }, {
                label: "Middle school (grade 6 - 9)",
                value: 20
            }, {
                label: " High school (grade 10 - 11) ",
                value: 20
            }, {
                label: "Diploma ",
                value: 20
            }, {
                label: "University/ College",
                value: 20
            }, {
                label: "Post-graduate and above",
                value: 20
            }, {
                label: " Vocational training",
                value: 20
            }],
            resize: true
        });

        //chart_age_40_60_eco
        Morris.Donut({
            element: 'chart_age_40_60_eco',
            data: [{
                label: "Employed",
                value: 12
            }, {
                label: "Unemployed",
                value: 30
            }, {
                label: "Economically inactive",
                value: 20
            }],
            resize: true
        });


        //chart_age_40_60_eco
        Morris.Donut({
            element: 'chart_age_40_60_edu',
            data: [{
                label: "None",
                value: 12
            }, {
                label: "Primary school (grade 1 - 5)",
                value: 30
            }, {
                label: "Middle school (grade 6 - 9)",
                value: 20
            }, {
                label: " High school (grade 10 - 11) ",
                value: 20
            }, {
                label: "Diploma ",
                value: 20
            }, {
                label: "University/ College",
                value: 20
            }, {
                label: "Post-graduate and above",
                value: 20
            }, {
                label: " Vocational training",
                value: 20
            }],
            resize: true
        });

        //chart_age_60_60_edu
        Morris.Donut({
            element: 'chart_age_60_60_edu',
            data: [{
                label: "None",
                value: 12
            }, {
                label: "Primary school (grade 1 - 5)",
                value: 30
            }, {
                label: "Middle school (grade 6 - 9)",
                value: 20
            }, {
                label: " High school (grade 10 - 11) ",
                value: 20
            }, {
                label: "Diploma ",
                value: 20
            }, {
                label: "University/ College",
                value: 20
            }, {
                label: "Post-graduate and above",
                value: 20
            }, {
                label: " Vocational training",
                value: 20
            }],
            resize: true
        });

        //chart_age_60_60_
        Morris.Donut({
            element: 'chart_age_60_60_eco',
            data: [{
                label: "Employed",
                value: 12
            }, {
                label: "Unemployed",
                value: 30
            }, {
                label: "Economically inactive",
                value: 20
            }],
            resize: true
        });


    });

    </script>

</body>

</html>
