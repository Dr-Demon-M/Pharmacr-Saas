@extends('layouts.app')

@section('title', 'reports')

@section('content')

    <section class="reports-content">

        <!-- Stats Cards -->

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon blue">💼</div>
                <div>
                    <h4>Total Sales</h4>
                    <h2>524,250 EGP</h2>
                    <span>↑ 12.5% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">📈</div>
                <div>
                    <h4>Total Orders</h4>
                    <h2>2,152</h2>
                    <span>↑ 8.3% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">👥</div>
                <div>
                    <h4>Total Customers</h4>
                    <h2>1,250</h2>
                    <span>↑ 6.7% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">💰</div>
                <div>
                    <h4>Avg. Order Value</h4>
                    <h2>243.60 EGP</h2>
                    <span>↑ 5.2% from last month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">🏷️</div>
                <div>
                    <h4>Total Profit</h4>
                    <h2>124,850 EGP</h2>
                    <span>↑ 10.1% from last month</span>
                </div>
            </div>

        </div>

        <!-- Filters -->

        <div class="report-filters">

            <input type="date">

            <select>
                <option>All Branches</option>
            </select>

            <select>
                <option>All Categories</option>
            </select>

            <select>
                <option>All Payment Methods</option>
            </select>

            <button class="export-btn">
                Export Report
            </button>

        </div>

        <!-- Charts Row -->

        <div class="charts-grid">

            <div class="chart-card">
                <h3>Sales Overview</h3>

                <div class="sales-chart">


                </div>

            </div>

            <div class="chart-card">

                <h3>Sales By Category</h3>

                <div class="donut-chart"></div>

                <ul class="legend">
                    <li>Medicines</li>
                    <li>Supplements</li>
                    <li>Personal Care</li>
                    <li>Baby Care</li>
                    <li>Devices</li>
                </ul>

            </div>

        </div>

        <!-- Report Table -->

        <div class="table-card">

            <div class="table-header">
                <h3>Sales Summary</h3>
            </div>

            <table>

                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Orders</th>
                        <th>Sales</th>
                        <th>Discounts</th>
                        <th>Taxes</th>
                        <th>Profit</th>
                        <th>Avg Order</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>31 May 2025</td>
                        <td>72</td>
                        <td>18,450</td>
                        <td>820</td>
                        <td>1,420</td>
                        <td>4,320</td>
                        <td>256.25</td>
                    </tr>

                    <tr>
                        <td>30 May 2025</td>
                        <td>68</td>
                        <td>16,850</td>
                        <td>760</td>
                        <td>1,300</td>
                        <td>3,980</td>
                        <td>247.79</td>
                    </tr>

                    <tr>
                        <td>29 May 2025</td>
                        <td>65</td>
                        <td>15,230</td>
                        <td>650</td>
                        <td>1,180</td>
                        <td>3,620</td>
                        <td>234.31</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>

@endsection
