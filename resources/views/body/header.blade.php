<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
            <a href="{{route('homeIndex')}}"><img src="{{asset('frontend/assets/img/logo.png')}}" title="ກົມການຄ້າພາຍໃນ ກະຊວງອຸດສາຫະກໍາ ແລະ ການຄ້າ" alt="Department of Internal Trade" class="img-fluid"></a>ກົມການຄ້າພາຍໃນ
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('homeIndex')}}">ໜ້າທໍາອິດ</a></li>
                <li class="drop-down">
                    <a href="#">ກ່ຽວກັບພວກເຮົາ</a>
                    <ul>
                        <li><a href="{{route('pagesHistory')}}">ປະຫວັດຄວາມເປັນມາ</a></li>
                        <li><a href="{{route('pagesStructure')}}">ໂຄງຮ່າງການຈັດຕັ້ງ</a></li>
                        <!--                            <li><a href="human.html">ບຸກຄະລາກອນ</a></li> -->
                        <li><a href="{{route('pagesRole')}}">ພາລະບົດບາດ</a></li>
                        <!--                            <li><a href="unit.html">ໜ່ວຍງານໃນສັງກັດ</a></li> -->
                        <li><a href="{{route('pagesWhiteReport')}}">ບົດລາຍງານປະຈຳປີ</a></li>
                        <li><a href="{{route('pagesStrategy')}}">ແຜນຍຸດທະສາດ ແລະ ວິໄສທັດ</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">ຂ່າວ/ປະກາດຂອງກົມ</a>
                    <ul>
                        <li><a href="{{route('pagesFuelPrice')}}">ແຈ້ງການປັບລາຄານໍ້າມັນ</a></li>
                        <li><a href="{{route('pagesNews')}}">ຂ່າວປະຊາສຳພັນ</a></li>
                        <li><a href="{{route('pagesActivity')}}">ຮູບພາບກິດຈະກຳ</a></li>
                    </ul>
                </li>
                <li><a href="{{route('pagesStatistic')}}">ຂໍ້ມູນສະຖິຕິ/ບົດຄົ້ນຄວ້າ</a></li>
                <li class="drop-down"><a href="#">ນິຕິກຳຂອງກົມ</a>
                    <ul>
                        <li><a href="{{route('pagesLegislation')}}">ກົດໝາຍ ແລະ ດຳລັດ</a></li>
                        <li><a href="{{route('pagesOrder')}}">ຄຳສັ່ງ ແລະ ຂໍ້ຕົກລົງ</a></li>
                        <li><a href="{{route('pagesNotice')}}">ບົດແນະນຳ ແລະ ແຈ້ງການ</a></li>
                        <li><a href="https://law.moic.gov.la/lo/" target="_blank">ຖານຂໍ້ມູນນິຕິກຳ ອຄ</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="{{route('pagesContact')}}">ຕິດຕໍ່ພວກເຮົາ</a>
                    <ul>
                        <li><a href="{{route('pagesLegislation')}}">ເຂົ້າສູ່ລະບົບ</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->