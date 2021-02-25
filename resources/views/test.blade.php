Je suis un test
<br>
@if (Auth::user()->isPermission("USER_VIEW"))
    J'ai cette permissions
@else
    J'ai pas cette permissions

@endif