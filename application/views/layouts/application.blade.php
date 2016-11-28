<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>{{ $this->config->item('app_name') }} | {{ $title }}</title>

        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ base_url("assets/css/AdminLTE.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ base_url("assets/css/skin-blue.css") }}" rel="stylesheet" type="text/css" />

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">

            {{-- Header --}}
            @include('layouts/partials/header')

            {{-- Sidebar --}}
            @include('layouts/partials/sidebar')

            {{-- Content Wrapper. Contains page content --}}
            <div class="content-wrapper">
                {{-- Content Header (Page header) --}}
                <section class="content-header">
                    <h1>
                        {{ $page_title }}
                        <small>{{ $page_description }}</small>
                    </h1>
                    {{-- You can dynamically generate breadcrumbs here --}}
                    @yield('breadcrumb')
                </section>

                {{-- Main content --}}
                <section class="content">
                    {{-- Your Page Content Here --}}
                    @yield('content')
                </section>{{-- /.content --}}
            </div>{{-- /.content-wrapper --}}

            {{-- Footer --}}
            @include('layouts/partials/footer')

        </div>{{-- ./wrapper --}}

        {{-- javascript --}}
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{ base_url("assets/js/app.js") }}" type="text/javascript"></script>
    </body>
</html>
