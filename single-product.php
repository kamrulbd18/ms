<?php include('header.php'); ?>
    <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-cart text-success">
                                </i>
                            </div>
                            <div>Product Description</div>
                        </div>   
                    </div>
                </div>            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-md-3">
                                       <div class="product-thumb text-center">
                                            <div class="flexslider">
                                              <ul class="slides">
                                                <li data-thumb="assets/images/oil.jpg">
                                                  <img src="assets/images/oil.jpg" />
                                                </li>
                                                <li data-thumb="assets/images/oil.jpg">
                                                  <img src="assets/images/oil.jpg" />
                                                </li>
                                                <li data-thumb="assets/images/oil.jpg">
                                                  <img src="assets/images/oil.jpg" />
                                                </li>
                                                <li data-thumb="assets/images/oil.jpg">
                                                  <img src="assets/images/oil.jpg" />
                                                </li>
                                              </ul>
                                            </div>
                                       </div>                                       
                                   </div>
                                   <div class="col-md-8">
                                       <div class="product-description">
                                           <h3>Rupchanda Soyabean Oil (2 Litres)</h3>
                                           <div class="short-desc">
                                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, iste, doloribus. Similique culpa vitae optio, obcaecati deleniti voluptatibus, dignissimos animi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, iste, doloribus. Similique culpa vitae optio, obcaecati deleniti voluptatibus, dignissimos animi.</p>
                                           </div>
                                           <div class="price-tag mb-3">
                                                <del><i class="icofont-taka"></i>275</del>
                                                <strong><i class="icofont-taka"></i>260</strong>
                                           </div>
                                          <div class="custom-qty">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                                <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                          </div>
                                          <div class="action-button mt-3">
                                              <button class="btn btn-warning btn-lg font-weight-bold"><i class="fa fa-cart-plus"></i> ADD TO CART</button>
                                              <button class="btn btn-success btn-lg font-weight-bold" title="Wishlist"><i class="fa fa-heart"></i></button>
                                          </div>
                                       </div>
                                   </div>
                               </div> <!-- row close -->                                                             
                            </div><!-- card body -->
                        </div>
                        <div class="card mb-3">
                            <div class="card-header card-header-tab-animation">
                                <ul class="nav nav-justified">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab1" class="nav-link active show">Description</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link show">Information</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab3" class="nav-link show">Information</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab1" role="tabpanel">
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div class="tab-pane show" id="tab2" role="tabpanel">
                                        <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p>
                                    </div>
                                    <div class="tab-pane show" id="tab3" role="tabpanel">
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<style>    
.price-tag{
    font-size: 18px;
}    
.price-tag del{
    color: red;
}
.custom-qty {
    display: inline-flex;
}
.increase.items, .reduced.items {
    background: #ddd;
    border: 1px solid #ddd;
    color: #222;
    padding: 8px 10px 7px;
    float: left;
    cursor: pointer;
}
.input-text.qty {
    border: 1px solid #ddd;
    max-width: 50px;
    padding: 4px 13px;
    float: left;
    text-align: center;
    margin: 0 -1px;
}
.card-header > .nav .nav-link.active {
    font-weight: bold;
}
.flex-direction-nav a {
    display: none;
    cursor: pointer;
}
</style>
<?php include('footer.php'); ?>         