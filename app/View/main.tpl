<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-js/ico/favicon.png">
	  <title>Plan de entrenamiento</title>
    
    
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sticky-footer-navbar.css">
    <link rel="stylesheet" type="text/css" href="/js/editor/bootstrap-wysihtml5.css"></link>
    <link href="/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-js/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  <script src="/js/editor/wysihtml5-0.3.0.js"></script>  
  <script src="/js/jquery-1.10.2.min.js"></script>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/offcanvas.js"></script>
    <script src="/js/tiny_mce/jquery.tinymce.js"></script>
    <script src="/js/jquery.datatables.js"></script>  
    <script src="/js/editor/bootstrap-wysihtml5.js"></script>

    <script src="/js/script.js"></script>
    
</head>
 <body style="" screen_capture_injected="true">

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Plan de entrenamiento</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li ><a href="/">Inicio</a></li>
              {% if user_logged %}
              <li><a href="/crear-rutina">Crear rutina</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/">Mis rutinas</a></li>
                </ul>
              </li>
              {%else%}
                  <li><a href="/registro">Resgistrarme</a></li>
               {%endif%}
               <li><a href="http://cv.phpymas.com">Contacto</a></li>
            </ul>
            {% if user_logged%}
            <div  method='post' class="navbar-form navbar-right">
               
              <h5>Vienbenido {{user_logged.Autor.nombre}}!</h5>
 
            </div>
            {%else%}
            <form method='post' class="navbar-form navbar-right" action='/' role="form">
            <div class="form-group">
              <input type="text" name='email_login' placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name='password_login' placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
            {%endif%}
            
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

		
			{% block scripts %}{% endblock %}



