@extends('layouts.admin.main')

@section('content')

<div class="card card-custom">
   <div class="card-header flex-wrap border-0 pt-6 pb-0">
      <div class="card-title">
         <h3 class="card-label">Table User
      </div>
      <div class="card-toolbar">
         <!--begin::Dropdown-->
         <div class="dropdown dropdown-inline mr-2">
            <button type="button" class="btn btn-light-info font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="svg-icon svg-icon-md">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                     </g>
                  </svg>
                  <!--end::Svg Icon-->
               </span>Export</button>
            <!--begin::Dropdown Menu-->
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
               <!--begin::Navigation-->
               <ul class="navi flex-column navi-hover py-2">
                  <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                        <span class="navi-icon">
                           <i class="la la-print"></i>
                        </span>
                        <span class="navi-text">Print</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                        <span class="navi-icon">
                           <i class="la la-copy"></i>
                        </span>
                        <span class="navi-text">Copy</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                        <span class="navi-icon">
                           <i class="la la-file-excel-o"></i>
                        </span>
                        <span class="navi-text">Excel</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                        <span class="navi-icon">
                           <i class="la la-file-text-o"></i>
                        </span>
                        <span class="navi-text">CSV</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                        <span class="navi-icon">
                           <i class="la la-file-pdf-o"></i>
                        </span>
                        <span class="navi-text">PDF</span>
                     </a>
                  </li>
               </ul>
               <!--end::Navigation-->
            </div>
            <!--end::Dropdown Menu-->
         </div>
         <!--end::Dropdown-->
         <!--begin::Button-->
         <a href="{{ route('user.create') }}" class="btn btn-light-success btn-sm font-weight-bolder">
            <span class="svg-icon svg-icon-succcess svg-icon-2x">
               <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect x="0" y="0" width="24" height="24" />
                     <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                     <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
                  </g>
               </svg>
               <!--end::Svg Icon-->
            </span>Tambah</a>
         <!--end::Button-->
      </div>
   </div>

   <div class="card-body">
<div class="mb-7">
         <div class="row align-items-center">
            <div class="col-lg-9 col-xl-8">
               <div class="row align-items-center">
                  <div class="col-md-4 my-2 my-md-0">
                     <div class="input-icon">
                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                        <span>
                           <i class="flaticon2-search-1 text-muted"></i>
                        </span>
                     </div>
                  </div>
                  <div class="col-md-4 my-2 my-md-0">
                     <div class="d-flex align-items-center">
                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                        <select class="form-control" id="kt_datatable_search_status">
                           <option value="">All</option>
                           <option value="1">Pending</option>
                           <option value="2">Delivered</option>
                           <option value="3">Canceled</option>
                           <option value="4">Success</option>
                           <option value="5">Info</option>
                           <option value="6">Danger</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-4 my-2 my-md-0">
                     <div class="d-flex align-items-center">
                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                        <select class="form-control" id="kt_datatable_search_type">
                           <option value="">All</option>
                           <option value="1">Online</option>
                           <option value="2">Retail</option>
                           <option value="3">Direct</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
               <a href="#" class="btn btn-light-primary btn-sm px-6 font-weight-bold">
                  <span class="svg-icon svg-icon-light-primary svg-icon-2x">
                     <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <rect x="0" y="0" width="24" height="24" />
                           <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                           <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                     </svg>
                     <!--end::Svg Icon-->
                  </span>Search</a>
            </div>
         </div>
      </div>
      <!--begin: Datatable-->
      <table class="table">
         <thead class="thead-dark">
            <th style="width: 5%;text-align:center;">No.</th>
            <th style="text-align:center;">Nama</th>
            <th style="text-align:center;">Role</th>
            <th style="text-align:center;">Email</th>
            <th style=" width: 18%;text-align:center;">Aksi</th>
         </thead>
         <tbody>
            @foreach($users as $key => $value)
            <tr>
               <td>
                  {{ ++$i }}
               </td>

               <td>{{ $value->nama}}</td>
               <td>{{ $value->email}}</td>
               <td>{{ $value->role}}</td>
               <td>
                  <form action="{{ route('user.destroy',$value->id) }}" method="POST">

                     <a href="{{ route('user.edit',$value->id) }}" class="btn btn-sm btn-warning" title="Edit">
                        <i class="far fa-edit"></i> Edit
                     </a>

                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-sm btn-danger kt-font-bold kt-font-danger" title="Hapus">
                        <span class="far fa-trash-alt"></span> Hapus
                     </button>
                  </form>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>

      <!--end: Datatable-->
   </div>
</div>
@endsection

@section('javascript')
   <script>



   </script>
@endsection