<div class="profile">
  <div class="row justify-content-center" style="padding-top: 6rem;">
  <h3 class="mb-3 text-center">Ubah Profile Saya</h3>
    <div class="col-sm-4 mt-4 me-4">
      <img src="{{asset('img/pic.png')}}" alt="" style="max-width: 400px;max-height:100%;">
    </div>
    <div class="col-sm-4">
    <div class="card" style="border-radius: 15px;">
        <div class="card-body p-5">
          <form id="form-profile">
            <div class="form-outline mb-4">
              <input type="hidden" name="id" id="" value="{{$user->id}}">
              <label class="form-label" for="name">Nama</label>
              <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{$user->name}}"/>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="username">Username</label>
              <input type="username" id="username" name="username" class="form-control form-control-lg" value="{{$user->username}}"/>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password Saat Ini</label>
              <input type="password" id="current_password" name="current_password" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password Baru</label>
              <input type="password" id="new_password" name="new_password" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Konfirmasi Password</label>
              <input type="password" id="new_confirm_password" name="new_confirm_password" class="form-control form-control-lg" />
            </div>
            <div class="d-flex justify-content-center">
                <a id="button-profile" href="javascript:void(0);" onclick="handle_save('#button-profile','#form-profile','{{route('profile.update',$user->id)}}','PATCH','Ubah')" type="submit" class="btn btn-primary btn-rounded mb-4">Submit</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>