<div class="table-responsive">
    <table class="table" id="listings-table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Prix (XOF)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listings as $listing)
            <tr>
                <td>{{ $listing->title }}</td>
                <td>{{ $listing->category }}</td>
                <td><span class="text-truncate">{{ $listing->price }}</span></td>

                <td class=" text-center">
                    {!! Form::open(['route' => ['listings.destroy', $listing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('listings.show', [$listing->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
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