
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kinerja Guru</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="../css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
          <style type="text/css">
          .footer{

    text-align:center;
    padding: 10px;
    background-color:black;
    font-weight: bold;
    bottom: true;
    color: white;
}
          </style>
      </head>
      <body class="skin-black">
        <header class="header">
            <a class="logo">
                Kinerja Guru
            </a>
            <nav class="navbar navbar-static-top" role="navigation">

                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </nav>
                       </header>
                    <div class="wrapper row-offcanvas row-offcanvas-left">
                    <aside class="left-side sidebar-offcanvas">
                        <section class="sidebar">
                            <div class="user-panel">
                                    <div>
                                    <center><img src="" height="80" width="80" class="img-circle" alt="User Image" style="border: 3px solid white;" /></center>
                                </div>
                                @include('layouts.menu')
                            </div>
                        </section>
                    </aside>

             

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/plugins/chart.js" type="text/javascript"></script>
        <script src="../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="../js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>
        <script src="../js/Director/app.js" type="text/javascript"></script>
        <script src="../js/Director/dashboard.js" type="text/javascript"></script>
       
</body>
</html>