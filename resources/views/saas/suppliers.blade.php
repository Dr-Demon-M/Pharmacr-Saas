@extends('layouts.app')

@section('title', 'Suppliers')

@section('content')

    <section class="suppliers-content">

        <!-- Stats -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">🏢</div>
                <div>
                    <h4>Total Suppliers</h4>
                    <h2>56</h2>
                    <span>↑ 12.5% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">✅</div>
                <div>
                    <h4>Active Suppliers</h4>
                    <h2>48</h2>
                    <span>↑ 8.3% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">📦</div>
                <div>
                    <h4>Total Purchases</h4>
                    <h2>245,850 EGP</h2>
                    <span>↑ 10.7% from last month</span>
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
                <div class="stat-icon red">📅</div>
                <div>
                    <h4>Average Credit Days</h4>
                    <h2>23 Days</h2>
                    <span>↓ 3.1% from last month</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="suppliers-toolbar">

            <input type="text" class="search-input" placeholder="Search suppliers...">

            <select>
                <option>All Status</option>
            </select>

            <select>
                <option>All Cities</option>
            </select>

            <select>
                <option>All Contact Persons</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary">
                + New Supplier
            </button>

        </div>

        <!-- Table -->

        <div class="table-card">

            <div class="table-header">
                <h3>Suppliers List</h3>

                <button class="btn-export">
                    Export
                </button>
            </div>

            <div class="table-responsive">
                <table>

                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Contact Person</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Credit Limit</th>
                            <th>Balance Due</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Global Pharma</td>
                            <td>Mohamed Ali</td>
                            <td>01012345678</td>
                            <td>Cairo</td>
                            <td>info@globalpharma.com</td>
                            <td>50,000 EGP</td>
                            <td class="danger-text">4,850 EGP</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showSupplierDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editSupplier(this)">
                                                <i class="fa-solid fa-pen"></i> Edit Supplier
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="deleteSupplier(this)">
                                                <i class="fa-solid fa-trash"></i> Delete Supplier
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>PharmaCare Co.</td>
                            <td>Ahmed Hassan</td>
                            <td>01098765432</td>
                            <td>Giza</td>
                            <td>sales@pharmacare.com</td>
                            <td>35,000 EGP</td>
                            <td class="danger-text">2,250 EGP</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showSupplierDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editSupplier(this)">
                                                <i class="fa-solid fa-pen"></i> Edit Supplier
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="deleteSupplier(this)">
                                                <i class="fa-solid fa-trash"></i> Delete Supplier
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>BioNeeds</td>
                            <td>Hany Farid</td>
                            <td>01055667788</td>
                            <td>Cairo</td>
                            <td>info@bioneeds.com</td>
                            <td>20,000 EGP</td>
                            <td class="success-text">0 EGP</td>
                            <td><span class="status inactive">Inactive</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showSupplierDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="editSupplier(this)">
                                                <i class="fa-solid fa-pen"></i> Edit Supplier
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="deleteSupplier(this)">
                                                <i class="fa-solid fa-trash"></i> Delete Supplier
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