<?php
/**
 * HTML start template part.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */
?>
<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); // WPCS: XSS ok. ?>>
<head>
	<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
		amp-social-share.custom-style {
      	background-color: #008080;
      	background-image: url('https://littlebizmarketing.com/wp-content/uploads/2018/03/Facebook_Messenger_logo.svg_.png');
      	background-repeat: no-repeat;
     	 background-position: center;
      	background-size: contain;
}
	</style>
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">
