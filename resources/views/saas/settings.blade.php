@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <section class="settings-page">
        <div class="settings-container">
            <!-- Left Sidebar Navigation -->
            <div class="settings-sidebar">
                <h3>Settings</h3>
                <div class="settings-menu">
                    <button class="settings-menu-item active" data-tab="general">
                        <i class="fa-solid fa-gear"></i>
                        <span>General</span>
                    </button>
                    <button class="settings-menu-item" data-tab="company-profile">
                        <i class="fa-regular fa-building"></i>
                        <span>Company Profile</span>
                    </button>
                    <button class="settings-menu-item" data-tab="pharmacy">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <span>Pharmacy</span>
                    </button>
                    <button class="settings-menu-item" data-tab="users-roles">
                        <i class="fa-solid fa-user-gear"></i>
                        <span>Users & Roles</span>
                    </button>
                    <button class="settings-menu-item" data-tab="permissions">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Permissions</span>
                    </button>
                    <button class="settings-menu-item" data-tab="notifications">
                        <i class="fa-regular fa-bell"></i>
                        <span>Notifications</span>
                    </button>
                    <button class="settings-menu-item" data-tab="pos-settings">
                        <i class="fa-solid fa-cash-register"></i>
                        <span>POS Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="sales-settings">
                        <i class="fa-solid fa-percent"></i>
                        <span>Sales Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="purchase-settings">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Purchase Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="inventory-settings">
                        <i class="fa-solid fa-cubes"></i>
                        <span>Inventory Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="expiry-settings">
                        <i class="fa-solid fa-hourglass-half"></i>
                        <span>Expiry Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="payment-settings">
                        <i class="fa-regular fa-credit-card"></i>
                        <span>Payment Settings</span>
                    </button>
                    <button class="settings-menu-item" data-tab="taxes">
                        <i class="fa-solid fa-calculator"></i>
                        <span>Taxes</span>
                    </button>
                    <button class="settings-menu-item" data-tab="backup-restore">
                        <i class="fa-solid fa-database"></i>
                        <span>Backup & Restore</span>
                    </button>
                    <button class="settings-menu-item" data-tab="system-logs">
                        <i class="fa-solid fa-terminal"></i>
                        <span>System Logs</span>
                    </button>
                    <button class="settings-menu-item" data-tab="security">
                        <i class="fa-solid fa-lock"></i>
                        <span>Security</span>
                    </button>
                </div>
            </div>

            <!-- Right Content Area -->
            <div class="settings-content-pane">

                {{-- ── GENERAL PANEL ── --}}
                <div class="settings-pane active" id="pane-general">
                    <div class="settings-section-header">
                        <h2>General Settings</h2>
                        <p>Manage general preferences for the system</p>
                    </div>

                    <!-- General Settings Card -->
                    <div class="settings-card">
                        <div class="settings-form-grid">
                            <div class="settings-form-group">
                                <label for="systemName">System Name</label>
                                <input type="text" id="systemName" class="settings-input" value="Pharma Pro">
                            </div>
                            <div class="settings-form-group">
                                <label for="dateFormat">Date Format</label>
                                <select id="dateFormat" class="settings-select">
                                    <option value="DD MMM YYYY">31 May 2025</option>
                                    <option value="YYYY-MM-DD">2025-05-31</option>
                                    <option value="MM/DD/YYYY">05/31/2025</option>
                                    <option value="DD/MM/YYYY">31/05/2025</option>
                                </select>
                            </div>
                            <div class="settings-form-group">
                                <label for="timeZone">Time Zone</label>
                                <select id="timeZone" class="settings-select">
                                    <option value="Africa/Cairo">(UTC+02:00) Cairo, Egypt</option>
                                    <option value="Asia/Riyadh">(UTC+03:00) Riyadh, Saudi Arabia</option>
                                    <option value="Asia/Dubai">(UTC+04:00) Dubai, UAE</option>
                                    <option value="UTC">(UTC+00:00) Greenwich Mean Time</option>
                                </select>
                            </div>
                            <div class="settings-form-group">
                                <label for="timeFormat">Time Format</label>
                                <select id="timeFormat" class="settings-select">
                                    <option value="12h">12:30 PM</option>
                                    <option value="24h">12:30</option>
                                </select>
                            </div>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="saveGeneralSettings()">
                                <i class="fa-solid fa-floppy-disk"></i> Save Changes
                            </button>
                        </div>
                    </div>

                    <!-- Currency & Invoice Grid -->
                    <div class="settings-form-grid">
                        <!-- Currency & Language -->
                        <div class="settings-card" style="margin-bottom: 0;">
                            <div class="settings-card-header">
                                <h3>Currency & Language</h3>
                                <p>Set your default currency and language</p>
                            </div>
                            <div class="settings-form-group" style="margin-bottom: 15px;">
                                <label for="currency">Currency</label>
                                <select id="currency" class="settings-select">
                                    <option value="EGP">Egyptian Pound (EGP)</option>
                                    <option value="USD">US Dollar ($)</option>
                                    <option value="SAR">Saudi Riyal (SAR)</option>
                                    <option value="AED">UAE Dirham (AED)</option>
                                </select>
                            </div>
                            <div class="settings-form-group">
                                <label for="language">Language</label>
                                <select id="language" class="settings-select">
                                    <option value="English">English</option>
                                    <option value="Arabic">العربية</option>
                                    <option value="French">Français</option>
                                </select>
                            </div>
                            <div class="settings-card-footer">
                                <button class="settings-btn-save" onclick="saveCurrencySettings()">
                                    <i class="fa-solid fa-floppy-disk"></i> Save Changes
                                </button>
                            </div>
                        </div>

                        <!-- Invoice Settings -->
                        <div class="settings-card" style="margin-bottom: 0;">
                            <div class="settings-card-header">
                                <h3>Invoice Settings</h3>
                                <p>Configure invoice appearance and numbering</p>
                            </div>
                            <div class="settings-form-grid"
                                style="grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 15px;">
                                <div class="settings-form-group">
                                    <label for="invoicePrefix">Invoice Prefix</label>
                                    <input type="text" id="invoicePrefix" class="settings-input" value="INV-">
                                </div>
                                <div class="settings-form-group">
                                    <label for="nextInvoiceNo">Next Invoice No.</label>
                                    <input type="number" id="nextInvoiceNo" class="settings-input" value="100246">
                                </div>
                            </div>
                            <div class="settings-toggle-container">
                                <div class="settings-toggle-info">
                                    <span>Auto Increment</span>
                                    <p>Automatically increment invoice number</p>
                                </div>
                                <label class="settings-switch">
                                    <input type="checkbox" id="autoIncrementInvoice" checked>
                                    <span class="settings-slider"></span>
                                </label>
                            </div>
                            <div class="settings-card-footer">
                                <button class="settings-btn-save" onclick="saveInvoiceSettings()">
                                    <i class="fa-solid fa-floppy-disk"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Settings -->
                    <div class="settings-card" style="margin-top: 24px;">
                        <div class="settings-card-header">
                            <h3>Notification Settings</h3>
                            <p>Choose when you want to receive notifications</p>
                        </div>
                        <div class="settings-notification-grid">
                            <div class="settings-notif-card">
                                <div class="settings-notif-card-header">
                                    <label for="notifLowStock">Low Stock Alert</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="notifLowStock" checked>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                <p>Get notified for low stock items</p>
                            </div>
                            <div class="settings-notif-card">
                                <div class="settings-notif-card-header">
                                    <label for="notifExpiry">Expiry Alert</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="notifExpiry" checked>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                <p>Get notified for near expiry items</p>
                            </div>
                            <div class="settings-notif-card">
                                <div class="settings-notif-card-header">
                                    <label for="notifNewOrder">New Order</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="notifNewOrder" checked>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                <p>Get notified for new orders</p>
                            </div>
                            <div class="settings-notif-card">
                                <div class="settings-notif-card-header">
                                    <label for="notifReturned">Returned Order</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="notifReturned" checked>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                <p>Get notified for returned orders</p>
                            </div>
                            <div class="settings-notif-card">
                                <div class="settings-notif-card-header">
                                    <label for="notifUpdates">System Updates</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="notifUpdates" checked>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                <p>Get notified for system updates</p>
                            </div>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="saveNotificationToggles()">
                                <i class="fa-solid fa-floppy-disk"></i> Save Changes
                            </button>
                        </div>
                    </div>

                    <!-- Backup & Restore -->
                    <div class="settings-card">
                        <div class="settings-card-header">
                            <h3>Backup & Restore</h3>
                            <p>Backup your system data and restore when needed</p>
                        </div>
                        <div class="settings-backup-row">
                            <div class="settings-backup-item">
                                <div class="settings-backup-info">
                                    <h4>Create Backup</h4>
                                    <p>Create a backup of your current system data</p>
                                </div>
                                <button class="settings-btn-outline" onclick="triggerCreateBackup()">
                                    <i class="fa-solid fa-cloud-arrow-up"></i> Create Backup
                                </button>
                            </div>
                            <div class="settings-backup-item">
                                <div class="settings-backup-info">
                                    <h4>Restore Backup</h4>
                                    <p>Restore your system from a previous backup</p>
                                </div>
                                <button class="settings-btn-outline" onclick="triggerRestoreBackup()">
                                    <i class="fa-solid fa-cloud-arrow-down"></i> Restore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── COMPANY PROFILE PANEL ── --}}
                <div class="settings-pane" id="pane-company-profile">
                    <div class="settings-section-header">
                        <h2>Company Profile</h2>
                        <p>Manage your pharmacy registration and profile details</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-grid">
                            <div class="settings-form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" id="companyName" class="settings-input" value="Pharmacy One Group">
                            </div>
                            <div class="settings-form-group">
                                <label for="companyTaxNo">Tax Registration Number</label>
                                <input type="text" id="companyTaxNo" class="settings-input" value="TAX-9988-12">
                            </div>
                            <div class="settings-form-group">
                                <label for="companyPhone">Phone Number</label>
                                <input type="text" id="companyPhone" class="settings-input" value="+20 101 234 5678">
                            </div>
                            <div class="settings-form-group">
                                <label for="companyEmail">Email Address</label>
                                <input type="email" id="companyEmail" class="settings-input" value="info@pharmacyone.com">
                            </div>
                            <div class="settings-form-group" style="grid-column: span 2;">
                                <label for="companyAddress">Primary Address</label>
                                <input type="text" id="companyAddress" class="settings-input"
                                    value="12 El-Tahrir Sq, Downtown, Cairo, Egypt">
                            </div>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="saveCompanyProfile()">
                                <i class="fa-solid fa-floppy-disk"></i> Save Company Profile
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── PHARMACY PANEL ── --}}
                <div class="settings-pane" id="pane-pharmacy">
                    <div class="settings-section-header">
                        <h2>Pharmacy settings</h2>
                        <p>Configure specific pharmacy operations and settings</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-grid">
                            <div class="settings-form-group">
                                <label for="licenseNo">Pharmacy License Number</label>
                                <input type="text" id="licenseNo" class="settings-input" value="LIC-748921-A">
                            </div>
                            <div class="settings-form-group">
                                <label for="licenseExpiry">License Expiry Date</label>
                                <input type="date" id="licenseExpiry" class="settings-input" value="2028-12-31">
                            </div>
                            <div class="settings-form-group">
                                <label for="phInCharge">Pharmacist in Charge</label>
                                <input type="text" id="phInCharge" class="settings-input"
                                    value="Ahmed Omar (Lead Pharmacist)">
                            </div>
                            <div class="settings-form-group">
                                <label for="pharmacyType">Pharmacy Type</label>
                                <select id="pharmacyType" class="settings-select">
                                    <option value="retail">Retail Pharmacy</option>
                                    <option value="clinical">Clinical/Hospital Pharmacy</option>
                                    <option value="compound">Compounding Pharmacy</option>
                                </select>
                            </div>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Pharmacy License saved successfully!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Pharmacy settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── USERS & ROLES PANEL ── --}}
                <div class="settings-pane" id="pane-users-roles">
                    <div class="settings-section-header"
                        style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                        <div>
                            <h2>Users & Roles</h2>
                            <p>Manage system users, roles, and status</p>
                        </div>
                        <button class="settings-btn-save" onclick="addUserPrompt()">
                            <i class="fa-solid fa-plus"></i> Add User
                        </button>
                    </div>
                    <div class="settings-card" style="padding: 10px; overflow-x: auto;">
                        <table class="settings-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th style="text-align: right;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="users-table-body">
                                <tr>
                                    <td><strong>Ahmed Omar</strong></td>
                                    <td>ahmed.omar@pharmapro.com</td>
                                    <td><span class="settings-role-badge">Lead Pharmacist</span></td>
                                    <td><span class="settings-status-badge active">Active</span></td>
                                    <td style="text-align: right;">
                                        <button class="settings-action-btn" onclick="showToast('Edit user Ahmed Omar')"><i
                                                class="fa-regular fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Sarah Ali</strong></td>
                                    <td>sarah.ali@pharmapro.com</td>
                                    <td><span class="settings-role-badge">Pharmacist</span></td>
                                    <td><span class="settings-status-badge active">Active</span></td>
                                    <td style="text-align: right;">
                                        <button class="settings-action-btn" onclick="showToast('Edit user Sarah Ali')"><i
                                                class="fa-regular fa-edit"></i></button>
                                        <button class="settings-action-btn delete" onclick="deleteUserRow(this)"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Kamal Hassan</strong></td>
                                    <td>kamal.h@pharmapro.com</td>
                                    <td><span class="settings-role-badge">Cashier</span></td>
                                    <td><span class="settings-status-badge inactive">Inactive</span></td>
                                    <td style="text-align: right;">
                                        <button class="settings-action-btn" onclick="showToast('Edit user Kamal Hassan')"><i
                                                class="fa-regular fa-edit"></i></button>
                                        <button class="settings-action-btn delete" onclick="deleteUserRow(this)"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ── PERMISSIONS PANEL ── --}}
                <div class="settings-pane" id="pane-permissions">
                    <div class="settings-section-header">
                        <h2>Permissions Matrix</h2>
                        <p>Control feature access across different user roles</p>
                    </div>
                    <div class="settings-card" style="padding: 10px; overflow-x: auto;">
                        <table class="settings-table">
                            <thead>
                                <tr>
                                    <th>Feature Module</th>
                                    <th style="text-align: center;">Cashier</th>
                                    <th style="text-align: center;">Pharmacist</th>
                                    <th style="text-align: center;">Lead Pharmacist / Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>POS & Checkout</td>
                                    <td style="text-align: center;"><input type="checkbox" checked></td>
                                    <td style="text-align: center;"><input type="checkbox" checked></td>
                                    <td style="text-align: center;"><input type="checkbox" checked disabled></td>
                                </tr>
                                <tr>
                                    <td>Inventory Management</td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox" checked></td>
                                    <td style="text-align: center;"><input type="checkbox" checked disabled></td>
                                </tr>
                                <tr>
                                    <td>Suppliers & Purchases</td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox" checked></td>
                                    <td style="text-align: center;"><input type="checkbox" checked disabled></td>
                                </tr>
                                <tr>
                                    <td>System Settings</td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox" checked disabled></td>
                                </tr>
                                <tr>
                                    <td>Reports & Analytics</td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox"></td>
                                    <td style="text-align: center;"><input type="checkbox" checked disabled></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Role permissions saved successfully!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Permissions
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── NOTIFICATIONS PANEL ── --}}
                <div class="settings-pane" id="pane-notifications">
                    <div class="settings-section-header">
                        <h2>Notification Channels</h2>
                        <p>Configure contact channels and critical alerts thresholds</p>
                    </div>
                    <div class="settings-card">
                        <h3 style="font-size:14px; font-weight:700; margin-bottom:15px; color:var(--text-gray-dark)">Alert
                            Channels</h3>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>System Alerts</span>
                                <p>Show notifications badge and popups inside the web dashboard</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Email Notifications</span>
                                <p>Send critical stock and expiry warnings via email</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>SMS Alerts</span>
                                <p>Send instant SMS notifications for urgent system alerts</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox">
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Notification channels updated!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Channels
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── POS SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-pos-settings">
                    <div class="settings-section-header">
                        <h2>POS Settings</h2>
                        <p>Customize behavior of the Point of Sale interface</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Show Medicine Images</span>
                                <p>Show grid list item images inside the POS screen</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" id="posShowImages" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Print Receipt Immediately</span>
                                <p>Auto launch print dialog upon checkout completion</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" id="posAutoPrint">
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container" style="margin-bottom:15px;">
                            <div class="settings-toggle-info">
                                <span>Keyboard Shortcuts Panel</span>
                                <p>Show shortcut hotkeys hint bar at the bottom</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-form-group">
                            <label for="posReceiptFooter">Default Receipt Footer Text</label>
                            <input type="text" id="posReceiptFooter" class="settings-input"
                                value="Thank you for visiting! Be healthy.">
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="savePosSettings()">
                                <i class="fa-solid fa-floppy-disk"></i> Save POS settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── SALES SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-sales-settings">
                    <div class="settings-section-header">
                        <h2>Sales Settings</h2>
                        <p>Configure sales policies, default terms and returns</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-grid">
                            <div class="settings-form-group">
                                <label for="salesReturnPeriod">Return Period (Days)</label>
                                <input type="number" id="salesReturnPeriod" class="settings-input" value="14">
                            </div>
                            <div class="settings-form-group">
                                <label for="salesDefaultCustomer">Default Customer Mode</label>
                                <select id="salesDefaultCustomer" class="settings-select">
                                    <option value="walkin">Walk-in Customer</option>
                                    <option value="registered">Require registration</option>
                                </select>
                            </div>
                        </div>
                        <div class="settings-toggle-container" style="margin-top:15px;">
                            <div class="settings-toggle-info">
                                <span>Allow Credit Sales</span>
                                <p>Allow eligible customer profiles to checkout on account</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Sales settings updated successfully!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Sales settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── PURCHASE SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-purchase-settings">
                    <div class="settings-section-header">
                        <h2>Purchase Settings</h2>
                        <p>Manage purchase orders preferences and auto procurement</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-group" style="margin-bottom:15px;">
                            <label for="purchasePrefix">Purchase Order Prefix</label>
                            <input type="text" id="purchasePrefix" class="settings-input" value="PO-">
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Auto Reorder Low Stock</span>
                                <p>Create purchase orders draft automatically when items go below threshold</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox">
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Purchase settings saved!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Purchase settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── INVENTORY SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-inventory-settings">
                    <div class="settings-section-header">
                        <h2>Inventory settings</h2>
                        <p>Define inventory alert levels and product buffer metrics</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-grid">
                            <div class="settings-form-group">
                                <label for="invLowStockLimit">Default Low Stock Limit</label>
                                <input type="number" id="invLowStockLimit" class="settings-input" value="15">
                            </div>
                            <div class="settings-form-group">
                                <label for="invExpiryBuffer">Near Expiry Alert Buffer (Months)</label>
                                <input type="number" id="invExpiryBuffer" class="settings-input" value="6">
                            </div>
                        </div>
                        <div class="settings-toggle-container" style="margin-top:15px;">
                            <div class="settings-toggle-info">
                                <span>Block Selling Expired Items</span>
                                <p>Prevent POS scanner from adding expired batches to active cart</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="saveInventorySettings()">
                                <i class="fa-solid fa-floppy-disk"></i> Save Inventory settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── EXPIRY SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-expiry-settings">
                    <div class="settings-section-header">
                        <h2>Expiry Alert settings</h2>
                        <p>Customize batch warnings and color alerts</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-group" style="margin-bottom:15px;">
                            <label for="expiryCriticalLimit">Critical Expiry Warning Threshold (Months)</label>
                            <select id="expiryCriticalLimit" class="settings-select">
                                <option value="3">3 Months (Recommended)</option>
                                <option value="6">6 Months</option>
                                <option value="12">12 Months</option>
                            </select>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Auto Archive Expired Batches</span>
                                <p>Move expired batches out of stock list automatically</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Expiry Alert settings updated!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Expiry settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── PAYMENT SETTINGS PANEL ── --}}
                <div class="settings-pane" id="pane-payment-settings">
                    <div class="settings-section-header">
                        <h2>Payment Settings</h2>
                        <p>Configure accepted payment options and gateways</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Cash Payments</span>
                                <p>Enable Cash checkout button inside POS panel</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Credit Card Payments</span>
                                <p>Enable Visa/MasterCard payments and POS terminal integration</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Instapay / Mobile Wallet</span>
                                <p>Show QR code matching the total sale on payment screens</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Payment methods saved!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Payment options
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── TAXES PANEL ── --}}
                <div class="settings-pane" id="pane-taxes">
                    <div class="settings-section-header">
                        <h2>Tax Rates settings</h2>
                        <p>Manage tax categories and VAT default percentages</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-form-grid" style="margin-bottom:15px;">
                            <div class="settings-form-group">
                                <label for="taxRate">Default VAT / Tax Rate (%)</label>
                                <input type="number" id="taxRate" class="settings-input" value="14">
                            </div>
                            <div class="settings-form-group">
                                <label for="taxStatus">Tax Calculation Mode</label>
                                <select id="taxStatus" class="settings-select">
                                    <option value="inclusive">Tax Inclusive (Prices contain Tax)</option>
                                    <option value="exclusive">Tax Exclusive (Tax added at checkout)</option>
                                </select>
                            </div>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="saveTaxSettings()">
                                <i class="fa-solid fa-floppy-disk"></i> Save Tax settings
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── BACKUP & RESTORE PANEL ── --}}
                <div class="settings-pane" id="pane-backup-restore">
                    <div class="settings-section-header"
                        style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                        <div>
                            <h2>Backup & Restore History</h2>
                            <p>Download previous backups or restore system snapshot</p>
                        </div>
                        <button class="settings-btn-save" onclick="triggerCreateBackup()">
                            <i class="fa-solid fa-cloud-arrow-up"></i> Create Backup Now
                        </button>
                    </div>
                    <div class="settings-card" style="padding: 10px; overflow-x: auto;">
                        <table class="settings-table">
                            <thead>
                                <tr>
                                    <th>Backup Filename</th>
                                    <th>Size</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th style="text-align: right;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>pharma_pro_backup_daily_2026-06-18.json</strong></td>
                                    <td>428 KB</td>
                                    <td>18 Jun 2026 11:30 PM</td>
                                    <td><span class="settings-status-badge active">Verified</span></td>
                                    <td style="text-align: right;">
                                        <button class="settings-action-btn" onclick="showToast('Downloading backup...')"><i
                                                class="fa-solid fa-download"></i></button>
                                        <button class="settings-action-btn"
                                            onclick="showToast('Restoring backup... Settings updated.'); location.reload();"><i
                                                class="fa-solid fa-arrows-spin"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>pharma_pro_backup_stable_2026-05-15.json</strong></td>
                                    <td>380 KB</td>
                                    <td>15 May 2026 09:12 AM</td>
                                    <td><span class="settings-status-badge active">Verified</span></td>
                                    <td style="text-align: right;">
                                        <button class="settings-action-btn" onclick="showToast('Downloading backup...')"><i
                                                class="fa-solid fa-download"></i></button>
                                        <button class="settings-action-btn"
                                            onclick="showToast('Restoring backup... Settings updated.'); location.reload();"><i
                                                class="fa-solid fa-arrows-spin"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ── SYSTEM LOGS PANEL ── --}}
                <div class="settings-pane" id="pane-system-logs">
                    <div class="settings-section-header"
                        style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                        <div>
                            <h2>System activity Logs</h2>
                            <p>View administrative actions and diagnostic info logs</p>
                        </div>
                        <button class="settings-btn-outline" onclick="clearLogsTable()"
                            style="color:var(--danger-color); border-color:var(--danger-border-light);">
                            <i class="fa-regular fa-trash-can"></i> Clear Logs
                        </button>
                    </div>
                    <div class="settings-card" style="padding: 10px; overflow-x: auto;">
                        <table class="settings-table">
                            <thead>
                                <tr>
                                    <th>Timestamp</th>
                                    <th>Level</th>
                                    <th>User</th>
                                    <th>Action Description</th>
                                </tr>
                            </thead>
                            <tbody id="logs-table-body">
                                <tr>
                                    <td>2026-06-20 01:14:18</td>
                                    <td><span class="settings-status-badge active" style="font-size:10px;">INFO</span></td>
                                    <td>Ahmed Omar</td>
                                    <td>Closed sidebar panel settings state saved</td>
                                </tr>
                                <tr>
                                    <td>2026-06-20 00:54:12</td>
                                    <td><span class="settings-status-badge active" style="font-size:10px;">INFO</span></td>
                                    <td>Ahmed Omar</td>
                                    <td>User Ahmad Kamal updated low stock limit limit threshold</td>
                                </tr>
                                <tr>
                                    <td>2026-06-19 23:45:10</td>
                                    <td><span class="settings-status-badge active"
                                            style="font-size:10px; background-color:#ffedd5; color:#ea580c;">WARNING</span>
                                    </td>
                                    <td>System</td>
                                    <td>Augmentin stock is below safety buffer (5 remaining)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ── SECURITY PANEL ── --}}
                <div class="settings-pane" id="pane-security">
                    <div class="settings-section-header">
                        <h2>Security Policy settings</h2>
                        <p>Manage passwords complexity and login security policies</p>
                    </div>
                    <div class="settings-card">
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Strong Passwords Requirement</span>
                                <p>Enforce passwords containing at least 8 characters, a number, and a symbol</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Two-Factor Authentication (2FA)</span>
                                <p>Enforce 2FA via SMS/Google Authenticator for admin logins</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" id="security2FA">
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-toggle-container">
                            <div class="settings-toggle-info">
                                <span>Auto Logout Inactive Session</span>
                                <p>Automatically log out cashier/pharmacist after 15 minutes of idle time</p>
                            </div>
                            <label class="settings-switch">
                                <input type="checkbox" checked>
                                <span class="settings-slider"></span>
                            </label>
                        </div>
                        <div class="settings-card-footer">
                            <button class="settings-btn-save" onclick="showToast('Security policy configurations saved!')">
                                <i class="fa-solid fa-floppy-disk"></i> Save Security policies
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ── Tab Navigation Switching logic ──
            const menuItems = document.querySelectorAll('.settings-menu-item');
            const panes = document.querySelectorAll('.settings-pane');

            menuItems.forEach(item => {
                item.addEventListener('click', function () {
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');

                    const tabName = this.dataset.tab;
                    panes.forEach(pane => {
                        pane.classList.remove('active');
                        if (pane.id === 'pane-' + tabName) {
                            pane.classList.add('active');
                        }
                    });
                });
            });

            // ── Load Settings from LocalStorage ──
            loadAllSavedSettings();
        });

        // ── Persistence Layer Load/Save Functions ──
        function loadAllSavedSettings() {
            // General
            if (localStorage.getItem('sys_name')) {
                document.getElementById('systemName').value = localStorage.getItem('sys_name');
            }
            if (localStorage.getItem('sys_date_format')) {
                document.getElementById('dateFormat').value = localStorage.getItem('sys_date_format');
            }
            if (localStorage.getItem('sys_timezone')) {
                document.getElementById('timeZone').value = localStorage.getItem('sys_timezone');
            }
            if (localStorage.getItem('sys_time_format')) {
                document.getElementById('timeFormat').value = localStorage.getItem('sys_time_format');
            }

            // Currency
            if (localStorage.getItem('sys_currency')) {
                document.getElementById('currency').value = localStorage.getItem('sys_currency');
            }
            if (localStorage.getItem('sys_language')) {
                document.getElementById('language').value = localStorage.getItem('sys_language');
            }

            // Invoices
            if (localStorage.getItem('sys_invoice_prefix')) {
                document.getElementById('invoicePrefix').value = localStorage.getItem('sys_invoice_prefix');
            }
            if (localStorage.getItem('sys_invoice_next')) {
                document.getElementById('nextInvoiceNo').value = localStorage.getItem('sys_invoice_next');
            }
            if (localStorage.getItem('sys_invoice_autoincrement')) {
                document.getElementById('autoIncrementInvoice').checked = localStorage.getItem('sys_invoice_autoincrement') === 'true';
            }

            // Notifications Toggles
            if (localStorage.getItem('notif_low_stock')) {
                document.getElementById('notifLowStock').checked = localStorage.getItem('notif_low_stock') === 'true';
            }
            if (localStorage.getItem('notif_expiry')) {
                document.getElementById('notifExpiry').checked = localStorage.getItem('notif_expiry') === 'true';
            }
            if (localStorage.getItem('notif_new_order')) {
                document.getElementById('notifNewOrder').checked = localStorage.getItem('notif_new_order') === 'true';
            }
            if (localStorage.getItem('notif_returned')) {
                document.getElementById('notifReturned').checked = localStorage.getItem('notif_returned') === 'true';
            }
            if (localStorage.getItem('notif_updates')) {
                document.getElementById('notifUpdates').checked = localStorage.getItem('notif_updates') === 'true';
            }

            // Company Profile
            if (localStorage.getItem('company_name')) {
                document.getElementById('companyName').value = localStorage.getItem('company_name');
            }
            if (localStorage.getItem('company_tax_no')) {
                document.getElementById('companyTaxNo').value = localStorage.getItem('company_tax_no');
            }
            if (localStorage.getItem('company_phone')) {
                document.getElementById('companyPhone').value = localStorage.getItem('company_phone');
            }
            if (localStorage.getItem('company_email')) {
                document.getElementById('companyEmail').value = localStorage.getItem('company_email');
            }
            if (localStorage.getItem('company_address')) {
                document.getElementById('companyAddress').value = localStorage.getItem('company_address');
            }

            // POS Settings
            if (localStorage.getItem('pos_show_images')) {
                document.getElementById('posShowImages').checked = localStorage.getItem('pos_show_images') === 'true';
            }
            if (localStorage.getItem('pos_auto_print')) {
                document.getElementById('posAutoPrint').checked = localStorage.getItem('pos_auto_print') === 'true';
            }
            if (localStorage.getItem('pos_receipt_footer')) {
                document.getElementById('posReceiptFooter').value = localStorage.getItem('pos_receipt_footer');
            }

            // Inventory
            if (localStorage.getItem('inv_low_stock_limit')) {
                document.getElementById('invLowStockLimit').value = localStorage.getItem('inv_low_stock_limit');
            }
            if (localStorage.getItem('inv_expiry_buffer')) {
                document.getElementById('invExpiryBuffer').value = localStorage.getItem('inv_expiry_buffer');
            }

            // Taxes
            if (localStorage.getItem('sys_tax_rate')) {
                document.getElementById('taxRate').value = localStorage.getItem('sys_tax_rate');
            }
            if (localStorage.getItem('sys_tax_status')) {
                document.getElementById('taxStatus').value = localStorage.getItem('sys_tax_status');
            }
        }

        function saveGeneralSettings() {
            const sysName = document.getElementById('systemName').value;
            const dateFormat = document.getElementById('dateFormat').value;
            const timeZone = document.getElementById('timeZone').value;
            const timeFormat = document.getElementById('timeFormat').value;

            localStorage.setItem('sys_name', sysName);
            localStorage.setItem('sys_date_format', dateFormat);
            localStorage.setItem('sys_timezone', timeZone);
            localStorage.setItem('sys_time_format', timeFormat);

            // Update Live Title & Logo inside viewport immediately
            updateSystemDisplayDetails(sysName);
            showToast('General Settings updated successfully!');
        }

        function saveCurrencySettings() {
            const currency = document.getElementById('currency').value;
            const language = document.getElementById('language').value;

            localStorage.setItem('sys_currency', currency);
            localStorage.setItem('sys_language', language);

            showToast('Currency & Language preferences updated!');
        }

        function saveInvoiceSettings() {
            const prefix = document.getElementById('invoicePrefix').value;
            const nextNo = document.getElementById('nextInvoiceNo').value;
            const autoInc = document.getElementById('autoIncrementInvoice').checked;

            localStorage.setItem('sys_invoice_prefix', prefix);
            localStorage.setItem('sys_invoice_next', nextNo);
            localStorage.setItem('sys_invoice_autoincrement', autoInc);

            showToast('Invoice settings saved successfully!');
        }

        function saveNotificationToggles() {
            localStorage.setItem('notif_low_stock', document.getElementById('notifLowStock').checked);
            localStorage.setItem('notif_expiry', document.getElementById('notifExpiry').checked);
            localStorage.setItem('notif_new_order', document.getElementById('notifNewOrder').checked);
            localStorage.setItem('notif_returned', document.getElementById('notifReturned').checked);
            localStorage.setItem('notif_updates', document.getElementById('notifUpdates').checked);

            showToast('Notification alert preferences saved!');
        }

        function saveCompanyProfile() {
            localStorage.setItem('company_name', document.getElementById('companyName').value);
            localStorage.setItem('company_tax_no', document.getElementById('companyTaxNo').value);
            localStorage.setItem('company_phone', document.getElementById('companyPhone').value);
            localStorage.setItem('company_email', document.getElementById('companyEmail').value);
            localStorage.setItem('company_address', document.getElementById('companyAddress').value);

            showToast('Company Profile successfully saved!');
        }

        function savePosSettings() {
            localStorage.setItem('pos_show_images', document.getElementById('posShowImages').checked);
            localStorage.setItem('pos_auto_print', document.getElementById('posAutoPrint').checked);
            localStorage.setItem('pos_receipt_footer', document.getElementById('posReceiptFooter').value);

            showToast('POS settings saved successfully!');
        }

        function saveInventorySettings() {
            localStorage.setItem('inv_low_stock_limit', document.getElementById('invLowStockLimit').value);
            localStorage.setItem('inv_expiry_buffer', document.getElementById('invExpiryBuffer').value);

            showToast('Inventory safety parameters updated!');
        }

        function saveTaxSettings() {
            localStorage.setItem('sys_tax_rate', document.getElementById('taxRate').value);
            localStorage.setItem('sys_tax_status', document.getElementById('taxStatus').value);

            showToast('Tax category & VAT updated!');
        }

        function updateSystemDisplayDetails(sysName) {
            // Dynamically update UI matching values
            const logoTexts = document.querySelectorAll('.logo-text');
            logoTexts.forEach(el => { el.textContent = sysName; });

            const loadingTitle = document.querySelector('.loading-title');
            if (loadingTitle) {
                loadingTitle.textContent = 'Loading ' + sysName;
            }
        }

        // ── Backup / Restore triggers ──
        function triggerCreateBackup() {
            showToast('Preparing backup payload...');
            setTimeout(() => {
                const payload = {};
                for (let i = 0; i < localStorage.length; i++) {
                    const key = localStorage.key(i);
                    payload[key] = localStorage.getItem(key);
                }
                const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(payload));
                const dlAnchorElem = document.createElement('a');
                dlAnchorElem.setAttribute("href", dataStr);
                dlAnchorElem.setAttribute("download", `pharma_pro_settings_backup_${new Date().toISOString().slice(0, 10)}.json`);
                dlAnchorElem.click();
                showToast('Settings Backup download started!');
            }, 1000);
        }

        function triggerRestoreBackup() {
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = '.json';
            fileInput.onchange = e => {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.onload = readerEvent => {
                    try {
                        const content = JSON.parse(readerEvent.target.result);
                        Object.keys(content).forEach(key => {
                            localStorage.setItem(key, content[key]);
                        });
                        showToast('Settings restored successfully! Reloading...');
                        setTimeout(() => { location.reload(); }, 1500);
                    } catch (err) {
                        showToast('Invalid backup file! Restore failed.');
                    }
                }
                reader.readAsText(file);
            };
            fileInput.click();
        }

        // ── Users Management Tmp Actions ──
        function addUserPrompt() {
            const name = prompt("Enter User Name:");
            if (!name) return;
            const email = prompt("Enter Email Address:");
            if (!email) return;
            const role = prompt("Enter Role (e.g. Pharmacist, Cashier):", "Pharmacist");
            if (!role) return;

            const tbody = document.getElementById('users-table-body');
            const newTr = document.createElement('tr');
            newTr.innerHTML = `
                <td><strong>${name}</strong></td>
                <td>${email}</td>
                <td><span class="settings-role-badge">${role}</span></td>
                <td><span class="settings-status-badge active">Active</span></td>
                <td style="text-align: right;">
                    <button class="settings-action-btn" onclick="showToast('Edit user ${name}')"><i class="fa-regular fa-edit"></i></button>
                    <button class="settings-action-btn delete" onclick="deleteUserRow(this)"><i class="fa-regular fa-trash-can"></i></button>
                </td>
            `;
            tbody.appendChild(newTr);
            showToast(`User ${name} added successfully!`);
        }

        function deleteUserRow(btn) {
            if (confirm("Are you sure you want to remove this user?")) {
                btn.closest('tr').remove();
                showToast("User removed.");
            }
        }

        // ── Logs Management Tmp Actions ──
        function clearLogsTable() {
            if (confirm("Are you sure you want to wipe the active logs?")) {
                document.getElementById('logs-table-body').innerHTML = `
                    <tr>
                        <td colspan="4" style="text-align:center; color:var(--text-light); padding: 20px;">No system logs available.</td>
                    </tr>
                `;
                showToast("System activity logs cleared.");
            }
        }
    </script>
@endsection