{{-- Error Statements --}}
@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @foreach($errors->all() as $error)
                {{Toastr::error( $error )}}
            @endforeach
        </div>
    </div>
@endif
{{--End of Error Statements--}}

@if(Session::has('toasts'))
  @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
        {{ $toast['message'] }}
    </div>
  @endforeach
@endif