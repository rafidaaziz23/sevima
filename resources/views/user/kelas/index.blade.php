@extends('layouts.user.main')

@section('content')
    <div id="kelas">

    </div>
    {{-- @endforeach --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            renderKelas()
        });


        function renderKelas() {
            var kelas = '';
            var komen = '';
            $.ajax({
                type: "GET",
                url: "/api/renderKelas",
                success: function(response) {
                    var data = response.data

                    console.log(data)
                    $.each(data, function(i, kelasData) {

                            kelas += `
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
                                                    class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">${data[i].postby.nama}</a>
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
                                                                    <span class="label label-xl label-inline label-light-success">Customer</span>
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
                                            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">${data[i].post_desc}</p>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="d-flex align-items-center">
                                                <a onclick="showKomen(${data[i].id})"
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
                                                    </span>24</a>
                                            </div>
                                            <div id="element-komentar">
                                            </div>


                                            <!--end::Action-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Container-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-solid mt-2 mb-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Editor-->
                                    <form class="position-relative">
                                        <textarea id="kt_forms_widget_6_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                            placeholder="Reply..."></textarea>
                                        <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                                            <a href="#" class="mr-2"><i class="fas fa-paper-plane"></i></a>
                                        </div>
                                    </form>
                                    <!--edit::Editor-->
                                </div>
                                <!--end::Body-->
                            </div>
                            `

                            $.each(kelasData.postkomen, function(p, pk) {
                                console.log(pk)
                                komen+= `
                                {{-- Comment --}}
                                <div class="d-none mb-2" id="komentar-${data[i].id}">
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
                                                class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">Mrs.
                                                Anderson</a>
                                            <span class="text-muted font-weight-normal flex-grow-1 font-size-sm">2 Days ago</span>
                                            <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                                        </div>
                                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1"></span>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                `
                            })
                        })



                        $("#kelas").html(kelas)
                        $("#element-komentar").append(komen)
                }
            });
        }


        function showKomen(id) {
            if ($(`#komentar-${id}`).hasClass('d-none')) {
                $(`#komentar-${id}`).removeClass('d-none');
                $(`#komentar-${id}`).addClass('d-flex');












            } else {
                $(`#komentar-${id}`).removeClass('d-flex');
                $(`#komentar-${id}`).addClass('d-none');
            }
        }
    </script>
@endsection
