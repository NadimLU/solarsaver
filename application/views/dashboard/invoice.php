<div class="container-fluid">
<div class="row">
    
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="text-center"><strong>ORDER SUMMERY</strong></h1>
                <div class="col-md-12 col-md-offset-3">
                           <?php echo $this->session->flashdata('success'); ?>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">

                            <?php foreach($customer_details as $od) :?>
                            <h2>Customer Details</h2>
                            <p>Name:
                                <?php echo $od->first_name." ".$od->last_name;?> </p>
                            <p>Street Address :
                                <?php echo $od->street_address;?>
                            </p>
                            <p>Postal code:
                                <?php echo $od->zip;?> </p>
                            <p>Country:
                                <?php echo $od->country;?>
                            </p>
                            <p>Phone:
                                <?php echo $od->phone;?> </p>
                            <p>Email:
                                <?php echo $od->email;?>
                            </p>
                            <?php endforeach;?>

                        </div>
                        <div class="col-md-4">
                            <?php foreach($customer_details as $od) :
                                                                    $order_status =  $od->status;
                                                                    if($order_status == '1'){
                                                                        $set_order_status = "Pending";
                                                                    }
                                                                    if($order_status == '2'){
                                                                        $set_order_status = "Confirmed";
                                                                    }
                                                                    if($order_status == '3'){
                                                                        $set_order_status = "Canceled";
                                                                    }
                                                                ?>
                            <h2>Order Details</h2>
                            <p>Reference No.
                                <?php echo $od->reference_no;?> </p>
                            <p>Transaction No.
                                <?php echo $od->square_transaction_id;?> </p>
                            <p>Order Date:
                                <?php echo date("d F, Y ", strtotime($od->reservation_date)); ?> </p>
                            <p>Order Time:
                                <?php echo date("h:i A", strtotime($od->reservation_time)); ?> </p>
                            <p>Order Status:
                                <?php echo $set_order_status;?>
                            </p>


                            <?php endforeach;?>

                        </div>

                    </div>

                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Item Price</strong></td>
                                <td class="text-center"><strong>Item Quantity</strong></td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($order_details as $od) :
                                                                //$grand_total = $this->session->set_userdata('grand_total',$od->grand_total);
                                                                 $grand_total =  $od->grand_total;
                                                                 
                                                                
                                                                ?>
                            <?php //echo array_sum($Total);?>

                            <tr>
                                <td>
                                    <?php echo $od->product_name;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $od->product_unit_price;?>
                                </td>
                                <td class="text-center">
                                    <?php echo $od->product_quantity;?>
                                </td>

                            </tr>
                            <?php endforeach;?>
                            <tr>
                                <td class="emptyrow"></td>
                                <td class="emptyrow"></td>
                                <td class="emptyrow text-center"><strong>Total Items</strong></td>


                                <td class="emptyrow text-right">
                                    <?php //echo $value; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                <td class="emptyrow"></td>
                                <td class="emptyrow text-center"><strong>Total</strong></td>
                                <td class="emptyrow text-right">
                                    <?php if(isset($grand_total)) echo $grand_total ; //$this->session->userdata('grand_total'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="btn-group">
            <a href="<?php echo site_url('Orders/OrderConfirmRequest/'.$od->order_master_id); ?>"><button type="button" class="btn btn-success">Confirm</button></a>
            <a href="<?php echo site_url('Orders/OrderPendingRequest/'.$od->order_master_id); ?>"><button type="button" class="btn btn-warning">Pending</button></a>
            <a href="<?php echo site_url('Orders/OrderCancelRequest/'.$od->order_master_id); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>



    </div>
  
</div>
</div>
</div>