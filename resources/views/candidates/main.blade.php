<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titlePage', 'ACERH ')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/styles.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">

        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg"><b>AC</b>TALENTOS</span>
                    </a>

                    {{--<a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>--}}
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                        <li><a href="/clients">Admin</a></li>
                        {{--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    {{--<form class="navbar-form navbar-left" role="search">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" id="navbar-search-input" placeholder="Search">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title', 'Titulo')
                    <small>@yield('subtitle', '')</small>
                </h1>
                @isset($breadcrumbs)
                    <ol class="breadcrumb">
                        @forelse($breadcrumbs as $item => $link)
                            @if ($loop->first)
                                <li><a href="{{ $link }}"><i class="fa fa-dashboard"></i> {{ $item }}</a></li>
                            @elseif ($loop->last)
                                <li class="active"> {{ $item }} </li>
                            @else
                                <li><a href="{{ $link }}">{{ $item }}</a></li>
                            @endif
                        @empty
                            -
                        @endforelse
                    </ol>
                @endisset
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2017 <a href="javascript:void(0)">Devy</a>.</strong> All rights
            reserved.
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dist/bundle.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{  asset('plugins/demo.js') }}"></script>
@stack('scripts')
</body>
</html>
