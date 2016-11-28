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
                    @endif
                </div>{{-- /.box-body --}}
            </div>{{-- /.box --}}
        </div>{{-- /.col --}}
    </div>{{-- /.row --}}

    {{-- Includes --}}
        @include('users/create')
    {{-- /Includes --}}
@endsection
