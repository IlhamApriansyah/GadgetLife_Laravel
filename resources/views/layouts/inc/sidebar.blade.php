<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
          GL
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
          GadgetLife
        </a>
      </div>
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }} ">
          <a href="{{'dashboard'}}">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active':'' }} ">
          <a href="{{ url ('products') }}">
            <i class="tim-icons icon-single-02"></i>
            <p>Products</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-products') ? 'active':'' }} ">
          <a href="{{ url ('add-products') }}">
            <i class="tim-icons icon-single-02"></i>
            <p>Add Products</p>
          </a>
        </li>
      </ul>
    </div>
  </div>