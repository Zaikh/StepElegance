@extends('layouts.app')

@section('content')
<div class="container py-5">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 mb-4">
                <div class="card-header bg-gradient-primary text-white py-3 rounded-top-4">
                    <h4 class="mb-0"><i class="fas fa-shopping-bag me-2"></i>Order Summary</h4>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 100px"></th>
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-end">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach(session('cart', []) as $id => $details)
                                    @php 
                                        $subtotal = $details['price'] * $details['quantity'];
                                        $total += $subtotal;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="ratio ratio-1x1 rounded-3 overflow-hidden" style="max-width:80px;">
                                                <img src="{{ asset('assets/' . $details['image']) }}" 
                                                     alt="{{ $details['name'] }}" 
                                                     class="img-fluid object-fit-cover w-100 h-100">
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $details['name'] }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bold">${{ number_format($details['price'], 2) }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-primary">{{ $details['quantity'] }}</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary">${{ number_format($subtotal, 2) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                    <td class="text-end">
                                        <h5 class="mb-0 text-primary">${{ number_format($total, 2) }}</h5>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient-primary text-white py-3 rounded-top-4">
                    <h4 class="mb-0"><i class="fas fa-credit-card me-2"></i>Payment Information</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('place.order') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name on Card</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="card_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Card Number</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                <input type="text" name="card_number" class="form-control" placeholder="XXXX XXXX XXXX XXXX" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Expiry Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input type="text" name="expiry_date" class="form-control" placeholder="MM/YY" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CVV</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="text" name="cvv" class="form-control" placeholder="XXX" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-lock me-2"></i>Place Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    transition: transform 0.2s ease-in-out;
}
.card:hover {
    transform: translateY(-5px);
}
.bg-gradient-primary {
    background: linear-gradient(45deg, #4a73e8, #9116ff);
}
.input-group-text {
    background-color: #f8f9fa;
    border-right: none;
}
.form-control {
    border-left: none;
}
.form-control:focus {
    border-color: #ced4da;
    box-shadow: none;
}
.input-group:focus-within {
    box-shadow: 0 0 0 0.25rem rgba(74, 115, 232, 0.25);
}
.input-group:focus-within .input-group-text,
.input-group:focus-within .form-control {
    border-color: #4a73e8;
}
.table > :not(caption) > * > * {
    padding: 1rem;
    vertical-align: middle;
}
.object-fit-cover {
    object-fit: cover;
}

button[type="submit"] {
    appearance: none;
    -webkit-appearance: none;
    border-radius: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    filter: brightness(1.05);
}

button[type="submit"]:active {
    transform: scale(0.98);
}

/* ===========================
   RESPONSIVE MEDIA QUERIES
   =========================== */

/* Large tablets & small laptops (≤ 1024px) */
@media (max-width: 1024px) {
    .container {
        padding-left: 20px;
        padding-right: 20px;
    }
}

/* Tablets (≤ 900px) */
@media (max-width: 900px) {
    .card-body {
        padding: 1.5rem;
    }

    table th,
    table td {
        font-size: 0.9rem;
    }
}

/* Tablets portrait (≤ 768px) */
@media (max-width: 768px) {
    .row.g-4 {
        row-gap: 2rem;
    }

    .card-header h4 {
        font-size: 1.1rem;
    }

    .table > :not(caption) > * > * {
        padding: 0.75rem;
    }
}

/* Large mobiles (≤ 600px) */
@media (max-width: 600px) {
    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border-bottom: 1px solid #dee2e6;
    }

    .table tbody td {
        display: flex;
        justify-content: space-between;
        text-align: right;
        padding: 0.5rem 0;
    }

    .table tbody td::before {
        content: attr(data-label);
        font-weight: 600;
        text-align: left;
    }

    .ratio {
        max-width: 60px !important;
    }
}

/* Small mobiles (≤ 480px) */
@media (max-width: 480px) {
    .card-header h4 {
        font-size: 1rem;
    }

    .btn-lg {
        font-size: 0.95rem;
        padding: 0.6rem;
    }

    .badge {
        font-size: 0.75rem;
    }
}

/* Extra small devices (≤ 360px) */
@media (max-width: 360px) {
    .card-body {
        padding: 1rem;
    }

    table td,
    table th {
        font-size: 0.8rem;
    }
}

/* Ultra small devices (≤ 320px) */
@media (max-width: 320px) {
    h4 {
        font-size: 0.9rem;
    }

    .btn {
        font-size: 0.85rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    const cardNumber = document.querySelector('input[name="card_number"]');
    cardNumber.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{4})/g, '$1 ').trim();
        e.target.value = value;
    });

    const expiryDate = document.querySelector('input[name="expiry_date"]');
    expiryDate.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.slice(0,2) + '/' + value.slice(2,4);
        }
        e.target.value = value;
    });

    const cvv = document.querySelector('input[name="cvv"]');
    cvv.addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0,3);
    });

    @if(session('success'))
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    @endif
});
</script>

<!-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="successModalLabel">
                    <i class="fas fa-check-circle me-2"></i>Order Successful
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <i class="fas fa-check-circle text-success fa-4x mb-3"></i>
                <h4 class="mb-3">Thank You!</h4>
                <p class="mb-0">Your order has been placed successfully.</p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>
</div> -->
@endsection
