<?php include('header.php'); ?>
    <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-check text-success">
                                </i>
                            </div>
                            <div>Checkout
                                <div class="page-title-subheading">
                                    Order Review
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>            
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Billing address</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label class="">Name</label>
                                            <input name="" placeholder="Full Name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label class="">Email</label>
                                            <input name="" placeholder="Email Address" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label class="">Phone</label>
                                            <input name="" placeholder="01xxxxxxxxx" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label class="">District</label>
                                            <input name="" placeholder="Dhaka" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label class="">Thana</label>
                                            <input name="" placeholder="Thana" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label class="">Address</label>
                                            <textarea name="" rows="4" class="form-control" placeholder="Full Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Order Details</h5>
                                <div class="profile-data">
                                    <div class="box-authentication2 fix">
                                        <table class="table table-responsive table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="12%">Product</th>
                                                    <th width="38%">Name</th>
                                                    <th width="15%">Qty</th>
                                                    <th width="20%">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td><img src="assets/images/oil.jpg"
                                                             style="width:50px;height:50px;"></td>
                                                    <td>Rupchanda Soyabean Oil (2 Litres)</td>
                                                    <td>2</td>
                                                    <td>Tk. 275</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td><img src="assets/images/oil.jpg"
                                                             style="width:50px;height:50px;"></td>
                                                    <td>Rupchanda Soyabean Oil (2 Litres)</td>
                                                    <td>2</td>
                                                    <td>Tk. 275</td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td><img src="assets/images/oil.jpg"
                                                             style="width:50px;height:50px;"></td>
                                                    <td>Rupchanda Soyabean Oil (2 Litres)</td>
                                                    <td>2</td>
                                                    <td>Tk. 275</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="calculateTotal fix">
                                            <ul class="list-group" style="float: right;width:250px">
                                                <li class="list-group-item">Subtotal : <span
                                                        style="float: right;">  &#2547; 950 </span></li>
                                                <li class="list-group-item">Shipping Charge : <span
                                                        style="float: right;"> &#2547; 50 </span></li>
                                                <li class="list-group-item">Total Amount: <span
                                                        style="float: right;">&#2547; 1000 </span></li>
                                            </ul>
                                        </div>

                                        <div class="extra-login text-center">
                                            <span>Select Payment Method</span>
                                        </div>
                                        <div class="payment-checkbox">
                                            <div class="position-relative form-group">
                                                <div>
                                                    <div class="custom-radio custom-control">
                                                        <input type="radio" id="cod" name="" class="custom-control-input">
                                                        <label class="custom-control-label" for="cod">Cash On Delivery</label>
                                                    </div>
                                                    <div class="custom-radio custom-control">
                                                        <input type="radio" id="onl" name="" class="custom-control-input">
                                                        <label class="custom-control-label" for="onl">Online Payment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="place-order">
                                        <button class="btn btn-danger btn-block btn-lg" type="submit"><i class="fa fa-shopping-cart"></i> Place Order</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<style>
.profile-data table tr td {
    padding: 5px;
    font-size: 14px;
}
.profile-data table tr th {
    text-align: center;
}
.box-authentication2 .list-group-item {
    padding: 4px 15px;
    background-color: transparent;
    font-size: 14px;
}
.extra-login span {
    background: #e8e8e8;
    padding: 4px 18px;
    font-weight: 500;
    border: 1px solid #ddd;
}
.extra-login {
    margin: 13px 0;
    position: relative;
    z-index: 1;
    width: 100%;
}
.extra-login::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    background: #bbb;
    left: 0;
    top: 10px;
    z-index: -1;
}
</style>    
<?php include('footer.php'); ?>