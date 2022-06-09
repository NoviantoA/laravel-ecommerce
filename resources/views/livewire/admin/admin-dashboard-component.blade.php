<div>
    <div class="content">
        <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }

        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }

        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }

        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }

        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="icon-stat">
                        <div class="row">
                            <div class="col-xs-8 text-left">
                                <span class="icon-stat-label">Total Pendapatan</span>
                                <span class="icon-stat-value">Rp{{$totalRevenue}}</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                            </div>
                        </div>
                        <div class="icon-stat-footer">
                            <i class="fa fa-clock-o"></i> Updated
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-stat">
                        <div class="row">
                            <div class="col-xs-8 text-left">
                                <span class="icon-stat-label">Total Penjualan</span>
                                <span class="icon-stat-value">{{$totalSales}}</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                            </div>
                        </div>
                        <div class="icon-stat-footer">
                            <i class="fa fa-clock-o"></i> Updated
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-stat">
                        <div class="row">
                            <div class="col-xs-8 text-left">
                                <span class="icon-stat-label">Pendapatan Harian</span>
                                <span class="icon-stat-value">Rp{{$todayRevenue}}</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                            </div>
                        </div>
                        <div class="icon-stat-footer">
                            <i class="fa fa-clock-o"></i> Updated
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-stat">
                        <div class="row">
                            <div class="col-xs-8 text-left">
                                <span class="icon-stat-label">Penjualan Harian</span>
                                <span class="icon-stat-value">{{$todaySales}}</span>
                            </div>
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                            </div>
                        </div>
                        <div class="icon-stat-footer">
                            <i class="fa fa-clock-o"></i> Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Order Terbaru
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Subtotal</th>
                                        <th>Diskon</th>
                                        <th>Ongkos Kirim</th>
                                        <th>Total</th>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>No Telephon</th>
                                        <th>Email</th>
                                        <th>Kode Pos</th>
                                        <th>Status</th>
                                        <th>Tanggal Order</th>
                                        <th class="text-center">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>Rp{{$order->subtotal}}</td>
                                        <td>Rp{{$order->discount}}</td>
                                        <td>Rp{{$order->tax}}</td>
                                        <td>Rp{{$order->total}}</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"
                                                class="btn btn-info btn-sm">Detail</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>