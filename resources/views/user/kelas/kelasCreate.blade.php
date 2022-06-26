@extends('layouts.user.blank')


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
      <form action="{{ route('kelas.store') }}" method="POST">
         @csrf
         <div class="card-body">
            <div class="form-group row">
               <label class="col-3 col-form-label">Nama Kelas
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <input type="text" name="kelas_nama" id="kelas_nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-3 col-form-label">Detail Tugas
                  <span class="text-danger">*</span>
               </label>
               <div class="col-9">
                  <textarea name="kelas_desc" id="kelas_desc" class="form-control" rows="3"></textarea>
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
