<?php get_header(); ?>

<div class="wrapper section">
	
	<div class="section-inner">

		<div class="content">
													        
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class('post single'); ?>>
							
					<div class="post-inner">
				
						<div class="post-header">

						    
						    <?php if ( current_user_can('edit_post', $post->ID) ) : ?>
						    
							    <div class="post-meta">
								    
									<?php edit_post_link('Rediger', '<p>', '</p>'); ?>
								    
							    </div>
						    
						    <?php endif; ?>
						    	    
						</div> <!-- /post-header -->
						
						<?php if ( get_the_content() ) : ?>
		
							<div class="post-content">
							
								<?php the_content(); ?>
							
							</div>
						
						<?php endif; ?>
					
					</div> <!-- /post-inner -->
															
					<?php comments_template( '', true ); ?>
				
				</div> <!-- /post -->
											                        
		   	<?php endwhile; else: ?>
		
				<p><?php _e("Ingen indlæg fundet her, prøv igen om lidt eller kig videre på siden!.", "lovecraft"); ?></p>
			
			<?php endif; ?>    
		
		</div> <!-- /content -->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>

	</div> <!-- /section-inner -->
	
</div> <!-- /wrapper.section -->
								
<?php get_footer(); ?>