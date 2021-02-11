@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<h1 class="title"><i class="fas fa-users"></i> Utilisateurs</h1>
<table class="u-full-width list">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date de création</th>
            <th>Permission</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Yghore</td>
            <td>Yhgore@gmail.com</a></td>
            <td>08/02/2021</td>
            <td>
                <label class="permission">ADMIN_VIEW</label>
                <label class="permission">PAGE_EDIT</label>
                <label class="permission">PAGE_ADD</label>
                <label class="permission">CATEGORY_MANAGE</label>
                <label class="permission">USER_VIEW</label>
                <label class="permission">USER_ADD</label>
                <label class="permission">USER_EDIT</label>
                <label class="permission">ARTICLE_ADD</label>
                <label class="permission">ARTICLE_EDIT</label>
                <label class="permission">PERMISSION_MANAGE</label>
                <label class="permission">Total : 2046</label>
            </td>
            <td>
                <a class="button-icon button-success" href="#"><i class="fas fa-pen"></i></a>
                <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Penguin</td>
            <td>penguin@gmail.com</a></td>
            <td>20/02/2021</td>
            <td>
                <label class="permission">ADMIN_VIEW</label>
                <label class="permission">PAGE_EDIT</label>
                <label class="permission">PAGE_ADD</label>
                <label class="permission">CATEGORY_MANAGE</label>
                <label class="permission">Total : 30</label>
            </td>
            <td>
                <a class="button-icon button-success" href="#"><i class="fas fa-pen"></i></a>
                <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Grego</td>
            <td>Grego@gmail.com</a></td>
            <td>21/02/2021</td>
            <td>
                <label class="permission">Total : 0</label>
            </td>
            <td>
                <a class="button-icon button-success" href="#"><i class="fas fa-pen"></i></a>
                <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
            </td>
        </tr>
    </tbody>
</table>

</div>

@endsection



