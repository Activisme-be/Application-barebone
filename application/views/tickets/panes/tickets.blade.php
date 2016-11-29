@if (count($tickets) == 0)
    <div class="alert alert-info">
        <strong><span class="fa fa-info-circle"></span> Info:</strong>
        Er zijn geen tickets gevonden in het systeem gevonden.
    </div>
@else
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Toegewezen aan:</th>
                <th>Categorie:</th>
                <th>Titel:</th>
                <th></th> {{-- Reserved for functions --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td><code>#T{{ $ticket->id }}</code></td>
                    <td>{{ $ticket->assignee->name }}</td>
                    <td><span class="label label-primary">{{ $ticket->category->name }}</span></td>
                    <td>{{ $ticket->heading }}</td>

                    {{-- Functions --}}
                        <td>
                            <a href="#" class="label label-info">Bekijken</a>
                            <a href="{{ base_url('tickets/destroy/' . $ticket->id) }}" class="label label-info">Sluiten</a>
                            <a href="#" class="label label-info">Push github</a>
                        </td>
                    {{-- /Functions --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
