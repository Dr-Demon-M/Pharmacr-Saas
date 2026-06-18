@extends('layouts.app')

@section('title', 'Users')

@section('content')

    <section class="users-content">

        <!-- Stats -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">👤</div>
                <div>
                    <h4>Total Users</h4>
                    <h2>24</h2>
                    <span>↑ 20% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">✅</div>
                <div>
                    <h4>Active Users</h4>
                    <h2>18</h2>
                    <span>↑ 12% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">🛡️</div>
                <div>
                    <h4>Admins</h4>
                    <h2>4</h2>
                    <span>No change</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">⛔</div>
                <div>
                    <h4>Inactive Users</h4>
                    <h2>6</h2>
                    <span>↓ 14% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">🔑</div>
                <div>
                    <h4>Roles</h4>
                    <h2>6</h2>
                    <span>No change</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="users-toolbar">

            <input type="text" class="search-input" placeholder="Search users by name, email or phone...">

            <select>
                <option>All Roles</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <select>
                <option>All Branches</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary">
                + Add User
            </button>

        </div>

        <!-- User Info Popup -->
        <div id="userPopup" class="customer-popup">

            <div class="customer-popup-content">

                <button class="close-btn" onclick="closeUserInfo()">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="customer-header">

                    <div class="customer-avatar" id="userPopupAvatar">
                        A
                    </div>

                    <div>
                        <h2 id="userPopupName">Ahmed Omar</h2>
                        <span class="customer-status" id="userPopupStatus">Active User</span>
                    </div>

                </div>

                <div class="customer-info">

                    <div class="info-item">
                        <span class="label">Phone</span>
                        <span class="value" id="userPopupPhone">01012345678</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Email</span>
                        <span class="value" id="userPopupEmail">ahmed@email.com</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Role</span>
                        <span class="value" id="userPopupRole">Admin</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Branch</span>
                        <span class="value" id="userPopupBranch">Main Branch</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Last Login</span>
                        <span class="value" id="userPopupLastLogin">31 May 2025</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Member Since</span>
                        <span class="value" id="userPopupSince">01 Jan 2024</span>
                    </div>

                </div>

            </div>

        </div>

        <!-- Table -->

        <div class="table-card">
            <div class="table-responsive">
                <table>

                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Branch</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <strong>Ahmed Omar</strong><br>
                                <small>#USR-1001</small>
                            </td>
                            <td>ahmed@email.com</td>
                            <td>01012345678</td>
                            <td><span class="role admin">Admin</span></td>
                            <td>Main Branch</td>
                            <td><span class="status active">Active</span></td>
                            <td>31 May 2025</td>
                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button"
                                                onclick="showUserInfo({name:'Ahmed Omar',avatar:'A',phone:'01012345678',email:'ahmed@email.com',role:'Admin',branch:'Main Branch',lastLogin:'31 May 2025',since:'01 Jan 2024',status:'Active User'})">
                                                <i class="fa-solid fa-user"></i> User Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editUserData()">
                                                <i class="fa-solid fa-pen"></i> Edit User Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteUser()">
                                                <i class="fa-solid fa-trash"></i> Delete User
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Sara Ahmed</strong><br>
                                <small>#USR-1002</small>
                            </td>
                            <td>sara@email.com</td>
                            <td>01098765432</td>
                            <td><span class="role pharmacist">Pharmacist</span></td>
                            <td>Main Branch</td>
                            <td><span class="status active">Active</span></td>
                            <td>31 May 2025</td>
                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button"
                                                onclick="showUserInfo({name:'Sara Ahmed',avatar:'S',phone:'01098765432',email:'sara@email.com',role:'Pharmacist',branch:'Main Branch',lastLogin:'31 May 2025',since:'15 Mar 2024',status:'Active User'})">
                                                <i class="fa-solid fa-user"></i> User Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editUserData()">
                                                <i class="fa-solid fa-pen"></i> Edit User Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteUser()">
                                                <i class="fa-solid fa-trash"></i> Delete User
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Khalid Hassan</strong><br>
                                <small>#USR-1003</small>
                            </td>
                            <td>khalid@email.com</td>
                            <td>01123456789</td>
                            <td><span class="role doctor">Doctor</span></td>
                            <td>Branch B</td>
                            <td><span class="status active">Active</span></td>
                            <td>10 Jun 2026</td>
                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button"
                                                onclick="showUserInfo({name:'Khalid Hassan',avatar:'K',phone:'01123456789',email:'khalid@email.com',role:'Doctor',branch:'Branch B',lastLogin:'10 Jun 2026',since:'20 Feb 2025',status:'Active User'})">
                                                <i class="fa-solid fa-user"></i> User Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editUserData()">
                                                <i class="fa-solid fa-pen"></i> Edit User Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteUser()">
                                                <i class="fa-solid fa-trash"></i> Delete User
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Mona Youssef</strong><br>
                                <small>#USR-1004</small>
                            </td>
                            <td>mona@email.com</td>
                            <td>01234567890</td>
                            <td><span class="role delivery">Delivery</span></td>
                            <td>Branch C</td>
                            <td><span class="status inactive">Inactive</span></td>
                            <td>02 Apr 2026</td>
                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button"
                                                onclick="showUserInfo({name:'Mona Youssef',avatar:'M',phone:'01234567890',email:'mona@email.com',role:'Delivery',branch:'Branch C',lastLogin:'02 Apr 2026',since:'10 Jun 2025',status:'Inactive User'})">
                                                <i class="fa-solid fa-user"></i> User Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editUserData()">
                                                <i class="fa-solid fa-pen"></i> Edit User Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteUser()">
                                                <i class="fa-solid fa-trash"></i> Delete User
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