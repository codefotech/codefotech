@extends('backend.index')

@section('header-resources')
    @include('backend.partials.datatable_css')
@endsection

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12 p-5 pt-3">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title pt-2 pb-2"><i class="fa fa-list"></i> Blog List</h3>
                    <div class="card-tools float-end">
                        <a href="{{ route('blog.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp; Add Blog </a>
                    </div>
                    <!-- /.card-tools -->
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="list" class="table table-striped table-bordered dt-responsive " cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Categories</th>
                                <th>date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->

        </div>
    </div>
@endsection

@section('footer-script')
    @include('backend.partials.datatable_js')

    <script>
        $(function () {
            $('#list').DataTable({
                processing: true,
                serverSide: true,
                "ordering": true,
                ajax: {
                    url: "{{ route('blog.list') }}",
                    method: 'post',
                    data: function (d) {
                        d._token = $('input[name="_token"]').val();
                    }
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'categories',
                        name: 'categories'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                {
                    data: 'action',
                    name: 'action'
                }
                ],
                "aaSorting": []
            });
        });
    </script>
@endsection
