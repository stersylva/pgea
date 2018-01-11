<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> PGEA - Plataforma de Gerenciamento de Eventos Acadêmicos </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/f11.png" type="image/x-icon')}}">
    <link rel="icon" href="{{ asset('img/f11.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700')}}">
    <link rel="apple-touch-icon" href="{{ asset('img/splash/sptouch-icon-iphone.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/splash/touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/your_style.css')}}">


</head>

<body class="">

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="/img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Sair do sistema</h4>
                    Você está preste a realizar lougout no sitema
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
            <span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button>
					</span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown
    <div class="project-context hidden-xs">

        <span class="label">Projects:</span>
        <span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
            </li>
            <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
            </li>
            <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
            </li>
        </ul>
        <!-- end dropdown-menu-->

    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="{{ asset('img/avatars/sunny.png')}}" alt="John Doe" class="online" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/login" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="/login" title="Sign Out" data-action="userLogout" data-logout-msg="Você está prestes a realizar logout no sistema"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->



        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->


    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="{{ asset('img/avatars/user.png')}}" alt="me" class="online" />
						<span>
							ADMIN
						</span>
						<i class="fa fa-angle-down"></i>
					</a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li class="active">
                <a href="/index" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">Administração</span></a>
                <ul>
                    <li>
                        <a href="/profissional"><i class="fa fa-lg fa-fw fa-user"></i>Profissionais</a>
                    </li>
                    <li>
                        <a href="/perfil"><i class="fa fa-lg fa-fw fa-key"></i>Perfil de acesso</a>
                    </li>
                    <li>
                        <a href="/curso"><i class="fa fa-lg fa-fw fa-book"></i>Cursos</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-globe"></i></i> <span class="menu-item-parent">Extensões</span></a>
                <ul>
                    <li>
                        <a href="/extensoes/nova"><i class="fa fa-lg fa-fw fa-plus"></i>Cadastro</a>
                    </li>
                    <li>
                        <a href="/extensoes"><i class="fa fa-lg fa-fw fa-search"></i>Localizar</a>
                    </li>
                </ul>
            </li>

        </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">



   @yield('conteudo')

    <!-- MAIN CONTENT -->



    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->



<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{ asset('js/plugin/pace/pace.min.js')}}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->

{!!Html::script('js/libs/jquery-2.1.1.min.js')!!}

<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>



<!-- IMPORTANT: APP CONFIG -->
<script src="{{ asset('js/app.config.js')}}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="{{ asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{ asset('js/SmartNotification.min.js')}}"></script>

<!-- JARVIS WIDGETS -->
{!!Html::script('js/smartwidgets/jarvis.widget.min.js')!!}

<!-- EASY PIE CHARTS -->
{!!Html::script('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')!!}

<!-- SPARKLINES -->
{!!Html::script('js/plugin/sparkline/jquery.sparkline.min.js')!!}

<!-- JQUERY VALIDATE -->
{!!Html::script('js/plugin/jquery-validate/jquery.validate.min.js')!!}

<!-- JQUERY MASKED INPUT -->
{!!Html::script('js/plugin/masked-input/jquery.maskedinput.min.js')!!}

<!-- JQUERY SELECT2 INPUT -->
{!!Html::script('js/plugin/select2/select2.min.js')!!}

<!-- JQUERY UI + Bootstrap Slider -->
{!!Html::script('/js/plugin/bootstrap-slider/bootstrap-slider.min.js')!!}

<!-- browser msie issue fix -->
{!!Html::script('js/plugin/msie-fix/jquery.mb.browser.min.js')!!}

<!-- FastClick: For mobile devices -->
{!!Html::script('js/plugin/fastclick/fastclick.min.js')!!}

<!-- Demo purpose only -->
<script src="{{ asset('js/demo.min.js')}}"></script>

<!-- MAIN APP JS FILE -->
<script src="{{ asset('js/app.min.js')}}"></script>


<!-- SmartChat UI : plugin -->
<script src="{{ asset('js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
{!!Html::script('js/smart-chat-ui/smart.chat.ui.min.js')!!}
{!!Html::script('js/smart-chat-ui/smart.chat.manager.min.js')!!}
<script src="{{ asset('/js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="/js/plugin/flot/jquery.flot.tooltip.min.js"></script>
<script src="/js/plugin/masked-input/jquery.maskedinput.min.js"></script>


</body>

</html>