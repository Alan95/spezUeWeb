<?php

include 'layout.php';

$firstName = $lastName = $email = $password = $confirmPassword = "";
$firstNameErr = $lastNameerr = $emailErr = $passwordErr = $confirmPasswordErr = "";

if(isset($_REQUEST['register'])){
    $firstName = test_input($_REQUEST['inputFirstName']);
    $lastName = test_input($_REQUEST['inputLastName']);
    $email = test_input($_REQUEST['inputEmail']);
    $password = test_input($_REQUEST['inputPassword']);
    $confirmPassword = test_input($_REQUEST['repeatPassword']);
    $errors = 0; 
    
    if(empty($firstName)){
        $errors ++;
        $firstNameErr = "First Name is required!";
    }
    

}

//data validation
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>
    <!--loginView page-->
    <div id="loginView">

        <div id="loginForm">
            <div class="container">
                  <h3 class="text-center">Smart Home</h3>
                  <div class="form">
                        <div class="form-group has-feedback">
                              <label class="control-label">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="test@email.com">
                              <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                              <label class="control-label">Password:</label>
                              <input type="password" class="form-control" id="password"  placeholder="********">
                              <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                        </div>
                        <div class="form-horizontal">
                            <div class="form group">
                                <input type="checkbox"> Remember me
                            </div>
                            <br>
                            <button class="btn btn-primary btn-block login">Login</button>
                            <button class="btn btn-default btn-block registration">New? Register now</button>
                        </div>
                  </form>


                    <!--row ends-->

            </div> <!--container ends-->
        </div><!--end of loginForm -->
    </div><!--end of loginView-->
</div> <!--end of loginView page-->


    <div id="headerView">

        <div class="header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a id="date" href="#"></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-minus"></span></a></li>
                    </ul>
                    <button class="navbar-btn btn btn-default">Kontrastversion anzeigen</button>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-time"></span></a></li>
                        <li><a href="#" id="time"></a></li>
                    </ul>
                </div>
            </nav>
        </div> <!--end of header-->
    </div> <!--end of headerView-->



<div id="registrationView">
<ol class="breadcrumb" style="visibility: hidden">
    <li><a href="#" class="homeLink">Home</a></li>
</ol>
    <div id="registrationForm">
     <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Smart Home User Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group">
                           <label for="inputFirstName" class="col-md-4 control-label">
                             First Name*</label>
                           <div class="col-md-8">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Max" />
                           </div>
                        </div>
                        <div class="form-group">
                            <label for="inputLastName" class="col-md-4 control-label">
                             Last Name*</label>
                            <div class="col-md-8">
                               <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Mustermann" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-4 control-label">
                             Email*</label>
                            <div class="col-md-8">
                               <input type="email" class="form-control" id="email" name="email" placeholder="test@email.com" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-4 control-label">
                             Password*</label>
                            <div class="col-md-8">
                               <input type="text" class="form-control" id="password" name="password" placeholder="***********" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="repeatPassword" class="col-md-4 control-label">
                             Confirm Password*</label>
                            <div class="col-md-8">
                               <input type="text" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="***********" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer" style="text-align: right">
                             <input type="submit" name="register" value="register now" class="btn btn-default">
                             <input name="cancel" id="cancel" value="cancel" class="btn btn-danger">
                </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
 </div>



    <!--homeView page-->

    <div id="homeView">
        <ol class="breadcrumb" style="visibility: hidden">
            <li><a href="#" class="homeLink">Home</a></li>
        </ol>

        <div class="container">
            <div class="menu">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="weatherbox text-center">
                            <br>
                            <i id="weatherIcon"></i>
                            <h4 id="summary"></h4>
                            <h2 id="temperature"></h2>
                        </div>
                        <div class="col-md-offset-3 col-xs-offset-1 col-sm-offset-3 btn-group-vertical btn-group-lg" role="group">
                            <button class="btn btn-primary" id="overview">�bersicht</button>
                            <br>
                            <button class="btn btn-primary" id="status">Status �ndern</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                        <div class="row mainMenu">

                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default top" id="roomSettingsBtn"><i class="glyphicon glyphicon-home glyphiconMenu"></i><br />Raumverwaltung</button>
                                <button class="btn btn-default security" id="securitySettingsBtn"><i class="glyphicon glyphicon-warning-sign glyphiconMenu"></i><br />Sicherheit</button>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default"><i class="glyphicon glyphicon-cog glyphiconMenu"></i><br />Einstellungen</button>
                                <button class="btn btn-default bottom"><i class=" glyphicon glyphicon-lamp glyphiconMenu"></i><br />Lichter</button>

                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default top"><i class="glyphicon glyphicon-tint glyphiconMenu"></i><br />Wasser</button>
                                <button class="btn btn-default"><i class="glyphicon glyphicon-facetime-video glyphiconMenu"></i><br />Video</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 hidden-xs rightSide">
                        <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                        <!--<button class="btn btn-default logout"><i class="glyphicon glyphicon-log-out"></i><br />Logout</button>-->

                    </div>
                </div>
            </div>  <!--end of menu-->
        </div> <!--end of container-->


    </div><!--end of homePageView-->

    <!--start of roomSettingsView page-->

    <div id="roomSettingsView">

        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li class="active">Raumverwaltung</li>
        </ol>
        <div class="container">
            <div class="menu">
                <div class="row">
                    <div class="col-md-4 col-sm-4 hidden-xs">
                        <h2>Raumwervaltung</h2>
                        <img class="pic" src="images/61831580-Furniture-and-home-decor-icon-set-vector-illustration-Indoor-cabinet-interior-room-library-office-bo-Stock-Vector.jpg " />

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row mainMenu">
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-defaults top  kitchenLink"><i class="glyphicon glyphicon-cutlery glyphiconMenu"></i><br />K�che</button>
                                <button class="btn btn-default hallLink"><i class="glyphicon glyphicon-phone-alt glyphiconMenu"></i><br />Vorzimmer</button>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default bedroomLink"><i class="glyphicon glyphicon-bed glyphiconMenu"></i><br />Schalfzimmer</button>
                                <button class="btn btn-default bottom livingRoomLink"><i class="glyphicon glyphicon-blackboard glyphiconMenu"></i><br />Wohnzimmer</button>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default top bathroomLink"><i class="glyphicon glyphicon-tint glyphiconMenu"></i>Badezimmer<br /></button>
                                <button class="btn btn-default"><i class="glyphicon glyphicon-plus-sign glyphiconMenu"></i><br />hinzuf�gen</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 hidden-xs rounded-button rightSide">
                        <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                        <!-- <button class="btn btn-danger logout"><i class="glyphicon glyphicon-log-out"></i><br />Logout</button>-->
                    </div>

                </div>
            </div>  <!--end of menu-->
        </div> <!--end of container-->
    </div> <!--end of roomSettingsView page-->


    <div id="kitchenView">
        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li><a href="#" class="roomLink">Raumverwaltung</a></li>
            <li class="active">K�che</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 btn-group-lg" role="group">
                    <button class="btn btn-default allBtnOn">Alle einschalten</button>
                    <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                    <br />
                    <h1>K�che</h1>
                    <br />
                    <br />
                    <i class="glyphicon glyphicon-cutlery glyphiconMenu" style="font-size:100px"></i>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-6">
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody id="kitchenTable">
                                <tr>
                                    <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                    <td><input type="radio" name="kitchenOn" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="kitchenOff" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Fenster</div></td>
                                    <td><input type="radio" name="kitchenOn" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="kitchenOff" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                    <td><input type="radio" name="kitchenOn" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="kitchenOff" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rollos</div></td>
                                    <td><input type="radio" name="kitchenOn" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="kitchenOff" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                    <td><input type="radio" name="kitchenOn" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="kitchenOff" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-7 col-md-2">
                    <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                </div>
            </div>

        </div>
    </div> <!--end of kitchenView page-->

    <div id="bedroomView">
        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li><a href="#" class="roomLink">Raumverwaltung</a></li>
            <li class="active">Schlafzimmer</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 btn-group-lg" role="group">
                    <button class="btn btn-default allBtnOn">Alle einschalten</button>
                    <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                    <br />
                    <h1>Schlafzimmer</h1>
                    <br />
                    <br />
                    <i class="glyphicon glyphicon-bed glyphiconMenu" style="font-size:100px"></i>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-6">
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody id="bedroomTable">
                                <tr>
                                    <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Fenster</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rollos</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-7 col-md-2">
                    <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                </div>
            </div>

        </div>
    </div> <!--end of bedroomView page-->

    <div id="bathroomView">
        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li><a href="#" class="roomLink">Raumverwaltung</a></li>
            <li class="active">Badezimmer</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 btn-group-lg" role="group">
                    <button class="btn btn-default allBtnOn">Alle einschalten</button>
                    <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                    <br />
                    <h1>Badezimmer</h1>
                    <br />
                    <br />
                    <i class="glyphicon glyphicon-tint glyphiconMenu" style="font-size:100px"></i>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-6">
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody id="bathroomTable">
                                <tr>
                                    <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Fenster</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rollos</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-7 col-md-2">
                    <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                </div>
            </div>

        </div>
    </div> <!--end of bathroomView page-->

    <div id="livingRoomView">
        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li><a href="#" class="roomLink">Raumverwaltung</a></li>
            <li class="active">Wohnzimmer</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 btn-group-lg" role="group">
                    <button class="btn btn-default allBtnOn">Alle einschalten</button>
                    <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                    <br />
                    <h1>Wohnzimmer</h1>
                    <br />
                    <br />
                    <i class="glyphicon glyphicon-blackboard glyphiconMenu" style="font-size:100px"></i>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-6">
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody id="livingRoomTable">
                                <tr>
                                    <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Fenster</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rollos</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-7 col-md-2">
                    <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                </div>
            </div>

        </div>
    </div> <!--end of livingRoomView page-->

    <div id="hallView">
        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li><a href="#" class="roomLink">Raumverwaltung</a></li>
            <li class="active">Vorzimmer</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 btn-group-lg" role="group">
                    <button class="btn btn-default allBtnOn">Alle einschalten</button>
                    <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                    <br />
                    <h1>Vorzimmer</h1>
                    <br />
                    <br />
                    <i class="glyphicon glyphicon-phone-alt glyphiconMenu" style="font-size:100px"></i>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-6">
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody id="hallRoomTable">
                                <tr>
                                    <td><div class="label label-default menuLabel">Bewegungsmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Fenster</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rauchmelder</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">Rollos</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                                <tr>
                                    <td><div class="label label-default menuLabel">T�rschlo�</div></td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on </td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off</td>
                                    <td><input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="benutzerdefiniert"> benutzerdefiniert</td>
                                    <td><button type="button" class="btn btn-default">Mehr</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-7 col-md-2">
                    <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                </div>
            </div>

        </div>
    </div> <!--end of hallView page-->

    <!--start of securitySettingsView page-->

    <div id="securitySettingsView">

        <ol class="breadcrumb">
            <li><a href="#" class="homeLink">Home</a></li>
            <li class="active">Security</li>
        </ol>

        <div class="container">
            <div class="menu">
                <div class="row">
                    <div class="col-md-4 col-sm-4 hidden-xs">
                        <h2>Sicherheitsverwaltung</h2>
                        <img class="pic" src="images/safety-security-icons-set-38500318.jpg " />

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row mainMenu">
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-defaults top"><i class="glyphicon glyphicon-align-justify glyphiconMenu"></i><br />Rollos</button>
                                <button class="btn btn-default"><i class="glyphicon glyphicon-fire glyphiconMenu"></i><br />Rauchmelder</button>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default"  id="windowBtn"><i class="glyphicon glyphicon-cog glyphiconMenu"></i><br />Fenster</button>
                                <button class="btn btn-default bottom"><i class=" glyphicon glyphicon-lamp glyphiconMenu"></i><br />Logo</button>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-4 rounded-button">
                                <button class="btn btn-default top"><i class="glyphicon glyphicon-lock glyphiconMenu"></i><br />T�rschloss</button>
                                <button class="btn btn-default"><i class="glyphicon glyphicon-refresh glyphicon-facetime-video glyphiconMenu"></i><br />Bewegungsmelder</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 rounded-button rightSide">
                        <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                        <!-- <button class="btn btn-danger logout"><i class="glyphicon glyphicon-log-out"></i><br />Logout</button>-->
                    </div>

                </div>
            </div>  <!--end of menu-->
        </div> <!--end of container-->
    </div> <!--end of securitySettingsView page-->

        <div id="windowView">
            <ol class="breadcrumb">
                <li><a href="#" class="homeLink">Home</a></li>
                <li><a href="#" class="securityLink">Sicherheit</a></li>
                <li class="active">Fenster</li>
            </ol>

            <div class="container">
                <div class="row">
                    <div class="col-md-offset-5 btn-group-lg" role="group">
                        <button class="btn btn-default allBtnOn">Alle einschalten</button>
                        <button class="btn btn-default allBtnOff">Alle ausschalten</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3 text-center">

                        <br />
                        <h1>Fenster</h1>
                        <br />
                        <br />
                        <i class="glyphicon glyphicon-cog glyphiconMenu" style="font-size:100px"></i>
                    </div>
                    <div class="col-md-7 col-sm-6 col-sm-6">
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr><th></th><th>Fenster 1</th><th>Fenster 2</th><<th>Fenster 3</th></tr>
                                </thead>
                                <tbody id="fenster">
                                    <tr>
                                        <td><div class="label label-default menuLabel">K�che</div></td>
                                        <td><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="label label-default menuLabel">Wohnzimmer</div></td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="label label-default menuLabel">Schalfzimmer</div></td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="label label-default menuLabel">Vorzimmer</div></td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="label label-default menuLabel">Badezimmer</div></td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                        <td>
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="on"> on
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="off"> off
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs">
                        <a href="#"><img src="images/House_icon_Blue.jpg" class="homeSymbol homeLink" alt="house icon blue"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-7 col-md-2">
                        <button class="btn btn-default btn-lg saveChangesBtn">�nderungen speichern</button>
                    </div>
                </div>

            </div>
         </div><!--end of windowView page-->



</body>
</html>
