@extends('layouts.user.table')


@section('content')
<!--begin::Body-->
<div class="card">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form Tugas
         </div>
         <div class="card-toolbar">
            <a href="" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('tugas.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Deadline
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input type="datetime-local" name="tugas_due" id="tugas_due" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Judul Tugas
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input type="text" name="tugas_judul" id="tugas_judul" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Detail Tugas
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <textarea name="tugas_desc" id="tugas_desc" class="form-control" rows="3"></textarea>
               </div>
            </div>
            {{-- <div id="file">
               <div class="form-group row">
                  <label class="col-3 col-form-label">File
                     <span class="text-danger">*</span>
                  </label>
                  <div class="col-9">
                     <div class="input-group mb-1">
                        <input type="file" class="form-control" name="file[0]" placeholder="Masukkan Syarat" autocomplete="off"/>
                     </div>
                     <div id="file_repeater"></div>
                  </div>
               </div>
               <div class="form-group row mt-0">
                  <div class="col-lg-3"></div>
                     <div class="col">
                           <a data-repeater-create="" onclick="addFile(this)" class="btn font-weight-bold btn-info btn-sm">
                              <i class="la la-plus text-center"></i>
                              Tambah
                           </a>
                           <a onclick="removeFile(this)" class="btn font-weight-bold btn-sm btn-danger btn-icon">
                              <i class="la la-close"></i>
                           </a>
                     </div>
               </div>
            </div> --}}
            <div id="link">
               <div class="form-group row">
                  <label class="col-3 col-form-label">Link
                     <span class="text-danger">*</span>
                  </label>
                  <div class="col-9">
                     <div class="input-group mb-1">
                        <input type="text" class="form-control" name="link[0]" placeholder="Masukkan Tugas" autocomplete="off"/>
                     </div>
                     <div id="link_repeater"></div>
                  </div>
               </div>
               <div class="form-group row mt-0">
                  <div class="col-lg-3"></div>
                     <div class="col">
                           <a data-repeater-create="" onclick="addLink(this)" class="btn font-weight-bold btn-info btn-sm">
                              <i class="la la-plus"></i>
                              Tambah
                           </a>
                           <a onclick="removeLink(this)" class="btn font-weight-bold btn-sm btn-danger btn-icon">
                              <i class="la la-close"></i>
                           </a>
                     </div>
               </div>
            </div>
            <div class="card-footer p-0 text-right pt-3">
               <button type="reset" class="btn btn-sm btn-light-success font-weight-bold"><i class="fas fa-undo-alt"></i> Batal</button>
               <button type="submit" class="btn btn-sm btn-success font-weight-bold mr-2"><i class="far fa-save"></i> Simpan</button>
            </div>
      </form>
   </div>
</div>

@endsection

@section('script')

<script>
   var id = 0;
   var link = 0;
   function addFile(el){
      id++;
      $('#file_repeater').append(`
         <div class="input-group mb-1" id="file${id}">
            <input type="file" class="form-control" name="file[${id}]" autocomplete="off"/>
         </div>
      `);
   }
   
   function removeFile(el){
      $(`#file${id}`).remove();
      id--;
   }
   function addLink(el){
      link++;
      $('#link_repeater').append(`
         <div class="input-group mb-3" id="link${link}">
            <input type="text" class="form-control" name="link[${link}]" placeholder="Masukkan Tugas" autocomplete="off"/>
         </div>
      `);
   }
   
   function removeLink(el){
      $(`#link${link}`).remove();
      link--;
   }
</script>

@endsection