@layout('layouts/application')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gebruikersbeheer</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Login beheer</h3>

                    <div class="box-tools pull-right">
                        <button data-toggle="modal" data-target="#newUser" class="btn btn-box-tool"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($users) == 0) {{-- Show info alert --}}
                        <div class="alert alert-info">
                            <strong><span class="fa fa-info-circle"></span> Info:</strong>
                            Er zijn geen gebruikers gevonden in het systeem gevonden.
                        </div>
                    @else {{-- Show users overview --}}
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status:</th>
                                    <th>Username:</th>
                                    <th>Naam:</th>
                                    <th>Email:</th>
                                    <th></th> {{-- Reserved for functions --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><code>#U{{ $user->id }}</code></td>
                                        <td>
                                            @if ($user->blocked == 0)
                                                <span class="label label-success">Actief</span>
                                            @elseif($user->blocked == 1)
                                                <span class="label label-danger">Geblokkeerd</span>
                                            @else
                                                <span class="label label-info">Onbekend</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>

                                        {{-- Functions --}}
                                            <td>
                                                <a href="{{ base_url('users/reset/' . $user->id) }}" class="label label-default">Reset wachtwoord</a>
                                                <a href="{{ base_url('users/destroy/' . $user->id) }}" class="label label-danger">Verwijder</a>

                                                @if ($user->blocked == 0)
                                                    <a href="{{ base_url('users/status/'. $user->id .'/1') }}" class="label label-warning">Blokkeer</a>
                                                @elseif ($user->blocked == 1)
                                                    <a href="{{ base_url('users/status/'. $user->id .'/0') }}" class="label label-warning">Activeren</a>
                                                @endif
                                            </td>
                                        {{-- /Functions --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>{{-- /.box-body --}}
            </div>{{-- /.box --}}
        </div>{{-- /.col --}}
    </div>{{-- /.row --}}

    {{-- Includes --}}
        @include('users/create')
    {{-- /Includes --}}
@endsection
