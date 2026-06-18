@extends('layouts.app')

@section('title', 'customers')

@section('content')

    <section class="customers-content">

        <!-- Stats -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">👥</div>

                <div>
                    <h4>Total Customers</h4>
                    <h2>1,250</h2>
                    <span>+ 8.2% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">➕</div>

                <div>
                    <h4>New Customers</h4>
                    <h2>125</h2>
                    <span>+ 15.6% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">🛍️</div>

                <div>
                    <h4>Repeat Customers</h4>
                    <h2>865</h2>
                    <span>+ 6.5% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">📈</div>

                <div>
                    <h4>Avg. Order Value</h4>
                    <h2>250 EGP</h2>
                    <span>+ 5.3% from last month</span>
                </div>
            </div>

        </div>

        <!-- Toolbar -->

        <div class="customers-toolbar">

            <input type="text" class="search-input" placeholder="Search customers by name, phone or email...">

            <select>
                <option>All Groups</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <select>
                <option>All Cities</option>
            </select>

            <button class="btn-filter">
                Filters
            </button>

            <button class="btn-primary">
                + Add Customer
            </button>

        </div>

        <!-- Table -->
        {{-- customer info menu --}}
        <div id="customerPopup" class="customer-popup">

            <div class="customer-popup-content">

                <button class="close-btn" onclick="closeCustomerInfo()">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="customer-header">

                    <div class="customer-avatar">
                        M
                    </div>

                    <div>
                        <h2>Mohamed Ahmed</h2>
                        <span class="customer-status">
                            Active Customer
                        </span>
                    </div>

                </div>

                <div class="customer-info">

                    <div class="info-item">
                        <span class="label">Phone</span>
                        <span class="value">+20 100 123 4567</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Email</span>
                        <span class="value">mohamed@example.com</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Address</span>
                        <span class="value">Talkha, Dakahlia</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Total Orders</span>
                        <span class="value">48</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Total Purchases</span>
                        <span class="value">12,850 EGP</span>
                    </div>

                    <div class="info-item">
                        <span class="label">Last Purchase</span>
                        <span class="value">15 Jun 2026</span>
                    </div>

                </div>

            </div>

        </div>

        <div class="table-card">
            <div class="table-responsive">
                <table>

                    <thead>

                        <tr>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Total Orders</th>
                            <th>Total Spent</th>
                            <th>Last Order</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <strong>Mohamed Ali</strong>
                                <br>
                                <small>#CUST-1001</small>
                            </td>

                            <td>01001234567</td>
                            <td>mohamed@email.com</td>
                            <td>Cairo</td>
                            <td>18</td>
                            <td>4250 EGP</td>
                            <td>20/05/2025</td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showCustomerInfo()">
                                                <i class="fa-solid fa-user"></i> Customer Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editCustomerData()">
                                                <i class="fa-solid fa-pen"></i> Edit Customer Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteCustomer()">
                                                <i class="fa-solid fa-trash"></i> Delete Customer
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Sara Ahmed</strong>
                                <br>
                                <small>#CUST-1002</small>
                            </td>

                            <td>01012345678</td>
                            <td>sara@email.com</td>
                            <td>Giza</td>
                            <td>12</td>
                            <td>3150 EGP</td>
                            <td>18/05/2025</td>

                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>

                            <td>
                                <div class="customer-action dropdown">
                                    <button class="customer-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showCustomerInfo()">
                                                <i class="fa-solid fa-user"></i> Customer Info
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editCustomerData()">
                                                <i class="fa-solid fa-pen"></i> Edit Customer Data
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="deleteCustomer()">
                                                <i class="fa-solid fa-trash"></i> Delete Customer
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