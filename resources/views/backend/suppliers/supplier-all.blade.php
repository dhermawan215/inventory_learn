@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Supplier</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Supplier</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Suppliers Data</h4>
                                <a href="#" class="btn mb-2 btn-dark waves-effect waves-light float-left btn-sm">Add
                                    Suppliers</a>

                                <div class="table-responsive">
                                    <table id="tableSuppliers"
                                        class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($supplierData as $item)
                                                <tr>
                                                    <td>{{ $item->supplier_name }}</td>
                                                    <td>{{ $item->mobile_number }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td>{{ $item->status }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>

        </div>
    </div>
@endsection
@push('js_custom')
    <script>
        $(document).ready(function() {
            handleDataSuppliers();
            x
        });

        function handleDataSuppliers() {
            $('#tableSuppliers').DataTable({
                responsive: true
            });
        }
    </script>
@endpush
