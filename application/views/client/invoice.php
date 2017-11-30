<div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="invoice-title">
                                            <?php foreach($order_details as $od): ?>
                                                <h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $od->reference_no; ?></h3>
                                            <?php endforeach;  ?>      
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <address>
                                                    <?php foreach($customer_details as $cd): ?>
                                                    <strong>Billed To:</strong><br>
                                                        <?php echo $cd->first_name." ".$cd->last_name; ?><br>
                                                        <?php echo $cd->street_address; ?><br>
                                                        <?php echo $cd->street_address_line2; ?><br>
                                                        <?php echo $cd->city.", ".$cd->state; ?><br>
                                                        <?php echo $cd->zip; ?><br>
                                                    </address>
                                                    <?php endforeach;  ?>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                <?php foreach($customer_details as $cd): ?>
                                                <strong>Billed To:</strong><br>
                                                    <?php echo $cd->first_name." ".$cd->last_name; ?><br>
                                                    <?php echo $cd->street_address; ?><br>
                                                    <?php echo $cd->street_address_line2; ?><br>
                                                    <?php echo $cd->city.", ".$cd->state; ?><br>
                                                    <?php echo $cd->zip; ?><br>
                                                </address>
                                                <?php endforeach;  ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <address>
                                                        <strong>Payment Method:</strong><br>
                                                        Visa ending **** 4242<br>
                                                        jsmith@email.com
                                                    </address>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <address>
                                                        <strong>Order Date:</strong><br>
                                                        <?php foreach($order_details as $cd): ?>
                                                        <?php echo date("h:i A", strtotime($od->order_date_time)); ?> 
                                                        <?php endforeach ; ?>
                                                        <br><br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                                    <td class="text-right"><strong>Totals</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($order_details as $od): ?>
                                                                <tr>
                                                                    <td><?php echo $od->product_name; ?></td>
                                                                    <td class="text-center">$<?php echo $od->product_unit_price;  ?></td>
                                                                    <td class="text-center"><?php echo $od->product_quantity ?></td>
                                                                   
                                                                </tr>
                                                                <?php endforeach;  ?>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center"><strong>Total</strong></td>
                                                                    <td class="no-line text-right">$<?php echo $od->grand_total; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>