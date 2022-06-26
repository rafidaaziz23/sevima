@extends('layouts.user.main')

@section('content')
    @foreach ($post as $p)
        <div class="card card-custom gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Container-->
                <div>
                    <!--begin::Header-->
                    <div class="d-flex align-items-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40 symbol-light-success mr-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="d-flex flex-column flex-grow-1">
                            <a href="#"
                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">{{ $p->Postby->nama }}</a>
                            <span class="text-muted font-weight-bold">Selasa at 15:06</span>
                        </div>
                        <!--end::Info-->
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                            data-placement="left">
                            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header font-weight-bold py-4">
                                        <span class="font-size-lg">Choose Label:</span>
                                        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                            data-placement="right" title="Click to learn more..."></i>
                                    </li>
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span
                                                    class="label label-xl label-inline label-light-success">Customer</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-danger">Partner</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-primary">Member</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-text">
                                                <span class="label label-xl label-inline label-light-dark">Staff</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-separator mt-3 opacity-70"></li>
                                    <li class="navi-footer py-4">
                                        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                            <i class="ki ki-plus icon-sm"></i>Add new</a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div>
                        <!--begin::Text-->
                        <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">{{ $p->post_desc }}</p>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="d-flex align-items-center">
                            <a onclick="showKomen({{ $p->id }})"
                                class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
                                <span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                fill="#000000" />
                                            <path
                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>{{ count($p['Postkomen']) }}</a>
                        </div>
                        @foreach ($p->Postkomen as $komentar)
                            <div class="d-none mb-2 komentar-{{ $p->id }}">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/003-girl-1.svg" class="h-75 align-self-end"
                                            alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <a href="#"
                                            class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">{{ $komentar->users->nama }}</a>
                                        <span class="text-muted font-weight-normal flex-grow-1 font-size-sm">2 Days
                                            ago</span>
                                        <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                                    </div>
                                    <span
                                        class="text-dark-75 font-size-sm font-weight-normal pt-1">{{ $komentar->message }}</span>
                                    <!--end::Info-->
                                </div>
                                <!--end::Info-->
                            </div>
                        @endforeach

                        <!--end::Action-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="separator separator-solid mt-2 mb-4"></div>
                <!--end::Separator-->
                <!--begin::Editor-->
                <form class="position-relative" id="form-komentar" action="{{ route('komentar.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kelasId" value="{{ $p->id }}">
                    <textarea name="message" id="kt_forms_widget_6_input" class="form-control border-0 p-0 pr-10 resize-none komentarPost" rows="1"
                        placeholder="Reply..."></textarea>
                    <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                        <button type="submit" class="mr-2"><i
                                class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
                <!--edit::Editor-->
            </div>
            <!--end::Body-->
        </div>
    @endforeach
@endsection
@section('script')
    <script>
        function showKomen(id) {
            if ($(`.komentar-${id}`).hasClass('d-none')) {
                $(`.komentar-${id}`).removeClass('d-none');
                $(`.komentar-${id}`).addClass('d-flex');
            } else {
                $(`.komentar-${id}`).removeClass('d-flex');
                $(`.komentar-${id}`).addClass('d-none');
            }
        }
    </script>
@endsection

@section('post')
   <li class="navi-item">
      <a href="{{ route('createPost', $kelas) }}" class="navi-link">
         <span class="navi-text">Post</span>
      </a>
   </li>
@endsection

@section('kelas_detail')
    <div class="card card-custom gutter-b">
   <!--begin::Body-->
   <div class="card-body">
      <!--begin::Wrapper-->
      <div class="d-flex justify-content-between flex-column h-100">
         <!--begin::Container-->
         <div class="h-100">
            <!--begin::Header-->
            <div class="d-flex flex-column flex-center">
               <!--begin::Image-->
               <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{ asset("assets/media/stock-600x400/img-70.jpg") }})"></div>
               <!--end::Image-->
               <!--begin::Title-->
               <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{ $class['kelas_nama'] }}</a>
               <!--end::Title-->
               <!--begin::Text-->
               <div class="font-weight-bold text-dark-50 font-size-sm pb-7">#{{ $class['kelas_kode'] }}</div>
               <div class="font-weight-bold text-dark-50 font-size-sm pb-7">{{ $class['kelas_desc'] }}</div>
               <!--end::Text-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="pt-1">
               <!--begin::Item-->
               <div class="d-flex align-items-center pb-9">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-45 symbol-light mr-4">
                     <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                 <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                 <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                 <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Text-->
                  <div class="d-flex flex-column flex-grow-1">
                     <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Tugas</a>
                  </div>
                  <!--end::Text-->
                  <!--begin::label-->
                  <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">20</span>
                  <!--end::label-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-center pb-9">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-45 symbol-light mr-4">
                     <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <polygon points="0 0 24 0 24 24 0 24" />
                                 <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                 <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Text-->
                  <div class="d-flex flex-column flex-grow-1">
                     <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Anggota</a>
                  </div>
                  <!--end::Text-->
                  <!--begin::label-->
                  <span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">60</span>
                  <!--end::label-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-center pb-9">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-45 symbol-light mr-4">
                     <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                 <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Text-->
                  <div class="d-flex flex-column flex-grow-1">
                     <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Kuis</a>
                  </div>
                  <!--end::Text-->
                  <!--begin::label-->
                  <span class="font-weight-bolder label label-xl label-light-primary label-inline py-5 min-w-45px">74</span>
                  <!--end::label-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-center pb-9">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-45 symbol-light mr-4">
                     <span class="symbol-label">
                        <span class="svg-icon svg-icon-2x svg-icon-dark-50">
                           <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <rect x="0" y="0" width="24" height="24" />
                                 <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                 <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                              </g>
                           </svg>
                           <!--end::Svg Icon-->
                        </span>
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Text-->
                  <div class="d-flex flex-column flex-grow-1">
                     <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Berkas</a>
                  </div>
                  <!--end::Text-->
                  <!--begin::label-->
                  <span class="font-weight-bolder label label-xl label-light-info label-inline px-3 py-5 min-w-45px">209</span>
                  <!--end::label-->
               </div>
               <!--end::Item-->
            </div>
            <!--end::Body-->
         </div>
         <!--eng::Container-->
         <!--begin::Footer-->
         {{-- <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_2" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
            <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" data-toggle="modal" data-target="#kt_chat_modal">Contact School</button>
         </div> --}}
         <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
   </div>
   <!--end::Body-->
</div>

@endsection
