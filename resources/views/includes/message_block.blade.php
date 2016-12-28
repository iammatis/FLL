{{--Error Statements--}}
@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
        </div>
    </div>
@endif
{{--End of Error Statements--}}

{{--Message--}}
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if(Session::has('message'))
                @if(Session::get('message_code') == 0)
                    <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                @else
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
            @endif
        </div>
    </div>
@endif
{{--End of Message--}}