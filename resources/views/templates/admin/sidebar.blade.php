  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{(Request::is('admin')) ? 'active' : ''}}">
          <a href="{{ route('admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="{{(Request::is('admin/order/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.order.index') }}">
            <i class="fa fa-reorder"></i>
            <span>Customers Order</span>            
          </a>         
        </li>
        <li class="{{(Request::is('admin/servequal/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.servequal.index') }}">
            <i class="fa fa-reorder"></i>
            <span>Servequal Value</span>            
          </a>         
        </li>                
        <li class="header">MASTER DATA</li>      
        <li class="{{(Request::is('admin/product/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.product.index') }}">
            <i class="fa fa-gg-circle"></i>
            <span>Products</span>
          </a>
        </li>
        <li class="{{(Request::is('admin/product_category/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.product_category.index') }}">
            <i class="fa fa-gg-circle"></i>
            <span>Product Category</span>
          </a>
        </li>        
        <li class="{{(Request::is('admin/questionnaire/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.questionnaire.index') }}">
            <i class="fa fa-gg-circle"></i>
            <span>Questionnaire</span>
          </a>
        </li>                 
        <li class="{{(Request::is('admin/order_status/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.order_status.index') }}">
            <i class="fa fa-list-alt"></i>
            <span>Order Status</span>      
          </a>
        </li>  
        <li class="{{(Request::is('admin/payment_method/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.payment_method.index') }}">
            <i class="fa fa-list-alt"></i>
            <span>Payment Method</span>      
          </a>
        </li> 
        <li class="{{(Request::is('admin/discount_point/*')) ? 'active' : ''}}">
          <a href="{{ route('admin.discount_point.index') }}">
            <i class="fa fa-list-alt"></i>
            <span>Discount Points</span>      
          </a>
        </li>                      
        <li class="header">SYSTEM CONFIGURATON</li>        
        <li class="treeview menu active">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>System</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{(Request::is('admin/user/*')) ? 'active' : ''}}"><a href="{{ route('admin.user.index') }}"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
