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
                            <form class="form-horizontal" action="" method="post">

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
