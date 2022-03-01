//ADD this code in your theme functions.php file 


add_action('woocommerce_after_add_to_cart_button','add_whatsapp_order_button');
function add_whatsapp_order_button(){
$number = get_the_author_meta('seller_whatsapp_number'); //custom_meta need to be created
if($number == ''){
	return;	
}
$message = 'Je suis intéressé par votre article : '.get_the_title().'trouvé sur Saheldeal : '.get_the_permalink();
str_ireplace(array('+'), '', $number);	
?>
<a class="button alt" href="https://wa.me/<?php echo $number.'?text='.urlencode_deep($message); ?>">Contacter sur Whatsapp</a>
<?php }
