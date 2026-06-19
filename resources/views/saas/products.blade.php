@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <!-- PRODUCTS CONTENT -->

    <section class="products-content">

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">

                <div class="stat-header">

                    <div class="stat-icon blue">
                        <i class="fa-solid fa-capsules"></i>
                    </div>

                    <div>
                        <h4>Total Products</h4>
                        <h2>1250</h2>
                    </div>

                </div>

            </div>

            <div class="stat-card">

                <div class="stat-header">

                    <div class="stat-icon green">
                        <i class="fa-solid fa-box-open"></i>
                    </div>

                    <div>
                        <h4>In Stock</h4>
                        <h2>980</h2>
                    </div>

                </div>

            </div>

            <div class="stat-card">

                <div class="stat-header">

                    <div class="stat-icon yellow">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>

                    <div>
                        <h4>Low Stock</h4>
                        <h2>120</h2>
                    </div>

                </div>

            </div>

            <div class="stat-card">

                <div class="stat-header">

                    <div class="stat-icon red">
                        <i class="fa-solid fa-box"></i>
                    </div>

                    <div>
                        <h4>Out of Stock</h4>
                        <h2>15</h2>
                    </div>

                </div>

            </div>

        </div>

        <!-- Filters -->

        <div class="products-toolbar">

            <input type="text" placeholder="Search product..." class="search-input">

            <select>
                <option>All Categories</option>
            </select>

            <select>
                <option>All Status</option>
            </select>

            <button class="btn-secondary">
                Filters
            </button>

            <button class="btn-primary" onclick="openAddProductPopup()">
                + Add New Product
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
                            <input type="text" id="productSKU" required placeholder="e.g., PAN-500">
                        </div>

                        <!-- Barcode -->
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

                        <!-- Unit -->
                        <div class="form-group">
                            <label for="productUnit">Unit *</label>
                            <select id="productUnit" required>
                                <option value="">Select Unit</option>
                                <option value="Box">Box</option>
                                <option value="Strip">Strip</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Bottle">Bottle</option>
                                <option value="Ampoule">Ampoule</option>
                                <option value="Vial">Vial</option>
                                <option value="Tube">Tube</option>
                                <option value="Sachet">Sachet</option>
                            </select>
                        </div>

                        <!-- Unit Price -->
                        <div class="form-group">
                            <label for="productPrice">Unit Price (EGP) *</label>
                            <input type="number" id="productPrice" required min="0" step="0.01" placeholder="0.00">
                        </div>

                        <!-- Initial Stock Quantity -->
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

        <!-- Table -->
        {{-- product popup --}}
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
                            <th>Name</th>
                            <th>SKU</th>
                            <th>Category</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Expiry Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>Panadol Extra</td>
                            <td>PAN500</td>
                            <td>Pain Relief</td>
                            <td>Box</td>
                            <td>20 EGP</td>
                            <td>120</td>
                            <td>20/11/2027</td>
                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="dropdown-item danger" type="button" onclick="clearProductStock(this)">
                                                <i class="fa-solid fa-box-open"></i> Clear stock balance
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Augmentin 625mg</td>
                            <td>AUG625</td>
                            <td>Antibiotics</td>
                            <td>Box</td>
                            <td>85 EGP</td>
                            <td>85</td>
                            <td>18/09/2027</td>
                            <td>
                                <span class="status active">
                                    Active
                                </span>
                            </td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="dropdown-item danger" type="button" onclick="clearProductStock(this)">
                                                <i class="fa-solid fa-box-open"></i> Clear stock balance
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Vitamin C 1000mg</td>
                            <td>VIT1000</td>
                            <td>Vitamins</td>
                            <td>Box</td>
                            <td>60 EGP</td>
                            <td>40</td>
                            <td>15/07/2027</td>
                            <td>
                                <span class="status low">
                                    Low Stock
                                </span>
                            </td>
                            <td>
                                <div class="product-action dropdown">
                                    <button class="product-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <button class="dropdown-item danger" type="button" onclick="clearProductStock(this)">
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
