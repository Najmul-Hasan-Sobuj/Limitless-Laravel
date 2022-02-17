@extends('admin.layout.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Batch Class List</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="#" class="btn btn-info add-new">Add New</a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <table id="studentTable" class="table datatable-basic table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td>22 Jun 1972</td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="text-primary-600"><a href="#"><i class="icon-pencil7"></i></a></li>
                            <li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $('#studentTable').DataTable({
            dom: 'lBfrtip',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                // 'orderable': false,
                // "targets": 3
            }]
        });
    </script>
@endpush
