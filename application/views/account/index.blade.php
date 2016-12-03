@layout('layouts/application')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ base_url() }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profiel</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class="col-sm-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                          <img class="profile-user-img img-responsive img-circle" src="{{ base_url('assets/img/user2-160x160.jpg') }}" alt="User profile picture">
                          <h3 class="profile-username text-center">{{ $user->email }}</h3>

                          <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                  <strong>Gebruikersnaam:</strong>
                                  <span class="pull-right">{{ $user->username }}</span>
                              </li>
                              <li class="list-group-item">
                                  <strong>Naam:</strong>
                                  <span class="pull-right">{{ $user->name }}</span>
                              </li>
                              <li class="list-group-item">
                                  <strong>Email:</strong>
                                  <span class="pull-right">{{ $user->email }}</span>
                              </li>
                          </ul>

                          <a href="mailto:{{ $user->name }}" class="btn btn-primary btn-block"><b>E-mail</b></a>
                    </div>
                    {{-- /.box-body --}}
            </div>
        </div>

        <div class="col-sm-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Account configuratie</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        {{-- Profile update form --}}
                            <form class="form-horizontal" action="{{ base_url('account/update') }}" method="post">

                                {{-- Username form-group --}}
                                <div class="form-group">
                                    <label for="username" class="control-label col-sm-2">
                                        Gebruikersnaam: <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="username" class="form-control" value="{{ $user->username }}" placeholder="De gebruikersnaame">
                                    </div>
                                </div>

                                {{-- Name form-group --}}
                                <div class="form-group">
                                    <label for="name" class="control-label col-sm-2">
                                        Naam: <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Naam">
                                    </div>
                                </div>

                                {{-- Email form-group --}}
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">
                                        E-mail adres: <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                        <input class="form-control" name="email" value="{{ $user->email }}" placeholder="email adres">
                                    </div>
                                </div>

                                {{-- Password form-group --}}
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Wachtwoord: <span class="text-danger">*</span>
                                    </label>

                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
                                    </div>
                                </div>

                                {{-- Submit and reset form-group --}}
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <button type="submit" class="btn btn-success">Aanpassen</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </div>

                            </form>
                        {{-- /Profile update form --}}
                  </div>
              </div>
        </div>
    </div>{{-- /.row --}}

    {{-- Includes --}}
        @include('users/create')
    {{-- /Includes --}}
@endsection
