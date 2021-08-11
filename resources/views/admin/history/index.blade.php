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
                    <span>ປະຫວັດຄວາມເປັນມາ</span>
                </li>
             </ol>
          </div>
       </div>
    </div>
    <!-- Header ends -->

    <!-- Row start -->
        <div class="row">
        <!-- Multiple Open Accordion start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-header-text">ປະຫວັດຄວາມເປັນມາ</h2>
                    </div>
                        <form action="{{route('history.update', $posts->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            @include('admin.history.partials.form')
                            <br>
                                <button type="submit" class="btn btn-inverse-success2 waves-effect waves-light">ຕົກລົງ </button>
                            <br>
                        </form>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-header-text">ສະແດງເນື້ອໃນ</h2>
                    </div>
                    <div class="card">
                        <div class="card-block">
                           <div class="md-card-block">
                              <p class="m-b-20">
                                    <span class="f-w-600 f-16 d-block m-b-10">
                                        @foreach ($posts as $item)
                                            {{ $item->content }}
                                        @endforeach
                                    </span>
                              </p>
                           </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
 </div>
 <script>
        // Dealing with Input width
        let widthMachine = document.querySelector(".width-machine");

        // Dealing with Textarea Height
        function calcHeight(value) {
        let numberOfLineBreaks = (value.match(/\n/g) || []).length;
        // min-height + lines x line-height + padding + border
        let newHeight = 20 + numberOfLineBreaks * 20 + 12 + 2;
        return newHeight;
        }

        let textarea = document.querySelector(".resize-ta");
        textarea.addEventListener("keyup", () => {
        textarea.style.height = calcHeight(textarea.value) + "px";
        });

 </script>
@endsection
