<div class="table-responsive">
    <table class="table align-items-center table-striped table-sm" id="listings-table">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Catégorie</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix (XOF)</th>
                <th colspan="2" class="d-none"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($listings as $listing)
            <tr>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        <a href="{!! route('listings.show', [$listing->id]) !!}">{{ $listing->title }}</a>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        {{ $listing->category }}
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        {{ $listing->price }}
                    </div>
                </td>

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