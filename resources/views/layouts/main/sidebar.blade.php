  <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
          <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
            <g>
              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
          </svg>
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
         <li class="nav-item active sidebar_li">
            <i class="fe fe-home fe-16"></i>
          <a href="{{route('dashboard')}}" class="sidebar_text" >
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#customer" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Customer</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="customer">
            <li class="nav-item active">
                <a class="nav-link pl-3" href="{{route('allcustomers')}}" ><span class="ml-1 item-text">Customer List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('createcustomer')}}" ><span class="ml-1 item-text">Add customer</span></a>
            </li>
            </ul>
        </li>
         <li class="nav-item active sidebar_li">
            <i class="fe fe-home fe-16"></i>
          <a href="{{route('Treatment')}}" class="sidebar_text" >
            <span class="ml-3 item-text">Treatment</span><span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#supplier" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Supplier</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="supplier">
            <li class="nav-item active">
                <a class="nav-link pl-3" href="{{route('allsuppliers')}}" ><span class="ml-1 item-text">Supplier List</span></a>
            </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#item" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i></i>
            <span class="ml-3 item-text">Items</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="item">
            <li class="nav-item active">
                <a class="nav-link pl-3" href="{{route('item.index')}}" ><span class="ml-1 item-text">Item List</span></a>
            </li>
            </ul>
        </li>


        <li class="nav-item dropdown">
            <a href="#orderrequest" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-shopping-cart fe-16 mb-2"></i>
            <span class="ml-3 item-text">OrderRequests</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="orderrequest">
            <li class="nav-item active">
                <a class="nav-link pl-3" href="{{route('allorderrequests')}}" ><span class="ml-1 item-text">OrderRequests List</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link pl-3" href="{{route('allgins')}}" ><span class="ml-1 item-text">GIN List</span></a>
            </li>
            </ul>
        </li>

      </ul>



    </nav>
  </aside>

