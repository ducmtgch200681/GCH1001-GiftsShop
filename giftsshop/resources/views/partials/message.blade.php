@if (\Illuminate\Support\Facades\Session::get('msg') != null)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (\Illuminate\Support\Facades\Session::get('err') != null)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{\Illuminate\Support\Facades\Session::get('err')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
