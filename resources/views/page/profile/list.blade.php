
        <div class="card-body">
            <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Nama</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->name}}</p>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->email}}</p>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Username</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->username}}</p>
            </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row text-center">
    <div class="col">
    <a href="javascript:void(0);" onclick="load_input('{{route('profile.edit',$user->id)}}')" class="btn btn-primary btn-rounded btn-lg">Edit Profile</a>
    </div>