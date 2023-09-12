@extends('layouts.app')
 
@section('title', 'Create Order')
 
@section('content')

<div class="main-body">
        <div class="main-body-wrapper">
            <div class="containers">
              <div class="row">
                <div class="col-lg-12">
                  <p>POS</p>
                  <div class="card my-2">
                    <div class="card-header">
                      <div class="accordion" style="border: 0 !important">
                      <div class="accordion-item border-0">
                        <div class="accordion-header">
                          <button
                            class="accordion-button bg-light border-0"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne"
                          >
                            <i class="bi bi-funnel fw-bold pe-2"></i>
                            <span>Filters</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="accordion-collapse collapse show p-3"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                    id="collapseOne"
                  >
                    <div class="row p-3">
                      <div class="col-lg-3">
                        <label class="fw-bold"> Business Location:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold"> Customer:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold">Payment Status:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold">Date Range:</label>
                        <input class="form-select rounded-0" type="text" name="daterange" value="01/01/2023 - 02/15/2023" />
                      
                      </div>
                    </div>
                    <div class="row p-3">
                      <div class="col-lg-3">
                        <label class="fw-bold">User:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold">Sales Comission Agent:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold">Shipping Status:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="col-lg-3">
                        <label class="fw-bold">Order Types:</label>
                        <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>All</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card my-4">
                  <div class="card-header py-3 px-4 d-flex justify-content-between">
                    <p>List POS</p>
                    <button class="btn"><i class="bi bi-plus"></i>Add</button>
                  </div>
                  <div class="row p-md-4 p-2">
                    <div class="col-6 col-md-3 p-2">
                      <input type="text" class="form-control form-control-sm" placeholder="Scan CN to generate Load" aria-label="Productname" aria-describedby="basic-addon2">
                    </div>
                    <div class="col-6 col-md-2 p-2">
                      <input type="date" class="form-control form-control-sm"aria-label="Productname" aria-describedby="basic-addon2">

                    </div>
                    <div class="col-6 col-md-2 p-2">
                      <input type="date" class="form-control form-control-sm"aria-label="Productname" aria-describedby="basic-addon2">
                    </div>
                    <div class="col-6 col-md-2 p-2">
                      <select
                          class="form-select rounded-0"
                          aria-label="Default select example"
                        >
                          <option selected>MNP-overnight</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="col-6 col-md-3 p-2">
                      <button class="btn btn-primary btn-sm">Generate Load Sheet</button>
                    </div>
                    

                  </div>
                  <div class="table-wrapper p-4"  style="overflow: auto;">

                    <table
                      id="myTable"
                      class="table table-striped table-bordered"
                      
                     
                    >
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Date/Time</th>
                          <th>Invoice Type</th>
                          <th>Invoice No.</th>
                          <th>Order Status</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Location</th>
                          <th>Payment Method</th>
                          <th>Audit</th>
                          <th>Total Amount</th>
                          <th>Tracking Number</th>
                          <th>Ledger Balance</th>
                          <th>Orde Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="dropdown show">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" href="#" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </td>
                          <td>date/time</td>
                          <td>Retail</td>
                          <td>S1220009</td>
                          <td>Dispachted</td>
                          <td>Mr AYZ</td>
                          <td>023451516</td>
                          <td>Head Office</td>
                          <td>Cash</td>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            
                            </div>
                          </td>
                          <td>Rs 10,000.00</td>
                          <td></td>
                          <td>0</td>
                          <td>POS Order</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="dropdown show">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" href="#" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div>
                          </td>
                          <td>date/time</td>
                          <td>Retail</td>
                          <td>S1220009</td>
                          <td>Dispachted</td>
                          <td>Mr AYZ</td>
                          <td>023451516</td>
                          <td>Head Office</td>
                          <td>Cash</td>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            
                            </div>
                          </td>
                          <td>Rs 10,000.00</td>
                          <td></td>
                          <td>0</td>
                          <td>POS Order</td>
                        </tr>
                       </tbody>
                    </table>
                  </div>
                </div>   
            </div>
        </div>
      </div>

    @endsection