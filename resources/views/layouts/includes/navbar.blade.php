<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href={{url('/')}}>Dashboard</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href={{url('/user/1/edit-profile')}}>Edit Profile</a>
            <a class="dropdown-item" href={{url('/user/1/edit-password')}}>Edit Password</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href={{url('/')}}>Logout</a>
    </li>
    
</ul>