<?php
/**
* Plugin Name: Exemplo OG Tags
* Plugin URI: http://sp.senac.br
* Description: Plugin teste para aula
* Version: 1.0.0
* Author: LFABM
* Author URI: http://sp.senac.br
* License: CC BY
*/

/*
//EXEMPLO DE HOOK ACTION

add_action('wp_insert_post','luiz_email_post',10,3);

function luiz_email_post($post_id,$post,$update) {

	$email = 'luiz.fabmilan@sp.senac.br';
	$subject = 'Novo Post Publicado';
	$message = 'Clique e veja o post:'.get_permalink($post_id);
	if (wp_mail( $email, $subject, $message )){
		echo '<script>alert("Email enviado");</script>';
	} else {
		echo '<script>alert("Email NAO enviado");</script>';
	}		 
		
} 
*/

/*
//EXEMPLO DE HOOK FILTER
add_filter('login_errors','luiz_altera_erro_login');

function luiz_altera_erro_login() {
    return 'Falha no login ou na senha';
} 
*/

add_action( 'wp_head', 'luiz_ogfacebook_tags' );

function luiz_ogfacebook_tags() { 
  if( is_single() ) {//Só aparece se for uma página com apenas um post
	include('templates/og_tpl.php');
  }
}


?>
