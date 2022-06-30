<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Type</th>
        <th>Product</th>
        <th>Platform</th>
        <th>Data</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payments)
            <tr>
                       <td>{{ $payments->id }}</td>
            <td>{{ $payments->type }}</td>
            <td>{{ $payments->product }}</td>
            <td>{{ $payments->platform }}</td>
            <td>{{ $payments->data }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['payments.destroy', $payments->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('payments.show', [$payments->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('payments.edit', [$payments->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Voulez-vous supprimer ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
