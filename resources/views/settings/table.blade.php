<div class="table-responsive">
    <table class="table" id="settings-table">
        <thead>
            <tr>
                <th>Partner</th>
        <th>Key</th>
        <th>Value</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $settings)
            <tr>
                       <td>{{ $settings->partner }}</td>
            <td>{{ $settings->key }}</td>
            <td>{{ $settings->value }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['settings.destroy', $settings->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('settings.show', [$settings->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('settings.edit', [$settings->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Voulez-vous supprimer ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
