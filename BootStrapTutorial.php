<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="C:\Users\user\IdeaProjects\BootstrapTutorial\bootstrap.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script  type='text/javascript' src='javascript/jquery-1.11.1.min.js'></script>
    <script type='text/javascript' src='bootstrap.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="C:\Users\user\IdeaProjects\BootstrapTutorial\bootstrap.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("image_rahul2.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }

        #foo {
            position: fixed;
            bottom: 0;
            right: 0;
            color: white;
            font-weight: bold;
            font-family: "Arial Black";
            font-size: medium;

        }
        .indent-small {
            margin-left: 5px;
        }
        .form-group.internal {
            margin-bottom: 0;
        }
        .dialog-panel {
            margin: 10px;
        }
        .datepicker-dropdown {
            z-index: 200 !important;
        }
        .panel > .panel-heading {
            background-image: none;
            background-color: rgb(42,100,150);
            color: white;

        }

        .panel-body {

            background: #e5e5e5;
            /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
            /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* IE10+ */
            background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
            /* IE6-9 fallback on horizontal gradient */
            font: 600 15px "Open Sans", Arial, sans-serif;
        }
        label.control-label {
            font-weight: 600;
            color: #777;
        }
        .panel-body
        {
            position: relative;
            top:-10px;
        }
        .kkk{
            font-weight: normal;
        }
    </style>


</head>
<body class="bg" onload="myFunction3()">

<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class=" glyphicon glyphicon-menu-hamburger" aria-hidden="true" style="color:white"></span>﻿
            </button>
            <a href="#" class="navbar-brand" style="color:white">HR</a>
        </div>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li> <a href="#" data-toggle="modal" data-target="#popUpWindow" data-backdrop="static" style="color: white">EMPLOYEE REGISTRATION</a>
                    <div class="modal fade" id="popUpWindow">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: #444444"> <span class="glyphicon glyphicon-pencil"></span> EMPLOYEE REGISTRATION</h2></center>

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div>
                                            <div class="panel panel-login">
                                                <div class="panel-heading">
                                                    <div class="row container-fluid">
                                                        <center><div class="btn-group">

                                                            <button  type="button" class="btn btn-primary" id="officialInfo">Official Info</button>
                                                            <button  type="button" class="btn btn-primary" id="personalInfo">Personal Info</button>
                                                            <button  type="button" class="btn btn-primary" id="education">Education</button>
                                                            <button  type="button" class="btn btn-primary" id="experience">Experience</button>
                                                            <button  type="button" class="btn btn-primary" id="salaryStructure">Salary Structure</button>
                                                        </div></center>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <form id="employeeInfoForm" class="container-fluid" style="display: none">
                                                                <div class="container-fluid">
                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="employeeID" class="col-md-5">
                                                                                    Date of Registration:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="date"  style="width:230px;height:35px; font-weight: normal" name="demo" id="demo2" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="employeeID" class="col-md-5">
                                                                                    Finger ID/Employee ID:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text"  style="width:230px;font-weight: normal; height:35px;" name="ID" id="employeeID" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="proximityID" class="col-md-5">
                                                                                    Proximity ID:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text"  name="ID" style="width:230px;font-weight: normal;height:35px;" id="proximityID" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="employeeName" class="col-md-5">
                                                                                    Employee Name:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="name" style="width:230px;font-weight: normal;height:35px;"  name="name" id="employeeName" placeholder="Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="birthdate" class="col-md-5">
                                                                                    Date of Birth:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" class="form-control-sm" style="width:230px;font-weight: normal;height:35px;" name="date1" id="birthdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="gender" class="col-md-5">
                                                                                    Gender :
                                                                                </label>
                                                                                <div class="col-md-4" >
                                                                                    <select id="gender" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option> </option>
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="religion" class="col-md-5">
                                                                                    Religion :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="religion" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option> </option>
                                                                                        <option>Islam</option>
                                                                                        <option>Hinduism</option>
                                                                                        <option>Buddhism</option>
                                                                                        <option>Christianity</option>
                                                                                        <option>Other</option>

                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nationality" class="col-md-5">
                                                                                    Nationality :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="name"  name="name" style="width:230px;font-weight: normal;height:35px;" id="nationality" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="contact" class="col-md-5">
                                                                                    Contact No. :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;" name="name" id="contact" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="email" class="col-md-5">
                                                                                    Email ID :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="email" style="width:230px;font-weight: normal;height:35px;" name="name" id="email" placeholder="anything@example.com">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="tin" class="col-md-5">
                                                                                    TIN No. :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;" name="name" id="tin" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="nid" class="col-md-5">
                                                                                    NID :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="nid" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="pfdate" class="col-md-5">
                                                                                    PF Joining Date :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="pfdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>


                                                                            <div class="form-group row">
                                                                                <label for="pf_id2" class="col-md-5">
                                                                                    Provident Fund ID :
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;" name="name" id="pf_id2" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="applicationdate" class="col-md-5">
                                                                                    Date of Application:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="applicationdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="interviewdate" class="col-md-5">
                                                                                    Date of Interview:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="interviewdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="joiningdate" class="col-md-5">
                                                                                    Joining Date :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="joiningdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="joining_memo_no" class="col-md-5">
                                                                                    Joining Memo No.:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="joining_memo_no" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="confirmdate" class="col-md-5">
                                                                                    Confirmation Date:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="confirmdate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="confirm_id" class="col-md-5">
                                                                                    Confirmation Memo No.:
                                                                                </label>
                                                                                <div class="col-md-2">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="confirm_id" placeholder="">
                                                                                </div>
                                                                            </div>






                                                                        </div>


                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row-md-5" id="photo">



                                                                                <div class="imageupload panel panel-default" >

                                                                                    <div class="file-tab panel-body" style="height: 450px">
                                                                                        <label class="btn btn-default btn-file" style="width:500px;font-weight: normal;">
                                                                                            <span style="font-weight: bold">Photo</span>
                                                                                            <!-- The file is stored here. -->
                                                                                            <input type="file" id="files" name="image-file">
                                                                                            <img src="" id="profile-img-tag" style="width: 200px;">
                                                                                        </label>
                                                                                    </div>

                                                                                </div>



                                                                                <script type="text/javascript">
                                                                                    $(document).ready(function() {
                                                                                        if (window.File && window.FileList && window.FileReader) {
                                                                                            $("#files").on("change", function(e) {
                                                                                                var files = e.target.files,
                                                                                                    filesLength = files.length;
                                                                                                for (var i = 0; i < filesLength; i++) {
                                                                                                    var f = files[i];
                                                                                                    var fileReader = new FileReader();
                                                                                                    fileReader.onload = (function(e) {
                                                                                                        var file = e.target;
                                                                                                        $("<span class=\"pip\">" +
                                                                                                            "<br/><img class=\"imageThumb\" style='width: 200px' src=\""  + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                                                                                            "<br/><br/><button  class=\"remove\">Remove image</button>" +
                                                                                                            "</span>").insertAfter("#files");
                                                                                                        $(".remove").click(function(){
                                                                                                            $(this).parent(".pip").remove();
                                                                                                        });

                                                                                                    });
                                                                                                    fileReader.readAsDataURL(f);
                                                                                                }
                                                                                            });
                                                                                        } else {
                                                                                            alert("Your browser doesn't support to File API")
                                                                                        }
                                                                                    });
                                                                                </script>





                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="retiredate" class="col-md-5">
                                                                                    Retirement Date:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="date" style="width:230px;font-weight: normal;height:35px;" class="form-control-sm" name="date1" id="retiredate" placeholder="dd-mm-yy">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="department" class="col-md-5">
                                                                                    Department :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="department"  style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>

                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="section" class="col-md-5">
                                                                                    Section :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="section" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="designation" class="col-md-5">
                                                                                    Designation of Joining:
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="designation" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="employeeType" class="col-md-5">
                                                                                    Employee Type :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="employeeType" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="service" class="col-md-5">
                                                                                    Service Status :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="service" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="salaryRegisture" class="col-md-5">
                                                                                    Salary Register :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="salaryRegisture" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="payScale" class="col-md-5">
                                                                                    Pay scale :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="payScale" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-md-5">
                                                                                    Status :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="status" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option>Choose...</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="disable" class="col-md-5"> Phisically Disable: </label>
                                                                                <div class="col-md-4">
                                                                                    <input type="checkbox" style="width:230px;font-weight: normal;height:35px;" class="" name="remember" id="disable">
                                                                                </div>
                                                                            </div>



                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <center><div class="btn-group">
                                                                    <input type="button" value="New" style="background-color: darkblue; color: white">
                                                                    <input type="button" onclick="myFunction()" value="Reset" style="background-color: darkblue; color: white">
                                                                    <script>
                                                                        function myFunction() {
                                                                            document.getElementById("employeeInfoForm").reset();
                                                                            $(".remove").parent(".pip").remove();




                                                                        }
                                                                    </script>
                                                                    <input type="button" value="Save" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Delete" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Exit" style="background-color: darkblue; color: white">
                                                                </div></center>

                                                            </form>

                                                            <form id="personalInfoForm" class="container-fluid" style="display: none">
                                                                <div class="container-fluid">
                                                                    <div class="row" style="border-bottom: 1px solid #ccc;">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee ID :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    </br>


                                                                    <div class="row">

                                                                        <div class="col-lg-6">

                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Father's Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="motherName" class="col-md-5">
                                                                                    Mother's Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="motherName" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="address1" class="col-md-5">
                                                                                    Present Address :
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <textarea rows="3" style="width:230px;font-weight: normal;"  id="address1"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <br/>
                                                                            <br/>
                                                                        </div>



                                                                        <div class="col-lg-6">

                                                                            <div class="form-group row">
                                                                                <label for="blood_group" class="col-md-5">
                                                                                    Blood Group :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="blood_group" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option> </option>
                                                                                        <option>A+</option>
                                                                                        <option>B+</option>
                                                                                        <option>AB+</option>
                                                                                        <option>O+</option>
                                                                                        <option>A-</option>
                                                                                        <option>B-</option>
                                                                                        <option>AB-</option>
                                                                                        <option>O-</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="marraige" class="col-md-5">
                                                                                    Marital Status :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="marraige" style="width:230px;font-weight: normal;height:35px;" placeholder="">
                                                                                        <option> </option>
                                                                                        <option>Married</option>
                                                                                        <option>Unmarrried</option>
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="address2" class="col-md-5">
                                                                                    Permanent Address:
                                                                                </label>
                                                                                <div class="col-md-5">
                                                                                    <textarea rows="3" style="width:230px;font-weight: normal;" id="address2"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row clearfix">
                                                                            <div class="col-md-10">
                                                                                <table class="table table-bordered table-striped table-inverse  col-md-offset-1" id="tab_logic" style="border:2px solid lightgrey;">
                                                                                    <col style="width:25px;">
                                                                                    <col style="width:150px;">
                                                                                    <col style="width:60px;">
                                                                                    <col style="width:120px;">
                                                                                    <col style="width:30px;">
                                                                                    <thead>
                                                                                    <tr >

                                                                                        <th class="text-center" >
                                                                                            SL#
                                                                                        </th>
                                                                                        <th class="text-center"  >
                                                                                            NOMIMEE NAME
                                                                                        </th>
                                                                                        <th class="text-center">
                                                                                            AGE
                                                                                        </th>
                                                                                        <th class="text-center">
                                                                                            RELATION
                                                                                        </th>
                                                                                        <th class="text-center">
                                                                                            PERCENTAGE
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr id='addr0'>

                                                                                        <td>
                                                                                            <input type="text" name='serial'  placeholder='1' class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='nominee' placeholder=''  class="form-control"/>
                                                                                        </td>

                                                                                        <td >
                                                                                            <input type="text" name='age' placeholder=''   class="form-control"/>
                                                                                        </td>
                                                                                        <td >
                                                                                            <input type="text" name='relative' placeholder=''   class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='percentage'  placeholder='' class="form-control"/>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr id='addr1'>
                                                                                        <td>
                                                                                            <input type="text" name='serial'  placeholder='2' class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='nominee' placeholder=''  class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='age' placeholder=''   class="form-control"/>
                                                                                        </td>
                                                                                        <td >
                                                                                            <input type="text" name='relative' placeholder=''   class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='percentage'  placeholder='' class="form-control"/>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                                <center><div class="btn-group">
                                                                    <input type="button" value="New" style="background-color: darkblue; color: white">
                                                                    <input type="button" onclick="myFunction1()" value="Reset" style="background-color: darkblue; color: white">
                                                                    <script>
                                                                        function myFunction1() {
                                                                            document.getElementById("personalInfoForm").reset();
                                                                        }
                                                                    </script>
                                                                    <input type="button" value="Save" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Delete" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Exit" style="background-color: darkblue; color: white">
                                                                </div></center>
                                                            </form>

                                                            <form id="salary-form" class="container-fluid" style="display: none">
                                                                <div class="container-fluid">
                                                                    <div class="row" style="border-bottom: 1px solid #ccc;">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee ID :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    </br>
                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="basic" class="col-md-5">
                                                                                <h4 style="font-weight: bold;"><span class="glyphicon glyphicon-plus"></span> Addition</h4>
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="basic" class="col-md-5">
                                                                                    Basic :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal()"  name="ppp" id="basic" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="houserent" class="col-md-5">
                                                                                    House Rent :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align: right" onblur="findTotal3(); findTotal()"  name="ppp" id="houserent" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="medicalAllownce" class="col-md-5">
                                                                                    Medical Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" onblur="findTotal3(); findTotal()" style="text-align:right;"  name="ppp" id="medicalAllownce" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="clinicalAllowance" class="col-md-5">
                                                                                    Clinical Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" onblur="findTotal3(); findTotal()" style="text-align:right;"  name="ppp" id="clinicalAllowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="non_practice_allowance" class="col-md-5">
                                                                                    Non-practice Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" onblur="findTotal3(); findTotal()" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" name="ppp" id="non_practice_allowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="otherAllowance" class="col-md-5">
                                                                                    Other Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" onblur="findTotal3(); findTotal()" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" name="ppp" id="otherAllowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="dearnessAllowance" class="col-md-5">
                                                                                    Dearness Allowance:
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" onblur="findTotal3(); findTotal()" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" name="ppp" id="dearnessAllowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="conveyanceAllowance" class="col-md-5">
                                                                                    Conveyance Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" onblur="findTotal3(); findTotal()" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" name="ppp" id="conveyanceAllowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="specialAllowance" class="col-md-5">
                                                                                    Special Allowance :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" onblur="findTotal3(); findTotal()" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" name="ppp" id="specialAllowance" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="attendancebonus" class="col-md-5">
                                                                                    Attendance Bonus :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal()"  name="ppp" id="attendancebonus" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="totalAddition" class="col-md-5">
                                                                                    Total Addition :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal()" name="ppp" id="totalAddition" onblur="findTotal3()" placeholder="0">
                                                                                    <script type="text/javascript">
                                                                                        function findTotal() {
                                                                                            var arr = document.getElementsByName('ppp');
                                                                                            var tot = 0;

                                                                                            for (var i = 0; i < arr.length-1; i++) {
                                                                                                if (parseInt(arr[i].value))
                                                                                                    tot =tot+ parseInt(arr[i].value);
                                                                                            }
                                                                                            document.getElementById('totalAddition').value = tot;
                                                                                        }


                                                                                    </script>


                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="basic" class="col-md-5">
                                                                                    <h4 style="font-weight: bold;"><span class="glyphicon glyphicon-minus"></span> Deduction</h4>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="roomCharge" class="col-md-5">
                                                                                    Room Charge :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal2()"  name="ppp2" id="roomCharge" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="tax" class="col-md-5">
                                                                                    Income Tax :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal2()" name="ppp2" id="tax" placeholder="">
                                                                                </div>
                                                                            </div>



                                                                            <div class="form-group row">
                                                                                <label for="providentFund" class="col-md-5">
                                                                                    Provident Fund :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal2()"  name="ppp2" id="providentFund" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="kallanFund" class="col-md-5">
                                                                                    Kallan Fund :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3(); findTotal2()" name="ppp2" id="kallanFund" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="meal" class="col-md-5">
                                                                                    Meal Charge :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;" onblur="findTotal3() ;findTotal2()"  name="ppp2" id="meal" placeholder="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="totalDeduction" class="col-md-5">
                                                                                    Total Deduction :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="ppp2" id="totalDeduction" onblur="findTotal3() ;findTotal3()" placeholder="0">
                                                                                </div>
                                                                                <script type="text/javascript">
                                                                                    function findTotal2() {
                                                                                        var arr = document.getElementsByName('ppp2');
                                                                                        var tot = 0;

                                                                                        for (var i = 0; i < arr.length-1; i++) {
                                                                                            if (parseInt(arr[i].value))
                                                                                                tot =tot+ parseInt(arr[i].value);
                                                                                        }
                                                                                        document.getElementById('totalDeduction').value = tot;
                                                                                    }


                                                                                </script>
                                                                            </div>

                                                                            </br>
                                                                            <div class="form-group row">
                                                                                <label for="totalDeduction" class="col-md-5">
                                                                                    Gross Salary :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="grossSalary" id="grossSalary" onblur="findTotal3()" placeholder="Total Addition- Total Deduction">
                                                                                </div>

                                                                                <script type="text/javascript">
                                                                                    function findTotal3() {
                                                                                        var arr = document.getElementsByName('ppp');
                                                                                        var arr2 = document.getElementsByName('ppp2');
                                                                                        var tot = 0;

                                                                                        for (var i = 0; i < arr.length-1; i++) {
                                                                                            if (parseInt(arr[i].value))
                                                                                                tot =tot+ parseInt(arr[i].value);
                                                                                        }


                                                                                        for (var j = 0; j < arr2.length-1; j++) {
                                                                                            if (parseInt(arr2[j].value))
                                                                                                tot =tot- parseInt(arr2[j].value);
                                                                                        }
                                                                                        document.getElementById('grossSalary').value = tot;
                                                                                    }


                                                                                </script>


                                                                            </div>

                                                                            </br> </br>



                                                                            <div class="form-group row">
                                                                                <label for="bankName" class="col-md-5">
                                                                                    Bank Name :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="bankName" style="width:230px;height:35px; font-weight: normal" placeholder="">
                                                                                        <option>...</option>

                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="branchname" class="col-md-5">
                                                                                    Branch Name :
                                                                                </label>
                                                                                <div class="col-md-4">
                                                                                    <select id="branchname" style="width:230px;height:35px; font-weight: normal" placeholder="">
                                                                                        <option>...</option>

                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="accountNo" class="col-md-5">
                                                                                    Account No :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;height:35px; font-weight: normal" name="name" id="accountNo" placeholder="">
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <center><div class="btn-group">
                                                                    <input type="button" value="New" style="background-color: darkblue; color: white">
                                                                    <input type="button" onclick="myFunction2()" value="Reset" style="background-color: darkblue; color: white">
                                                                    <script>
                                                                        function myFunction2() {
                                                                            document.getElementById("salary-form").reset();
                                                                        }
                                                                    </script>
                                                                    <input type="button" value="Save" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Delete" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Exit" style="background-color: darkblue; color: white">
                                                                </div></center>
                                                            </form>

                                                            <form id="educationform" class="container-fluid" style="display: none">
                                                                <div class="container-fluid">
                                                                    <div class="row" style="border-bottom: 1px solid #ccc;">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee ID :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    </br>
                                                                    </br>
                                                                    <div class="row">
                                                                        <div class="row clearfix">
                                                                            <table class="table table-bordered table-striped table-inverse" id="tab_logic0" style="border:2px solid lightgrey;">
                                                                                <col style="width:80px;">
                                                                                <col style="width:80px;">
                                                                                <col style="width:140px;">
                                                                                <col style="width:120px;">
                                                                                <col style="width:70px;">
                                                                                <col style="width:80px;">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th class="text-center" >
                                                                                        EXAM
                                                                                    </th>
                                                                                    <th class="text-center"  >
                                                                                        GROUP
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        Institute
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        BOARD
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        <select style="border:none;width:70px;height: 24px;">
                                                                                            <option>DIV</option>
                                                                                            <option>Class</option>
                                                                                            <option>CGPA</option>
                                                                                        </select>
                                                                                    </th>
                                                                                    <th class="text-center">
                                                                                        YEAR
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr id='xx0'>
                                                                                    <td>
                                                                                        <input type="text" name='exam'  placeholder='' class="form-control"/>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name='group'  placeholder='' class="form-control"/>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name='institute'  placeholder='' class="form-control"/>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name='board' placeholder=''  class="form-control"/>
                                                                                    </td>
                                                                                    <td >
                                                                                        <input type="text" name='class' placeholder=''   class="form-control"/>
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name='year'  placeholder='' class="form-control"/>
                                                                                    </td>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <a id="add_row" class="btn btn-default pull-left" style="position: relative;left:-13px;">+</a>

                                                                    <div class="row clearfix">
                                                                        <div class="col-md-6">
                                                                            <br/><br/><br/>
                                                                            <label style="position: relative;left: -60px;">Other Qualification:</label>
                                                                            <table class="table table-bordered table-striped table-inverse col-md-offset-3" id="tab_logic1" style="border:2px solid lightgrey;position: relative;top:-30px;">

                                                                                <thead>
                                                                                <tr >
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr id='yy1'>

                                                                                    <td>
                                                                                        <input type="text" name='exam'  placeholder='' class="form-control"/>
                                                                                    </td>

                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <a id="add_row1" class="btn btn-default pull-left" style="position: relative;top:-40px;left:150px;">+</a>
                                                                    <div class="row clearfix">
                                                                        <div class="col-md-6">
                                                                            <br/>
                                                                            <label style="position: relative;left: -60px;">Computer Skill:</label>
                                                                            <table class="table table-bordered table-striped table-inverse col-md-offset-3" id="tab_logic2" style="border:2px solid lightgrey;position: relative;top:-30px;">
                                                                                <thead><tr ></tr></thead><tbody>
                                                                            <tr id='zz1'><td>
                                                                                <input type="text" name='exam'  placeholder='' class="form-control"/></td></tr>
                                                                            </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <a id="add_row2" class="btn btn-default pull-left" style="position: relative;top:-40px;left:150px;">+</a>
                                                                </div>
                                                                <center><div class="btn-group">
                                                                    <input type="button" value="New" style="background-color: darkblue; color: white">
                                                                    <input type="button" onclick="myFunction1()" value="Reset" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Save" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Delete" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Exit" style="background-color: darkblue; color: white">
                                                                </div></center>
                                                                <script>
                                                                    $(document).ready(function(){
                                                                        $('#popUpWindow').on('hidden.bs.modal', function (e) {
                                                                            location.reload();
                                                                            $('#popUpWindow').show();
                                                                        });
                                                                        var field=1;
                                                                        $("#add_row1").click(function(){
                                                                            $('#yy'+field).html("<td><input name='exam"+field+"' type='text' placeholder='' class='form-control input-md'  /> </td>");

                                                                            $('#tab_logic1').append('<tr id="yy'+(field+1)+'"></tr>');
                                                                            field++;
                                                                        });

                                                                        var j=1;
                                                                        $("#add_row2").click(function(){
                                                                            $('#zz'+j).html("<td><input name='exam"+j+"' type='text' placeholder='' class='form-control input-md'  /> </td>");

                                                                            $('#tab_logic2').append('<tr id="zz'+(j+1)+'"></tr>');
                                                                            j++;
                                                                        });



                                                                        var i=1;
                                                                        $("#add_row").click(function(){
                                                                            $('#xx'+i).html("<td><input name='exam"+i+"' type='text' placeholder='' class='form-control input-md'  /> </td><td><input  name='group"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='institute"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='board"+i+"' type='text' placeholder=''  class='form-control input-md'><td><input  name='class"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='year"+i+"' type='text' placeholder=''  class='form-control input-md'></td>");

                                                                            $('#tab_logic0').append('<tr id="xx'+(i+1)+'"></tr>');
                                                                            i++;
                                                                        });
                                                                        $("#delete_row").click(function(){
                                                                            if(i>1){
                                                                                $("#xx"+(i-1)).html('');
                                                                                i--;
                                                                            }
                                                                        });

                                                                    });
                                                                </script>
                                                            </form>
                                                            <form id="experienceform" class="container-fluid" style="display: none">
                                                                <div class="container-fluid">
                                                                    <div class="row" style="border-bottom: 1px solid #ccc;">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee ID :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group row">
                                                                                <label for="fatherName" class="col-md-5">
                                                                                    Employee Name :
                                                                                </label>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" style="width:230px;font-weight: normal;height:35px;"  name="name" id="fatherName" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    </br>
                                                                    </br>
                                                                    <div class="row">
                                                                        <div class="row clearfix">
                                                                            <div class="col-md-13">
                                                                                <table class="table table-bordered table-striped table-inverse" id="ex_tab_logic" style="border:2px solid lightgrey;">
                                                                                    <col style="width:80px;">
                                                                                    <col style="width:110px;">
                                                                                    <col style="width:40px;">
                                                                                    <col style="width:100px;">
                                                                                    <thead>
                                                                                    <tr >

                                                                                        <th class="text-center" >
                                                                                            Designation
                                                                                        </th>
                                                                                        <th class="text-center"  >
                                                                                            Company Name
                                                                                        </th>
                                                                                        <th class="text-center">
                                                                                            Job Duration
                                                                                        </th>
                                                                                        <th class="text-center">
                                                                                            Responsibility
                                                                                        </th>

                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr id='ex_addr0'>

                                                                                        <td>
                                                                                            <input type="text" name='designation'  placeholder='' class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='company' placeholder=''  class="form-control"/>
                                                                                        </td>
                                                                                        <td >
                                                                                            <input type="text" name='duration' placeholder=''   class="form-control"/>
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" name='resposibility'  placeholder='' class="form-control"/>
                                                                                        </td>
                                                                                    </tr>


                                                                                    </tbody>

                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <a id="ex_add_row" class="btn btn-default pull-left" style="position: relative;left:-13px;">+</a>
                                                                    </div>
                                                                </div>
                                                                <center><div class="btn-group">
                                                                    <input type="button" value="New" style="background-color: darkblue; color: white">
                                                                    <input type="button" onclick="myFunction1()" value="Reset" style="background-color: darkblue; color: white">
                                                                    <script>
                                                                        function myFunction1() {
                                                                            document.getElementById("personalInfoForm").reset();
                                                                        }
                                                                    </script>
                                                                    <input type="button" value="Save" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Delete" style="background-color: darkblue; color: white">
                                                                    <input type="button" value="Exit" style="background-color: darkblue; color: white">

                                                                </div></center>
                                                                <script>
                                                                    $(document).ready(function(){
                                                                        $('#popUpWindow').on('hidden.bs.modal', function (e) {
                                                                            location.reload();
                                                                            $('#popUpWindow').show();
                                                                        });
                                                                        var ex_i=1;
                                                                        $("#ex_add_row").click(function(){
                                                                            $('#ex_addr'+ex_i).html("<td><input name='designation"+ex_i+"' type='text' placeholder='' class='form-control input-md'  /> </td><td><input  name='company"+ex_i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='duration"+ex_i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='resposibility"+ex_i+"' type='text' placeholder=''  class='form-control input-md'>");

                                                                            $('#ex_tab_logic').append('<tr id="ex_addr'+(ex_i+1)+'"></tr>');
                                                                            ex_i++;
                                                                        });


                                                                    });
                                                                </script>


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
                    </div>

                </li>
                <li><a href="#" style="color: white" >DEPARTMENT TRANSFER</a> </li>
                <li> <a href="#" data-toggle="modal" data-backdrop="static" data-target="#popUpWindow2" style="color: white">DISCIPLINARY ACTION</a>
                    <div class="modal fade" id="popUpWindow2">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: #444444"> <span class="glyphicon glyphicon-alert"></span> DISCIPLINARY ACTION</h2></center>

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="employeeInfoForm" class="container-fluid" >
                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group row">
                                                                <label for="employeeName" class="col-md-5">Ref No. :</label>
                                                                <div class="col-md-5">
                                                                    <input type="name" style="width:230px;font-weight: normal;height:35px;"  name="name" id="employeeName" placeholder="Ref No.">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Date :</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control-sm" name="demo" id='demo' style="width:230px;font-weight: normal;height:35px;background-color: lightgrey;" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="gender" class="col-md-5"> Department :</label>
                                                                <div class="col-md-5">
                                                                    <select id="gender" placeholder="" style="width:230px;font-weight: normal;height:35px;">
                                                                        <option></option>
                                                                        <option>Administration</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="gender" class="col-md-5"> Section Name :</label>
                                                                <div class="col-md-5">
                                                                    <select id="gender" placeholder="" style="width:230px;font-weight: normal;height:35px;">
                                                                        <option></option>
                                                                        <option>IT</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="gender" class="col-md-5"> Employee Name :</label>
                                                                <div class="col-md-5">
                                                                    <select id="name" placeholder="" style="width:230px;font-weight: normal;height:35px;">
                                                                        <option></option>
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="employeeName" class="col-md-5">Employee ID :</label>
                                                                <div class="col-md-5">
                                                                    <input type="name" style="width:230px;font-weight: normal;height:35px;"  name="name" id="employeeName" placeholder="" style="width:230px;height:30px;">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="employeeName" class="col-md-5">Designation :</label>
                                                                <div class="col-md-5">
                                                                    <input type="name" style="width:230px;font-weight: normal;height:35px;"  name="name" id="employeeName" placeholder="" style="width:300px;height:30px;">
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Remarks:</label>
                                                                <div class="col-md-5">
                                                                    <textarea rows="2" style="width:230px;font-weight: normal;border:1px solid grey;"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="col-lg-6">


                                                            <div class="form-group row">
                                                                <label for="employeeName" class="col-md-5">Memo No.:</label>
                                                                <div class="col-md-5">
                                                                    <input type="name" style="width:230px;font-weight: normal;height:35px;"  name="name" id="employeeName" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="employeeName" class="col-md-5">Occurance Place :</label>
                                                                <div class="col-md-5">
                                                                    <input type="name"style="width:230px;font-weight: normal;height:30px;"  name="name" id="employeeName" placeholder="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Date of Occurance:</label>
                                                                <div class="col-md-5">
                                                                    <input type="date" class="form-control-sm" name="date1" id="date" style="width:230px;font-weight: normal;height:35px;" placeholder="dd-mm-yy">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Action Taken on:</label>
                                                                <div class="col-md-5">
                                                                    <input type="date" class="form-control-sm" name="date1" id="date" style="width:230px;font-weight: normal;height:35px;" placeholder="dd-mm-yy">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Name of Allegation:</label>
                                                                <div class="col-md-5">
                                                                    <textarea rows="2" style="width:230px;font-weight: normal;border:1px solid grey;"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="birthdate" class="col-md-5">Course of Action:</label>
                                                                <div class="col-md-5">
                                                                    <textarea rows="2" style="width:230px;font-weight: normal;border:1px solid grey;"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <center>

                                            <div class="btn-group mr-5 col-md-offset-4" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-primary" style="width:80px;color:white;background-color: rgb(42,100,150);">New</button>
                                                <button type="button" class="btn btn-primary" style="width:80px;color:white;background-color: rgb(42,100,150);">Save</button>
                                                <button type="button" class="btn btn-primary" style="width:80px;color:white;background-color: rgb(42,100,150);">Edit</button>
                                                <button type="button" class="btn btn-primary" style="width:80px;color:white;background-color: rgb(42,100,150);">Refresh</button>
                                                <button type="button" class="btn btn-primary" style="width:80px;color:white;background-color: rgb(42,100,150);">Delete</button>
                                            </div>

                                        </center>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#" style="color: white">LEAVE</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">REPORT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Details</a> </li>
                        <li><a href="#">Daily</a> </li>
                        <li><a href="#">Monthly</a> </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="logout.php" style="color: white; font-weight: bold; font-size: medium">  <span class="glyphicon glyphicon-log-out" style="color: white"> </span> Logout</a></li>
            </ul>

        </div>

    </div>
</nav>
<div id="foo">
    <p><img src="Logopng.png" style="height: 50px"> CHATTAGRAM MAA-SHISHU O GENERAL HOSPITAL  </p>
</div>

<script>
    function myFunction3() {

        var arr=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

        var todaydate = new Date();
        var day = todaydate.getDate();
        var month = todaydate.getMonth() ;
        var year = todaydate.getFullYear();
        if(day<=9)
            day='0'+day;
        if(month<=9)
            var datestring = " "+day + "-" + arr[month] + "-" + year;
        else
            var datestring = " "+day + "-" + arr[month] + "-" + year;
        document.getElementById('demo').value = datestring;
        document.getElementById('demo2').value = todaydate;


    }

</script>


</body>
</html>