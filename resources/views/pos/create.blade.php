@extends('layouts.app')
 
@section('title', 'Create Order')
 
@section('content')

<div class="main-body">
      <div class="main-body-wrapper">
        <div class="containers">
          <div class="row">
            <div class="col d-flex">
              <div class="form-group d-flex">
                  <label class="fw-bold mx-2">Location: </label>
                  <select class="form-select form-select-sm" aria-label="Default select example">
                  <option selected>Head Office</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="content-wrapper bg-white p-3">
            <div class="row pb-2">
              <div class="col-lg-4">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                  <input type="text" class="form-control form-control-sm" placeholder="Search Customer Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                  <input type="text" class="form-control form-control-sm" placeholder="Search Product Name" aria-label="Productname" aria-describedby="basic-addon2">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="fw-bold">Comission Agent</label>
                  <select class="form-select form-select-sm" aria-label="Default select example">
                  <option selected>Select Comission Agent</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col">
                  <label for="" class="fw-bold form-label m-0">Remarks</label>
                  <input type="text" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="Remarks">
              </div>
              <div class="col">
                <div class="form-group">
                <label class="fw-bold">Select Order Type</label>
                <select class="form-select form-select-sm" aria-label="Default select example">
                <option selected>Retail</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                </div>
              </div>
            </div>
        
            <div class="product-table-container table-responsive py-3">
              <div class="scrollbar-table">
                <table class="table table-striped table-bordered product-table">
                <thead class="sticky-top">
                <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price inc. tax</th>
                <th>Weight</th>
                <th>Stock</th>
                <th>Subtotal</th>
                <th>Services/Staff</th>
                <th ><i class="bi bi-x" style="font-size:1.5rem;-webkit-text-stroke: 1px; color:red;"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center m-0">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
              <tr>
                <td> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                <td class="d-flex justify-content-center"> <img src="{{asset('assets/img/car-product.jpg')}}" alt="" style="width:50px; max-height:100%;"></td>
                <td>1 Million Car Perfume Fragrance Card</td>
                <td>
                  <nav aria-label="quantity">
                    <ul class="pagination pagination-sm d-flex align-items-center m-0">
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-plus"></i></a></li>
                      <li class="page-item"><a class="page-link m-0 h6" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-minus"></i></a></li>
                    </ul>
                  </nav>
                </td>
                <td>$ 1000</td>
                <td>225</td>
                <td>Stock</td>
                <td>$ 1200</td>
                <td>Services</td>
                <td><i class="bi bi-x" style="font-size: 1.5rem;"></i></td>
              </tr>
          
            

            </tbody>

          </table>
          
              </div>

          </div>
          <table class="table table-striped table-responsive">

                <tfoot>
                <tr>
                  <td class="col">
                    Items: 1.00
                  </td>
                  <td class="col">
                    Services:0.00
                  </td>
                  <td class="col">
                    Tax Amount: 0
                  </td>
                  <td class="col">
                    Total: 700.00
                  </td>
                </tr>
              </tfoot>
          </table>
          </div>
          <div class="footer">
            <div class="footer-wrapper d-flex justify-content-between p-3">
              <div class="button-div ">
                <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i> Sales Order</button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-credit-card"></i> Card</button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-cash-coin"></i> Multiple Pay</button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-cash"></i> Cash</button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-x-circle"></i> Clear</button>

              <button type="button" class="btn btn-secondary btn-sm ms-4">
                <div class="text-btn d-flex">
                  <span class="text-start" style="color:white;">Total<br>Payable</span><p class="d-flex align-items-center ms-2" style="color: white;">$ 700.00</p>
                </div>
              </button>
              </div>
              <div class="button-div-2 d-flex align-items-center">
                <button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-clock-fill"></i> Recent Transcations</button>
              </div>
              






            </div>
          </div>
        </div>
        
      </div>
      </div>
    
      </div>

    @endsection