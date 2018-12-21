
<style type="text/css">
  .active: click #new_order{
      display: none;
  }
</style>
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('dist/img/user/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->username}}</p>
          <!-- Status -->
          
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/admin"><i class="fa fa-tachometer"></i> <span>Bảng điều khiển</span></a></li>
        <li class="active"><a href="/admin/orders"><i class="fa fa-shopping-cart"></i><span>Đơn hàng</span> <?php  if(!$count==0) echo '<span id="new_order" class="btn btn-danger" >'.$count.'</span>'?></a></li>
        <li><a href="/admin/comments"><i class="fa fa-comment"></i> <span>Bình luận</span></a></li>
        <li><a href="/admin/customers"><i class="fa fa-user"></i> <span>Khách hàng</span></a></li>
        <li><a href="/admin/contacts"><i class="fa fa-envelope"></i> <span>Liên hệ</span> <?php  if(!$contact==0) echo '<span id="new_order" class="btn btn-danger" >'.$contact.'</span>'?></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-table"></i> <span>Mục lục</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> 
          </a>
          <ul class="treeview-menu">
            @if(Auth::user()->level==1)
            <li><a href="/admin/users"><i class="fa fa-circle"></i>Tài khoản</a></li>
            @endif
            <li><a href="/admin/categories"><i class="fa fa-circle"></i>Danh mục sản phẩm</a></li>
            <li><a href="/admin/brands"><i class="fa fa-circle"></i>Thương hiệu</a></li>
            <li><a href="/admin/products"><i class="fa fa-circle"></i>Sản phẩm</a></li>
            <li><a href="/admin/sales"><i class="fa fa-circle"></i>Khuyến mại</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>