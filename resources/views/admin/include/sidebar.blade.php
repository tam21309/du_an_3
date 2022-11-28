<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('categories.index')}}">
          <i class="bi bi-dash-circle"></i>
          <span>Quản Lí Danh Mục</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{route('products.index')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Quản Lí Sản Phẩm</span>
        </a>
      </li><!-- End Blank Page Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{route('users.index')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Quản Lí Nhân Viên</span>
        </a>
      </li><!-- End Blank Page Nav -->
      {{-- <li class="nav-item">
        <a class="nav-link " href="{{route('customers.index')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Quản Lí Khách Hàng</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

  </aside>