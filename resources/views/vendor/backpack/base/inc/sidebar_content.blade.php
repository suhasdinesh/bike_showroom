<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('bike-model') }}'><i class='nav-icon la la-question'></i> Bike models</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('bikes') }}'><i class='nav-icon la la-question'></i> Bikes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('colors') }}'><i class='nav-icon la la-question'></i> Colors</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('specs') }}'><i class='nav-icon la la-question'></i> Specs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('videos') }}'><i class='nav-icon la la-question'></i> Videos</a></li>