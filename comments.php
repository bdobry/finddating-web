<?php if ( post_password_required() ) return; ?>

<?php if ( have_comments() ) : ?>

	<div class="comments-container">
	
		<div class="comments-inner">
		
			<a name="comments"></a>
			
			<div class="comments-title-container">
			
				<h2 class="comments-title">
				
					<?php echo count($wp_query->comments_by_type['comment']) . ' ';
					echo _n( 'Kommentar' , 'Kommentarer' , count($wp_query->comments_by_type['comment']), 'lovecraft' ); ?>
					
				</h2>
				
				<?php if ( comments_open() ) : ?>
				
					<p class="comments-title-link">
						
						<a href="#respond"><?php _e('Tilføj kommentar','lovecraft'); ?> &rarr;</a>
						
					</p>
				
				<?php endif; ?>
				
				<div class="clear"></div>
			
			</div>
		
			<div class="comments">
		
				<ol class="commentlist">
				    <?php wp_list_comments( array( 'type' => 'comment', 'callback' => 'lovecraft_comment' ) ); ?>
				</ol>
				
				<?php if (!empty($comments_by_type['pings'])) : ?>
				
					<div class="pingbacks">
										
						<h3 class="pingbacks-title">
						
							<?php echo count($wp_query->comments_by_type['pings']) . ' ';
							echo _n( 'Pingback', 'Pingbacks', count($wp_query->comments_by_type['pings']), 'lovecraft' ); ?>
						
						</h3>
					
						<ol class="pingbacklist">
						    <?php wp_list_comments( array( 'type' => 'pings', 'callback' => 'lovecraft_comment' ) ); ?>
						</ol>
							
					</div> <!-- /pingbacks -->
				
				<?php endif; ?>
						
				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
					
					<div class="comments-nav" role="navigation">
					
						<div class="fleft">
											
							<?php previous_comments_link( '&larr; ' . __( 'Tidligere kommentarer', 'lovecraft' ) ); ?>
						
						</div>
						
						<div class="fright">
						
							<?php next_comments_link( __( 'Nyere kommentarer', 'lovecraft' ) . ' &rarr;' ); ?>
						
						</div>
						
						<div class="clear"></div>
						
					</div> <!-- /comment-nav-below -->
					
				<?php endif; ?>
				
			</div> <!-- /comments -->
			
		</div> <!-- /comments-inner -->
		
	</div> <!-- /comments-container -->
	
<?php endif; ?>

<?php if ( ! comments_open() && ! is_page() ) : ?>

	<div class="comments-container">
	
		<div class="comments-inner">

			<p class="no-comments"><?php _e( 'Comments are closed.', 'lovecraft' ); ?></p>
		
		</div>
		
	</div>
	
<?php endif; ?>

<?php $comments_args = array(

	'comment_notes_before' => 
		'',
		
	'comment_notes_after' =>
		'',

	'comment_field' => 
		'<p class="comment-form-comment">
			<label for="comment">' . __('Kommentar','lovecraft') . ( $req ? '<span class="required">*</span>' : '' ) . '</label>
			<textarea id="comment" name="comment" cols="45" rows="6" required></textarea>
		</p>',
	
	'fields' => apply_filters( 'comment_form_default_fields', array(
	
		'author' =>
			'<p class="comment-form-author">
				<label for="author">' . __('Navn','lovecraft') . ( $req ? '<span class="required">*</span>' : '' ) . '</label> 
				<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" />
			</p>',
		
		'email' =>
			'<p class="comment-form-email">
				<label for="email">' . __('Email','lovecraft') . ( $req ? '<span class="required">*</span>' : '' ) . '</label> 
				<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" />
			</p>',
		
		)
			
	),
);

if ( comments_open() ) { echo '<div class="respond-container">'; }

comment_form($comments_args);

if ( comments_open() ) { echo '</div> <!-- /respond-container -->'; }

?>