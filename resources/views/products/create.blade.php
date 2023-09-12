@extends('layouts.app')
 
@section('title', 'Create Product')
 
@section('content')

<div class="main-body">
        <div class="main-body-wrapper">
          <div class="containers">
            <div class="row">
              <div class="col">
                <h4>Add new Product</h4>  
              </div>
            </div>
            <div class="text-wrapper">
              <div class="row">
                <div class="col-lg-4 col-12">
                  <label for="" class="fw-bold form-label m-0">Product Name:</label>
                  <input required type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Product Name">
                </div>
                <div class="col-lg-4 col-12">
                  <label for="" class="fw-bold form-label m-0">Slug:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Slug (Optional)">
                </div>
                <div class="col-lg-4 col-12">
                  <div class="form-group">
                    <label class="fw-bold">Barcode Type:</label>
                    <select class="form-select form-select-sm" aria-label="Default select example" required>
                    <option selected>Code 128 (C128)</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-6">
                  <label for="" class="fw-bold form-label m-0">Attributes:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Attributes (Optional)">
                  </div>
                  <div class="col-6 ">
                  <label for="" class="fw-bold form-label m-0">PCT code:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="PCT Code (Optional)">
                  </div>
              </div>
              <div class="row">
                <div class="col-4 col-md-6 col-sm-6">
                  <label for="" class="fw-bold form-label m-0">Unit:</label>  
                  <div class="input-group">
                  <select class="form-select form-select-sm" aria-label="Default select example" required>
                    <option selected>Pieces (Pc(s))</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <span class="input-group-text" id="basic-addon2"><i class="bi bi-plus-circle-fill"></i></span>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                  <label class="fw-bold">Brands</label>
                  <select class="form-select form-select-sm" aria-label="Default select example">
                  <option selected>Select Brand</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                  <label class="fw-bold">Categories:</label>
                  <select class="form-select form-select-sm" aria-label="Default select example" required>
                  <option selected>Select Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                  <label class="fw-bold">Sub Categories:</label>
                  <select class="form-select form-select-sm" aria-label="Default select example" required>
                  <option selected>Select Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <label for="" class="fw-bold form-label m-0">Supplier</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label for="" class="fw-bold form-label m-0">Product Type:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Single" required>
                </div>
                <div class="col-lg-4">
                  <label for="" class="fw-bold form-label m-0">Warranty:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Please Select" required>
                </div>
              </div>
              <div class="row">
                <label for="" class="fw-bold form-label m-0">Choose Product Images:</label>
                <div class="image-box-wrapper">
                  <div class="image-box">
                  <input type="file" id="fileInput" accept="image/*" multiple>
                  <div id="uploadedImages"></div>
                  </div>
                </div>
                
              </div>

              <div class="row">
                <label for="" class="fw-bold form-label m-0">Product Description:</label>
                <div class="textarea-wrapper">
                  <textarea name="" id="summernote" class="format_tags"></textarea>
                </div>
                
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                  <label class="fw-bold">Status</label>
                  <select class="form-select form-select-sm" aria-label="Default select example">
                  <option selected>Active</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                  <label class="fw-bold">Sale Status</label>
                  <select class="form-select form-select-sm" aria-label="Default select example">
                  <option selected>Select Sale Status</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                  <label class="fw-bold">Weight:</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Weight">
                  </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <label class="fw-bold">Short Link</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput">
                </div>
                <div class="col-lg-2">
                  <label class="fw-bold">Youtube URL</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput">
                </div>
              </div>
              </div>


              <div class="row py-3">
                <div class="col">
                  <h4>Rack/Row/Position Details</h4>  
                </div>
              </div>
              <div class="details-wrappper">
                <div class="row">
                  <div class="col-lg-3">
                    <span class="fw-bold">Head Office:</span>
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Rack">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Row">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Position">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Min. Quantity">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Max. Quantity">
                  </div>
                  <div class="col-lg-3">
                    <span class="fw-bold">Branch 1:</span>
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Rack">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Row">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Position">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Min. Quantity">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Max. Quantity">
                  </div>
                  <div class="col-lg-3">
                    <span class="fw-bold">Branch 2:</span>
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Rack">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Row">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Position">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Min. Quantity">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Max. Quantity">
                  </div>
                  <div class="col-lg-3">
                    <span class="fw-bold">Branch 3:</span>
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Rack">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Row">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Position">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Min. Quantity">
                    <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Max. Quantity">
                  </div>
                </div>
              </div>

              <div class="row py-3 d-flex justify-content-center">
                <button class="btn btn-primary" style="max-width: 60px;">Save</button>
              </div>
            </div>
            
          </div>
        </div>
    
      </div>


    @endsection
