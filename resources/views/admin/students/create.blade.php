@extends('admin.layout.app')
@section('content')
    <div class="panel panel-flat">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Batch Class List</h5>
                <div class="heading-elements">
                    <ul class="icons-list" style="margin-top: 0px">
                        <li style="margin-right: 10px;"><a href="{{ route('student.index') }}"
                                class="btn btn-info add-new">Back</a></li>
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <p class="content-group-lg">Validate.js makes simple clientside form validation easy, whilst still offering
                    plenty of customization options. The plugin comes bundled with a useful set of validation methods,
                    including
                    URL and email validation, while providing an API to write your own methods. All bundled methods come
                    with
                    default error messages in english and translations into 37 other languages.</p>
                <form id="" class="form-horizontal form-validate-jquery" action="{{ route('student.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <fieldset class="content-group">
                        <legend class="text-bold">Basic inputs</legend>
                        <div class="form-group">
                            <label class="control-label col-lg-3">ID <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="roll" class="form-control" required="required"
                                    placeholder="Enter Your Varsity ID">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">Full Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control" required="required"
                                    placeholder="Enter Your Full Name">
                            </div>
                        </div>
                        <!-- Email field -->
                        <div class="form-group">
                            <label class="control-label col-lg-3">Email Field <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" id="email" required="required"
                                    placeholder="Enter a valid email address">
                            </div>
                        </div>
                        <!-- /email field -->
                        <!-- Styled file uploader -->
                        <div class="form-group">
                            <label class="control-label col-lg-3">Styled file uploader <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input type="file" name="image" class="file-styled" required="required">
                            </div>
                        </div>
                        <!-- /styled file uploader -->
                    </fieldset>

                    <div class="text-right">
                        {{-- <button type="reset" class="btn btn-default" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button> --}}
                        <button type="submit" class="btn btn-primary">Submit <i
                                class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    @endsection

    @push('script')
        <script type="text/javascript">

        </script>
    @endpush
