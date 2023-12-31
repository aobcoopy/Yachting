<?php
/**
 * The template for displaying archive not found
 */

	echo '<div class="traveltour-not-found-wrap" id="traveltour-full-no-header-wrap" >';
	echo '<div class="traveltour-not-found-background" ></div>';
	echo '<div class="traveltour-not-found-container traveltour-container">';
	echo '<div class="traveltour-header-transparent-substitute" ></div>';
	
	echo '<div class="traveltour-not-found-content traveltour-item-pdlr">';
	echo '<h1 class="traveltour-not-found-head" >' . esc_html__('Not Found', 'traveltour') . '</h1>';
	echo '<div class="traveltour-not-found-caption" >' . esc_html__('Nothing matched your search criteria. Please try again with different keywords.', 'traveltour') . '</div>';

	echo '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">';
	echo '<input type="text" class="search-field traveltour-title-font" placeholder="' . esc_html__('Type Keywords...', 'traveltour') . '" value="" name="s">';
	echo '<div class="traveltour-top-search-submit"><i class="fa fa-search" ></i></div>';
	echo '<input type="submit" class="search-submit" value="Search">';
	echo '</form>';
	echo '<div class="traveltour-not-found-back-to-home" ><a href="' . esc_url(home_url('/')) . '" >' . esc_html__('Or Back To Homepage', 'traveltour') . '</a></div>';
	echo '</div>'; // traveltour-not-found-content

	echo '</div>'; // traveltour-not-found-container
	echo '</div>'; // traveltour-not-found-wrap