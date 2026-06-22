<aside class="sidebar" id="appSidebar">

    <div class="sidebar-logo">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
        </svg>
        <span class="logo-text">Pharma Pro</span>
    </div>

    <nav class="sidebar-nav" id="sidebarNav">

        {{-- ── OVERVIEW ─────────────────────────────── --}}
        <div class="nav-group" id="group-overview">
            <button class="nav-group-header" data-group="overview" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Overview</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('dashboard') }}" class="nav-item" data-tooltip="Dashboard" data-route="dashboard">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" />
                        <rect x="14" y="3" width="7" height="7" />
                        <rect x="14" y="14" width="7" height="7" />
                        <rect x="3" y="14" width="7" height="7" />
                    </svg>
                    <span class="nav-text">Dashboard</span>
                </a>
            </div>
        </div>

        {{-- ── OPERATIONS ───────────────────────────── --}}
        <div class="nav-group" id="group-operations">
            <button class="nav-group-header" data-group="operations" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Operations</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('pos') }}" class="nav-item" data-tooltip="POS" data-route="pos">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39a2 2 0 001.84 1.61H19a2 2 0 001.83-1.45L23 6H6" />
                    </svg>
                    <span class="nav-text">POS</span>
                </a>
                <a href="{{ route('sales') }}" class="nav-item" data-tooltip="Sales History" data-route="sales">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                    </svg>
                    <span class="nav-text">Sales History</span>
                </a>
                <a href="{{ route('purchases') }}" class="nav-item" data-tooltip="Purchases" data-route="purchases">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 01-8 0" />
                    </svg>
                    <span class="nav-text">Purchases</span>
                </a>
            </div>
        </div>

        {{-- ── INVENTORY ────────────────────────────── --}}
        <div class="nav-group" id="group-inventory">
            <button class="nav-group-header" data-group="inventory" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Inventory</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('products') }}" class="nav-item" data-tooltip="Products" data-route="products">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                    </svg>
                    <span class="nav-text">Products</span>
                </a>
                <a href="{{ route('stock') }}" class="nav-item" data-tooltip="Stock" data-route="stock">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="8" y1="6" x2="21" y2="6" />
                        <line x1="8" y1="12" x2="21" y2="12" />
                        <line x1="8" y1="18" x2="21" y2="18" />
                        <line x1="3" y1="6" x2="3.01" y2="6" />
                        <line x1="3" y1="12" x2="3.01" y2="12" />
                        <line x1="3" y1="18" x2="3.01" y2="18" />
                    </svg>
                    <span class="nav-text">Stock</span>
                </a>
                <a href="{{ route('expire') }}" class="nav-item" data-tooltip="Expiry Alert" data-route="expire">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                        <line x1="12" y1="9" x2="12" y2="13" />
                        <line x1="12" y1="17" x2="12.01" y2="17" />
                    </svg>
                    <span class="nav-text">Expiry Alert</span>
                </a>
            </div>
        </div>

        {{-- ── CONTACTS ─────────────────────────────── --}}
        <div class="nav-group" id="group-contacts">
            <button class="nav-group-header" data-group="contacts" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Contacts</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('customers') }}" class="nav-item" data-tooltip="Customers" data-route="customers">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                    </svg>
                    <span class="nav-text">Customers</span>
                </a>
                <a href="{{ route('suppliers') }}" class="nav-item" data-tooltip="Suppliers" data-route="suppliers">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="3" width="15" height="13" />
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                        <circle cx="5.5" cy="18.5" r="2.5" />
                        <circle cx="18.5" cy="18.5" r="2.5" />
                    </svg>
                    <span class="nav-text">Suppliers</span>
                </a>
            </div>
        </div>

        {{-- ── ANALYTICS ────────────────────────────── --}}
        <div class="nav-group" id="group-analytics">
            <button class="nav-group-header" data-group="analytics" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Analytics</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('reports') }}" class="nav-item" data-tooltip="Reports" data-route="reports">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                        <polyline points="10 9 9 9 8 9" />
                    </svg>
                    <span class="nav-text">Reports</span>
                </a>
            </div>
        </div>

        {{-- ── ADMINISTRATION ───────────────────────── --}}
        <div class="nav-group" id="group-administration">
            <button class="nav-group-header" data-group="administration" aria-expanded="false">
                <span class="nav-group-label sidebar-text">Administration</span>
                <svg class="nav-group-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9" />
                </svg>
            </button>
            <div class="nav-group-items" style="display:none">
                <a href="{{ route('users') }}" class="nav-item" data-tooltip="Users" data-route="users">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    <span class="nav-text">Users</span>
                </a>
                <a href="{{ route('activity') }}" class="nav-item" data-tooltip="Activity Logs" data-route="activity">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span class="nav-text">Activity Logs</span>
                </a>
                <a href="{{ route('settings') }}" class="nav-item" data-tooltip="Settings" data-route="settings">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
                    </svg>
                    <span class="nav-text">Settings</span>
                </a>
            </div>
        </div>

    </nav>

    <div class="sidebar-footer">
        <div class="pharmacy-badge">
            <div class="pharmacy-info">
                <div class="name sidebar-text">Pharmacy One</div>
                <div class="branch sidebar-text">Main Branch</div>
            </div>
            <svg class="branch-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#a0aec0"
                stroke-width="2">
                <polyline points="6 9 12 15 18 9" />
            </svg>
        </div>
    </div>

    <script>
        (function () {
            // ── Route → group mapping ───────────────────────────────
            const routeGroupMap = {
                dashboard:      'overview',
                pos:            'operations',
                sales:          'operations',
                purchases:      'operations',
                products:       'inventory',
                stock:          'inventory',
                expire:         'inventory',
                customers:      'contacts',
                suppliers:      'contacts',
                reports:        'analytics',
                users:          'administration',
                activity:       'administration',
                settings:       'administration',
            };

            // ── Persist open groups in localStorage ─────────────────
            const STORAGE_KEY = 'sidebarOpenGroups';

            function getOpenGroups() {
                try { return JSON.parse(localStorage.getItem(STORAGE_KEY)) || []; }
                catch { return []; }
            }

            function saveOpenGroups(groups) {
                localStorage.setItem(STORAGE_KEY, JSON.stringify(groups));
            }

            // ── Detect active route from current URL path ────────────
            function detectActiveRoute() {
                const path = window.location.pathname.replace(/^\//, '') || 'dashboard';
                // Strip leading segment (e.g. "stock" from "/stock")
                return path.split('/')[0] || 'dashboard';
            }

            // ── Open / close a group ─────────────────────────────────
            function openGroup(groupId, animate) {
                const group  = document.getElementById('group-' + groupId);
                if (!group) { return; }
                const header = group.querySelector('.nav-group-header');
                const items  = group.querySelector('.nav-group-items');

                header.setAttribute('aria-expanded', 'true');
                header.classList.add('open');

                if (animate) {
                    items.style.display = 'flex';
                    items.style.overflow = 'hidden';
                    items.style.maxHeight = '0';
                    requestAnimationFrame(() => {
                        items.style.transition = 'max-height 0.28s cubic-bezier(0.16,1,0.3,1)';
                        items.style.maxHeight = items.scrollHeight + 'px';
                        setTimeout(() => {
                            items.style.maxHeight = '';
                            items.style.overflow  = '';
                            items.style.transition = '';
                        }, 300);
                    });
                } else {
                    items.style.display = 'flex';
                }
            }

            function closeGroup(groupId, animate) {
                const group  = document.getElementById('group-' + groupId);
                if (!group) { return; }
                const header = group.querySelector('.nav-group-header');
                const items  = group.querySelector('.nav-group-items');

                header.setAttribute('aria-expanded', 'false');
                header.classList.remove('open');

                if (animate) {
                    items.style.overflow  = 'hidden';
                    items.style.maxHeight = items.scrollHeight + 'px';
                    requestAnimationFrame(() => {
                        items.style.transition = 'max-height 0.22s cubic-bezier(0.16,1,0.3,1)';
                        items.style.maxHeight  = '0';
                        setTimeout(() => {
                            items.style.display   = 'none';
                            items.style.maxHeight = '';
                            items.style.overflow  = '';
                            items.style.transition = '';
                        }, 240);
                    });
                } else {
                    items.style.display = 'none';
                }
            }

            // ── Toggle handler (accordion: only one group open at a time) ──
            const allGroupIds = Array.from(
                document.querySelectorAll('.nav-group-header')
            ).map(h => h.dataset.group);

            document.querySelectorAll('.nav-group-header').forEach(function (header) {
                header.addEventListener('click', function () {
                    const groupId = this.dataset.group;
                    const isOpen  = this.getAttribute('aria-expanded') === 'true';

                    if (isOpen) {
                        // clicking an already-open group → just close it
                        closeGroup(groupId, true);
                        saveOpenGroups([]);
                    } else {
                        // close every other group first
                        allGroupIds.forEach(function (gId) {
                            if (gId !== groupId) {
                                closeGroup(gId, true);
                            }
                        });
                        openGroup(groupId, true);
                        saveOpenGroups([groupId]);
                    }
                });
            });

            // ── On load: open only the group of the current page ─────
            const activeRoute = detectActiveRoute();
            const activeGroup = routeGroupMap[activeRoute];
            if (activeGroup) {
                openGroup(activeGroup, false);
            }

            // Mark the correct nav-item as active
            document.querySelectorAll('.nav-item').forEach(function (item) {
                item.classList.remove('active');
                if (item.dataset.route === activeRoute) {
                    item.classList.add('active');
                }
            });

            // Mark active on click before navigating
            document.querySelectorAll('.nav-item').forEach(function (item) {
                item.addEventListener('click', function () {
                    document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        })();
    </script>
</aside>