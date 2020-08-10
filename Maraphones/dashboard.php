<?php /* Template Name: Dashboard Page */ ?>
<?php get_header(); ?>
<?php if (!is_user_logged_in()): ?>
	
	<script type="text/javascript">window.location.href='<?php echo bloginfo('url');?>/login/'</script>

<?php endif ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 left">
				<span>Mara Phones Dashboard</span>
			</div>
		</div>
	</div>
</section>

<section class="bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>My account</h1>
			</div>
		</div>
	</div>
</section>

<?php 
## ==> Define HERE the statuses of that orders 
$order_statuses = array('wc-on-hold', 'wc-processing', 'wc-completed');

## ==> Define HERE the customer ID
$customer_user_id = get_current_user_id(); // current user ID here for example

// Getting current customer orders
$customer_orders = wc_get_orders( array(
    'meta_key' => '_customer_user',
    'meta_value' => $customer_user_id,
    'post_status' => $order_statuses,
    'numberposts' => -1
) );


 ?>
<section class="mara_act act_purchase">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-3">
					<ul class="side_menu">
					    <?php include 'dash-side.php'; ?>
					</ul>
			    </div>

			    <div class="col-md-9">
			    	<div class="accordion_wrapper">
			    		<div class="content">
							<h3>My Orders</h3>

							<div class="prev_content">
								<div class="accordion">
			
			<?php 
				foreach($customer_orders as $order ):

				$order_id = $order->get_id();
  				$order_data = $order->get_data();
			 ?>

				<h4 class="accordion-toggle"><?php echo $order_data['date_created']->date('D M Y'); ?>14 Feb 2019 |   Order #: 25364523564</h4> 
				
				<div class="accordion-content">
				
				<p>INSERT CART HERE</p>
				
				</div>

									<!-- 2nd -->
	        <?php endforeach; ?>              
									
								</div>
							</div>
						</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>