<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_FAQ);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_FAQ));

  require(DIR_WS_INCLUDES . 'template_top.php');
  
?>

<link href="faq.css" rel="stylesheet">

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<div class="contentContainer">
  <div class="well well-lg"">
    
  <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Shipping Questions</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Location, Hours etc.</a></li>
            </ul>
    
            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                    <h4 class="panel-title">
                                        How is my order shipped and what does it cost?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
								Orders are shipped either by Courier [currently FedEX Ground] or Postal Service --- the choice is yours!<br><br>
								For delivery by Courier, you pay the actual charges based on a 1 kG package [2.2 lbs] shipped via ground service, plus a nominal $1.00 service charge to cover the cost of insurance and packing materials. We pay any additional charges.<br><br>
								For Postal Service (your best value), shipping on orders under $50.00 is $11.95 to most locations<font color="red">*</font> in Canada. For orders between $50.00 and $100.00 the rate is $7.95, for orders between $100.00 and $200.00 the rate is just $4.95 and for orders over $200.00 shipping is FREE.  The more you order the more you save! The delivery standard for this service is between 1 to 7 business days between all major centers.<br><br>
								<font color="red">*</font> Additional shipping charges apply to the NWT, YK, NU and some rural or remote locations in Canada. The final shipping cost will be indicated in your shopping cart before checkout.<br><br>
								<font color="red">NOTE:</font> Additional Shipping Charges apply to items indicated by the <img src="images/addshipico.gif">  symbol.
                                </div>
                            </div>
                        </div>
						
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                                    <h4 class="panel-title">
                                        When will my order be shipped?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                   On weekdays, in-stock merchandise is shipped the same day if received by 2:00 pm EST. Orders received after that, or on weekends or holidays, are shipped the next business day.
							    </div>
                            </div>
                        </div>
						
						<div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-3">
                                    <h4 class="panel-title">
                                        Do you ship to the US?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                   Yes. Orders to the contiguous USA are shipped by UPS. The cost varies between $10.86 USD and $17.05 USD depending on the exact destination. Orders outside the contiguous USA are handled as International orders. See our FAQ about International Shipments for further information.
							    </div>
                            </div>
                        </div>
						
						<div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-4">
                                    <h4 class="panel-title">
                                        Do you accept International Orders?
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-1-sub-4" class="panel-collapse collapse">
                                <div class="panel-body">
									Yes, we accept International Orders however orders outside of Canada or the contiguous USA, are subject to a minimum of $100.00 CAD and shipping rates are based on the final destination, total weight of the items ordered and the method of shipment that is chosen -- we'll provide a shipping quote, for your approval, prior to processing your order.<br><br>
									Please note that due to the difficulty in validating International Credit Cards, payment is restricted to PayPal "Verified" Users. To join or obtain further information about PayPal, <a href="http://www.paypal.com">click here</a>.<br><br>
									If you are a PayPal "Verified" User and would like to obtain a shipping quote, please submit an order online and we'll provide you with a shipping quote prior to processing your order. Should you wish to get an idea of the shipping cost before entering your order, you can visit the <a href="http://www.canadapost.ca/business/tools/rc/bus/bin/rc_bus_int-e.asp">Canada Post</a> or <a href="http://fedex.com/ratefinder/home">FEDEX</a> Websites and estimate the weight and size of the items you plan to order to determine an approximate shipping cost. Our originating Canadian postal code is L8W 3R6 located in Hamilton, Ontario.    
								</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                    <h4 class="panel-title">
                                        FAQ Item Category #2
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                    <h4 class="panel-title">
                                        FAQ Item Category #2
                                        <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</div>  
  </div> 			
			
					<div class="buttonSet">
							<span class="buttonAction"><?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'glyphicon glyphicon-chevron-right', tep_href_link(FILENAME_DEFAULT)); ?></span>
					</div>
			

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
