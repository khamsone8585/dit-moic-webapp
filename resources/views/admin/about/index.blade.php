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
                        <form action="{{route('history.store')}}" method="post">
                            <p><span class="textarea" role="textbox" contenteditable>{{old('content')}}</span></p>
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
                                 <span class="f-w-600 f-16 d-block m-b-10">1914 translation by H. Rackham</span> "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account
                                 of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who
                                 do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally
                                 circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any
                                 right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and
                                 dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                                 in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                 and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will
                                 frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or
                                 else he endures pains to avoid worse pains."
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
