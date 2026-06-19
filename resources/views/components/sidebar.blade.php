<aside class="sidebar">


    <div class="sidebar-logo">

        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
        </svg>

        <span class="logo-text">
            Pharma Pro
        </span>

    </div>

    <nav class="sidebar-nav">

        <a href="{{ route('dashboard') }}" class="nav-item active" data-tooltip="Dashboard">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
            </svg>
            <span class="nav-text">Dashboard</span>
        </a>

        <a href="{{ route('pos') }}" class="nav-item" data-tooltip="POS">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="9" cy="21" r="1" />
                <circle cx="20" cy="21" r="1" />
                <path d="M1 1h4l2.68 13.39a2 2 0 001.84 1.61H19a2 2 0 001.83-1.45L23 6H6" />
            </svg>
            <span class="nav-text">POS</span>
        </a>

        <a href="{{ route('sales') }}" class="nav-item" data-tooltip="Sales History">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
            </svg>
            <span class="nav-text">Sales History</span>
        </a>

        <a href="{{ route('purchases') }}" class="nav-item" data-tooltip="Purchases">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 01-8 0" />
            </svg>
            <span class="nav-text">Purchases</span>
        </a>

        <a href="{{ route('products') }}" class="nav-item" data-tooltip="Products">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                    d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
            </svg>
            <span class="nav-text">Products</span>
        </a>

        <a href="{{ route('customers') }}" class="nav-item" data-tooltip="Customers">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                <circle cx="9" cy="7" r="4" />
            </svg>
            <span class="nav-text">Customers</span>
        </a>

        <a href="{{ route('suppliers') }}" class="nav-item" data-tooltip="Suppliers">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="1" y="3" width="15" height="13" />
                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                <circle cx="5.5" cy="18.5" r="2.5" />
                <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>
            <span class="nav-text">Suppliers</span>
        </a>

        <a href="{{ route('stock') }}" class="nav-item" data-tooltip="Stock">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
            </svg>
            <span class="nav-text">Stock</span>
        </a>

        <a href="{{ route('expire') }}" class="nav-item" data-tooltip="Expired Medicines">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                <line x1="12" y1="9" x2="12" y2="13" />
                <line x1="12" y1="17" x2="12.01" y2="17" />
            </svg>
            <span class="nav-text">Expiry Alert</span>
        </a>

        <a href="{{ route('reports') }}" class="nav-item" data-tooltip="Reports">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
            </svg>
            <span class="nav-text">Reports</span>
        </a>

        <a href="{{ route('users') }}" class="nav-item" data-tooltip="Users">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span class="nav-text">Users</span>
        </a>

        <a href="{{ route('activity') }}" class="nav-item" data-tooltip="Activity Logs">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
            </svg>
            <span class="nav-text">Activity Logs</span>
        </a>

        {{-- <a href="{{ route('settings') }}" class="nav-item" data-tooltip="Settings">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="3" />
            </svg>
            <span class="nav-text">Settings</span>
        </a> --}}

    </nav>

    <div class="sidebar-footer">

        <div class="pharmacy-badge">

            <div class="pharmacy-info">

                <div class="name sidebar-text">
                    Pharmacy One
                </div>

                <div class="branch sidebar-text">
                    Main Branch
                </div>

            </div>

            <svg class="branch-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#a0aec0"
                stroke-width="2">
                <polyline points="6 9 12 15 18 9" />
            </svg>

        </div>

    </div>
    <script>
        const navItems = document.querySelectorAll('.nav-item');
        const activeIndex = localStorage.getItem('activeNavIndex');

        if (activeIndex !== null) {
            navItems.forEach(item => item.classList.remove('active'));
            if (navItems[activeIndex]) {
                navItems[activeIndex].classList.add('active');
            }
        }

        navItems.forEach((item, index) => {
            item.addEventListener('click', function () {
                document.querySelector('.nav-item.active')?.classList.remove('active');
                this.classList.add('active');
                localStorage.setItem('activeNavIndex', index);
            });
        });
    </script>
</aside>