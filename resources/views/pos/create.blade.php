@extends('layouts.app')
 
@section('title', 'Create Order')
 
@section('content')

<div class="main-body">
      <div class="main-body-wrapper">
        <div class="containers bg-secondary">
          <div class="row">
            <div class="col-lg-4 d-flex">
              <label class="fw-bold"> Location:</label>
                <select class="form-select rounded-0 ms-2" aria-label="Default select example">
                <option selected>Head Office</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-4">
              <i class="bi bi-clock me-2"></i><span id="datetime"></span>
            </div>
          </div>
          <div class="content-wrapper bg-white">
            <div class="row p-2">
              <div class="col-lg-4">
                <form class="search" action="">
                  <button type="submit"><i class="bi bi-person-fill"></i></button>
                  <input type="search" placeholder="Search Customer Name" name="search">
                </form>
              </div>
              <div class="col-lg-8">
                <form>
                  <button type="submit"><i class="bi bi-search"></i></button>
                  <input type="search" placeholder="Search Product Name">
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label class="fw-bold">Comission Agent</label>
                <select class="form-select rounded-0 ms-2" aria-label="Default select example">
                <option selected>Select Comission Agent</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-4">
                <form action="">
                  <label for="" class="fw-bold">Remarks</label>
                  <input type="search" placeholder="Remarks">
                </form>
              </div>
              <div class="col-lg-4">
                <label class="fw-bold">Select Order Type</label>
                <select class="form-select rounded-0 ms-2" aria-label="Default select example">
                <option selected>Retail</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
              </div>
  
            </div>
          </div>
          
        </div>
      </div>
    
      </div>

    @endsection