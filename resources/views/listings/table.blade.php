<div class="table-responsive">
    <table class="table table-striped table-sm" id="listings-table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Prix (XOF)</th>
                <th colspan="2" class="d-none"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($listings as $listing)
            <tr>
                <td><a href="{!! route('listings.show', [$listing->id]) !!}" >
                       {{ $listing->title }} </a>
                </td>
                <td>{{ $listing->category }}</td>
                <td><span class="text-truncate">{{ $listing->price }}</span></td>

                <td class=" text-center" class="d-none">
                    {!! Form::open(['route' => ['listings.destroy', $listing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                         <a href="{!! route('listings.edit', [$listing->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Confirmez-vous la suppression ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>