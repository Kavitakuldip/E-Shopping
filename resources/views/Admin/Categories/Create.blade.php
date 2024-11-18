@extends('Layouts.AdminApp')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
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

                            <h4 class="card-title">Basic Information</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="categoryname">Category Name</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Category Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="slug">Slug</label>
                                            <input id="slug" name="slug" type="text" class="form-control" placeholder="Slug Name">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="status">
                                                    <label class="form-check-label" for="gridCheck">
                                                      Status
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="formFile" class="form-label">Select Image</label>
                                            <input class="form-control" type="file" id="formFile" name="image">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="otherdetails">Other Details</label>
                                            <input id="otherdetails" name="otherdetails" type="text" class="form-control" placeholder="Other Deti Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" type="text" class="form-control" placeholder="Description">
                                            </textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="meta_title">Meta title</label>
                                            <input id="meta_title" name="meta_title" type="text" class="form-control" placeholder="Metatitle">
                                        </div>
                                        <div class="mb-3">
                                            <label for="meta_keyword">Meta Keywords</label>
                                            <input id="meta_keyword" name="meta_keyword" type="text" class="form-control" placeholder="Meta Keywords">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" id="meta_description" name="meta_description" rows="5" placeholder="Meta Description"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="other_details">Other Details</label>
                                            <textarea class="form-control" id="other_details" name="other_details" rows="5" placeholder="Other Details"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                </div>
                            </form>

                        </div>
                    </div>

                   
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
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
@endsection