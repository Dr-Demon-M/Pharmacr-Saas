@extends('layouts.app')
@section('title', 'Expiring Medicines')
@section('content')
    <section class="expiry-content">

        <!-- Statistics -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon red">⚠️</div>
                <div>
                    <h4>Total Near Expiry Items</h4>
                    <h2>128</h2>
                    <span>At Risk Of Expiry</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">📅</div>
                <div>
                    <h4>Expire In 1 Month</h4>
                    <h2>42</h2>
                    <span>Next 30 Days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon blue">🗓️</div>
                <div>
                    <h4>Expire In 2 Months</h4>
                    <h2>48</h2>
                    <span>31 - 60 Days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">✅</div>
                <div>
                    <h4>Expire In 3 Months</h4>
                    <h2>38</h2>
                    <span>61 - 90 Days</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">💰</div>
                <div>
                    <h4>Total Stock Value</h4>
                    <h2>32,450 EGP</h2>
                    <span>Near Expiry Value</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="expiry-toolbar">

            <input type="text" class="search-input" placeholder="Search products...">

            <select>
                <option>All Categories</option>
            </select>

            <select>
                <option>All Suppliers</option>
            </select>

            <select>
                <option>All Brands</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary">
                Export
            </button>

        </div>

        <!-- Expire In 1 Month -->

        <div class="expiry-card danger-card">

            <div class="section-title">
                Expire In 1 Month (Next 30 Days)
            </div>

            <table>

                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Batch</th>
                        <th>Expiry Date</th>
                        <th>Days Left</th>
                        <th>Stock</th>
                        <th>Stock Value</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Amoxicillin 500mg</td>
                        <td>B240501</td>
                        <td>25 Jun 2025</td>
                        <td>24 Days</td>
                        <td>120</td>
                        <td>1,920 EGP</td>
                        <td><span class="badge danger">High Risk</span></td>
                        <td>
                            <div class="product-action dropdown">
                                <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item" type="button" onclick="showToast('Loading product details...')">
                                            <i class="fa-solid fa-eye"></i> Show details
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item danger" type="button" onclick="showToast('Initiating return/clearance of expired stock...')">
                                            <i class="fa-solid fa-box-open"></i> Clear Stock
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Panadol Extra</td>
                        <td>B240503</td>
                        <td>30 Jun 2025</td>
                        <td>29 Days</td>
                        <td>60</td>
                        <td>660 EGP</td>
                        <td><span class="badge danger">High Risk</span></td>
                        <td>
                            <div class="product-action dropdown">
                                <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item" type="button" onclick="showToast('Loading product details...')">
                                            <i class="fa-solid fa-eye"></i> Show details
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item danger" type="button" onclick="showToast('Initiating return/clearance of expired stock...')">
                                            <i class="fa-solid fa-box-open"></i> Clear Stock
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <!-- Expire In 2 Months -->

        <div class="expiry-card warning-card">

            <div class="section-title">
                Expire In 2 Months (31 - 60 Days)
            </div>

            <table>
                <tbody>
                    <tr>
                        <td>Diclofenac 50mg</td>
                        <td>B240402</td>
                        <td>20 Jul 2025</td>
                        <td>45 Days</td>
                        <td>150</td>
                        <td>2,250 EGP</td>
                        <td><span class="badge warning">Medium Risk</span></td>
                        <td>
                            <div class="product-action dropdown">
                                <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item" type="button" onclick="showToast('Loading product details...')">
                                            <i class="fa-solid fa-eye"></i> Show details
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item danger" type="button" onclick="showToast('Initiating return/clearance of expired stock...')">
                                            <i class="fa-solid fa-box-open"></i> Clear Stock
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <!-- Expire In 3 Months -->

        <div class="expiry-card success-card">

            <div class="section-title">
                Expire In 3 Months (61 - 90 Days)
            </div>

            <table>
                <tbody>
                    <tr>
                        <td>Omeprazole 20mg</td>
                        <td>B240321</td>
                        <td>15 Sep 2025</td>
                        <td>76 Days</td>
                        <td>100</td>
                        <td>1,500 EGP</td>
                        <td><span class="badge success">Low Risk</span></td>
                        <td>
                            <div class="product-action dropdown">
                                <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <button class="dropdown-item" type="button" onclick="showToast('Loading product details...')">
                                            <i class="fa-solid fa-eye"></i> Show details
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item danger" type="button" onclick="showToast('Initiating return/clearance of expired stock...')">
                                            <i class="fa-solid fa-box-open"></i> Clear Stock
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </section>

@endsection