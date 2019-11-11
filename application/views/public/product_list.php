<?php include_once('public_header.php');  ?>

<div class="container">
<h1 align="center">"Shop Here For The Best Shopping Experience.."</h1>
	<div class="row">

		<?php if( count($products)): ?>
				<?php $count= $this->uri->segment(3,0); ?>
				<?php foreach ($products as $product): ?>
		<div class="col-md-4">
			<div class="container boundary" align="center">
				<div class="zoom"><img src="<?= $product->image_path ?>" alt=""></div>
				<hr>
				<h3>Product Name: <br> <b><?= $product->name ?></b></h3>
				<h4>Category: <b><?= $product->category ?></b></h4>
				<a href="<?= base_url('/user/add_to_cart') ?>" class="btn btn-info">Shop Now</a>
			</div>
			<br><br>			
		</div>
		<br><br>
		<?php endforeach; ?>
				<?php else: ?>
				<tr>
						<td colspan="3">No records Found..</td>		
					</tr>
				<?php endif;?>
				
	</div>
	
</div>
<center> 
		<?= $this->pagination->create_links(); ?>
	</center>

<?php include_once('public_footer.php');  ?>