<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Blog Grupo Edson de Queiroz</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}">

    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">



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
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Blog QEG</a>
        </div>
        <!-- /.navbar-header -->


        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar">
                       <h6 style="text-align: center">{!! auth()->user()->nome !!}</h6>
                    </li>
                    <li>
                        <a href="{!! url()->route('usuario.index') !!}"><i class="fa fa-dashboard fa-fw"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="{!! url()->route('post.index') !!}"><i class="fa fa-dashboard fa-fw"></i> Posts</a>
                    </li>
                    <li>
                        <a href="{!! url()->route('sair') !!}"><i class="fa fa-dashboard fa-fw"></i> Sair</a>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">{!! $titulo !!}</h1>
                    @include('back.layout.includes.alertas')
                    @yield('conteudo')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>

<script src="{!! asset('js/jquery.min.js') !!}"></script>

<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/metisMenu.min.js') !!}"></script>


<script src="{!! asset('js/script.js') !!}"></script>



</body>

</html>