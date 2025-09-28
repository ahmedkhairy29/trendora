<div class="sidebar d-flex flex-column p-3">
    <h4 class="text-white text-center mb-4">Admin Panel</h4>

    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </a>

    <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
        <i class="bi bi-folder-fill me-2"></i> Categories
    </a>

    <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
        <i class="bi bi-box-seam me-2"></i> Products
    </a>

    <hr class="text-white">

    <div class="mt-auto">
        <a href="{{ route('logout') }}" class="btn btn-outline-light w-100">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>
</div>
