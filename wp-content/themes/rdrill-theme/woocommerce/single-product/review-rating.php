<?php
/**
 * The template to display the reviewers star rating in reviews
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $comment;
$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

if ( $rating && get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) { ?>

	<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating wrap-review-rating" title="<?php echo
	sprintf( esc_attr__( 'Rated %d out of 5', 'woocommerce' ), esc_attr( $rating ) ) ?>">
		<div class="wrap-review-stars">
			<?php if ($rating == 1): ?>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
			<?php elseif ($rating == 2): ?>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
			<?php elseif ($rating == 3): ?>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-grey"></span>
				<span class="review-star-item review-rating-grey"></span>
			<?php elseif ($rating == 4): ?>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-grey"></span>
			<?php elseif ($rating == 5): ?>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
				<span class="review-star-item review-rating-red"></span>
			<?php endif ?>
		</div>
	</div>

<?php }
