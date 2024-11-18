 <!-- Modal -->
 <div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newOrderModalLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="on" class="brand-data" id="brand-data"> 
                    
                    {{-- <form id="BrandData" > --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="category_id" class="control-label" >Select Category</label>
                                <select class="form-select" id="category_id" name="category_id" required>
                                    <option value="">--Select Category--</option>
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-12">
                           
                            <div class="mb-3">
                                <label for="name" class="form-label">Brand Name</label>
                                <input type="text" id="name" name="name" class="form-control"   placeholder="Enter brand name"  />
                               
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug Name</label>
                                <input type="text" id="slug" name="slug" class="form-control"  placeholder="Enter slug name"  />
                               
                            </div>
                           
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="invalidCheck" name="status"
                                    checked>
                                <label class="form-check-label" for="invalidCheck">
                                   Status
                                </label>
                               
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit"  class="btn btn-success" >Create</button>
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
<!-- end newOrderModal -->

<div class="modal fade" id="newOrderModalupdate" tabindex="-1" aria-labelledby="newOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newOrderModalLabel">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="on" class="brand-data" id="updatebrand-data"> 
                    
                    {{-- <form id="BrandData" > --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="category_id" class="control-label" >Select Category</label>
                                <select class="form-select" id="category_id" name="category_id" required>
                                    
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-12">
                           
                            <div class="mb-3">
                                <label for="name" class="form-label">Brand Name</label>
                                <input type="text" id="name" name="name" class="form-control"   placeholder="Enter brand name"  />
                               
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug Name</label>
                                <input type="text" id="slug" name="slug" class="form-control"  placeholder="Enter slug name"  />
                               
                            </div>
                           
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="invalidCheck" name="status"
                                    checked>
                                <label class="form-check-label" for="invalidCheck">
                                   Status
                                </label>
                               
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit"  class="btn btn-success" >Update</button>
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
@push('script')
<script>

    
//Add BrandData
         
//function addbrand(){
    //alert("hfsajfha");

document.getElementById('brand-data').addEventListener('submit',function(event){
    event.preventDefault();

        var brandformdata = new FormData(this)
            var data = ""
            brandformdata.forEach(function (value,key) 
            {
                data += `${key} + " : " + ${value} `;
                 console.log(data);
                    
            });
             fetch('http://localhost:8000/brandcreate',{
                method: 'post',
                body: brandformdata,
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
               }
            })            
            .then(response=>response.json())
            .then(data=> {
                $('#newOrderModal').modal('hide')
                $('#brand-data input').val('')
                $('#brand-data input[type="checkbox"]').prop('checked',false)
                $('#brand-data select').val('')

                document.getElementById('success').innerText = data.success;
                displayallbrands();
            }).catch(error => console.error('Error : ',error));

        });
        document.getElementById('newOrderModalupdate').addEventListener('submit',function(event){
            event.preventDefault();



            var brandformdata = new FormData(this)
            // console.log(brandformdata);
            
            var data = ""
            brandformdata.forEach(function (value,key) 
            {
                data += `${key} + " : " + ${value} `;
                // console.log(key , value);
                    
            });
            var updateid = brandformdata.get('id')
            //console.log(updateid);
            

            fetch(`/api/brand/update/${updateid}`,{
                method: 'post',
                body: brandformdata,
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
            }).then(response=>response.json())
            .then(data=> {

                // console.log(data.success);

              
                
               // $('#newOrderModalupdate').modal('hide')
                $('#updatebrand-data input').val('')
                $('#updatebrand-data input[type="checkbox"]').prop('checked',false)
                $('#updatebrand-data select').val('')

                document.getElementById('success').innerText = data.success;
                displayallbrands();
            }).catch(error => console.error('Error : ',error));

        });        
    //}
</script>
    
@endpush