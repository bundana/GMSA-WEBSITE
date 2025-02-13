<x-layout>
    <section>
        <div class="w-100 pt-80 black-layer pb-70 opc65 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/page-title-bg.jpg);"></div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0">Donation Payment</h1>
                    </div>
                </div><!-- Page Title Wrap -->
            </div>
        </div>
    </section>

    <section>
        <div class="w-100 pt-120 pb-250 position-relative">
            <img class="sec-botm-rgt-mckp img-fluid position-absolute" src="/assets/images/sec-botm-mckp.png"
                alt="Sec Bottom Mockup">
            <div class="container">
                <div class="checkout-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <form class="checkout-form w-100" id="donation-form">
                                <h2>Information</h2>
                                <div class="row mrg10">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" id="amount" placeholder="Amount">
                                        <div id="amount-error" class="error-text"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" id="name" placeholder="Name">
                                        <div id="name-error" class="error-text"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="tel" id="phone" placeholder="Phone Number">
                                        <div id="phone-error" class="error-text"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="email" id="email" placeholder="Email Address">
                                        <div id="email-error" class="error-text"></div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="radio" name="method" id="radio1"> <label for="radio1">
                                            Keep my information anonymous, do not share</label></li>
                                        <textarea placeholder="Order Note"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="cart-total-payment-wrap w-100">
                                <div class="cart-total position-relative pat-bg thm-layer opc6 back-blend-multiply thm-bg"
                                    style="background-image: url(assets/images/pattern-bg.jpg);">
                                    <ul class="cart-total-list mb-0 list-unstyled w-100">
                                        <li>Sub Total:<span>$250.00</span></li>
                                        <li>Shipping:<span>Free</span></li>
                                        <li>Tax:<span>$20</span></li>
                                        <li class="cart-total-bottm">Total:<span>$270.00</span></li>
                                    </ul>
                                </div>
                                <div class="payment-method bg-color1 w-100">
                                    <h4 class="mb-0">Payment Method</h4>
                                    <ul class="method-list mb-0 list-unstyled w-100">
                                        <li>
                                            <input type="radio" name="method" id="radio1"> <label for="radio1">
                                                Mobile Money
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="method" id="radio2"> <label for="radio2">
                                                Credit Card
                                            </label>
                                        </li>
                                    </ul>
                                    <button class="thm-btn thm-bg" type="button" id="paystack-button">PROCEED
                                        NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Checkout Wrap -->
            </div>
        </div>
    </section>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        document.getElementById("paystack-button").addEventListener("click", function () {
            // Clear previous error messages
            document.querySelectorAll('.error-text').forEach(function (element) {
                element.innerHTML = '';
            });

            // Get values from the form
            var amount = document.getElementById("amount").value;
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;

            // Validation
            var valid = true;

            if (!amount || isNaN(amount) || parseFloat(amount) <= 0) {
                document.getElementById("amount-error").innerHTML = 'Amount is required and must be a positive number.';
                valid = false;
            }

            if (!name) {
                document.getElementById("name-error").innerHTML = 'Name is required.';
                valid = false;
            }

            if (!phone) {
                document.getElementById("phone-error").innerHTML = 'Phone number is required.';
                valid = false;
            }

            if (!email || !/\S+@\S+\.\S+/.test(email)) {
                document.getElementById("email-error").innerHTML = 'A valid email address is required.';
                valid = false;
            }

            // If validation is successful, proceed with Paystack
            if (valid) {
                var handler = PaystackPop.setup({
                    key: 'pk_test_4731f571347858c6e5431f15d12bd3042cfdd940', // public Paystack key
                    email: email,
                    currency: 'GHS',
                    amount: parseFloat(amount) * 100, // Convert to kobo
                    ref: '' + Math.floor((Math.random() * 1000000000) + 1), // Transaction reference
                    callback: function (response) {
                        alert("Payment successful! Check sms/email for receipt, Transaction reference: " + response.reference);
                    },
                    onClose: function () {
                        alert("Transaction was not completed.");
                    }
                });
                handler.openIframe();
            }
        });
    </script>

    <style>
        .error-text {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</x-layout>