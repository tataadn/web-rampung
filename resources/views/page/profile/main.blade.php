@extends('theme.index')

@section('content')
<!-- profile -->
<div id="content_input"></div>
    <div id="content_list">
      <div class="profile">
        <div class="row justify-content-center" style="padding-top: 6rem;">
          <h3 class="mb-3 text-center">Profile Saya</h3>
          <div class="col-sm-4">
            <img src="{{asset('img/pic.png')}}" alt="" style="width: 400px;">
          </div>
              <div class="col-sm-4">
                <div class="border p-4 shadow-5">
                  <div id="list_result"></div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <!-- profile -->
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection
@endsection
