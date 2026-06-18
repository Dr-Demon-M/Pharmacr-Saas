@extends('layouts.app')

@section('title', 'Purchases')

@section('content')

    <section class="purchases-content">

        <!-- Stats -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">🛒</div>
                <div>
                    <h4>Total Purchases</h4>
                    <h2>245,850 EGP</h2>
                    <span>↑ 12.6% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">📄</div>
                <div>
                    <h4>Total Bills</h4>
                    <h2>124</h2>
                    <span>↑ 8.4% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">📦</div>
                <div>
                    <h4>Total Items</h4>
                    <h2>1,250</h2>
                    <span>↑ 10.3% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">💳</div>
                <div>
                    <h4>Due Amount</h4>
                    <h2>18,450 EGP</h2>
                    <span>↓ 4.2% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">💰</div>
                <div>
                    <h4>Average Bill</h4>
                    <h2>1,982 EGP</h2>
                    <span>↑ 7.8% from last month</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="purchases-toolbar">

            <input type="date">

            <select>
                <option>All Suppliers</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <select>
                <option>All Payment Status</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary">
                + New Purchase
            </button>

        </div>

        <!-- Table -->

        <div class="table-card">

            <div class="table-header">
                <h3>Purchase Bills</h3>

                <button class="btn-export">
                    Export
                </button>
            </div>

            <div class="table-responsive">
                <table>

                    <thead>
                        <tr>
                            <th>Bill No.</th>
                            <th>Supplier</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Discount</th>
                            <th>Tax</th>
                            <th>Net Amount</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>PUR-100124</td>
                            <td>Global Pharma</td>
                            <td>31 May 2025</td>
                            <td>24</td>
                            <td>24,850 EGP</td>
                            <td>1,200 EGP</td>
                            <td>3,750 EGP</td>
                            <td>27,400 EGP</td>
                            <td><span class="payment paid">Paid</span></td>
                            <td><span class="status completed">Completed</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showPurchaseDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="printPurchaseInvoice(this)">
                                                <i class="fa-solid fa-print"></i> Print Invoice
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="cancelPurchase(this)">
                                                <i class="fa-solid fa-ban"></i> Cancel Purchase
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>PUR-100123</td>
                            <td>PharmaCare</td>
                            <td>30 May 2025</td>
                            <td>18</td>
                            <td>18,500 EGP</td>
                            <td>750 EGP</td>
                            <td>2,775 EGP</td>
                            <td>20,525 EGP</td>
                            <td><span class="payment partial">Partial</span></td>
                            <td><span class="status completed">Completed</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showPurchaseDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="printPurchaseInvoice(this)">
                                                <i class="fa-solid fa-print"></i> Print Invoice
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="cancelPurchase(this)">
                                                <i class="fa-solid fa-ban"></i> Cancel Purchase
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>PUR-100122</td>
                            <td>MedSource</td>
                            <td>29 May 2025</td>
                            <td>32</td>
                            <td>32,100 EGP</td>
                            <td>1,600 EGP</td>
                            <td>4,575 EGP</td>
                            <td>35,075 EGP</td>
                            <td><span class="payment unpaid">Unpaid</span></td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showPurchaseDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="printPurchaseInvoice(this)">
                                                <i class="fa-solid fa-print"></i> Print Invoice
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button" onclick="cancelPurchase(this)">
                                                <i class="fa-solid fa-ban"></i> Cancel Purchase
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
