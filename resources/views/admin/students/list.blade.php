@extends('admin.layout.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Batch Class List</h5>
            <div class="heading-elements">
                <ul class="icons-list" style="margin-top: 0px">
                    <li style="margin-right: 10px;"><a href="{{ route('student.create') }}"
                            class="btn btn-info add-new">Add New</a></li>
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
            @if ($students)
                <tbody>
                    @foreach ($students as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->roll }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><img style="height:100px;width: 100px;" src="{{ asset('uploads/' . $item->image) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="text-primary-600"><a href="{{ route('student.edit', [$item->id]) }}"><i
                                                class="icon-pencil7"></i></a></li>
                                    <li class="text-danger-600"><a id="trash"
                                            href="{{ route('student.destroy', [$item->id]) }}"><i
                                                class="icon-trash"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
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

        const delBtn = document.querySelector('#trash');
        $('#trash').on("click", function(e) {
            e.preventDefault();
            const delUrl = $(this).attr("href");
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "DELETE",
                            url: delUrl,
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            dataType: "html",
                            success: function(response) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                }).then((willDelete) => {
                                    location.reload();
                                })
                            }
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
        });
    </script>
@endpush
