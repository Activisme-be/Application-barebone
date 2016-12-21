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
                <a href="" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#reset">{{ lang('button_reset') }}</a>
            </form>
        </div> {{-- /container --}}

        {{-- Reset modal --}}
        <div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Reset wachtwoord.</h4>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="{{ base_url('users/reset') }}" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2">
                                    E-mail: <span class="text-danger">*</span>
                                </label>

                                <div class="col-sm-10">
                                    <input class="form-control" name="email" placeholder="Email adres" />
                                </div>
                            </div>
                        {{-- Form is closed in the footer. --}}
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sluiten</button>
                        </form>

                        <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Reset modal --}}

        {{-- Bootstrap javascript --}}
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        {{-- IE10 viewport hack for Surface/desktop Windows 8 bug --}}
        <script src="{{ base_url('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    </body>
</html>
