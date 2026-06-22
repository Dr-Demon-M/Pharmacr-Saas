{{-- <div class="topbar">
    <div class="breadcrumb">
        <span>POS</span>
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6" />
        </svg>
        <span class="current">New Sale</span>
    </div>
    <div class="search-box">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#a0aec0" stroke-width="2">
            <circle cx="11" cy="11" r="8" />
            <line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
        <input type="text" id="searchInput" placeholder="Search medicine (name, barcode, code)..." />
        <span class="kbd">F2</span>
    </div>
    <button class="top-btn" onclick="showToast('Barcode scanner activated')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="4" y1="6" x2="4" y2="18" />
            <line x1="8" y1="6" x2="8" y2="18" />
            <line x1="12" y1="6" x2="12" y2="18" />
            <line x1="16" y1="6" x2="16" y2="18" />
            <line x1="20" y1="6" x2="20" y2="18" />
        </svg>
        Scan Barcode
    </button>
    <button class="top-btn primary" onclick="showToast('New sale started')">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
        </svg>
        New Sale <span class="kbd-light" style="margin-left: 4px">F3</span>
    </button>
    <button class="top-btn" onclick="showToast('Sale held successfully')">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="6" y="4" width="4" height="16" />
            <rect x="14" y="4" width="4" height="16" />
        </svg>
        Hold Sale <span class="kbd" style="margin-left: 4px">F4</span>
    </button>
    <div class="notif-btn" onclick="showToast('3 new notifications')">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4a5568" stroke-width="2">
            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9" />
            <path d="M13.73 21a2 2 0 01-3.46 0" />
        </svg>
        <div class="notif-dot"></div>
    </div>
    <div class="user-menu" onclick="showToast('User menu')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4a5568" stroke-width="2">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
            <circle cx="12" cy="7" r="4" />
        </svg>
        Pharmacist
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#a0aec0" stroke-width="2">
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </div>
</div> --}}
<!-- TOPBAR -->
@props(['title'])
<header class="topbar">
    <div class="topbar-left">
        <button class="menu-btn" id="sidebarToggle">
            ☰
        </button>

        <h2>{{ $title }}</h2>
    </div>

    <div class="topbar-center">
        <div class="search-box">
            <input type="text" placeholder="Search anything..." />
            <span>Ctrl + K</span>
        </div>
    </div>

    <div class="topbar-right">
        <!-- Live Clock Badge -->
        <div class="topbar-clock-badge d-none d-md-flex" id="topbarClockBadge">
            <span class="clock-date">
                <i class="fa-regular fa-calendar clock-icon"></i>
                <span id="topbarDate">--</span>
            </span>
            <span class="clock-divider">|</span>
            <span class="clock-time">
                <i class="fa-regular fa-clock clock-icon"></i>
                <span id="topbarTime">--</span>
            </span>
        </div>

        <!-- Notifications Dropdown -->
        <div class="notification-wrapper">
            <button class="notification-btn" id="notifDropdownBtn" aria-label="Notifications" aria-expanded="false">
                <i class="fa-regular fa-bell"></i>
                <span class="badge">3</span>
            </button>
            <div class="notif-dropdown-panel" id="notifDropdownPanel">
                <div class="panel-header">
                    <h5>Notifications</h5>
                    <a href="javascript:void(0)" class="mark-all-read" id="markAllReadBtn" onclick="showToast('All marked as read'); clearNotifDot()">Mark all read</a>
                </div>
                <div class="panel-body">
                    <div class="notif-item unread" id="notifItem1">
                        <div class="notif-icon danger">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div class="notif-content">
                            <p class="notif-text"><strong>Panadol Extra</strong> (Batch B12) has expired 2 days ago.</p>
                            <span class="notif-time">2 hours ago</span>
                        </div>
                    </div>
                    <div class="notif-item unread" id="notifItem2">
                        <div class="notif-icon warning">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                        <div class="notif-content">
                            <p class="notif-text"><strong>Augmentin 625mg</strong> stock is below reorder level (5 units left).</p>
                            <span class="notif-time">5 hours ago</span>
                        </div>
                    </div>
                    <div class="notif-item" id="notifItem3">
                        <div class="notif-icon success">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="notif-content">
                            <p class="notif-text">Daily sales report sync completed successfully.</p>
                            <span class="notif-time">Yesterday</span>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('activity') }}" id="viewAllActivityLink">View All Activity Logs</a>
                </div>
            </div>
        </div>

        <!-- Theme Toggle Button -->
        <button class="theme-toggle-btn" id="themeToggleBtn" aria-label="Toggle Theme" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
            <span class="theme-toggle-icon">
                <i class="fa-solid fa-sun sun-icon"></i>
                <i class="fa-solid fa-moon moon-icon"></i>
            </span>
        </button>

        <!-- Settings Quick Toggle -->
        <a href="{{ route('settings') }}" class="settings-quick-btn" id="quickSettingsBtn" aria-label="Settings" style="display: flex; align-items: center; justify-content: center; text-decoration: none;">
            <i class="fa-solid fa-sliders"></i>
        </a>

        <!-- User Profile Dropdown -->
        <div class="profile-wrapper">
            <div class="user-info" id="profileDropdownBtn" aria-expanded="false">
                <div class="avatar">
                    <span>AO</span>
                    <span class="avatar-status-dot"></span>
                </div>

                <div class="user-details d-none d-sm-flex">
                    <h4>Ahmed Omar</h4>
                    <span class="user-role">Lead Pharmacist</span>
                </div>
                <i class="fa-solid fa-chevron-down user-chevron d-none d-sm-block"></i>
            </div>
            
            <div class="profile-dropdown-panel" id="profileDropdownPanel">
                <div class="profile-panel-header">
                    <div class="panel-avatar">AO</div>
                    <div class="panel-user-info">
                        <h5>Ahmed Omar</h5>
                        <p>ahmed.omar@pharmapro.com</p>
                        <span class="badge badge-role">Lead Pharmacist</span>
                    </div>
                </div>
                <div class="profile-panel-body">
                    <a href="javascript:void(0)" class="profile-menu-item" id="profileLink" onclick="showToast('Profile settings clicked')">
                        <i class="fa-regular fa-user"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="{{ route('settings') }}" class="profile-menu-item" id="systemSettingsLink">
                        <i class="fa-solid fa-gear"></i>
                        <span>System Settings</span>
                    </a>
                    <a href="javascript:void(0)" class="profile-menu-item" id="switchBranchLink" onclick="showToast('Switch branch clicked')">
                        <i class="fa-solid fa-store"></i>
                        <span>Switch Branch</span>
                    </a>
                    <a href="javascript:void(0)" class="profile-menu-item" id="helpSupportLink" onclick="showToast('Help center opened')">
                        <i class="fa-regular fa-circle-question"></i>
                        <span>Help & Support</span>
                    </a>
                    <div class="panel-divider"></div>
                    <a href="javascript:void(0)" class="profile-menu-item logout-item" id="logoutLink" onclick="showToast('Logging out...')">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

</header>