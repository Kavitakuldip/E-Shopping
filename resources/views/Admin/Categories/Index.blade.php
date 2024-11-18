@extends('Layouts.AdminApp')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Orders</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <div class="search-box me-2 mb-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" autocomplete="off" id="searchTableList" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-end">
                                        {{-- <button type="button"  class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2 addOrder-modal"><i class="mdi mdi-plus me-1"></i> Add New Order</button> --}}
                                        <a href="{{('/create')}}" class="btn btn-success btn-rounded waves-effect waves-light"><i class="mdi mdi-plus me-1"></i> Add New Order</a>
                                    </div>
                                </div><!-- end col-->
                            </div>
    
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap dt-responsive nowrap w-100 table-check" id="order-list">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 20px;" class="align-middle">
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="align-middle">Order ID</th>
                                            <th class="align-middle">Category Name</th>
                                            <th class="align-middle">image</th>
                                            <th class="align-middle">status</th>
                                            <th class="align-middle">Description</th>
                                            <th class="align-middle">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th style="width: 20px;" class="align-middle">
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name}}</td>                                           
                                            <td>{{$category->image}}</td>
                                            <td>{{$category->status}}</td>
                                            <td>{{$category->description}}</td>                                            
                                            <td>
                                                
                                                <a href="{{url('/admin/'.$category->slug.'/edit/'.$category->id)}}" class="btn btn-success btn-rounded waves-effect waves-light">Edit </a>   
                                            <a href="{{url('/delete/'.$category->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light">Delete</a></td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table responsive -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal -->
  
    <!-- end orderdetailsModal -->
    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

 <!-- Modal -->
 
<!-- end newOrderModal -->
@endsection