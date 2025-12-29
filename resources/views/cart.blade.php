@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-gradient-primary text-white py-3">
                    <h4 class="mb-0"><i class="fas fa-shopping-cart me-2"></i>Shopping Cart</h4>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if(count($cart) > 0)
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 120px;"></th>
                                        <th scope="col">Product</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-end">Subtotal</th>
                                        <th scope="col" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $id => $details)
                                        <tr>
                                            <td>
                                                <div class="cart-img-container">
                                                    <img src="{{ asset('assets/' . $details['image']) }}" 
                                                         alt="{{ $details['name'] }}" 
                                                         class="rounded-3 cart-product-image">
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{ $details['name'] }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <span class="fw-bold">${{ number_format($details['price'], 2) }}</span>
                                            </td>
                                            <td class="text-center" style="width: 150px;">
                                                <form action="{{ route('cart.update') }}" method="POST" class="d-flex align-items-center justify-content-center">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $id }}">
                                                    <div class="input-group input-group-sm">
                                                        <button type="button" class="btn btn-outline-secondary btn-decrease">-</button>
                                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" 
                                                               min="1" class="form-control text-center quantity-input">
                                                        <button type="button" class="btn btn-outline-secondary btn-increase">+</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary">${{ number_format($details['price'] * $details['quantity'], 2) }}</span>
                                            </td>
                                            <td class="text-end">
                                                <form action="{{ route('cart.remove') }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                        <td colspan="2" class="text-end">
                                            <h5 class="mb-0 text-primary">${{ number_format($total, 2) }}</h5>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div>
                                <a href="{{ route('home') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                                </a>
                                <form action="{{ route('cart.clear') }}" method="POST" class="d-inline ms-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-trash-alt me-2"></i>Clear Cart
                                    </button>
                                </form>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn btn-primary btn-lg">
                                Proceed to Checkout<i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-shopping-cart fa-4x text-muted mb-4"></i>
                            <h4 class="mb-3">Your cart is empty</h4>
                            <p class="text-muted mb-4">Looks like you haven't added any products to your cart yet.</p>
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                                <i class="fas fa-shopping-bag me-2"></i>Start Shopping
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.bg-gradient-primary {
    background: linear-gradient(45deg, #4a73e8, #9116ff);
}
.quantity-input {
    width: 60px;
    text-align: center;
    border-left: 0;
    border-right: 0;
}
.btn-decrease, .btn-increase {
    width: 30px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.table > :not(caption) > * > * {
    padding: 1.2rem 1rem;
    vertical-align: middle;
}
.cart-product-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 0.75rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}
.cart-img-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5px;
}

/* ==============================
   RESPONSIVE MEDIA QUERIES
   ============================== */

/* Large tablets & small laptops */
@media (max-width: 1024px) {
    .cart-product-image {
        width: 90px;
        height: 90px;
    }
}

/* Tablets */
@media (max-width: 900px) {
    .table > :not(caption) > * > * {
        padding: 1rem 0.75rem;
        font-size: 0.9rem;
    }

    .quantity-input {
        width: 50px;
    }
}

/* Tablet portrait */
@media (max-width: 768px) {
    .d-flex.justify-content-between {
        flex-direction: column;
        gap: 1rem;
    }

    .d-flex.justify-content-between > div {
        width: 100%;
        text-align: center;
    }

    .d-flex.justify-content-between a.btn-lg {
        width: 100%;
    }
}

/* Mobile devices */
@media (max-width: 600px) {
    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 1.2rem;
        border-bottom: 1px solid #dee2e6;
    }

    .table tbody td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        text-align: right;
    }

    .table tbody td::before {
        content: attr(data-label);
        font-weight: 600;
        text-align: left;
    }

    .cart-product-image {
        width: 80px;
        height: 80px;
    }

    .btn-decrease,
    .btn-increase {
        width: 28px;
    }
}

/* Small mobiles */
@media (max-width: 480px) {
    .card-body {
        padding: 1.25rem;
    }

    h4 {
        font-size: 1.05rem;
    }

    .btn-lg {
        font-size: 0.95rem;
        padding: 0.65rem;
    }
}

/* Extra small devices */
@media (max-width: 360px) {
    .cart-product-image {
        width: 70px;
        height: 70px;
    }

    table td {
        font-size: 0.8rem;
    }
}

/* Ultra small devices */
@media (max-width: 320px) {
    h4 {
        font-size: 0.95rem;
    }

    .btn {
        font-size: 0.85rem;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle quantity updates
    document.querySelectorAll('.btn-decrease').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.nextElementSibling;
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
                this.closest('form').submit();
            }
        });
    });

    document.querySelectorAll('.btn-increase').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            input.value = parseInt(input.value) + 1;
            this.closest('form').submit();
        });
    });

    // Handle manual quantity input
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            if (this.value < 1) this.value = 1;
            this.closest('form').submit();
        });
    });

    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        document.querySelectorAll('.alert').forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>
@endsection
