<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"> </li>

            @if(Auth::authenticate()->isAdmin())

            <li><a href="/restaurant"><span>Restaurants</span></a></li>
            <li><a href="/asset"><span>Assets </span></a></li>
            <li><a href="/categoryAsset"><span>Assets categories</span></a></li>

                categoryAsset
            @endif

            @if(Auth::authenticate()->isAdminResto())

                <li><a href="/meal"><span>Meals</span></a></li>
                <li><a href="/category"><span>Category</span></a></li>
                <li><a href="/employee"><span>Employees</span></a></li>
                <li><a href="/menu"><span>Menu</span></a></li>
                <li><a href="/statsResto"><span>statitstics</span></a></li>
                <li><a href="/adminResto"><span>Choose a restaurant</span></a></li>
                <li><a href="/assetStore"><span>Asset Store</span></a></li>
                <li><a href="/mesCommandes"><span>Mes commandes</span></a></li>
            @endif



        </ul>
        <!--  <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>/.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>