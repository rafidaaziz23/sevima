@extends('layouts.main')

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
      <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Nama
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="user_name" id="user_name" class="form-control" value="{{ $user->user_name }}" placeholder="Masukkan Nama" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Role
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <select class="form-control selectpicker" title="{{ optional($user->roles)->role_nama }}" name="user_role_id">
                           @foreach ( $roles as $value )
                               <option value="{{ $value->id }}">{{ $value->role_nama }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Nomer Telp
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="user_telp" id="user_telp" class="form-control" value="{{ $user->user_telp }}" placeholder="Masukkan Telp" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Alamat
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <textarea name="user_alamat" id="user_alamat" class="form-control" rows="3">{{ $user->user_alamat }}</textarea>
                     </div>
                  </div>        
                  <div class="form-group row">
                     <label class="col-3 col-form-label">Status</label>
                     <div class="col-9">
                        <span class="switch switch-success">
                           <label>
                              <input type="checkbox" checked="checked" name="user_is_active" />
                              <span></span>
                           </label>
                        </span>
                     </div>
                  </div>                   
               </div>
               <div class="col-md-6">
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Email
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="user_email" id="user_email" class="form-control" value="{{ $user->user_email }}" placeholder="Masukkan Email" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Username
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="text" name="user_username" id="user_username" class="form-control" value="{{ $user->user_username }}" placeholder="Masukkan Username" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-3 col-form-label">Password
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-md-9">
                        <input type="password" name="user_password" id="user_password" class="form-control" value="{{ $user->user_password }}" placeholder="Masukkan Password" autocomplete="off" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-3 col-form-label">Foto
                        <span class="text-danger">*</span>
                     </label>
                     <div class="col-9">
                        <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url(storage/uploads/users/{{ $user->user_photo }})">
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
                  </div>
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
@endsection