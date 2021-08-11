@extends('admin.dashboard')

@section('title','About History Page')

@section('content')

<div class="container-fluid">
    <!-- Main content starts -->
    <!-- Header starts -->
    <div class="row">
       <div class="col-sm-12 p-0">
          <div class="main-header" style="margin-top: 0px;">
             <h4>ກ່ຽວກັບພວກເຮົາ</h4>
             <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                   <a href="{{route('login')}}">
                      <i class="icofont icofont-home"></i>
                   </a>
                </li>
                <li class="breadcrumb-item">
                    <span>ໂຄງຮ່າງການຈັດຕັ້ງ</span>
                </li>
             </ol>
          </div>
       </div>
    </div>
    <!-- Header ends -->

    <!-- Row start -->
    <div class="row">
       <!-- Multiple Open Accordion start -->
       <div class="col-lg-12">
          <div class="card">
             <div class="card-header">
                <h2 class="card-header-text">ໂຄງຮ່າງການຈັດຕັ້ງ</h2>
             </div>

          </div>
       </div>
    </div>
    <!-- Row end -->
 </div>
@endsection
