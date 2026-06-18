@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section class="dashboard-content">

        <!-- Stats Cards -->
        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>

                <div>
                    <h4>Total Sales</h4>
                    <h2>EGP 24,560</h2>
                    <span>+12.5% from yesterday</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div>
                    <h4>Total Profit</h4>
                    <h2>EGP 6,450</h2>
                    <span>+8.3% from yesterday</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon yellow">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>

                <div>
                    <h4>Total Invoices</h4>
                    <h2>152</h2>
                    <span>+10.2% from yesterday</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>

                <div>
                    <h4>Low Stock Items</h4>
                    <h2>23</h2>
                    <span>-8.1% from yesterday</span>
                </div>
            </div>

        </div>

        <!-- Charts Section -->
        <div class="dashboard-row">

            <div class="card sales-overview">
                <div class="card-header">
                    <h3>Sales Overview</h3>
                    <select>
                        <option>This Week</option>
                        <option>This Month</option>
                    </select>
                </div>

                <div class="dashboard-sales-chart">
                    <div class="chart-grid-lines" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="dashboard-chart-bars" aria-label="Fake weekly sales chart">
                        <div class="dashboard-chart-bar" style="--bar-height: 48%">
                            <span>EGP 2.8k</span>
                            <strong>Sun</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 62%">
                            <span>EGP 3.6k</span>
                            <strong>Mon</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 55%">
                            <span>EGP 3.2k</span>
                            <strong>Tue</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 78%">
                            <span>EGP 4.8k</span>
                            <strong>Wed</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 70%">
                            <span>EGP 4.1k</span>
                            <strong>Thu</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 88%">
                            <span>EGP 5.4k</span>
                            <strong>Fri</strong>
                        </div>

                        <div class="dashboard-chart-bar" style="--bar-height: 66%">
                            <span>EGP 3.9k</span>
                            <strong>Sat</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card low-stock-alerts">
                <div class="card-header">
                    <h3>Low Stock Alerts</h3>
                    <a href="#">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>SKU</th>
                            <th>Stock</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Amoxicillin 500mg</td>
                            <td>AMX500</td>
                            <td>10</td>
                            <td>Low Stock</td>
                        </tr>

                        <tr>
                            <td>Vitamin C 1000mg</td>
                            <td>VIT1000</td>
                            <td>7</td>
                            <td>Low Stock</td>
                        </tr>

                        <tr>
                            <td>Zyrtec 10mg</td>
                            <td>ZYR10</td>
                            <td>4</td>
                            <td>Out Of Stock</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

        <!-- Bottom Section -->
        <div class="dashboard-row">

            <div class="card recent-sales">

                <div class="card-header">
                    <h3>Recent Sales</h3>
                    <a href="#">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>INV-00152</td>
                            <td>Walk-in Customer</td>
                            <td>18 May 2026</td>
                            <td>EGP 320</td>
                            <td>Cash</td>
                            <td>Completed</td>
                        </tr>

                        <tr>
                            <td>INV-00151</td>
                            <td>Ahmed Saad</td>
                            <td>18 May 2026</td>
                            <td>EGP 450</td>
                            <td>Card</td>
                            <td>Completed</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card top-products">

                <div class="card-header">
                    <h3>Top Selling Products</h3>
                    <a href="#">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Sold Qty</th>
                            <th>Total Sales</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Panadol Extra</td>
                            <td>245</td>
                            <td>EGP 7,350</td>
                        </tr>

                        <tr>
                            <td>Amoxicillin 500mg</td>
                            <td>198</td>
                            <td>EGP 5,940</td>
                        </tr>

                        <tr>
                            <td>Vitamin C 1000mg</td>
                            <td>156</td>
                            <td>EGP 4,680</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </section>
@endsection
