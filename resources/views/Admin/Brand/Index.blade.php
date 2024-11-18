@extends('Layouts.AdminApp')
@section('content')
@include('Admin.Brand.Create')
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
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#newOrderModal" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2 addOrder-modal"><i class="mdi mdi-plus me-1"></i> Add New Order</button> 
                                       
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
                                            <th class="align-middle">Brand ID</th>
                                            <th class="align-middle">Brand Name</th>
                                           
                                            <th class="align-middle">status</th>
                                           
                                            <th class="align-middle">Action</th>
                                            <th class="align-middle">update</th>
                                        </tr>
                                    </thead>
                                    <tbody id="all-brands">
                                      
                                        
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
                   © Skote.
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

 {{-- <!-- Modal -->
<div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newOrderModalLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="paystatus-input" class="form-label">Category</label>
                                <select class="form-select" id="paystatus-input" required>
                                    <option value="Chargeback">Chargeback</option>
                                    <option value="Paid" selected>Paid</option>
                                    <option value="Refund">Refund</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-12">
                            <input type="hidden" class="form-control" id="orderid-input">
                            <div class="mb-3">
                                <label for="name-field" class="form-label">Brand Name</label>
                                <input type="text" id="name-field" name="name" class="form-control" placeholder="Enter name" required />
                                <div class="invalid-feedback">Please enter a BrandName.</div>
                            </div>
                            <div class="mb-3">
                                <label for="name-field" class="form-label">Slug Name</label>
                                <input type="text" id="slug-field" name="slug" class="form-control" placeholder="Enter slug" required />
                                <div class="invalid-feedback">Please enter a Slugname.</div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="status">
                                    <label class="form-check-label" for="gridCheck">
                                      Status
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="addNewOrder-btn" class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end modal body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div> 
<!-- end newOrderModal --> --}}
@push('script')
<script>
    async function displayallbrands()
    {
        var data = await fetch('http://localhost:8000/viewbranddata');
                
        var brands = await data.json();
           
        var brandtable = "";
             //console.log(brands.brands);
            
            brands.brands.forEach(brand=> {
                brandtable += 
            `<tr>
            
            <th scope="row">${brand.id}</th>
            <td>${brand.name}</td>
            <td>${brand.slug}</td>
            <td>${brand.status == '1' ? 'Hidden':'Visible'}</td>
            <td>
              <a href="#" data-bs-toggle="modal" data-bs-target="#newOrderModalupdate" data-id="${brand.id}"  class="btn btn-sm btn-success">Update</a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#deletebrand" onClick="deletebrand(${brand.id})" class="btn btn-sm btn-danger">Delete</a>
              </td>
            <td><button type="button" data-bs-toggle="modal" data-bs-target="#newOrderModalupdate" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2 addOrder-modal"><i class="mdi mdi-plus me-1"></i> Add New Order</button>
            </td>
              </tr>
              ` 
            });
        document.getElementById('all-brands').innerHTML = brandtable;   
            
        }
        displayallbrands();

        
</script>
@endsection