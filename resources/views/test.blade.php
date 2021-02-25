Je suis un test
<br>
@if (Auth::user()->isPermission(8))
    J'ai cette permissions
@else
    J'ai pas cette permissions

@endif