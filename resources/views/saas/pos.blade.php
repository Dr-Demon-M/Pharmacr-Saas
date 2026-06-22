@extends('layouts.app')
@section('title', 'New invoice')
@section('content')
    <div class="content">
        <!-- Cart Panel -->
        <div class="cart-panel">
            <p class="section-title">Cart (3 Items)</p>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th style="width: 30px">#</th>
                        <th>Medicine</th>
                        <th style="width: 110px">Qty</th>
                        <th style="width: 90px">Unit Price</th>
                        <th style="width: 90px">Discount</th>
                        <th style="width: 80px">Total</th>
                        <th style="width: 80px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color: #a0aec0; font-size: 12px">1</td>
                        <td><span class="med-name">Augmentin 1g Tablet</span></td>
                        <td>
                            <div class="qty-ctrl">
                                <button class="qty-btn" onclick="changeQty(this, -1)">
                                    −</button><input class="qty-val" type="text" value="2" readonly /><button
                                    class="qty-btn" onclick="changeQty(this, 1)">
                                    +
                                </button>
                            </div>
                        </td>
                        <td>125.00</td>
                        <td><input placeholder="0.00" class="disc-input" type="text" /></td>
                        <td class="total-cell">250.00</td>
                        <td>
                            <button class="remove-btn" onclick="removeRow(this)">
                                Remove
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #a0aec0; font-size: 12px">2</td>
                        <td><span class="med-name">Panadol Extra Tablet</span></td>
                        <td>
                            <div class="qty-ctrl">
                                <button class="qty-btn" onclick="changeQty(this, -1)">
                                    −</button><input class="qty-val" type="text" value="1" readonly /><button
                                    class="qty-btn" onclick="changeQty(this, 1)">
                                    +
                                </button>
                            </div>
                        </td>
                        <td>30.00</td>
                        <td><input placeholder="0.00" class="disc-input" type="text" /></td>
                        <td class="total-cell">30.00</td>
                        <td>
                            <button class="remove-btn" onclick="removeRow(this)">
                                Remove
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #a0aec0; font-size: 12px">3</td>
                        <td><span class="med-name">Vitamin C 500mg Tablet</span></td>
                        <td>
                            <div class="qty-ctrl">
                                <button class="qty-btn" onclick="changeQty(this, -1)">
                                    −</button><input class="qty-val" type="text" value="1" readonly /><button
                                    class="qty-btn" onclick="changeQty(this, 1)">
                                    +
                                </button>
                            </div>
                        </td>
                        <td>35.00</td>
                        <td><input placeholder="0.00" class="disc-input" type="text" /></td>
                        <td class="total-cell">35.00</td>
                        <td>
                            <button class="remove-btn" onclick="removeRow(this)">
                                Remove
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-empty-state" id="cartEmptyState" aria-live="polite">
                <div class="cart-empty-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7V5a1 1 0 0 1 1-1h2" />
                        <path d="M17 4h2a1 1 0 0 1 1 1v2" />
                        <path d="M20 17v2a1 1 0 0 1-1 1h-2" />
                        <path d="M7 20H5a1 1 0 0 1-1-1v-2" />
                        <path d="M7 8v8" />
                        <path d="M10 8v8" />
                        <path d="M14 8v8" />
                        <path d="M17 8v8" />
                    </svg>
                </div>
                <p>Scan code to add first product</p>
            </div>
            <div class="cart-footer">
                <button class="clear-btn" onclick="clearCart()">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="3 6 5 6 21 6" />
                        <path d="M19 6l-1 14H6L5 6" />
                        <path d="M10 11v6M14 11v6" />
                        <path d="M9 6V4h6v2" />
                    </svg>
                    Clear Cart
                </button>
            </div>

            <!-- Customer -->
            <div class="customer-section">
                <p class="customer-title">Customer (Optional)</p>
                <div class="cust-row">
                    <div class="field-group">
                        <label>Customer Name</label>
                        <input type="text" placeholder="Enter customer name..." />
                    </div>
                    <div class="field-group">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter phone number..." />
                    </div>
                </div>
            </div>

            <!-- Recent Sales -->
            <div class="recent-section">
                <p class="recent-title">Recent Sales</p>
                <table class="recent-table">
                    <thead>
                        <tr>
                            <th>Invoice #</th>
                            <th>Customer</th>
                            <th>Time</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: 500; ">INV-000125</td>
                            <td>Walk-in Customer</td>
                            <td>10:30 AM</td>
                            <td style="font-weight: 500; ">EGP 125.00</td>
                            <td>Cash</td>
                            <td>
                                <span class="status-badge completed">Completed</span>
                            </td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-000125')">
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500; ">INV-000124</td>
                            <td>Ahmed Mohamed</td>
                            <td>10:15 AM</td>
                            <td style="font-weight: 500; ">EGP 216.60</td>
                            <td>Card</td>
                            <td>
                                <span class="status-badge completed">Completed</span>
                            </td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-000124')">
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: 500; ">INV-000123</td>
                            <td>Walk-in Customer</td>
                            <td>10:02 AM</td>
                            <td style="font-weight: 500; ">EGP 360.00</td>
                            <td>Cash</td>
                            <td>
                                <span class="status-badge completed">Completed</span>
                            </td>
                            <td>
                                <button class="view-link" type="button" onclick="openInvoiceModal('INV-000123')">
                                    View
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Billing Panel -->
        <div class="billing-panel" id="billingPanel">
            <div class="billing-panel-header" onclick="toggleBillingPanel()">
                <p class="billing-title">Billing Summary</p>
                <button class="billing-toggle-btn" id="billingToggleBtn" aria-label="Toggle billing panel">
                    <svg id="billingArrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </button>
            </div>

            <!-- Collapsed hint — only visible when panel is closed -->
            <div class="billing-collapsed-hint" onclick="toggleBillingPanel()">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
                <span>Show Billing Summary</span>
            </div>

            <div class="billing-panel-body" id="billingPanelBody">

                <div class="bill-row subtotal">
                    <span class="label" style="color: #4a5568">Subtotal</span>
                    <span class="value">EGP 315.00</span>
                </div>
                <div class="bill-row">
                    <span class="label" style="color: #4a5568">Discount</span>
                    <div style="display: flex; align-items: center; gap: 8px">
                        <input class="disc-inline-input" type="text" value="15.00" />
                        <select class="currency-select">
                            <option>EGP</option>
                            <option>%</option>
                        </select>
                    </div>
                    <span style="color: #e53e3e; font-weight: 600">- EGP 15.00</span>
                </div>
                <div class="bill-row">
                    <span class="label" style="color: #4a5568">Tax (14%)</span>
                    <span class="value">EGP 42.00</span>
                </div>
                <div class="bill-row total">
                    <span class="label">TOTAL</span>
                    <span class="value">EGP 342.00</span>
                </div>

                <hr class="section-divider" />

                <p class="payment-title">Payment</p>
                <p style="font-size: 12px; color: #718096; margin-bottom: 10px">
                    Payment Method
                </p>
                <div class="payment-methods">
                    <label class="pay-method selected"><input type="radio" name="payment" checked
                            onchange="selectPayment(this)" />
                        Cash</label>
                    <label class="pay-method"><input type="radio" name="payment" onchange="selectPayment(this)" />
                        Card</label>
                    <label class="pay-method"><input type="radio" name="payment" onchange="selectPayment(this)" />
                        Wallet</label>
                    <label class="pay-method"><input type="radio" name="payment" onchange="selectPayment(this)" />
                        Other</label>
                </div>

                <div class="amount-group">
                    <label>Amount Received</label>
                    <div class="amount-row">
                        <input type="text" value="400.00" oninput="calcChange(this)" />
                        <span class="amount-currency">EGP</span>
                    </div>
                </div>

                <div class="change-row">
                    <span class="label">Change</span>
                    <span class="value" id="changeVal">EGP 58.00</span>
                </div>

                <button class="complete-btn" onclick="completeSale()">
                    Complete Sale
                    <span class="kbd-light">F5</span>
                </button>

                <div class="action-row">
                    <button class="action-btn" onclick="showToast('Printing invoice...')">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 6 2 18 2 18 9" />
                            <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2" />
                            <rect x="6" y="14" width="12" height="8" />
                        </svg>
                        Print Invoice
                        <span class="kbd" style="margin-left: 2px">F6</span>
                    </button>
                    <button class="action-btn" onclick="showToast('Draft saved')">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                        Save Draft <span class="kbd" style="margin-left: 2px">F7</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

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