@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>button</th>
        </tr>
        </thead>
    </table>
@stop


@push('scripts')
<script>
    $(function() {
        var table = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
                {"defaultContent": "<button>Click!</button>"},
            ],

        });
        $('#users-table tbody').on( 'click', 'button', function () {

            var data = table.row( $(this).parents('tr') ).data();
            alert( data['name']  +"'s salary is: "+ data[ ''] );
        } );
    });
</script>
@endpush
