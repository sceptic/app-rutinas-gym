<html lang="es" class="translated-ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-js/ico/favicon.png">
	<title>Plan de entrenamiento</title>
    

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">
    
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-js/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="/css/sticky-footer-navbar.css">
  <style type="text/css"></style><script type="text/javascript" id="waxCS">var WAX = function () { var _arrInputs; return { getElement: function (i) { return _arrInputs[i]; }, setElement: function(i){ _arrInputs=i; } } }(); function waxGetElement(i) { return WAX.getElement(i); } function coSetPageData(t, d){ if('wax'==t) { WAX.setElement(d);} }</script><link type="text/css" rel="stylesheet" charset="UTF-8" href="/js/translateelement.css">
  <script src="/js/jquery-1.10.2.min.js"></script>
    
</head>
 <body style="" screen_capture_injected="true">

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Plan de entrenamiento</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Inicio</a></li>
              <li><a href="#about">Crear rutina</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          {% block header %}{% endblock %}  
        </div>
        {% block content %}{% endblock %}
      
      </div>
    </div>





    	
			
		
<div id="footer">
      <div class="container">
        <p class="text-muted">Creado por phpymas.com</p>
      </div>
    </div>

			<!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/offcanvas.js"></script>
    <script src="/js/jquery.wysiwyg.js"></script>
    <script src="/js/tiny_mce/jquery.tinymce.js"></script>
    <script src="/js/jquery.datatables.js"></script>
    <script src="/js/script.js"></script>
			{% block scripts %}{% endblock %}



