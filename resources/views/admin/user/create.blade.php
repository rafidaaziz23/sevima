@extends('layouts.admin.main')

@section('content')
<div class="card mb-3">
   <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
         <div class="card-title">
            <h3 class="card-label">Form User
         </div>
         <div class="card-toolbar">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-default"><i class="fas fa-angle-left"></i>Kembali</a>
         </div>
      </div>
      <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Nama
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Role
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <select class="form-control selectpicker" title="-- Pilih --" name="role">
                               <option value="admin">Admin</option>
                               <option value="user">User</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Email
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Password
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" autocomplete="off" />
                     </div>
                  </div>

                  {{-- <div class="form-group row">
                     <label class="col-3 col-form-label">Foto
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-9">
                        <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(assets/media/users/blank.png)">
                        <div class="image-input-wrapper"></div>

                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="user_photo" accept=".png, .jpg, .jpeg"/>
                        <input type="hidden" name="user_photo_remove"/>
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        </div>
                     </div>
                  </div> --}}
               </div>
            </div>
         </div>
         <div class="card-footer text-right pt-3">
            <button type="reset" class="btn btn-sm btn-light-success font-weight-bold"><i class="fas fa-undo-alt"></i> Batal</button>
            <button type="submit" class="btn btn-sm btn-success font-weight-bold mr-2"><i class="far fa-save"></i> Simpan</button>
         </div>
      </form>
   </div>
</div>

{{-- <script>
   var avatar5 = new KTImageInput('kt_image_5');

avatar5.on('cancel', function(imageInput) {
 swal.fire({
  title: 'Image successfully changed !',
  type: 'success',
  buttonsStyling: false,
  confirmButtonText: 'Awesome!',
  confirmButtonClass: 'btn btn-primary font-weight-bold'
 });
});

avatar5.on('change', function(imageInput) {
 swal.fire({
  title: 'Image successfully changed !',
  type: 'success',
  buttonsStyling: false,
  confirmButtonText: 'Awesome!',
  confirmButtonClass: 'btn btn-primary font-weight-bold'
 });
});

avatar5.on('remove', function(imageInput) {
 swal.fire({
  title: 'Image successfully removed !',
  type: 'error',
  buttonsStyling: false,
  confirmButtonText: 'Got it!',
  confirmButtonClass: 'btn btn-primary font-weight-bold'
 });
});
</script> --}}
@endsection