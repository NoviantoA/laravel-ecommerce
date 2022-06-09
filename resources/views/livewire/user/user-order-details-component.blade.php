<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('order_message'))
                <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Detail Pesanan
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success pull-right">Pesananku</a>
                                @if($order->status == 'ordered')
                                <a href="#" wire:click.prevent="cancelOrder" class="btn btn-warning pull-right"
                                    style="margin-right: 20px;">Batal
                                    Pesanan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <th>Order ID</th>
                            <td>{{$order->id}}</td>
                            <th>Tanggal Pemesanan</th>
                            <td>{{$order->created_at}}</td>
                            <th>Status</th>
                            <td>{{$order->status}}</td>
                            @if($order->status == "delivered")
                            <th>Tanggal Pengiriman</th>
                            <td>{{$order->delivered_date}}</td>
                            @elseif($order->status == "canceled")
                            <th>Tanggal Pembatalan</th>
                            <td>{{$order->canceled_date}}</td>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Pemesanan Produk
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Nama Produk</h3>
                            <ul class="products-cart">

                                @foreach ($order->orderItems as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img
                                                src="{{ asset('assets/images/products') }}/{{$item->product->image}}"
                                                alt="{{$item->product->image}}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product"
                                            href="{{route('product.delails',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">Rp {{$item->price}}</p>
                                    </div>
                                    <div class="quantity">
                                        <h5>{{$item->quantity}}</h5>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">Rp {{$item->price * $item->quantity}}</p>
                                    </div>
                                    @if($order->status == 'delivered' && $item->rstatus == false)
                                    <div class="price-field sub-total">
                                        <p class="price"><a
                                                href="{{route('user.review',['order_item_id'=>$item->id])}}">Tulis
                                                Review</a></p>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 style="font-weight: bold; margin-top:2rem;">Rangkuman Pemesanan</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rp
                                        {{$order->subtotal}}</b></p>
                                <p class="summary-info"><span class="title">Biaya Ongkos Kirim</span><b class="index">Rp
                                        {{$order->tax}}</b></p>
                                <!-- <p class="summary-info"><span class="title">Pengiriman</span><b class="index">Bebas
                                        Biaya Pengiriman</b></p> -->
                                <p class="summary-info"><span class="title">Total</span><b class="index">Rp
                                        {{$order->total}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informasi Customer
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Nama Depan :</th>
                                <td>{{$order->firstname}}</td>
                                <th>Nama Belakang :</th>
                                <td>{{$order->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telephon :</th>
                                <td>{{$order->mobile}}</td>
                                <th>Email :</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Jalan :</th>
                                <td>{{$order->line1}}</td>
                                <th>Desa :</th>
                                <td>{{$order->line2}}</td>
                            </tr>
                            <tr>
                                <th>Kota/Kabupaten :</th>
                                <td>{{$order->city}}</td>
                                <th>Provinsi :</th>
                                <td>{{$order->province}}</td>
                            </tr>
                            <tr>
                                <th>Kode Pos :</th>
                                <td>{{$order->zipcode}}</td>
                                <th>
                                <td></td>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if($order->ship_to_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informasi Customer
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Nama Depan :</th>
                                <td>{{$order->shipping->firstname}}</td>
                                <th>Nama Belakang :</th>
                                <td>{{$order->shipping->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telephon :</th>
                                <td>{{$order->shipping->mobile}}</td>
                                <th>Email :</th>
                                <td>{{$order->shipping->email}}</td>
                            </tr>
                            <tr>
                                <th>Jalan :</th>
                                <td>{{$order->shipping->line1}}</td>
                                <th>Desa :</th>
                                <td>{{$order->shipping->line2}}</td>
                            </tr>
                            <tr>
                                <th>Kota/Kabupaten :</th>
                                <td>{{$order->shipping->city}}</td>
                                <th>Provinsi :</th>
                                <td>{{$order->shipping->province}}</td>
                            </tr>
                            <tr>
                                <th>Kode Pos :</th>
                                <td>{{$order->shipping->zipcode}}</td>
                                <th>
                                <td></td>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaksi
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Jenis Transaksi</th>
                                <td>{{$order->transaction->mode}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$order->transaction->status}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <td>{{$order->transaction->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>