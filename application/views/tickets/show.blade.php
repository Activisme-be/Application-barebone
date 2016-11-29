@layout('layouts/application')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{ base_url() }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('tickets') }}">Tickets</a></li>
        <li class="active">Ticket #{{ $ticket->id }}</li>
    </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-9'>
            {{-- Box --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $ticket->heading}}</h3>

                    <div class="box-tools pull-right">
                        <a href="{{ base_url('tickets/destroy/' . $ticket->id) }}" class="btn btn-box-tool"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    {{ $ticket->description }}
                </div>{{-- /.box-body --}}


                <div class="box-footer box-comments">
                    <div class="box-comment"> {{-- Comment module --}}
                        {{-- User image --}}
                        <img class="img-circle img-sm" src="{{ base_url("assets/img/user2-160x160.jpg") }}" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                                Maria Gonzales
                                <span class="text-muted pull-right">8:03 PM Today</span>
                            </span>{{-- /.username --}}

                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        {{-- /.comment-text --}}
                    </div>
                    {{-- /.box-comment --}}
                </div>
                <div class="box-footer">
                    <form action="#" method="post">
                        <img class="img-responsive img-circle img-sm" src="{{ base_url("assets/img/user2-160x160.jpg") }}" alt="Alt Text">
                        {{-- .img-push is used to add margin to elements next to floating images --}}
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                    </form>
                </div> {{-- /comment module --}}

            </div>{{-- /.box --}}
        </div>{{-- /.col --}}

        <div class='col-md-3'>
            <ul class="list-group">
                <li class="list-group-item text-muted">
                    <b>Informatie</b>
                </li>
                <li class="list-group-item">
                    <b>Toegewezen aan:</b>
                    <span class="pull-right">{{ $ticket->assignee->name }}</span>
                </li>
                <li class="list-group-item">
                    <b>Status:</b>
                    <span class="pull-right">
                        <span class="label label-info">
                            @if ($ticket->status == 1)
                                Gesloten
                            @elseif ($ticket->status == 0)
                                Open
                            @endif
                        </span>
                    </span>
                </li>
                <li class="list-group-item">
                    <b>Applicatie:</b>
                    <span class="pull-right">
                        <span class="label label-danger">
                            {{ $ticket->application->name }}
                        </span>
                    </span>
                </li>
                <li class="list-group-item">
                    <b>Categorie:</b>

                    <span class="pull-right">
                        <span class="label label-success">
                            {{ $ticket->category->name }}
                        </span>
                    </span>
                </li>
            </ul>

            <a href="{{ base_url('tickets/github/' . $ticket->id) }}" class="btn btn-primary btn-block"><b>Push github</b></a>
        </div>{{-- /.col --}}
    </div>{{-- /.row --}}
@endsection
