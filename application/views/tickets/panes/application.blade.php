@if ((int) count($apps->get()) === 0)
    <div class="col-sm-12">
        <div class="alert alert-danger">
            <strong><span class="fa fa-info-sign"></span> Info:</strong> Er zijn geen applicaties gevonden in het systeem.
        </div>
    </div>
@else
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Aangemaakt door:</th>
                <th>Tickets:</th>
                <th>Web url:</th>
                <th>GitHub url:</th>
                <th></th> {{-- Reserved for functions --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($apps->get() as $app)
                <tr>
                    <td><code>#A{{ $app->id}}</code></td>
                    <td>{{ $app->creator->name }}</td>

                    <td> {{-- Tickets --}}
                        <span class="label label-danger" style="margin-right: 5px;">
                            {{ Ticket::where('application_id', $app->id)->where('status', 0)->count() }} Open
                        </span>

                        <span class="label label-success">
                            {{ Ticket::where('application_id', $app->id)->where('status', 1)->count() }} Gesloten
                        </span>
                    </td> {{-- /Tickets --}}

                    <td>{{ $app->server_url }}</td>
                    <td>{{ $app->git_url }}</td>

                    <td> {{-- Functions --}}
                        <a href="{{ base_url('app/destroy/' . $app->id) }}" class="label label-danger">Verwijder</a>
                    </td> {{-- /Functions --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
