
function toggleBillingPanel() {
    const panel = document.getElementById('billingPanel');
    panel.classList.toggle('collapsed');
}

function expandBillingPanel() {
    const panel = document.getElementById('billingPanel');
    if (panel.classList.contains('collapsed')) {
        panel.classList.remove('collapsed');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.card, .stat-card, .chart-card, .table-card, .sales-table-card, .summary-card').forEach(function (card) {
        card.addEventListener('click', expandBillingPanel);
    });
});

function showToast(msg) {
    const t = document.getElementById('toast');
    document.getElementById('toastMsg').textContent = msg;
    t.classList.add('show');
    clearTimeout(t._timer);
    t._timer = setTimeout(() => t.classList.remove('show'), 2200);
}
function changeQty(btn, delta) {
    const row = btn.closest('tr');
    const input = row.querySelector('.qty-val');
    let val = parseInt(input.value) + delta;
    if (val < 1) val = 1;
    input.value = val;
    showToast('Quantity updated');
}
function updateCartEmptyState() {
    const table = document.querySelector('.cart-table');
    const emptyState = document.getElementById('cartEmptyState');

    if (!table || !emptyState) {
        return;
    }

    const hasItems = table.querySelectorAll('tbody tr').length > 0;
    table.classList.toggle('is-empty', !hasItems);
    emptyState.classList.toggle('show', !hasItems);
}
function removeRow(btn) {
    const row = btn.closest('tr');
    row.style.transition = 'opacity .25s, transform .25s';
    row.style.opacity = '0';
    row.style.transform = 'translateX(20px)';
    setTimeout(() => {
        row.remove();
        updateCartEmptyState();
        showToast('Item removed');
    }, 250);
}
function clearCart() {
    const rows = document.querySelectorAll('.cart-table tbody tr');

    if (rows.length === 0) {
        updateCartEmptyState();
        showToast('Cart is already empty');
        return;
    }

    rows.forEach((r, i) => {
        setTimeout(() => {
            r.style.transition = 'opacity .2s, transform .2s';
            r.style.opacity = '0';
            r.style.transform = 'translateX(20px)';
            setTimeout(() => {
                r.remove();

                if (i === rows.length - 1) {
                    updateCartEmptyState();
                }
            }, 200);
        }, i * 60);
    });
    showToast('Cart cleared');
}
function calcChange(input) {
    const received = parseFloat(input.value) || 0;
    const change = received - 342;
    const el = document.getElementById('changeVal');
    el.textContent = change >= 0 ? 'EGP ' + change.toFixed(2) : '- EGP ' + Math.abs(change).toFixed(2);
    el.style.color = change >= 0 ? '#16a34a' : '#e53e3e';
}
function selectPayment(radio) {
    document.querySelectorAll('.pay-method').forEach(l => l.classList.remove('selected'));
    radio.closest('.pay-method').classList.add('selected');
}

const invoiceDetails = {
    'INV-00152': {
        customer: {
            name: 'Walk-in Customer',
            phone: 'Not provided',
        },
        time: '18 May 2026',
        payment: 'Cash',
        status: 'Completed',
        items: [
            { name: 'Panadol Extra Tablet', qty: 2, unitPrice: 60, discount: 0, total: 120 },
            { name: 'Vitamin C 1000mg', qty: 2, unitPrice: 100, discount: 0, total: 200 },
        ],
        subtotal: 320,
        discount: 0,
        tax: 0,
        total: 320,
    },
    'INV-00151': {
        customer: {
            name: 'Ahmed Saad',
            phone: '+20 100 123 4567',
        },
        time: '18 May 2026',
        payment: 'Card',
        status: 'Completed',
        items: [
            { name: 'Augmentin 625mg', qty: 3, unitPrice: 85, discount: 0, total: 255 },
            { name: 'Cataflam 50mg Tablet', qty: 2, unitPrice: 85, discount: 0, total: 170 },
            { name: 'Medical Cotton 100g', qty: 1, unitPrice: 25, discount: 0, total: 25 },
        ],
        subtotal: 450,
        discount: 0,
        tax: 0,
        total: 450,
    },
    'INV-000125': {
        customer: {
            name: 'Walk-in Customer',
            phone: 'Not provided',
        },
        time: 'Today, 10:30 AM',
        payment: 'Cash',
        status: 'Completed',
        items: [
            { name: 'Cataflam 50mg Tablet', qty: 1, unitPrice: 85, discount: 0, total: 85 },
            { name: 'Normal Saline 500ml', qty: 1, unitPrice: 40, discount: 0, total: 40 },
        ],
        subtotal: 125,
        discount: 0,
        tax: 0,
        total: 125,
    },
    'INV-000124': {
        customer: {
            name: 'Ahmed Mohamed',
            phone: '+20 100 555 2144',
        },
        time: 'Today, 10:15 AM',
        payment: 'Card',
        status: 'Completed',
        items: [
            { name: 'Augmentin 625mg Tablet', qty: 1, unitPrice: 150, discount: 10, total: 140 },
            { name: 'Panadol Extra Tablet', qty: 2, unitPrice: 30, discount: 0, total: 60 },
            { name: 'Vitamin C Sachet', qty: 1, unitPrice: 16.6, discount: 0, total: 16.6 },
        ],
        subtotal: 226.6,
        discount: 10,
        tax: 0,
        total: 216.6,
    },
    'INV-000123': {
        customer: {
            name: 'Walk-in Customer',
            phone: 'Not provided',
        },
        time: 'Today, 10:02 AM',
        payment: 'Cash',
        status: 'Completed',
        items: [
            { name: 'Omega 3 Capsules', qty: 2, unitPrice: 120, discount: 0, total: 240 },
            { name: 'Betadine Solution 120ml', qty: 1, unitPrice: 75, discount: 0, total: 75 },
            { name: 'Medical Cotton 100g', qty: 1, unitPrice: 45, discount: 0, total: 45 },
        ],
        subtotal: 360,
        discount: 0,
        tax: 0,
        total: 360,
    },
};

function formatCurrency(amount) {
    return 'EGP ' + amount.toFixed(2);
}

function openInvoiceModal(invoiceNumber) {
    const invoice = invoiceDetails[invoiceNumber];
    const modal = document.getElementById('invoiceModal');

    if (!invoice || !modal) {
        showToast('Invoice details are not available');
        return;
    }

    document.getElementById('invoiceModalTitle').textContent = invoiceNumber;
    document.getElementById('invoiceModalTime').textContent = invoice.time;
    document.getElementById('invoiceCustomerName').textContent = invoice.customer.name;
    document.getElementById('invoiceCustomerPhone').textContent = invoice.customer.phone;
    document.getElementById('invoicePaymentMethod').textContent = invoice.payment;
    document.getElementById('invoiceStatus').textContent = invoice.status;
    document.getElementById('invoiceSubtotal').textContent = formatCurrency(invoice.subtotal);
    document.getElementById('invoiceDiscount').textContent = '- ' + formatCurrency(invoice.discount);
    document.getElementById('invoiceTax').textContent = formatCurrency(invoice.tax);
    document.getElementById('invoiceTotal').textContent = formatCurrency(invoice.total);

    document.getElementById('invoiceItemsBody').innerHTML = invoice.items.map((item) => `
        <tr>
            <td>${item.name}</td>
            <td>${item.qty}</td>
            <td>${formatCurrency(item.unitPrice)}</td>
            <td>${formatCurrency(item.discount)}</td>
            <td>${formatCurrency(item.total)}</td>
        </tr>
    `).join('');

    modal.classList.add('show');
    modal.setAttribute('aria-hidden', 'false');
}

function closeInvoiceModal() {
    const modal = document.getElementById('invoiceModal');

    if (!modal) {
        return;
    }

    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
}

function completeSale() {
    const btn = document.querySelector('.complete-btn');
    btn.style.background = '#16a34a';
    btn.style.boxShadow = '0 4px 14px rgba(22,163,74,.35)';
    btn.innerHTML = '✓ Sale Completed! <span class="kbd-light">F5</span>';
    showToast('Sale completed successfully!');
    setTimeout(() => {
        btn.style.background = '';
        btn.style.boxShadow = '';
        btn.innerHTML = 'Complete Sale <span class="kbd-light">F5</span>';
    }, 2200);
}
document.addEventListener('keydown', (e) => {
    if (e.key === 'F2') { e.preventDefault(); document.getElementById('searchInput').focus(); }
    if (e.key === 'F3') { e.preventDefault(); showToast('New sale started'); }
    if (e.key === 'F4') { e.preventDefault(); showToast('Sale held'); }
    if (e.key === 'F5') { e.preventDefault(); completeSale(); }
    if (e.key === 'F6') { e.preventDefault(); showToast('Printing invoice...'); }
    if (e.key === 'F7') { e.preventDefault(); showToast('Draft saved'); }
    if (e.key === 'Escape') { closeInvoiceModal(); }
});

const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.getElementById('sidebarToggle');

if (localStorage.getItem('sidebar') === 'closed') {
    sidebar.classList.add('closed');
}

toggleBtn.addEventListener('click', () => {
    if (window.innerWidth <= 480) {
        sidebar.classList.toggle('mobile-open');
    } else {
        sidebar.classList.toggle('closed');
        localStorage.setItem(
            'sidebar',
            sidebar.classList.contains('closed') ? 'closed' : 'open'
        );
    }
});

// Close mobile sidebar when clicking outside
document.addEventListener('click', function (e) {
    if (
        window.innerWidth <= 480 &&
        sidebar.classList.contains('mobile-open') &&
        !sidebar.contains(e.target) &&
        !toggleBtn.contains(e.target)
    ) {
        sidebar.classList.remove('mobile-open');
    }
});



// function showProductDetails(button) {
//     alert('Show Product Details');
// }

function adjustProductStock(button) {
    alert('Adjust Product Stock');
}

function clearProductStock(button) {
    if (confirm('Are you sure you want to clear stock balance?')) {
        alert('Stock Cleared');
    }
}
// show product details popup
const popup = document.getElementById('productDetailsPopup');

if (popup) {
    popup.addEventListener('click', function (e) {

        if (e.target === popup) {
            closeProductDetails();
        }
    });
    window.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeProductDetails();
        }
    });

}

function showProductDetails() {

    document
        .getElementById('productDetailsPopup')
        .classList.add('show');
}

function closeProductDetails() {

    document
        .getElementById('productDetailsPopup')
        .classList.remove('show');
}




// function showCustomerInfo() {
//     alert('Customer Info');
// }

function editCustomerData() {
    alert('Edit Customer Data');
}

function deleteCustomer() {

    if (confirm('Delete this customer?')) {
        alert('Customer Deleted');
    }

}

// customer info menu
const customerPopup = document.getElementById('customerPopup');

showCustomerInfo = function () {

    customerPopup.classList.add('show');
};
closeCustomerInfo = function () {

    customerPopup.classList.remove('show');
}
if (customerPopup) {
    customerPopup.addEventListener('click', function (e) {

        if (e.target === customerPopup) {
            closeCustomerInfo();
        }
    });
    window.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeCustomerInfo();
        }
    });

}



// User Info Popup
const userPopup = document.getElementById('userPopup');

function showUserInfo(data) {
    if (!userPopup) { return; }
    document.getElementById('userPopupAvatar').textContent = data.avatar;
    document.getElementById('userPopupName').textContent = data.name;
    document.getElementById('userPopupStatus').textContent = data.status;
    document.getElementById('userPopupPhone').textContent = data.phone;
    document.getElementById('userPopupEmail').textContent = data.email;
    document.getElementById('userPopupRole').textContent = data.role;
    document.getElementById('userPopupBranch').textContent = data.branch;
    document.getElementById('userPopupLastLogin').textContent = data.lastLogin;
    document.getElementById('userPopupSince').textContent = data.since;
    userPopup.classList.add('show');
}

function closeUserInfo() {
    if (userPopup) {
        userPopup.classList.remove('show');
    }
}

if (userPopup) {
    userPopup.addEventListener('click', function (e) {
        if (e.target === userPopup) {
            closeUserInfo();
        }
    });
    window.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeUserInfo();
        }
    });
}

function editUserData() {
    alert('Edit User Data');
}

function deleteUser() {
    if (confirm('Delete this user?')) {
        alert('User Deleted');
    }
}

// Add Product Popup
const addProductPopup = document.getElementById('addProductPopup');

function openAddProductPopup() {
    if (addProductPopup) {
        addProductPopup.classList.add('show');
    }
}

function closeAddProductPopup() {
    if (addProductPopup) {
        addProductPopup.classList.remove('show');
        // Reset form
        const form = addProductPopup.querySelector('.add-product-form');
        if (form) {
            form.reset();
        }
    }
}

// Close popup when clicking backdrop
if (addProductPopup) {
    addProductPopup.addEventListener('click', function (e) {
        if (e.target === addProductPopup) {
            closeAddProductPopup();
        }
    });

    // Close on Escape key
    window.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && addProductPopup.classList.contains('show')) {
            closeAddProductPopup();
        }
    });
}

// Handle form submission
function handleAddProduct(event) {
    event.preventDefault();

    // Get form data
    const formData = {
        name: document.getElementById('productName')?.value || '',
        sku: document.getElementById('productSKU')?.value || '',
        barcode: document.getElementById('productBarcode')?.value || '',
        category: document.getElementById('productCategory')?.value || '',
        supplier: document.getElementById('productSupplier')?.value || '',
        price: document.getElementById('productPrice')?.value || '',
        stock: document.getElementById('productStock')?.value || '',
        reorder: document.getElementById('productReorder')?.value || '',
        expiry: document.getElementById('productExpiry')?.value || '',
        batch: document.getElementById('productBatch')?.value || '',
        location: document.getElementById('productLocation')?.value || '',
        description: document.getElementById('productDescription')?.value || ''
    };

    // Here you would normally send to backend
    console.log('New Product Data:', formData);

    // Show success message
    showToast('Product added successfully!');

    // Close popup
    closeAddProductPopup();

    return false;
}

function showPurchaseDetails(button) {
    alert('Show Purchase Details');
}

function printPurchaseInvoice(button) {
    alert('Printing Purchase Invoice...');
}

function cancelPurchase(button) {
    if (confirm('Are you sure you want to cancel this purchase?')) {
        alert('Purchase Cancelled');
    }
}

function showSupplierDetails(button) {
    alert('Show Supplier Details');
}

function editSupplier(button) {
    alert('Edit Supplier Data');
}

function deleteSupplier(button) {
    if (confirm('Delete this supplier?')) {
        alert('Supplier Deleted');
    }
}

