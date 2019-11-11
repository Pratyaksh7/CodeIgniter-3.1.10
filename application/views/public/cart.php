<?php include_once('public_header.php');  ?>


<?php echo form_open('user/update_cart'); ?>
<div class="container">
<table cellpadding="4" cellspacing="1" style="width:100%" border="0">

<tr>
        <th>Item Description</th>
        <th >Item Price</th>
        <th>Sub-Total</th>
</tr>

<?php foreach ($this->cart->contents() as $items): ?>

    <?php echo form_hidden('[rowid]', $items['rowid']); ?>

     <tr>
              <td>
                   <?php echo $items['name']; ?>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                       <p>
                          <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                             <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                                 <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td ><?php echo $this->cart->format_number($items['price']); ?></td>
                <td >$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>


<?php endforeach; ?>

<tr>
        <td colspan="2"> </td>
        <td ><strong>Total</strong></td>
        <td>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>    
<p><?php echo form_submit(['name'=>'submitCart','value'=>'Update Cart','class'=>'btn btn-secondary']); ?></p>
</div>




<?php include_once('public_footer.php');  ?>