@extends('layouts.user.table')

@section('content')

<div class="card card-custom">
   <div class="card-header flex-wrap border-0 pt-6 pb-0">
      <div class="card-title">
         <h3 class="card-label">Table Anggota
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
            <th style="text-align:center;">Email</th>
            <th style="text-align:center;">Role Anggota</th>
            <th style=" width: 18%;text-align:center;">Aksi</th>
         </thead>
         <tbody>
            {{-- @foreach($users as $key => $value)
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
            @endforeach --}}
         </tbody>
      </table>

      <!--end: Datatable-->
   </div>
</div>

@endsection