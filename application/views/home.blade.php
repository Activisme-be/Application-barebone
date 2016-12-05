<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="{{ $this->config->item('app_description') }}">
        <meta name="author" content="{{ $this->config->item('app_author') }}">
        <link rel="icon" href="{{ base_url('assets/favicon.ico') }}">

        <title>{{ $this->config->item('app_name') }} | {{ $title }}</title>

        {{-- Bootstrap core CSS --}}
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        {{-- IE10 viewport hack for Surface/desktop Windows 8 bug --}}
        <link href="{{ base_url('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

        {{-- Custom styles for this template --}}
        <link href="{{ base_url('assets/css/signin.css') }}" rel="stylesheet">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
     <body>
        <div class="container">
            <form class="form-signin" action="{{ base_url('verifylogin') }}" method="POST">
                 <input type="email" name="email" class="form-control" placeholder="{{ lang('placeholder_email') }}">
                 <input type="password" name="password" class="form-control" placeholder="{{ lang('placeholder_password') }}">

                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ lang('button_login') }}</button>
            </form>
        </div> {{-- /container --}}

        {{-- IE10 viewport hack for Surface/desktop Windows 8 bug --}}
        <script src="{{ base_url('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    </body>
</html>
