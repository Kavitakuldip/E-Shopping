@extends('Layouts.AdminApp')
@section('content')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Product Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                
                <div class="col-12">
                    <div class="card">
                        <form action="{{url('/productstore')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="card-body">  
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Product</span> 
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">Product Image</span> 
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">Product Color</span>   
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">SEO Tag</span>    
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#seotag-1" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                        <span class="d-none d-sm-block">Details</span>    
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="home-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                        
                                                    <h4 class="card-title">Basic Information</h4>
                                                    <p class="card-title-desc">Fill all information below</p>
                        
                                                   
                                                        <div = class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Category</label>
                                                                    <select class="form-control select2">
                                                                        <option>Select</option>
                                                                        <option value="FA">Fashion</option>
                                                                        <option value="EL">Electronic</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="control-label">Features</label>
                    
                                                                    <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                        <option value="WI">Wireless</option>
                                                                        <option value="BE">Battery life</option>
                                                                        <option value="BA">Bass</option>
                                                                    </select>
                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="slug">Product Slug</label>
                                                                    <input id="slug" name="slug" type="text" class="form-control" placeholder="Slug Name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck" name="status">
                                                                        <label class="form-check-label" for="gridCheck">Status</label>
                                                                                  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="formFile" class="form-label">Small Description</label>
                                                                    <textarea class="form-control" type="text" id="formFile" name="smalldescription"></textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description">Description</label>
                                                                    <textarea id="description" name="description" type="text" class="form-control" placeholder="Description">
                                                                    </textarea>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                                        </div>
                                                   
                        
                                                </div>
                                            </div>
                        
                                           
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane" id="profile-1" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Product Images</h4>
    
                                            <div class="dropzone">
                                                <div class="fallback">
                                                    <input name="image[]" type="file" multiple="multiple">
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                    </div>
                                            
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                            
                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <div class="border rounded">
                                                        <div class="d-flex p-2">
                                                            @foreach ($images as $image)
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded">
                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{$image->image}}" alt="Dropzone-Image"></br>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                                    <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-3">
                                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                            </div>
                                    </div>
                                    
                                </div>                                                                               
                                <div class="tab-pane" id="messages-1" role="tabpanel">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="color">Product Color</label>
                                            <input class="form-control" id="color" name="color" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="Quantity">Product Quantity</label>
                                            <input class="form-control" id="Quantity" name="Quantity" >
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings-1" role="tabpanel">
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
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea class="form-control" id="meta_description" name="meta_description" rows="5" placeholder="Meta Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="seotag-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="original_price">Original Price</label>
                                                <input id="original_price" name="original_price" type="text" class="form-control" placeholder="Metatitle">
                                            </div>
                                            <div class="mb-3">
                                                <label for="meta_keyword">Selling Price</label>
                                                <input id="meta_keyword" name="meta_keyword" type="text" class="form-control" placeholder="Meta Keywords">
                                            </div>
                                            <div class="mb-3">
                                                <label for="quantity">Quantity</label>
                                                <input id="quantity" name="quantity" type="text" class="form-control" placeholder="Meta Keywords">
                                                
                                            </div>
                                        </div>
    
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>    
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