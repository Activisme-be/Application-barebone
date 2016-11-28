@if (count($tickets) == 0)
    <div class="alert alert-info">
        <strong><span class="fa fa-info-circle"></span> Info:</strong>
        Er zijn geen tickets gevonden in het systeem gevonden.
    </div>
@else
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td></td> {{-- Reserved for functions --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>#T{{ $ticket->id }}</td>

                    {{-- Functions --}}
                        <td>
                            <a href="#" class="label label-info">Bekijken</a>
                            <a href="#" class="label label-info">Sluiten</a>
                        </td>
                    {{-- /Functions --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
