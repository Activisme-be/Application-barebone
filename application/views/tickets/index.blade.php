@layout('layouts/application')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ base_url() }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ticket management</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            {{-- Box --}}
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1" data-toggle="tab">Tickets</a></li>
                     <li><a href="#tab_2" data-toggle="tab">Ticket categorieen</a></li>
                     <li><a href="#tab_3" data-toggle="tab">Applicaties</a></li>

                     <li class="dropdown pull-right">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                             Opties <span class="caret"></span>
                         </a>

                         <ul class="dropdown-menu">
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#newTicket">Nieuw ticket</a></li>
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#newApplication">Applicatie toevoegen</a></li>
                             <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#newCategory">Categorie toevoegen</a></li>
                         </ul>
                    </li>
                </ul>

                <div class="tab-content">
                    {{-- Tickets --}}
                    <div class="tab-pane active" id="tab_1">
                        @include('tickets/panes/tickets')
                    </div>
                    {{-- /Tickets --}}

                    {{-- Applications --}}
                    <div class="tab-pane" id="tab_2">
                        @include('tickets/panes/categories')
                    </div>
                    {{-- /Applications --}}

                    {{-- Category --}}
                    <div class="tab-pane" id="tab_3">
                        @include('tickets/panes/application')
                    </div>
                    {{-- /Category --}}
                </div>
                {{-- /.tab-content --}}
              </div>
        </div>{{-- /.col --}}

        {{-- Includes --}}
            @include('tickets/create-ticket')
            @include('tickets/create-application')
            @include('tickets/create-category')
        {{-- /Includes --}}
    </div>{{-- /.row --}}
@endsection
