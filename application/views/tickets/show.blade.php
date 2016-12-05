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
                    {{ $this->markdown->parse($ticket->description) }}
                </div>{{-- /.box-body --}}


                <div class="box-footer box-comments"> {{-- Comment module --}}
                    @if ((int) count($ticket->reactions) === 0)
                        <div class="box-comment">  {{-- Box comment --}}
                            {{-- User image --}}
                            <img class="img-circle img-sm" src="{{ base_url("assets/img/user2-160x160.jpg") }}" alt="User Image">

                            <div class="comment-text">
                                <span class="username">
                                    Server
                                </span>{{-- /.username --}}

                                Er zijn nog geen reacties op dit ticket.
                            </div>
                            {{-- /.comment-text --}}
                        </div> {{-- Box comment --}}
                    @else
                        @foreach ($ticket->reactions as $comment)
                            <div class="box-comment">  {{-- Box comment --}}
                                {{-- User image --}}
                                <img class="img-circle img-sm" src="{{ base_url("assets/img/user2-160x160.jpg") }}" alt="User Image">

                                <div class="comment-text">
                                    <span class="username">
                                        {{ $comment->author->name }}
                                        <span class="text-muted pull-right">
                                            @if ($comment->author->id === $this->User['id'])
                                                <a href="" class="label label-warning">Wijzig</a>
                                            @endif
                                            <a href="{{ base_url('comment/destroy/' . $ticket->id . '/' . $comment->id) }}" class="label label-danger">Verwijder</a>
                                        </span>
                                    </span>{{-- /.username --}}

                                    {{ $comment->comment }}
                                </div>
                                {{-- /.comment-text --}}
                            </div> {{-- Box comment --}}
                        @endforeach
                    @endif
                </div> {{-- /comment modules --}}

                <div class="box-footer">
                    <form id="input-enter" action="{{ base_url('comment/insert/'. $ticket->id) }}" method="post">
                        <img class="img-responsive img-circle img-sm" src="{{ base_url("assets/img/user2-160x160.jpg") }}" alt="Alt Text">
                        {{-- .img-push is used to add margin to elements next to floating images --}}
                        <div class="img-push">
                            <input type="text" name="comment" class="form-control input-sm" placeholder="Druk enter om te reageren.">
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
