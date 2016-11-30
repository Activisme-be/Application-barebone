@if ($categories->count() > 0)
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Aangemaakt door:</th>
                <th>Naam:</th>
                <th>Tickets:</th>
                <th>Beschrijving:</th>
                <th></th> {{-- Reserved for functions --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($categories->get() as $category)
                <tr>
                    <td><code>#C{{ $category->id }}</code></td>
                    <td>{{ $category->creator->name }}</td>
                    <td>{{ $category->name }}</td>

                    <td> {{-- /Issue state --}}
                        <span class="label label-danger" style="margin-right: 5px;">
                            {{ Ticket::where('category_id', $category->id)->where('status', 0)->count() }} open
                        </span>
                        <span class="label label-success">
                            {{ Ticket::where('category_id', $category->id)->where('status', 1)->count() }} gesloten
                        </span>
                    </td> {{-- /Issue states--}}

                    <td>{{ $category->description }}</td>
                    <td> {{-- Functions--}}
                        <a href="{{ base_url('categories/destroy/' . $category->id) }}" class="label label-danger">Verwijder</a>
                    </td> {{-- /Functions --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="col-sm-12">
        <div class="alert alert-info">
            <strong><span class="fa fa-info-circle"></span> Info:</strong>
            Er zijn geen tickets gevonden in het systeem gevonden.
        </div>
    </div>
@endif
