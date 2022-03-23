<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ URL::to('/') }}" target="__brand" class="brand-link">
    <img src="{{ asset('assets/public/images/nta-1.svg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">NitroTechAsia</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/public/images/nta-1.svg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Kukun</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-bars"></i>
            <p>
              Danh mục
              <i class="right fa-solid fa-chevron-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/menus/add" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>Thêm danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/menus/list" class="nav-link">
                <i class="fa-solid fa-list-check"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-cart-plus"></i>
            <p>
              Sản phẩm
              <i class="right fa-solid fa-chevron-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/products/add" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>Thêm sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/products/list" class="nav-link">
                <i class="fa-solid fa-list-check"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/admin/sliders/add" class="nav-link">
            <i class="fa-solid fa-images"></i>
            <p>
              Slider
              <i class="right fa-solid fa-chevron-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/sliders/add" class="nav-link">
                <i class="fa-solid fa-file"></i>
                <p>Thêm slider</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/sliders/list" class="nav-link">
                <i class="fa-solid fa-list-check"></i>
                <p>Danh sách slider</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>
