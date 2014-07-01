<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link href="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.css" rel="stylesheet">
  <link href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <script src="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.js"></script>

  <script src="script.js"></script>
</head>
<body>
  <?php
   
    /** Tentativa de conexão ao banco */
    $endereco = 'localhost';
    $mysql_user = 'root';
    $mysql_password = '';
    $link = mysql_connect( $endereco, $mysql_user, $mysql_password);
    if (!$link) {
        die('Não foi possível conectar: ' . mysql_error());
    }

    
    mysql_close($link);
  ?>
  
  
  
  
  
  

<!-- HOME -->
<div data-role="page" data-control-title="Home" id="page1">
    <div data-theme="a" data-role="header">
        <h1>
            Header
        </h1>
        <a href="#page5" class="ui-btn ui-btn-right">
            Log In/Out
        </a>
    </div>
    <div role="main" class="ui-content">
        <a href="#page6" data-controltype="image">
            <div style=" text-align:center">
                <img style="width: 100px; height: 100px" src="http://www.clker.com/cliparts/M/o/W/d/C/j/about-icon-md.png">
            </div>
        </a>
        <hr style="height:3px; background-color:#ccc; border:0; margin-top:12px; margin-bottom:12px;">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a href="#page2" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 100px; height: 100px" src="http://upload.wikimedia.org/wikipedia/commons/4/4f/Simple_Alert.svg">
                    </div>
                </a>
            </div>
            <div class="ui-block-b">
                <a href="#page7" data-controltype="image">
                    <div style="">
                        <img style="width: 128px; height: 128px" src="https://cdn0.iconfinder.com/data/icons/business-vector-tab-bar-icons/48/products-512.png">
                    </div>
                </a>
            </div>
        </div>
        <hr style="height:3px; background-color:#ccc; border:0; margin-top:12px; margin-bottom:12px;">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <a href="#page10" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 100px; height: 100px" src="http://www.dnnsoftware.com/portals/0/Images/DNN/redStoreIcon.png">
                    </div>
                </a>
            </div>
            <div class="ui-block-b">
            </div>
        </div>
    </div>
</div>
<!-- /HOME -->

<!-- ALERTS -->
<div data-role="page" data-control-title="Alerts List" id="page2">
    <div data-theme="a" data-role="header" data-position="fixed">
        <h1 class="ui-title">
            (4) Alerts
        </h1>
        <a href="#page1" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-leftui-btn-a ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
    </div>
    <div role="main" class="ui-content">
        <ul id="Alertas" data-role="listview" data-divider-theme="a" data-inset="false"
        class="Alerts">
            <li data-theme="a">
                <a href="#page4" data-transition="slide">
                    Traces of bacteria E. Coli in Danone yougurt
                </a>
            </li>
            <li data-theme="a">
                <a href="#page4" data-transition="slide">
                    Traces of bacteria E. Coli in Danone yougurt
                </a>
            </li>
            <li data-theme="b">
                <a href="#page4" data-transition="slide">
                    Traces of bacteria E. Coli in Danone yougurt
                    <span class="ui-li-count">
                        !
                    </span>
                </a>
            </li>
            <li data-theme="a">
                <a href="#page4" data-transition="slide">
                    Traces of bacteria E. Coli in Danone yougurt
                </a>
            </li>
        </ul>
    </div>
    <div data-role="tabbar" data-iconpos="left" data-theme="a">
        <ul>
            <li>
                <a href="#page2" data-transition="fade" data-theme="" data-icon="">
                    My Alerts
                </a>
            </li>
            <li>
                <a href="#" data-transition="fade" data-theme="" data-icon="">
                    All Alerts
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /ALERTS -->

<!-- INSIDE ALERT -->
<div data-role="page" data-control-title="Inside Alert" id="page4">
    <div data-theme="a" data-role="header" data-position="fixed">
        <a href="#page2" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
        <h1 class="ui-title">
            Traces of bacteria E. Coli found
        </h1>
    </div>
    <div role="main" class="ui-content">
        <h3>
            Traces of bacteria E. Coli
        </h3>
        <div data-role="collapsible-set">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    Related Products
                </h3>
                <ul data-role="listview" data-divider-theme="a" data-inset="false">
                    <li data-theme="a">
                        <a href="#page1" data-transition="slide">
                            Lentils
                        </a>
                    </li>
                    <li data-theme="a">
                        <a href="#page1" data-transition="slide">
                            Beans
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- INSIDE ALERT -->

<!-- CREATE PROFILE -->
<div data-role="page" data-control-title="Create Profile" id="page5">
    <div data-theme="a" data-role="header">
        <h1 class="ui-title">
            Profile
        </h1>
        <a href="#page1" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Button
        </a>
    </div>
    <div role="main" class="ui-content">
        <form id="Create Profile" action="" method="POST">
            <h3>
                Sign In
            </h3>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput1">
                    E-mail
                </label>
                <input name="" id="textinput1" placeholder="" value="your@email.here"
                type="email">
            </div>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput2">
                    Password
                </label>
                <input name="" id="textinput2" placeholder="" value="Password" type="password"
                data-mini="true">
            </div>
        </form>
        <input type="submit" value="Enter">
        <hr style="height:4px; background-color:#ccc; border:0; margin-top:12px; margin-bottom:12px;">
        <h3>
            Register
        </h3>
        <form action="">
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput4">
                    E-mail
                </label>
                <input name="" id="textinput4" placeholder="" value="your@email.here"
                type="email">
            </div>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput5">
                    Password
                </label>
                <input name="" id="textinput5" placeholder="" value="Password" type="password"
                data-mini="true">
            </div>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput7">
                    Double check Password
                </label>
                <input name="" id="textinput7" placeholder="" value="password" type="password">
            </div>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput8">
                    Name
                </label>
                <input name="" id="textinput8" placeholder="" value="Your name" type="text">
            </div>
            <div class="ui-field-contain" data-controltype="textinput">
                <label for="textinput9">
                    Birth
                </label>
                <input name="" id="textinput9" placeholder="" value="" type="date">
            </div>
        </form>
        <input type="submit" value="Register">
    </div>
</div>
<!-- /CREATE PROFILE -->

<!-- EDIT PROFILE -->
<div data-role="page" data-control-title="Edit Profile" id="page6">
    <div data-theme="a" data-role="header">
        <h1 class="ui-title">
            Profile
        </h1>
        <a href="#page1" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Button
        </a>
    </div>
    <div role="main" class="ui-content">
        <div data-role="collapsible-set">
            <div data-role="collapsible">
                <h3>
                    My Diseases
                </h3>
                <ul data-role="listview" data-divider-theme="a" data-inset="false">
                    <li data-theme="a">
                        Diabetes
                        <span class="ui-li-count">
                            X
                        </span>
                    </li>
                    <li data-theme="a">
                        Celiac
                        <span class="ui-li-count">
                            X
                        </span>
                    </li>
                </ul>
                <div class="ui-field-contain" data-controltype="searchinput">
                    <input name="" id="searchinput1" placeholder="" value="Add (ex: Diabetes)"
                    type="search">
                </div>
            </div>
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    My Allergies
                </h3>
                <ul data-role="listview" data-divider-theme="a" data-inset="false">
                    <li data-theme="a">
                        Gluten
                        <span class="ui-li-count">
                            X
                        </span>
                    </li>
                    <li data-theme="a">
                        Soy
                        <span class="ui-li-count">
                            X
                        </span>
                    </li>
                </ul>
                <div class="ui-field-contain" data-controltype="searchinput">
                    <input name="" id="searchinput2" placeholder="" value="Add (ex: Gluten)"
                    type="search">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /EDIT PROFILE -->

<!-- PRODUCTS -->
<div data-role="page" data-control-title="Products" id="page7">
    <div data-theme="a" data-role="header">
        <a href="#page1" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
        <h1 class="ui-title">
            Products
        </h1>
    </div>
    <div role="main" class="ui-content">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <div class="ui-field-contain" data-controltype="searchinput">
                    <input name="" id="searchinput3" placeholder="" value="Pesto" type="search"
                    data-mini="true">
                </div>
            </div>
            <div class="ui-block-b">
                <div style=" text-align:right" data-controltype="image">
                    <img style="width: 64px; height: 64px" src="http://simpleicon.com/wp-content/uploads/camera.png">
                </div>
            </div>
        </div>
        <hr style="height:3px; background-color:#ccc; border:0; margin-top:12px; margin-bottom:12px;">
        <ul data-role="listview" data-divider-theme="a" data-inset="true">
            <li data-role="list-divider" role="heading">
                Pesto
            </li>
            <li data-theme="a">
                <a href="#page1" data-transition="slide">
                    Carrefour
                </a>
            </li>
            <li data-theme="a">
                <a href="#page1" data-transition="slide">
                    Hemmer
                </a>
            </li>
            <li data-theme="a">
                <a href="#page1" data-transition="slide">
                    Barilla
                </a>
            </li>
            <li data-theme="a">
                <a href="#page1" data-transition="slide">
                    Paganini
                    <span class="ui-li-count">
                        !
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div data-theme="a" data-role="footer">
        <div class="ui-grid-c">
            <div class="ui-block-a">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 56px; height: 56px" src="http://img1.targetimg1.com/wcsstore/TargetSAS//img/p/13/38/13386293.jpg">
                    </div>
                </a>
            </div>
            <div class="ui-block-b">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 56px; height: 56px" src="http://content.costco.com/Images/Content/Product/990551b.jpg">
                    </div>
                </a>
            </div>
            <div class="ui-block-c">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 46px; height: 60px" src="http://www.condor.com.br/images/ofertas/molho_italiano_paganini_pesto_genovese_180g_h1219617.jpg">
                    </div>
                </a>
            </div>
            <div class="ui-block-d">
                <a data-inline="true" href="#page8" data-icon="check" data-iconpos="top"
                class="ui-btn  ui-icon-check ui-btn-icon-top">
                    Compare
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /PRODUCTS -->

<!-- COMPARE PRODUCTS -->
<div data-role="page" data-control-title="Compare Products" id="page8">
    <div data-theme="a" data-role="header">
        <h1 class="ui-title">
            Compare
        </h1>
        <a href="#page7" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
    </div>
    <div role="main" class="ui-content">
        <div class="ui-grid-c">
            <div class="ui-block-a">
            </div>
            <div class="ui-block-b">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 56px; height: 56px" src="http://img1.targetimg1.com/wcsstore/TargetSAS//img/p/13/38/13386293.jpg">
                    </div>
                </a>
            </div>
            <div class="ui-block-c">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 56px; height: 56px" src="http://content.costco.com/Images/Content/Product/990551b.jpg">
                    </div>
                </a>
            </div>
            <div class="ui-block-d">
                <a href="#page9" data-controltype="image">
                    <div style=" text-align:center">
                        <img style="width: 46px; height: 60px" src="http://www.condor.com.br/images/ofertas/molho_italiano_paganini_pesto_genovese_180g_h1219617.jpg">
                    </div>
                </a>
            </div>
        </div>
        <div data-role="collapsible-set">
            <div data-role="collapsible">
                <h3>
                    Nutritional Information
                </h3>
                <div class="ui-grid-c">
                    <div class="ui-block-a">
                        <h4>
                            Kcal
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    350
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    250
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    300
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h4>
                            Protein
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    2g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h4>
                            Carb.
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    72g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    51g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    64g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h4>
                            Lipids
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    72g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    51g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    64g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h4>
                            Fibers
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    2g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3g
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h4>
                            Sodium
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3mg
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    2mg
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    3mg
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    Ingredients
                </h3>
                <div class="ui-grid-c">
                    <div class="ui-block-a">
                        <h4>
                            Wheat flour
                        </h4>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    35%
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    0%
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    30%
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-a">
                        <h3>
                            Sugar
                        </h3>
                    </div>
                    <div class="ui-block-b">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    10%
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-c">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    0%
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="ui-block-d">
                        <div data-controltype="textblock">
                            <p>
                                <b>
                                    5%
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /COMPARE PRODUCTS -->

<!-- PRODUCTS DETAIL -->
<div data-role="page" data-control-title="Products Detail" id="page9">
    <div data-theme="a" data-role="header">
        <h1 class="ui-title">
            Details
        </h1>
        <a href="#page7" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
    </div>
    <div role="main" class="ui-content">
        <div class="ui-grid-a">
            <div class="ui-block-a">
                <div style="" data-controltype="image">
                    <img style="width: 128px; height: 160px" src="http://www.condor.com.br/images/ofertas/molho_italiano_paganini_pesto_genovese_180g_h1219617.jpg">
                </div>
            </div>
            <div class="ui-block-b">
                <h3>
                    Pesto Paganini
                </h3>
                <div data-controltype="textblock">
                    <p>
                        Carrefour
                    </p>
                </div>
                <div style="display: inline text-align:center" data-controltype="image">
                    <img style="width: 56px; height: 56px" src="http://upload.wikimedia.org/wikipedia/commons/4/4f/Simple_Alert.svg">
                </div>
            </div>
        </div>
        <div data-role="collapsible-set">
            <div data-role="collapsible">
                <h3>
                    Alerts
                </h3>
            </div>
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    Nutritional Information
                </h3>
            </div>
            <div data-role="collapsible">
                <h3>
                    Ingredients
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- /PRODUCTS DETAIL -->

<!-- STORES -->
<div data-role="page" data-control-title="Stores" id="page10">
    <div data-theme="a" data-role="header">
        <h1 class="ui-title">
            Stores
        </h1>
        <a href="#page1" data-icon="arrow-l" data-iconpos="left" class="ui-btn ui-btn-left ui-icon-arrow-l ui-btn-icon-left">
            Back
        </a>
    </div>
    <div role="main" class="ui-content">
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#page10" data-transition="fade" data-theme="" data-icon="">
                        Near a place
                    </a>
                </li>
                <li>
                    <a href="#page10" data-transition="fade" data-theme="" data-icon="">
                        On my way
                    </a>
                </li>
            </ul>
        </div>
        <div id="googlemapsjs1" class="google-map" style="width: 288px; height: 400px; margin-left: auto; margin-right: auto">
        </div>
        <script type="text/javascript">
                window.CodiqaControls && window.CodiqaControls.register('googlemaps', 'googlemapsjs1', {
            ready: function(control) {

                control.options = {
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                control.el = document.getElementById(control._id);
                control.map = new google.maps.Map(control.el, control.options);

                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'address': 'Porto Alegre, RS'
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        var marker = new google.maps.Marker({
                            map: control.map,
                            position: results[0].geometry.location
                        });
                        control.center = results[0].geometry.location;
                        control.map.setCenter(control.center);
                    }
                });

            }
        });
        </script>
    </div>
</div>
<!-- /STORES -->


</body>
</html>