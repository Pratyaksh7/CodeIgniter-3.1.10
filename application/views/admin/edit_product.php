<?php include_once('admin_header.php'); ?>

  <div class="container">
    <?php echo form_open_multipart("admin/update_product/{$product->id}", ['class'=>'form-horizontal']);  ?>
    <legend>Edit Product</legend>
    
  <fieldset>
    
     <div class="row">
       <div class="col-lg-6">
         <div class="form-group">
            <label for="exampleInputName">Product Name</label>
            <?php echo form_input(['name'=>'name','class'=>"form-control", 'placeholder'=>'Enter Product name', 'value'=>set_value('name', $product->name)]); ?>
      
         </div>
       </div>
     </div>

     <div class="col-lg-6"> 
        <?php echo form_error('name'); ?>
      </div>
    


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleSelect1" >Product Category</label><br>
                <?php

                echo form_dropdown('category',[

                    'Electronics'                 =>  'Electronics',
                    'Fashion'                     =>  'Fashion',
                    'Home'                        =>  'Home',
                    'Sports'                      =>  'Sports',
                    'Grocery'                     =>  'Grocery',
                ],[set_value('category', $product->category)],['class'=>'form-control']);

                 ?>
                
              </div>
        </div>
    </div>
    <div class="col-lg-6"> 
        <?php echo form_error('category'); ?>
      </div>
    
    
    
    <div class="row">
      <div class="col-lg-6">
          <div class="form-group">
             <label for="exampleInputEmail1">Upload Image</label>
              <?php echo form_upload(['name'=>'image', 'class'=>"form-control"]); ?>
      
          </div>
        
      </div>
      <div class="col-lg-6">
          <?php if(isset( $upload_error)) echo $upload_error ?> 
        </div>
    </div>
   
    
    <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
    
  </fieldset>
 </form>
  </div>
</div>
    
<?php include_once('admin_footer.php') ?>