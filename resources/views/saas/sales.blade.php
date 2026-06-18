@extends('layouts.app')
@section('title', 'Sales')
@section('content')
    <!-- SALES CONTENT -->

    <section class="sales-content">
        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-header">

                    <div class="stat-icon blue">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>

                    <div>
                        <h4>Total Sales</h4>
                        <h2>EGP 24,560</h2>
                    </div>

                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">

                    <div class="stat-icon green">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <div>
                        <h4>Total Profit</h4>
                        <h2>EGP 6,450</h2>
                    </div>

                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">

                    <div class="stat-icon yellow">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>

                    <div>
                        <h4>Total Invoices</h4>
                        <h2>152</h2>
                    </div>

                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">

                    <div class="stat-icon red">
                        <i class="fa-solid fa-arrow-rotate-left"></i>
                    </div>

                    <div>
                        <h4>Total Returns</h4>
                        <h2>5</h2>
                    </div>

                </div>
            </div>

        </div>

        <div class="sales-layout">

            <div class="sales-table-card">

                <div class="filters">

                    <input type="text" placeholder="Search invoices..." />

                    <input type="date" />

                    <a href="{{ route('pos') }}" class="primary-btn">
                        + New Sale
                    </a>

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
                            <th>Action</th>
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
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-00152')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>INV-00151</td>
                            <td>Ahmed Saad</td>
                            <td>18 May 2026</td>
                            <td>EGP 450</td>
                            <td>Card</td>
                            <td>Completed</td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-00151')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>INV-00150</td>
                            <td>Ibrahim Saad</td>
                            <td>17 May 2026</td>
                            <td>EGP 250</td>
                            <td>Card</td>
                            <td>Completed</td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-00150')">
                                    View
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>INV-000125</td>
                            <td>Ahmed Alaa</td>
                            <td>10 May 2026</td>
                            <td>EGP 790</td>
                            <td>Cash</td>
                            <td>Completed</td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-000125')">
                                    View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="summary-card">

                <h3>Sales Summary</h3>

                <div class="summary-item">
                    <span>Total Sales</span>
                    <strong>EGP 24,560</strong>
                </div>

                <div class="summary-item">
                    <span>Total Profit</span>
                    <strong>EGP 6,450</strong>
                </div>

                <div class="summary-item">
                    <span>Total Tax</span>
                    <strong>EGP 3,860</strong>
                </div>

            </div>

        </div>
    </section>

    <div class="invoice-modal" id="invoiceModal" aria-hidden="true">
        <div class="invoice-modal-backdrop" onclick="closeInvoiceModal()"></div>
        <div class="invoice-dialog" role="dialog" aria-modal="true" aria-labelledby="invoiceModalTitle">
            <div class="invoice-modal-header">
                <div>
                    <p class="invoice-eyebrow">Invoice Details</p>
                    <h2 id="invoiceModalTitle">Invoice</h2>
                    <span id="invoiceModalTime">--</span>
                </div>
                <button class="invoice-close-btn" type="button" onclick="closeInvoiceModal()" aria-label="Close invoice">
                    x
                </button>
            </div>

            <div class="invoice-customer-grid">
                <div>
                    <span>Customer</span>
                    <strong id="invoiceCustomerName">--</strong>
                </div>
                <div>
                    <span>Phone</span>
                    <strong id="invoiceCustomerPhone">--</strong>
                </div>
                <div>
                    <span>Payment</span>
                    <strong id="invoicePaymentMethod">--</strong>
                </div>
                <div>
                    <span>Status</span>
                    <strong id="invoiceStatus">--</strong>
                </div>
            </div>

            <div class="invoice-items-wrap">
                <table class="invoice-items-table">
                    <thead>
                        <tr>
                            <th>Drug</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody id="invoiceItemsBody"></tbody>
                </table>
            </div>

            <div class="invoice-summary">
                <div>
                    <span>Subtotal</span>
                    <strong id="invoiceSubtotal">EGP 0.00</strong>
                </div>
                <div>
                    <span>Discount</span>
                    <strong class="invoice-discount" id="invoiceDiscount">- EGP 0.00</strong>
                </div>
                <div>
                    <span>Tax</span>
                    <strong id="invoiceTax">EGP 0.00</strong>
                </div>
                <div class="invoice-grand-total">
                    <span>Total</span>
                    <strong id="invoiceTotal">EGP 0.00</strong>
                </div>
            </div>
        </div>
    </div>
@endsection
