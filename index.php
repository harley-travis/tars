<?php
/**
 * The main template file
 *
 * @link https://trust.rizepoint.com
 *
 * @package WordPress
 * @subpackage T.A.R.S
 * @since T.A.R.S 1.0
 */
get_header(); ?>

<section class="container-fluid server-status wrap push">
	<div class="container server-status-wrapper">
		<div class="row">
			<div class="col-md-5 col-xs-12 status">
				<div class="status-icon-wrapper">
				
				<?php if(get_field('server_status') == 'online') : ?>
					<span class="glyphicon glyphicon-ok green status-icon" aria-hidden="true"></span>
					<p class="green status-icon-msg"><?php the_field('online_status'); ?></p>

				<?php endif; ?>
					
				<?php if(get_field('server_status') == 'offline' ): ?>
					<span class="glyphicon glyphicon-alert red status-icon" aria-hidden="true"></span>
					<p class="red status-icon-msg"><?php the_field('offline_status'); ?></p>
				<?php endif; ?>
				
				<?php if(get_field('server_status') == 'warning' ): ?>
					<span class="glyphicon glyphicon-hourglass yellow status-icon" aria-hidden="true"></span>
					<p class="yellow status-icon-msg"><?php the_field('warning_status'); ?></p>
				<?php endif; ?>
				
				<?php if(get_field('server_status') == 'updating' ): ?>
					<span class="glyphicon glyphicon-refresh gray status-icon" aria-hidden="true"></span>
					<p class="gray status-icon-msg"><?php the_field('updating_status'); ?></p>
				<?php endif; ?>
					
				</div><!-- status-icon-wrapper -->
			</div><!-- status -->
			<div class="col-md-7 col-xs-12 status-msg">
				<h1>RizePoint Trust</h1>
				
				<?php if(get_field('server_status') == 'online') : ?>
					<?php the_field('online_msg'); ?>
				<?php endif; ?>
					
				<?php if(get_field('server_status') == 'offline' ): ?>
					<?php the_field('offline_msg'); ?>
				<?php endif; ?>
				
				<?php if(get_field('server_status') == 'warning' ): ?>
					<?php the_field('warning_msg'); ?>
				<?php endif; ?>
				
				<?php if(get_field('server_status') == 'updating' ): ?>
					<?php the_field('updating_msg'); ?>
				<?php endif; ?>
				
			</div><!-- status-msg -->
		</div><!-- row -->
	</div><!-- server-status-wrapper -->
</section><!-- server-status -->

<section class="container-fluid calendar wrap push">
	<div class="container calendar-wrapper">
		<?php the_field('calendar_shortcode'); ?>
	</div><!-- calendar-wrapper -->
</section><!-- calendar -->

<?php get_footer(); ?>