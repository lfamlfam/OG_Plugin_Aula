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

add_action('admin_menu', 'luiz_plugin_menu');

function luiz_plugin_menu() {
    add_submenu_page('options-general.php',
      'P&aacute;gina de Configuração do Plugin do Luiz',
      'Configura&ccedil;&atilde;o do Plugin do Luiz', 
      'administrator', 
      'luiz-plugin-settings', 
      'luiz_plugin_settings_page');
}

function luiz_plugin_settings_page() {        

} 

add_action( 'admin_init','luiz_plugin_settings' );

function luiz_plugin_settings() {
  register_setting( 'luiz-plugin-settings-group', 
			'nome_funcionario' );
  register_setting( 'luiz-plugin-settings-group', 
			'telefone_funcionario' );
  register_setting( 'luiz-plugin-settings-group', 
			'email_funcionario' );
}





?>
