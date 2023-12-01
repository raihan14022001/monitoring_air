@extends('layout.app')


@section('konten')

<div class="card" id="set">
  <!--begin::Card header-->
  <div class="card-header">
      <h3 class="card-title align-items-start flex-column">
          <span class="card-label fw-bolder text-dark">halaman kategori</span>
      </h3>
      <div class="card-toolbar">
          <a href="../../demo1/dist/apps/calendar.html" class="btn btn-primary">Buat sesuatu</a>
      </div>
  </div>
  <!--end::Card header-->
  <!--begin::Card body-->
  <div class="card-body ">
    <div class="row">
      <div class="col-6">
            <div id="dataTinggi"></div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h1>Kontrol</h1>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <div class="form-check form-switch">
                <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Off</label> -->
                {{-- <h1>{{$Status}}</h1> --}}
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"  onchange="ubhS(this.checked)" @php
                  if($Status == 1){
                    echo "checked";
                  }
                @endphp>
                <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status">
                  @php
                    if($Status == 1){
                    echo "ON";
                    }else{
                      echo "OFF";
                    }
                  @endphp
                </span></label>
              </div>
            </blockquote>
          </div>
        </div>
  </div>
  </div>
      
    </div>

</div>

    
</div>
</div>
</div>


  <!--end::Card body-->
</div>


<script>
    

$(document).ready(function(){
set()
});
   function ubhS(value){
    if(value == true) value="ON";
    else value="OFF";
    $.get("{{url('kontrol')}}",);
    document.getElementById('status').innerHTML = value;
    
   }
    function set(){
      $.get("{{url ('/default')}}",  {}, function(){
        $("#set");
      });
    }
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>








@endsection







