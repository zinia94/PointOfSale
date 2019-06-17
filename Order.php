
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Order Management</title>
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
        .button {
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #4CAF50; /* Green */
            color: white;
        }
    </style>



</head>

<body class="bg" onload="GetHTTPRequestObject()">

<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                <span class=" glyphicon glyphicon-menu-hamburger" aria-hidden="true" style="color:white"></span>﻿
            </button>
            <a href="#" class="navbar-brand" style="color:white">POINT OF SALE</a>
        </div>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li> <a href="#" data-toggle="modal" data-target="#popUpWindow" data-backdrop="static" style="color: white">Order</a>
                    <div class="modal fade" id="popUpWindow">
                        <div class="modal-dialog modal-lg">

                            <form id="form1" name="form1" method="post" action="insert5.php">


                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: green; color: white">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: white"> <span class="glyphicon glyphicon-pencil" style="color: white"></span> Order Management</h2></center>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group row">
                                                    <label for="date_order" class="col-md-5">
                                                        Date :
                                                    </label>
                                                    <div class="col-md-3">
                                                        <input style="width:230px;background-color:#E4E4E4;font-weight: normal;height:35px;"  name="date_order" id="date_order" placeholder="" value="28/03/2018" readonly>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">


                                            </div>
                                        </div>
                                        </br>
                                        <div class="row">
                                            <center> <div class="container">
                                                <div class="row clearfix">
                                                    <div class="col-md-9 column">
                                                        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js">  </script>
                                                        <script type="text/javascript">
                                                            $(function(){
                                                                $('table').on('click','tr a',function(e){
                                                                    e.preventDefault();
                                                                    $(this).parents('tr').remove();
                                                                });
                                                            });

                                                        </script>
                                                        <script language="javascript">
                                                            function dotest(element,event)
                                                            {
                                                                alert("content " + element.textContent);
                                                            }
                                                        </script>
                                                        <table class="table table-bordered table-hover container-fluid" id="tab_logic">
                                                            <thead style="background-color: orangered; color: white; font-weight: bold; font-size: medium">
                                                            <tr >
                                                                <th class="text-center">
                                                                    SL#
                                                                </th>
                                                                <th class="text-center">
                                                                    Item Name
                                                                </th>
                                                                <th class="text-center">
                                                                    Sale price/unit
                                                                </th>
                                                                <th class="text-center">
                                                                    Sold Quantity
                                                                </th>
                                                                <th class="text-center">
                                                                    Total Sale price(Itemwise)
                                                                </th>


                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr id='addr0'>
                                                                <td style="font-weight:bold">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate0(this); handleDroplistChange(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate0(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
																				
                                                                                for(var i=0;i<=l;i++)
                                                                                {
																					
                                                                                    if(arr5[i].value==droplist.value){
                                                                                        cnt=cnt+1;
																					}
                                                                                    if(cnt>1)
                                                                                    {
																						
                                                                                        alert("Duplicate Item name!!");
																						document.getElementById("item_name").value="";
                                                                                        
                                                                                        break;

                                                                                    }
																					

                                                                                }
																	
																				
																				
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit" style="text-align:right; font-weight:bold;" name="sale_price_per_unit[]" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name').value="";
                                                                                        document.getElementById('sale_price_per_unit').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity" name="sold_quantity[]" onblur="itemwiseTotal()"  class="form-control" value=""/>
                                                                    <script>
                                                                    function itemwiseTotal()
                                                                    {
                                                                        var x=document.getElementById('item_name').value;
                                                                        var z=document.getElementById('sold_quantity').value;


                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                var test = JSON.parse(data);

                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity').value="";


                                                                                }


                                                                            }
                                                                        });
                                                                    }
                                                                </script>

                                                                </td>
                                                                <td>
                                                                    <input type="text" style="text-align:right;font-weight:bold;"  id='total_sale_price_itemwise0' readonly name='total_sale_price_itemwise' value="" placeholder='' class="form-control" />

                                                                </td>


                                                            </tr>
                                                            <tr id='addr1'>
                                                                <td style="font-weight:bold">
                                                                    2
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name1" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate1(this); handleDroplistChange1(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate1(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name1').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" style="text-align:right; font-weight:bold;" id="sale_price_per_unit1" name="sale_price_per_unit[]" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange1(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit1").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                            
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name1').value="";
                                                                                        document.getElementById('sale_price_per_unit1').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right; font-weight:bold;" ID ="sold_quantity1" name="sold_quantity[]"  onblur="itemwiseTotal1()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" style="text-align:right; font-weight:bold;"  ID='total_sale_price_itemwise1' readonly name="total_sale_price_itemwise" value="" placeholder='' class="form-control"/>
                                                                    <script >
                                                                    function itemwiseTotal1()
                                                                    {


                                                                        var x=document.getElementById('item_name1').value;

                                                                        var z=document.getElementById('sold_quantity1').value;


                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);

                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity1').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr2'>
                                                                <td style="font-weight:bold">
                                                                    3
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name2" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate2(this); handleDroplistChange2(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate2(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name2').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" style="text-align:right;font-weight:bold;" id="sale_price_per_unit2" name="sale_price_per_unit[]" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange2(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit2").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                            alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name2').value="";
                                                                                        document.getElementById('sale_price_per_unit2').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity2" name="sold_quantity[]"  onblur="itemwiseTotal2()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" style="text-align:right; font-weight:bold;"  id='total_sale_price_itemwise2' readonly name='total_sale_price_itemwise' value="" placeholder='' class="form-control"/>
                                                                    <script type="text/javascript">
                                                                    function itemwiseTotal2()
                                                                    {

                                                                        var x=document.getElementById('item_name2').value;

                                                                        var z=document.getElementById('sold_quantity2').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity2').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr3'>
                                                                <td style="font-weight:bold">
                                                                    4
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name3" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate3(this); handleDroplistChange3(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate3(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name3').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit3" style="text-align:right; font-weight:bold;" name="sale_price_per_unit[]" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange3(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit3").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name3').value="";
                                                                                        document.getElementById('sale_price_per_unit3').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity3" name="sold_quantity[]"  onblur="itemwiseTotal3()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise3' readonly  name="total_sale_price_itemwise" value="" style="text-align:right;font-weight:bold;" placeholder='' class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal3()
                                                                    {

                                                                        var x=document.getElementById('item_name3').value;

                                                                        var z=document.getElementById('sold_quantity3').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity3').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr4'>
                                                                <td style="font-weight:bold">
                                                                    5
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name4" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate4(this); handleDroplistChange4(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate4(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name4').value="";
																						
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit4" name="sale_price_per_unit[]" style="text-align:right; font-weight:bold;" value="" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange4(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit4").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name4').value="";
                                                                                        document.getElementById('sale_price_per_unit4').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right; font-weight:bold;" ID ="sold_quantity4" name="sold_quantity[]"  onblur="itemwiseTotal4()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise4' readonly  name="total_sale_price_itemwise" value="" style="text-align:right;font-weight:bold;" placeholder='' class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal4()
                                                                    {

                                                                        var x=document.getElementById('item_name4').value;

                                                                        var z=document.getElementById('sold_quantity4').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity4').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr5'>
                                                                <td style="font-weight:bold">
                                                                    6
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name5" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate5(this); handleDroplistChange5(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate5(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name5').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit5"  name="sale_price_per_unit[]" style="text-align:right;font-weight:bold;" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange5(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit5").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name5').value="";
                                                                                        document.getElementById('sale_price_per_unit5').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity5" name="sold_quantity[]"  onblur="itemwiseTotal5()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise5' readonly name="total_sale_price_itemwise" value="" style="text-align:right;font-weight:bold;" placeholder='' class="form-control"/>

                                                                    <script>
                                                                    function itemwiseTotal5()
                                                                    {

                                                                        var x=document.getElementById('item_name5').value;

                                                                        var z=document.getElementById('sold_quantity5').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity5').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr6'>
                                                                <td style="font-weight:bold">
                                                                    7
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name6" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate6(this); handleDroplistChange6(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate6(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name6').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit6" name="sale_price_per_unit[]" style="text-align:right;font-weight:bold;" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange6(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit6").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name6').value="";
                                                                                        document.getElementById('sale_price_per_unit6').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity6" name="sold_quantity[]"  onblur="itemwiseTotal6()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise6' readonly name="total_sale_price_itemwise" value="" style="text-align:right;font-weight:bold;" placeholder='' class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal6()
                                                                    {

                                                                        var x=document.getElementById('item_name6').value;

                                                                        var z=document.getElementById('sold_quantity6').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity6').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr7'>
                                                                <td style="font-weight:bold">
                                                                    8
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name7" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate7(this); handleDroplistChange7(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate7(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name7').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit7" name="sale_price_per_unit[]" style="text-align:right;font-weight:bold;" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange7(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit7").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name7').value="";
                                                                                        document.getElementById('sale_price_per_unit7').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity7" name="sold_quantity[]"  onblur="itemwiseTotal7()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise7' readonly name="total_sale_price_itemwise" style="text-align:right;font-weight:bold;" value="" placeholder='' class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal7()
                                                                    {

                                                                        var x=document.getElementById('item_name7').value;

                                                                        var z=document.getElementById('sold_quantity7').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity7').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr8'>
                                                                <td style="font-weight:bold">
                                                                    9
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name8" style="width:230px;font-weight: bold;height:35px;"  placeholder="" onchange="is_duplicate8(this); handleDroplistChange8(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate8(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name8').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit8" name="sale_price_per_unit[]" style="text-align:right;font-weight:bold;" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange8(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit8").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name8').value="";
                                                                                        document.getElementById('sale_price_per_unit8').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>




                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity8" name="sold_quantity[]"  onblur="itemwiseTotal8()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise8' readonly name="total_sale_price_itemwise" style="text-align:right;font-weight:bold;" value="" placeholder='' class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal8()
                                                                    {

                                                                        var x=document.getElementById('item_name8').value;

                                                                        var z=document.getElementById('sold_quantity8').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity8').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr id='addr9'>
                                                                <td style="font-weight:bold">
                                                                    10
                                                                </td>
                                                                <td>
                                                                    <select name="item_name[]" id="item_name9" style="width:230px;font-weight: bold;height:35px;" placeholder="" onchange="is_duplicate9(this); handleDroplistChange9(this);">
                                                                        <option></option>
                                                                        <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                                        <script>
                                                                            function is_duplicate9(droplist)
                                                                            {
                                                                                var arr5=document.getElementsByName('item_name[]');
                                                                                var l=arr5.length-1;
                                                                                var cnt=0;
																				
                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    if(arr5[i].value===droplist.value)
                                                                                        cnt=cnt+1;
                                                                                    if(cnt>1)
                                                                                    {
                                                                                        alert("Duplicate Item name!!");
                                                                                        document.getElementById('item_name9').value="";
                                                                                        break;

                                                                                    }

                                                                                }
                                                                            }
                                                                        </script>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="sale_price_per_unit9" style="text-align:right;font-weight:bold;" name="sale_price_per_unit[]" placeholder="" class="form-control" value="" >
                                                                    <script type="text/javascript">
                                                                        function handleDroplistChange9(droplist)
                                                                        {
                                                                            $.ajax({
                                                                                method: "post",
                                                                                type: "POST",
                                                                                url:'insert3.php?item_name='+droplist.value,
                                                                                async: true,
                                                                                dataType: "text",
                                                                                success: function( data ) {
                                                                                    //console.log(data);

                                                                                    var test = JSON.parse(data);
                                                                                    if(test.Price)
                                                                                        $("#sale_price_per_unit9").val(test.Price);
                                                                                    else
                                                                                    {
                                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                                        document.getElementById('item_name9').value="";
                                                                                        document.getElementById('sale_price_per_unit9').value="";

                                                                                    }

                                                                                }
                                                                            });

                                                                        };
                                                                    </script>
                                                                </td>





                                                                </script>
                                                                <td>
                                                                <input type="text" style="text-align:right;font-weight:bold;" ID ="sold_quantity9" name="sold_quantity[]"  onblur="itemwiseTotal9()" class="form-control" value=""/>
                                                                    </td>
                                                                    <td>
                                                                    <input type="text" id='total_sale_price_itemwise9' name="total_sale_price_itemwise"  style="text-align:right;font-weight:bold;" value="" placeholder='' readonly class="form-control"/>
                                                                    <script>
                                                                    function itemwiseTotal9()
                                                                    {

                                                                        var x=document.getElementById('item_name9').value;

                                                                        var z=document.getElementById('sold_quantity9').value;

                                                                        $.ajax({
                                                                            method: "post",
                                                                            type: "POST",
                                                                            url:'insert4.php?item_name='+x,
                                                                            async: true,
                                                                            dataType: "text",
                                                                            success: function( data ) {
                                                                                //console.log(data);
                                                                                var test = JSON.parse(data);
                                                                                if(test<parseInt(z))
                                                                                {
                                                                                    alert("You can sell "+x+" maximum "+test);
                                                                                    document.getElementById('sold_quantity9').value="";

                                                                                }
                                                                            }
                                                                        });
                                                                    }
                                                                </script>
                                                                </td>


                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <input type="button" value="Total:" style="height: 30px;width:280px; background-color:orangered;color: white;" onclick= "totalPrice();" />
                                                                        
                                                                </td>

                                                                <td>
                                                                    <input type="text" id='totalAddition' style="background-color:#E4E4E4; text-align:right;font-weight:bold;" placeholder="0" readonly />
                                                                    <script>
                                                                        function totalPrice()
                                                                        {
                                                           

                                                                            var arr1,arr2,arr,l;

                                                                            arr1=document.getElementsByName('item_name[]');
																			
                                                                            arr2=document.getElementsByName('sold_quantity[]');

                                                                            l=arr1.length-1;


                                                                            for(var i=0;i<=l;i++)
                                                                            {
																				

                                                                                if(arr1[i].value)
                                                                                {
																					
                                                                                    if(!arr2[i].value)
                                                                                    {
                                                                                        alert("Please enter the quantity for "+arr1[i].value);
                                                                                        return false;
                                                                                        break;
                                                                                    }
                                                                                }

                                                                                else if(arr2[i].value&&!arr1[i].value)
                                                                                {
                                                                                    var s;
                                                                                    var s1;
                                                                                    var s2;

                                                                                    alert("Enter a valid item name in "+(i+1));
                                                                                    return false;

                                                                            }
                                                                           


                                                                            if(i>l){
                                                                                arr=document.getElementsByName('sale_price_per_unit[]');

                                                                                for(var i=0;i<=l;i++)
                                                                                {
                                                                                    //alert(i+" "+arr1[i].value+" "+arr[i].value);
                                                                                    if(arr1[i].value&&arr[i].value)
                                                                                    {
                                                                                        var s;
                                                                                        if(i==0)
                                                                                            s="total_sale_price_itemwise0";
                                                                                        else s="total_sale_price_itemwise"+i.toString();


                                                                                        var a=parseInt(arr[i].value);
                                                                                        var b=parseInt(arr2[i].value);
                                                                                        var c=a*b;

                                                                                        document.getElementById(s).value=c;

                                                                                    }
                                                                                    else
                                                                                    {
                                                                                        if(!arr1[i].value&&arr[i].value)
                                                                                        {
                                                                                            alert("Enter a valid item name in row "+(i+1));
                                                                                            return false;
                                                                                            break;

                                                                                        }
                                                                                        else if(arr1[i].value&&!arr[i].value){
                                                                                            alert("Enter a valid sale price of the selected item in row "+(i+1));
                                                                                            return false;
                                                                                            break;
                                                                                        }


                                                                                    }
                                                                                }


                                                                                if(i>l){

                                                                                    var arr = document.getElementsByName('total_sale_price_itemwise');
                                                                                    var tot = 0;




                                                                                    for (var i = 0; i <= l; i++) {
                                                                                        if (parseInt(arr[i].value))
                                                                                            tot =tot+ parseInt(arr[i].value);
                                                                                    }
                                                                                    document.getElementById('totalAddition').value = tot;
                                                                                }

                                                                            }


                                                                        }
																		}
                                                                    </script>
                                                                </td>

                                                            </tr>



                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                                <p style="color:red;">*Please click the "Total" button before you click the "Save" button. </p>
                                            </center>


                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <center><div class="btn-group">
                                            <input type="button" onclick="clear_all()" value="Refresh" class="btn btn-primary">
                                            <script>
                                                function clear_all() {
                                                    if(confirm('Are you sure you want to clear data?')){
                                                        document.getElementById("form1").reset();
                                                        $(".remove").parent(".pip").remove();
                                                    }

                                                }
                                            </script>
                                            <input type="submit" name="save1" ID="save1" value="Save" onclick="return totalPrice();" class="btn btn-success">

                                            <input type="button" onclick="clear_all2()" value="Exit" data-dismiss="modal" class="btn btn-danger">
                                            <script>
                                                function clear_all2() {
                                                    if(confirm('Are you sure you want to exit?')){
                                                        document.getElementById("form1").reset();
                                                        $(".remove").parent(".pip").remove();

                                                    }

                                                }
                                            </script>

                                        </div>
                                        </center>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </li>


                <li><a href="#" data-toggle="modal" data-target="#popUpWindow2" data-backdrop="static" style="color: white">New Item Information</a>
                    <div class="modal fade" id="popUpWindow2">
                        <div class="modal-dialog">
                            <form action="insert.php" method ="post">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: green; color: white">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: white"> <span class="glyphicon glyphicon-pencil" style="color: white"></span> Item Information</h2></center>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <center>
                                                <div class="col-lg-12">
                                                    <div class="form-group row">
                                                        <label for="item_id" class="col-md-5">
                                                            Item ID :
                                                        </label>

                                                        


                                                        <div class="col-md-3">
                                                            <input style="background-color:#E4E4E4;width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="item_id" id="item_id" readonly value="8" />
                                                            </input>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <label for="item_name_new" class="col-md-5">
                                                            Item Name :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="item_name_new" id="item_name_new" placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="item_date" class="col-md-5">
                                                            Date :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input id="item_date" style="background-color:#E4E4E4;" name="item_date" value="28/03/2018" readonly>



                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="item_type" class="col-md-5">
                                                            Item Type :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <select id="item_type" name="item_type" style="width:230px;height:35px; font-weight: normal" placeholder="">
                                                                <option></option>
                                                                <option>Item from kitchen</option>
                                                                <option>Other Item</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <center><div class="btn-group">
                                            <input type="submit" name="save" value="Save" onclick="return empty2();" class="btn btn-success">
                                            <script>
                                                function empty2() {


                                                    var x;
                                                    x = document.getElementById("item_name_new").value;

                                                    if (x == "") {
                                                        alert("Enter a valid Item name");
                                                        return false;
                                                    }
                                                    var y= document.getElementById("item_type").value;
                                                    if (y == "") {
                                                        alert("Enter a valid number in Item Type");
                                                        return false;
                                                    }
                                                }
                                            </script>
                                            <input type="button" name="save" value="Exit" class="btn btn-danger">

                                        </div>
                                        </center>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </li>

                <li><a href="#" data-toggle="modal" data-target="#popUpWindow3" data-backdrop="static" style="color: white">Daily Item Information</a>
                    <div class="modal fade" id="popUpWindow3">
                        <div class="modal-dialog ">
                            <form action="insert2.php" method ="post">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: green; color: white">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: white"> <span class="glyphicon glyphicon-pencil" style="color: white"></span> Daily Item Information</h2></center>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <center>
                                                <div class="col-lg-12">

                                                    <div class="form-group row">
                                                        <label for="item_date3" class="col-md-5">
                                                            Date :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input id="item_date3" style="background-color:#E4E4E4;" name="item_date" value="28/03/2018"  readonly>



                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="item_name2" class="col-md-5">
                                                            Item Name :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <select id="item_name2" name="item_name2" style="width:230px;height:35px; font-weight: normal" placeholder="">
                                                                <option>Select..</option>
                                                                <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="sale_price2" class="col-md-5">
                                                            Sale Price (per unit) :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="sale_price2" id="sale_price2" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="item_received2" class="col-md-5">
                                                            Item Received :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="item_received2" id="item_received2" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>



                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <center><div class="btn-group">
                                            <input type="submit" name="save" value="Save" onclick="return empty();" class="btn btn-success">
                                            <script>
                                                function empty() {
                                                    var x;
                                                    x = document.getElementById("sale_price2").value;
                                                    if (x == "") {
                                                        alert("Enter a valid sale price");
                                                        return false;
                                                    }
                                                    y= document.getElementById("item_received2").value;
                                                    if (y == "") {
                                                        alert("Enter a valid number in Item Received");
                                                        return false;
                                                    }
                                                }
                                            </script>

                                            <input type="button" name="save" value="Exit" class="btn btn-danger">
                                        </div>
                                        </center>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </li>
                <li><a href="#" data-toggle="modal" data-target="#popUpWindow4" data-backdrop="static" style="color: white">Damaged/Broken Item Information</a>
                    <div class="modal fade" id="popUpWindow4">
                        <div class="modal-dialog ">
                            <form action="insert7.php" method ="post">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: green; color: white">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: white"> <span class="glyphicon glyphicon-pencil" style="color: white"></span> Damaged/Broken Item Information</h2></center>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <center>
                                                <div class="col-lg-12">

                                                    <div class="form-group row">
                                                        <label for="item_date3" class="col-md-5">
                                                            Date :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input id="item_date3" style="background-color:#E4E4E4;" name="item_date" value="28/03/2018" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="item_name_" class="col-md-5" >
                                                            Item Name :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <select id="item_name_" name="item_name_" style="width:230px;height:35px; font-weight: normal" placeholder="" onchange="show_information(this);">
                                                                <option></option>
                                                                <option value = "Chicken Burger">Chicken Burger</option><option value = "Icecream">Icecream</option><option value = "Jilapi">Jilapi</option><option value = "Porata">Porata</option><option value = "Samucha">Samucha</option><option value = "Singara">Singara</option><option value = "Vegetable Burger">Vegetable Burger</option>                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="opening_balance" class="col-md-5">
                                                            Opening_balance :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px;background-color:#E4E4E4; font-weight: normal" style="text-align:right; background-color:red;"  name="opening_balance" id="opening_balance" placeholder="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="received_item" class="col-md-5">
                                                            Received Item :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px;background-color:#E4E4E4; font-weight: normal" style="text-align:right;"  name="received_item" id="received_item" placeholder="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="item_sold" class="col-md-5">
                                                            Item Sold :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px;background-color:#E4E4E4; font-weight: normal" style="text-align:right;"  name="item_sold" id="item_sold" placeholder="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="damaged_item" class="col-md-5">
                                                            Damaged/Broken Item :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px; font-weight: normal" style="text-align:right;"  name="damaged_item" id="damaged_item" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-5">
                                                            <input type="button" onclick="show_remaining_balance()" value="Reamining Balance :" style="background-color: orangered; font-weight:bold; color: white;">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <input type="text" style="width:230px;height:35px;background-color:#E4E4E4; font-weight: normal" style="text-align:right;"  name="remaining_balance" id="remaining_balance" placeholder="" readonly>
                                                            <script>
                                                                function show_remaining_balance()
                                                                {
                                                                    var a=document.getElementById("opening_balance").value;
                                                                    var b=document.getElementById("received_item").value;
                                                                    var c=document.getElementById("item_sold").value;
                                                                    var d=document.getElementById("damaged_item").value;

                                                                    document.getElementById("remaining_balance").value=parseInt(a)+parseInt(b)-parseInt(c)-parseInt(d);
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        function show_information(droplist)
                                                        {

                                                            $.ajax({
                                                                method: "post",
                                                                type: "POST",
                                                                url:'insert6.php?item_name='+droplist.value,
                                                                async: true,
                                                                dataType: "text",
                                                                success: function( data ) {
                                                                    //console.log(data);

                                                                    var test = JSON.parse(data);
                                                                    if(test.Opening_balance){
                                                                        $("#opening_balance").val(test.Opening_balance);
                                                                        $("#received_item").val(test.Item_received);
                                                                        $("#item_sold").val(test.Sold_quantity);
                                                                        $("#damaged_item").val(test.Damaged);

                                                                    }
                                                                    else
                                                                    {
                                                                        if(droplist.value!="")
                                                                                        alert(droplist.value+" is not in stock");
                                                                        $("#opening_balance").val("");
                                                                        $("#received_item").val("");
                                                                        $("#item_sold").val("");
                                                                        $("#damaged_item").val("");
                                                                        $("#item_name_").val("");


                                                                    }

                                                                }
                                                            });

                                                        }
                                                    </script>

                                                </div>
                                            </center>



                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <center><div class="btn-group">
                                            <input type="submit" name="save" value="Save" onclick="return empty3();" class="btn btn-success">
                                            <script>
                                                function empty3() {


                                                    var x;
                                                    x = document.getElementById("item_name_").value;


                                                    if (x == "") {
                                                        alert("Enter a valid Item name");
                                                        return false;
                                                    }

                                                }
                                            </script>
                                            <input type="button" name="save" value="Exit" class="btn btn-danger">
                                        </div>
                                        </center>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </li>
                <li><a href="#" data-toggle="modal" data-target="#popUpWindow5" data-backdrop="static" style="color: white">Report</a>
                    <div class="modal fade" id="popUpWindow5">
                        <div class="modal-dialog ">
                            <form action="insert8.php" method ="post">
                                <div class="modal-content">

                                    <div class="modal-header" style="background-color: green; color: white">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <center><h2 class="modal-title" style="font-family: 'Arial Black'; color: white"> <span class="glyphicon glyphicon-pencil" style="color: white"></span> REPORT</h2></center>

                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <center>
                                                <div class="col-lg-12">

                                                    <div class="form-group row">
                                                        <label for="item_date_1" class="col-md-5">
                                                            From a Date :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="date" id="item_date_1" name="item_date_1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="item_date_2" class="col-md-5">
                                                            To a Date :
                                                        </label>
                                                        <div class="col-md-3">
                                                            <input type="date" id="item_date_2" name="item_date_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <center><div class="btn-group">
                                            <input type="submit" name="save" value="Preview" class="btn btn-success">
                                            <input type="button" name="save" value="Exit" class="btn btn-danger">
                                        </div>
                                        </center>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="logout.php" style="color: white; font-weight: bold; font-size: medium">  <span class="glyphicon glyphicon-log-out" style="color: white"> </span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>


