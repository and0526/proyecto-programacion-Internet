@if(backpack_user()->hasRole('Administrador'))
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-user-shield"></i> Autenticacion</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Usuarios</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-user-tag"></i> <span>Roles</span></a></li>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('proveedor') }}'><i class='nav-icon fa fa-truck'></i> Proveedor</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('producto') }}'><i class='nav-icon fa fa-apple-alt'></i> Productos</a></li>
@endif
@if(backpack_user()->hasRole('Administrador') || backpack_user()->hasRole('Cliente'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('venta') }}'><i class='nav-icon fa fa-cash-register'></i> Ventas</a></li>
@endif
