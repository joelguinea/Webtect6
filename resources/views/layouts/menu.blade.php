


<li class="nav-item">
    <a href="{{ route('hotelManagements.index') }}"
       class="nav-link {{ Request::is('hotelManagements*') ? 'active' : '' }}">
        <p>Hotel Managements</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


