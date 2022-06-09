	<div>
	    <!--main area-->
	    <main id="main" class="main-site">
	        <style>
	        .summary-item .row-in-form input[type="password"],
	        .summary-item .row-in-form input[type="text"],
	        .summary-item .row-in-form input[type="tel"] {
	            font-size: 13px;
	            line-height: 19px;
	            display: inline-block;
	            height: 43px;
	            padding: 2px 20px;
	            max-width: 300px;
	            width: 100%;
	            border: 1px solid #e6e6e6;
	        }
	        </style>

	        <div class="container">

	            <div class="wrap-breadcrumb">
	                <ul>
	                    <li class="item-link"><a href="/" class="link">Beranda</a></li>
	                    <li class="item-link"><span>Checkout</span></li>
	                </ul>
	            </div>
	            <div class=" main-content-area">
	                <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
	                    <div class="row">
	                        <div class="col-md-12">

	                            <div class="wrap-address-billing">
	                                <h3 class="box-title">Isi Biodata Untuk Pengiriman</h3>
	                                <div class="billing-address">
	                                    <p class="row-in-form">
	                                        <label for="fname">Nama depan<span>*</span></label>
	                                        <input type="text" name="fname" value="" placeholder="Nama depan anda"
	                                            wire:model="firstname">
	                                        @error('firstname') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="lname">Nama belakang<span>*</span></label>
	                                        <input type="text" name="lname" value="" placeholder="Nama belakang anda"
	                                            wire:model="lastname">
	                                        @error('lastname') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="email">Email:</label>
	                                        <input type="email" name="email" value="" placeholder="Email"
	                                            wire:model="email">
	                                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="phone">Nomor Telephon<span>*</span></label>
	                                        <input type="number" name="phone" value=""
	                                            placeholder="Nomor telephon yang bisa dihubungi" wire:model="mobile">
	                                        @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="add">Jalan</label>
	                                        <input type="text" name="add" value="" placeholder="Jalan rumah"
	                                            wire:model="line1">
	                                        @error('line1') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="add">Desa</label>
	                                        <input type="text" name="add" value="" placeholder="Nama desa"
	                                            wire:model="line2">
	                                        @error('line2') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="country">Kota/Kabupaten<span>*</span></label>
	                                        <input type="text" name="country" value="" placeholder="Nama kota/kabupaten"
	                                            wire:model="city">
	                                        @error('city') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="city">Provinsi<span>*</span></label>
	                                        <input type="text" name="city" value="" placeholder="Nama kota"
	                                            wire:model="province">
	                                        @error('province') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="zip-code">Kode Pos:</label>
	                                        <input type="number" name="zip-code" value="" placeholder="Kode pos"
	                                            wire:model="zipcode">
	                                        @error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form fill-wife">
	                                        <!-- <label class="checkbox-field">
	                                            <input name="different-add" id="different-add" value="1" type="checkbox"
	                                                wire:model="ship_to_different">
	                                            <span>Ship to a different address?</span>
	                                        </label> -->
	                                    </p>
	                                </div>
	                            </div>
	                        </div>

	                        @if($ship_to_different)
	                        <div class="col-md-12">

	                            <div class="wrap-address-billing">
	                                <h3 class="box-title">Alamat Pengiriman</h3>
	                                <div class="billing-address">
	                                    <p class="row-in-form">
	                                        <label for="fname">Nama depan<span>*</span></label>
	                                        <input type="text" name="fname" value="" placeholder="Nama depan anda"
	                                            wire:model="s_firstname">
	                                        @error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="lname">Nama belakang<span>*</span></label>
	                                        <input type="text" name="lname" value="" placeholder="Nama belakang anda"
	                                            wire:model="s_lastname">
	                                        @error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="email">Email:</label>
	                                        <input type="email" name="email" value="" placeholder="Email"
	                                            wire:model="s_email">
	                                        @error('s_email') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="phone">Nomor Telephon<span>*</span></label>
	                                        <input type="number" name="phone" value=""
	                                            placeholder="Nomor telephon yang bisa dihubungi" wire:model="s_mobile">
	                                        @error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="add">Jalan</label>
	                                        <input type="text" name="add" value="" placeholder="Jalan rumah"
	                                            wire:model="s_line1">
	                                        @error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="add">Desa</label>
	                                        <input type="text" name="add" value="" placeholder="Nama desa"
	                                            wire:model="s_line2">
	                                        @error('s_line2') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="country">Kota/Kabupaten<span>*</span></label>
	                                        <input type="text" name="country" value="" placeholder="Nama kota/kabupaten"
	                                            wire:model="s_city">
	                                        @error('s_city') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                    <p class="row-in-form">
	                                        <label for="city">Provinsi<span>*</span></label>
	                                        <input type="text" name="city" value="" placeholder="Nama kota"
	                                            wire:model="s_province">
	                                        @error('s_province') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>

	                                    <p class="row-in-form">
	                                        <label for="zip-code">Kode Pos:</label>
	                                        <input type="number" name="zip-code" value="" placeholder="Kode pos"
	                                            wire:model="s_zipcode">
	                                        @error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                        @endif
	                    </div>
	                    <div class="summary summary-checkout">
	                        <div class="summary-item payment-method">
	                            <h4 class="title-box">Metode Pembayaran</h4>
	                            <!-- @if($paymentmode == 'card')
	                            <div class="wrap-address-billing">
	                                @if(Session::has('stripe_error'))
	                                <div class="alert alert-danger" role="alert">{{Session::get('stripe_error')}}</div>
	                                @endif
	                                <p class="row-in-form">
	                                    <label for="card-no">Nomor Kartu</label>
	                                    <input type="text" name="card-no" value="" placeholder="Nomor kartu"
	                                        wire:model="card_no">
	                                    @error('card_no') <span class="text-danger">{{$message}}</span> @enderror
	                                </p>

	                                <p class="row-in-form">
	                                    <label for="exp-month">Expiry Month:</label>
	                                    <input type="text" name="exp-month" value="" placeholder="MM"
	                                        wire:model="exp_month">
	                                    @error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
	                                </p>

	                                <p class="row-in-form">
	                                    <label for="exp-year">Expiry Year</label>
	                                    <input type="text" name="exp-year" value="" placeholder="YYYY"
	                                        wire:model="exp_year">
	                                    @error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
	                                </p>

	                                <p class="row-in-form">
	                                    <label for="cvc">CVC</label>
	                                    <input type="password" name="cvc" value="" placeholder="CVC" wire:model="cvc">
	                                    @error('cvc') <span class="text-danger">{{$message}}</span> @enderror
	                                </p>
	                            </div>
	                            @endif -->
	                            <div class="choose-payment-methods">
	                                <label class="payment-method">
	                                    <input name="payment-method" id="payment-method-bank" value="cod" type="radio"
	                                        wire:model="paymentmode">
	                                    <span>Cash On Delivery (COD)</span>
	                                    <span class="payment-desc">Lorem ipsum, dolor sit amet consectetur adipisicing
	                                        elit.
	                                        Aliquid quam ipsa ad.</span>
	                                </label>
	                                <!-- <label class="payment-method">
	                                    <input name="payment-method" id="payment-method-visa" value="card" type="radio"
	                                        wire:model="paymentmode">
	                                    <span>Debit / Kartu Kredit</span>
	                                    <span class="payment-desc">But the majority have suffered alteration in some form,
	                                        by
	                                        injected humour, or randomised words which don't look even slightly
	                                        believable</span>
	                                </label> -->
	                                <!-- <label class="payment-method">
	                                    <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio"
	                                        wire:model="paymentmode">
	                                    <span>E-Wallet (Dana,OVO)</span>
	                                    <span class="payment-desc">You can pay with your credit</span>
	                                    <span class="payment-desc">card if you don't have a paypal account</span>
	                                </label> -->
	                                @error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
	                            </div>
	                            @if(Session::has('checkout'))
	                            <p class="summary-info grand-total"><span>Grand Total</span> <span
	                                    class="grand-total-price">Rp {{Session::get('checkout')['total']}}</span></p>
	                            @endif

	                            @if($errors->isEmpty())
	                            <div id="processing" wire:ignore
	                                style="font-size: 22px; margin-bottom:20px; padding-left:37px; color:green; display:none;">
	                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
	                                <span>Sedang Diproses......</span>
	                            </div>
	                            @endif

	                            <button type="submit" class="btn btn-medium">Pesan Sekarang</button>
	                        </div>
	                        <!-- <div class="summary-item shipping-method">
	                            <h4 class="title-box f-title">Metode Pengiriman</h4>
	                            <p class="summary-info"><span class="title">
	                                    Tarif Tetap</span></p> 
	                             <p class="summary-info"><span class="title">Biaya Ongkos Kirim Rp0</span></p>
	                        </div> -->
	                    </div>
	                </form>
	            </div>
	            <!--end main content area-->
	        </div>
	        <!--end container-->

	    </main>
	    <!--main area-->
	</div>