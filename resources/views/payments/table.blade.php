<div class="table-responsive">
    <table class="table table-sm table-hover table-striped" id="payments-table">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Montant (XOF)</th>
                <th>Statut</th>
                <!-- <th>Data</th> -->
            </tr>
        </thead>
        <tbody>
            @php 
                $total = 0;
            @endphp

            @foreach($payments as $payments)
                @php 
                 $wave = $payments->data;
                 $total += $wave['amount'];
                @endphp
            <tr>
                <td><a href="{!! route('payments.show', [$payments->id]) !!}">{{ $wave['id']}}</a></td>
                <td>{{ $wave['amount'] }} XOF</td>

                <td>{!! $wave['payment_status'] == 'succeeded' ? '<i class="fa-solid fa-check-double text-success"></i>' : '<i class="fa-solid fa-circle-pause text-danger"></i>' !!} </td>
            </tr>
            @endforeach

            <tr><td colspan="3" class="h-2 bg-gradient-info"><hr></td></tr>
            <tr class="h5 float-start"><td>Total</td><td>{{ number_format($total, 0, ',', '.') }} XOF</td><td></td></tr>
        </tbody>
    </table>
</div>