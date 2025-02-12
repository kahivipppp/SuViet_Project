<!-- Sidebar Start -->
<div class="sidebar pe-6 pb-3 /bg-white ">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('admin') }}" class="navbar-brand mx-4 mb-3 d-none d-md-block">
            <img src="../img/Logo (1).png" alt="" class="img-fluid d-block ml-img">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="../img/user.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border  border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Henry Bui</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin') }}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Bảng điều khiển</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Tài khoản</a>
                <div class="dropdown-menu bg-transparent border-0 mx-4">
                    <a href="{{route ('listaccount')}}" class="dropdown-item">Danh sách tài khoản</a>
                    <a href="update_form.html" class="dropdown-item">Cập nhật tài khoản</a>
                    <!-- <a href="element.html" class="dropdown-item">Other Elements</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-layer-group me-2"></i>Danh mục</a>
                <div class="dropdown-menu bg-transparent border-0 mx-4">
                    <a href="button.html" class="dropdown-item">Sản phẩm</a>
                    <a href="typography.html" class="dropdown-item">Tài khoản</a>
                    <a href="element.html" class="dropdown-item">Bài viết</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-boxes me-2"></i>Sản phẩm</a>
                <div class="dropdown-menu bg-transparent border-0 mx-4">
                    <a href="{{route ('listproduct')}}" class="dropdown-item">Danh sách sản phẩm</a>
                    <a href="typography.html" class="dropdown-item">Cập nhật</a>
                    <a href="element.html" class="dropdown-item">Mã giảm giá</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Bài viết</a>
                <div class="dropdown-menu bg-transparent border-0 mx-4">
                    <a href="button.html" class="dropdown-item">Danh sách bài viết</a>
                    <a href="typography.html" class="dropdown-item">Tài khoản</a>
                    <a href="element.html" class="dropdown-item">Bài viết</a>
                </div>
            </div>
            <a href="{{ route('donhang') }}" class="nav-item nav-link"><i class="fa fa-truck me-2"></i>Quản lý đơn hàng</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->