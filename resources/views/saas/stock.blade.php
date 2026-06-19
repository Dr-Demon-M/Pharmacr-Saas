@extends('layouts.app')

@section('title', 'Stock')

@section('content')

    <section class="inventory-content">


        <!-- Stats -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">📦</div>
                <div>
                    <h4>Total Products</h4>
                    <h2>1,458</h2>
                    <span>+6.4% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">✅</div>
                <div>
                    <h4>In Stock</h4>
                    <h2>1,125</h2>
                    <span>+8.7% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">⚠️</div>
                <div>
                    <h4>Low Stock</h4>
                    <h2>198</h2>
                    <span>-3.2% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">❌</div>
                <div>
                    <h4>Out Of Stock</h4>
                    <h2>135</h2>
                    <span>-7.1% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">💰</div>
                <div>
                    <h4>Total Value</h4>
                    <h2>250,450 EGP</h2>
                    <span>+9.3% from last month</span>
                </div>
            </div>

        </div>

        <!-- Toolbar -->

        <div class="inventory-toolbar">

            <input type="text" class="search-input" placeholder="Search by product name, barcode or code...">

            <select>
                <option>All Categories</option>
            </select>

            <select>
                <option>All Suppliers</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary" onclick="openAddProductPopup()">
                + Add Product
            </button>

        </div>

        <!-- Add Product Popup -->
        <div id="addProductPopup" class="product-popup">
            <div class="add-product-popup-content">
                <button class="close-btn" onclick="closeAddProductPopup()">✖</button>

                <h2>Add New Product</h2>
                <p class="popup-subtitle">Fill in the product information below</p>

                <form class="add-product-form" onsubmit="return handleAddProduct(event)">

                    <div class="form-grid">
                        <!-- Product Name -->
                        <div class="form-group full-width">
                            <label for="productName">Product Name *</label>
                            <input type="text" id="productName" required placeholder="e.g., Panadol Extra 500mg">
                        </div>

                        <!-- SKU Code -->
                        <div class="form-group">
                            <label for="productSKU">SKU Code *</label>
                            <input type="text" id="productSKU" required placeholder="e.g., MED-1001">
                        </div>

                        <!-- Barcode (Data Matrix) -->
                        <div class="form-group">
                            <label for="productBarcode">Barcode / Data Matrix</label>
                            <input type="text" id="productBarcode" placeholder="Scan or enter barcode">
                        </div>

                        <!-- Category -->
                        <div class="form-group">
                            <label for="productCategory">Category *</label>
                            <select id="productCategory" required>
                                <option value="">Select Category</option>
                                <option value="medicines">Medicines</option>
                                <option value="vitamins">Vitamins</option>
                                <option value="supplements">Supplements</option>
                                <option value="personal-care">Personal Care</option>
                                <option value="medical-devices">Medical Devices</option>
                                <option value="antibiotics">Antibiotics</option>
                                <option value="pain-relief">Pain Relief</option>
                                <option value="gastro">Gastro</option>
                            </select>
                        </div>

                        <!-- Supplier -->
                        <div class="form-group">
                            <label for="productSupplier">Supplier *</label>
                            <select id="productSupplier" required>
                                <option value="">Select Supplier</option>
                                <option value="hikma">Hikma Pharma</option>
                                <option value="gsk">GSK</option>
                                <option value="julphar">Julphar</option>
                                <option value="pfizer">Pfizer</option>
                                <option value="novartis">Novartis</option>
                            </select>
                        </div>

                        <!-- Unit Price -->
                        <div class="form-group">
                            <label for="productPrice">Unit Price (EGP) *</label>
                            <input type="number" id="productPrice" required min="0" step="0.01" placeholder="0.00">
                        </div>

                        <!-- Initial Stock -->
                        <div class="form-group">
                            <label for="productStock">Initial Stock Quantity *</label>
                            <input type="number" id="productStock" required min="0" placeholder="0">
                        </div>

                        <!-- Expiry Date -->
                        <div class="form-group">
                            <label for="productExpiry">Expiry Date</label>
                            <input type="date" id="productExpiry">
                        </div>

                        <!-- Batch Number -->
                        <div class="form-group">
                            <label for="productBatch">Batch Number</label>
                            <input type="text" id="productBatch" placeholder="e.g., BATCH-2026-001">
                        </div>

                        <!-- Description -->
                        <div class="form-group full-width">
                            <label for="productDescription">Description</label>
                            <textarea id="productDescription" rows="3"
                                placeholder="Enter product description or notes..."></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-secondary" onclick="closeAddProductPopup()">Cancel</button>
                        <button type="submit" class="btn-primary">Add Product</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Categories -->

        <div class="inventory-tabs">
            <button class="tab active">All Products</button>
            <button class="tab">Medicines</button>
            <button class="tab">Vitamins</button>
            <button class="tab">Supplements</button>
            <button class="tab">Personal Care</button>
            <button class="tab">Medical Devices</button>
        </div>

        <!-- Table -->

        <!-- Product Details Popup (Outside table-card to prevent z-index/transform overlay constraint) -->
        <div id="productDetailsPopup" class="product-popup">
            <div class="product-popup-content">
                <button class="close-btn" onclick="closeProductDetails()">
                    ✖
                </button>
                <h2>Vitamin C 1000mg</h2>
                <hr>
                <p><strong>SKU:</strong> VIT1000</p>
                <p><strong>Category:</strong> Vitamins</p>
                <p><strong>Price:</strong> 60 EGP</p>
                <p><strong>Current Stock:</strong> 40 Boxes</p>
                <p><strong>Sold Quantity:</strong> 320 Boxes</p>
                <p><strong>Nearly Expiry Date:</strong> 15/07/2027</p>
                <p><strong>Status:</strong> Low Stock</p>
            </div>
        </div>

        <div class="table-card">
            <div class="table-responsive">
                <table>

                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Supplier</th>
                            <th>Stock</th>
                            <th>Unit Price</th>
                            <th>Total Value</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Panadol Extra</td>
                            <td>MED-1001</td>
                            <td>Pain Relief</td>
                            <td>Hikma Pharma</td>
                            <td>120</td>
                            <td>25 EGP</td>
                            <td>3000 EGP</td>
                            <td><span class="status active">In Stock</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showProductDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="adjustProductStock(this)">
                                                <i class="fa-solid fa-boxes-stacked"></i> Adjust stock
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="clearProductStock(this)">
                                                <i class="fa-solid fa-box-open"></i> Clear stock balance
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Augmentin 1g</td>
                            <td>MED-1002</td>
                            <td>Antibiotics</td>
                            <td>GSK</td>
                            <td>45</td>
                            <td>85 EGP</td>
                            <td>3825 EGP</td>
                            <td><span class="status low">Low Stock</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showProductDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="adjustProductStock(this)">
                                                <i class="fa-solid fa-boxes-stacked"></i> Adjust stock
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="clearProductStock(this)">
                                                <i class="fa-solid fa-box-open"></i> Clear stock balance
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Omeprazole 20mg</td>
                            <td>MED-1008</td>
                            <td>Gastro</td>
                            <td>Julphar</td>
                            <td>0</td>
                            <td>18 EGP</td>
                            <td>0 EGP</td>
                            <td><span class="status out">Out Of Stock</span></td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="showProductDetails(this)">
                                                <i class="fa-solid fa-eye"></i> Show details
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" onclick="adjustProductStock(this)">
                                                <i class="fa-solid fa-boxes-stacked"></i> Adjust stock
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item danger" type="button"
                                                onclick="clearProductStock(this)">
                                                <i class="fa-solid fa-box-open"></i> Clear stock balance
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