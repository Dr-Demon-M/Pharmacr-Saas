@extends('layouts.app')
@section('title', 'Activity Logs')
@section('content')
    <section class="activity-content">

        <!-- Statistics -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">📋</div>
                <div>
                    <h4>Total Activities</h4>
                    <h2>1,248</h2>
                    <span>↑ 15.3% from last 7 days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">👤</div>
                <div>
                    <h4>User Logins</h4>
                    <h2>342</h2>
                    <span>↑ 8.7% from last 7 days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">✏️</div>
                <div>
                    <h4>Create / Update</h4>
                    <h2>652</h2>
                    <span>↑ 12.6% from last 7 days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">🗑️</div>
                <div>
                    <h4>Delete Actions</h4>
                    <h2>95</h2>
                    <span>↓ 3.4% from last 7 days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">🛡️</div>
                <div>
                    <h4>Critical Actions</h4>
                    <h2>28</h2>
                    <span>↓ 6.1% from last 7 days</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="activity-toolbar">

            <input type="date">

            <select>
                <option>All Users</option>
            </select>

            <select>
                <option>All Modules</option>
            </select>

            <select>
                <option>All Actions</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <input type="text" class="search-input" placeholder="Search in logs...">

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary">
                Export
            </button>

        </div>

        <!-- Logs Table -->

        <div class="table-card">

            <div class="table-header">
                <h3>Activity Logs</h3>
            </div>

            <div class="table-responsive">
                <table>

                    <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>User</th>
                            <th>Module</th>
                            <th>Action</th>
                            <th>Description</th>
                            <th>IP Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>31 May 2025 03:24 PM</td>
                            <td>Ahmed Omar</td>
                            <td><span class="module sales">Sales</span></td>
                            <td><span class="action-badge create">Create</span></td>
                            <td>Created invoice #INV-100245</td>
                            <td>192.168.1.10</td>
                            <td><span class="status success">Success</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('Loading activity details...')">
                                                <i class="fa-solid fa-eye"></i> View details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('IP address 192.168.1.10 details loaded')">
                                                <i class="fa-solid fa-network-wired"></i> Trace IP
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>31 May 2025 02:15 PM</td>
                            <td>Dr. Sara Ali</td>
                            <td><span class="module patients">Patients</span></td>
                            <td><span class="action-badge update">Update</span></td>
                            <td>Updated patient profile</td>
                            <td>192.168.1.15</td>
                            <td><span class="status success">Success</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('Loading activity details...')">
                                                <i class="fa-solid fa-eye"></i> View details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('IP address 192.168.1.15 details loaded')">
                                                <i class="fa-solid fa-network-wired"></i> Trace IP
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>31 May 2025 12:30 PM</td>
                            <td>Ahmed Omar</td>
                            <td><span class="module purchases">Purchases</span></td>
                            <td><span class="action-badge delete">Delete</span></td>
                            <td>Deleted purchase invoice</td>
                            <td>192.168.1.10</td>
                            <td><span class="status warning">Warning</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('Loading activity details...')">
                                                <i class="fa-solid fa-eye"></i> View details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('IP address 192.168.1.10 details loaded')">
                                                <i class="fa-solid fa-network-wired"></i> Trace IP
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>31 May 2025 10:22 AM</td>
                            <td>System</td>
                            <td><span class="module system">System</span></td>
                            <td><span class="action-badge failed">Login Failed</span></td>
                            <td>Failed login attempt</td>
                            <td>192.168.1.20</td>
                            <td><span class="status failed">Failed</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('Loading activity details...')">
                                                <i class="fa-solid fa-eye"></i> View details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showToast('IP address 192.168.1.20 details loaded')">
                                                <i class="fa-solid fa-network-wired"></i> Trace IP
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>

    </section>

@endsection