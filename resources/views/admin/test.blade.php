@extends('admin.admin_template')

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin Area
                <small>Control the whole website</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
            </table>

                <script>
                    $(function() {
                        $('#users-table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: 'http://hotelsys.local/admin/emp/getdata',
                            columns: [
                                { data: 'id', name: 'id' },
                                { data: 'name', name: 'name' },
                                { data: 'email', name: 'email' },
                                { data: 'created_at', name: 'created_at' },
                                { data: 'updated_at', name: 'updated_at' }
                            ]
                        });
                    });
                </script>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection