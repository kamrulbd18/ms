
                    <div class="app-wrapper-footer">
                        <div class="divider mt-4" style="margin-bottom: 30px;"></div>
                        <div class="footer-top container-fluid">
                            <div class="row pl-3 pr-3">
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <img src="assets/images/logo-inverse.png" width="220px">
                                        <p>Masher Sodai is an online shop in Dhaka, Bangladesh. We believe time is valuable to our fellow Dhaka residents, and that they should not have to waste hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs! This is why Chaldal delivers everything you need right at your door-step and at no additional cost.</p>
                                       </div>
                                </div>

                                <div class="col-md-2 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <h4>Useful Link</h4>
                                        <ul>
                                            <li><a href=""><i class="icofont-check-circled"></i> About us</a></li>
                                            <li><a href=""><i class="icofont-check-circled"></i> Cart</a></li>
                                            <li><a href=""><i class="icofont-check-circled"></i> Terms &amp; Condition</a></li>
                                            <li><a href=""><i class="icofont-check-circled"></i> Private Policy</a></li>
                                            <li><a href=""><i class="icofont-check-circled"></i> How to order</a></li>
                                            <li><a href=""><i class="icofont-check-circled"></i> Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <h4>Contact Us</h4>
                                        <div class="footer-content">
                                            <div class="email"> <i class="icofont-paper-plane"></i>
                                              <p>info@mashersodai.com</p>
                                            </div>
                                            <div class="email"> <i class="icofont-headphone-alt-2"></i>
                                              <p>01700050007</p>
                                            </div>
                                            <div class="email"> <i class="icofont-ui-touch-phone"></i>
                                              <p>01710006007</p>
                                            </div>
                                            <div class="address"> <i class="icofont-google-map"></i>
                                              <p>Masher Sodai<br>London Plaza, Sector 3, Uttara C/A, Dhaka-1203</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            Copyright &copy; <?php echo date('Y'); ?> Masher Sodai. All Right Reserved
                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            Developed By <a href="https://thezoomit.com"><img src="assets/images/Zoom-IT.png" style="display:inline-block; width:80px" alt="ZOOM IT"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- flexslider js --> 
    <script type="text/javascript" src="assets/scripts/jquery.flexslider-min.js"></script>

<script>
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
</script>
<script>
jQuery(document).ready(function( $ ) {
    /*=====================================
      Floating Cart
    ======================================*/ 
    $(".shopping-box-view").hide();
    $(".shopping-bag-box").click(function(){
        $(".shopping-bag-box").hide();
        $(".shopping-box-view").show();
    });
    $(".close-btn .pe-7s-close-circle").click(function(){
        $(".shopping-bag-box").show();
        $(".shopping-box-view").hide();
    });
    $(".btn-plus-minus").hide();
    $(".add-to-cart-btn button").each(function() {
        $(this).on("click", function(){
            $(".btn-plus-minus").show();
            $(".add-to-cart-btn").hide();
        });
    });   

});

 $(".cart-plus-minus").on("click", function() {
   var $button = $(this);
   var $parent = $button.parent(); 
   var oldValue = $parent.find('.input').val();

   if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
       // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
        } else {
        newVal = 1;
      }
    }
    $parent.find('.input').val(newVal);
 });

</script>
<script>
    $('.spinner .btn:first-of-type').on('click', function() {
        var btn = $(this);
        var input = btn.closest('.spinner').find('input');
        var inputVal = (input.val() == '' || input.val() == undefined) ? input.attr('min') : input.val();
        if (input.attr('max') == undefined || parseInt(inputVal) < parseInt(input.attr('max'))) {
            input.val(parseInt(inputVal, 10) + 1);
        } else {
            btn.next("disabled", true);
        }
    });
    $('.spinner .btn:last-of-type').on('click', function() {
        var btn = $(this);
        var input = btn.closest('.spinner').find('input');
        var inputVal = (input.val() == '' || input.val() == undefined) ? input.attr('min') : input.val();
        if (input.attr('min') == undefined || parseInt(inputVal) > parseInt(input.attr('min'))) {

            input.val(parseInt(inputVal, 10) - 1);
        } else {
            btn.prev("disabled", true);
        }
    });
</script>
</body>
</html>
