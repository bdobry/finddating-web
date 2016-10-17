<?php get_header(); ?>

<div class="wrapper section">
	
	<div class="section-inner">

		<div class="content">
													        
			<div class="post single">
						
				<div class="post-inner">
			
					<div class="post-header">
						
					    <h2 class="post-title"><?php _e('Error 404','lovecraft'); ?></h2>
					    					    	    
					</div> <!-- /post-header -->
					
					<div class="post-content">
					
						<p><?php _e("Du er nået til en side der ikke eksisterer. Klik på et link i menuen og bliv ført videre rundt på siden. Vi beklager!", 'lovecraft'); ?></p>
						
						<p><?php get_search_form(); ?></p>
					
					</div>
					
				</div> <!-- /post-inner -->
																	
			</div> <!-- /post -->
										                        		
		</div> <!-- /content -->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>

	</div> <!-- /section-inner -->
	
</div> <!-- /wrapper.section -->
								
<?php get_footer(); ?>