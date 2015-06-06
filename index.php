<?php
include("dbcon.php");
?>
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
                            Eduction and Economic <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">Union</li>
                            <li class="active"><a href="charts_generate.php">Generate Charts</a></li>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Education</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart_age_0_14_edu"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Economic</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart_age_0_14_eco"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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



            <?php
            function export_json($conn,$sql,$edu_chart,$eco_chart){
                $result = mysqli_query($conn, $sql);
                /* 
                Full texts     ID  Age     None    PS  MS  HS  D   UC  PG  VT  OT  E   UE  InAct   Distance 
                */
                $none_eductaion = 0;
                $primary_school = 0;
                $middle_school = 0;
                $height_school = 0;
                $diploma = 0;
                $under_graguate = 0;
                $post_graduage = 0;
                $vocational_training = 0;
                $other = 0;
                $employed = 0;
                $unemployed = 0;
                $economically_inactive = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $none_eductaion .= $row['None'];
                    $primary_school .= $row['PS'];
                    $middle_school .= $row['MS'];
                    $height_school .= $row['HS'];
                    $diploma .= $row['D'];
                    $under_graguate .= $row['UC'];
                    $post_graduage .= $row['PG'];
                    $vocational_training .= $row['VT'];
                    $other .= $row['OT'];
                    $employed .= $row['E'];
                    $unemployed .= $row['UE'];
                    $economically_inactive .= $row['InAct'];
                }
                $output['none_eductaion'] = $none_eductaion;
                $output['primary_school'] = $primary_school;
                $output['middle_school'] = $middle_school;
                $output['height_school'] = $height_school;
                $output['diploma'] = $diploma;
                $output['under_graguate'] = $under_graguate;
                $output['post_graduage'] = $post_graduage;
                $output['vocational_training'] = $vocational_training;
                $output['other'] = $other;
                $output['employed'] = $employed;
                $output['unemployed'] = $unemployed;
                $output['economically_inactive'] = $economically_inactive;

                $output['script'] = "

                Morris.Donut({
                        element: '{$eco_chart}',
                        data: [{
                            label: \"Employed\",
                            value: {$employed}
                        }, {
                            label: \"Unemployed\",
                            value: {$unemployed}
                        }, {
                            label: \"Economically inactive\",
                            value: {$economically_inactive}
                        }],
                        resize: true
                    });

                    Morris.Donut({
                        element: '{$edu_chart}',
                        data: [{
                            label: \"None\",
                            value: '{$none_eductaion}'

                        }, {
                            label: \"Primary school (grade 1 - 5)\",
                            value: {$primary_school}
                        }, {
                            label: \"Middle school (grade 6 - 9)\",
                            value: {$middle_school}
                        }, {
                            label: \"High school (grade 10 - 11)\",
                            value: {$height_school}
                        }, {
                            label: \"Diploma\",
                            value: {$diploma}
                        }, {
                            label: \"University/ College\",
                            value: {$under_graguate}
                        }, {
                            label: \"Post-graduate and above\",
                            value: {$post_graduage}
                        }, {
                            label: \"Vocational training\",
                            value: {$vocational_training}
                        }, {
                            label: \"Other\",
                            value: {$other}
                        }],
                        resize: true
                    });            

    ";
                return $output;
            }
            //chart_age_0_14
            $edu_chart = "chart_age_0_14_edu";
            $eco_chart = "chart_age_0_14_eco";
            //$sql = "SELECT * FROM `tbl_census_data` WHERE Age = '5 - 9' AND  Age = '10 - 14'";
            $sql = "SELECT * FROM `tbl_census_data`";
            $chart_data = export_json($conn,$sql,$edu_chart,$eco_chart);
            //print_r($json_1);
            echo "\n". $chart_data['script'] . "\n";

            //chart_age_0_14
            $edu_chart = "chart_age_14_20_edu";
            $eco_chart = "chart_age_14_20_eco";
            //$sql = "SELECT * FROM `tbl_census_data` WHERE Age = '5 - 9' AND  Age = '10 - 14'";
            $sql = "SELECT * FROM `tbl_census_data` WHERE Age = '15 - 19'";
            $chart_data = export_json($conn,$sql,$edu_chart,$eco_chart);
            //print_r($json_1);
            echo "\n". $chart_data['script'] . "\n";

            ?>

    });

    </script>

</body>

</html>
