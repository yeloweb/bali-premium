<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 13/09/15
 * Time: 23:12
 */
class gestsup_shortcode {
	public function __construct()
	{
		add_shortcode('gestsup_add_ticket', array($this, 'add_ticket'));
		add_action('wp_loaded',array($this,'search_mail'));
		add_action('wp_loaded',array($this,'add_ticket_db'));
	}

	public function add_ticket()
	{ ?>
		<form method="post" action="">
			<label for="mail"><?php _e('Your email:', 'thfo_gestsup')?></label>
			<input type="email" name="mail" value="<?php
			if(!null == $this->search_mail()){
				echo $_POST['mail'];
			}
			?>"/>
			<label for="title"><?php _e('Title:', 'thfo_gestsup')?></label>
			<input type="text" name="title" />
			<label for="ticket"><?php _e('Ticket:', 'thfo_gestsup')?></label>
			<textarea name="ticket" cols="50" rows="10"></textarea>
			<input type="submit" value="<?php _e('Send', 'thfo_gestsup') ?>" name="add_ticket" ><br/>
	<?php
		if(isset($_POST['add_ticket']) && !empty($_POST['mail'])) {
			$search_mail = $this->search_mail();
			if($search_mail['mail'] != $_POST['mail']){
				_e('Your mail adress isn\'t registred in our database. Please contact our admin', 'thfo_gestsup');
			}
		}
	}

	public function search_mail()
	{
		if(isset($_POST['add_ticket']) && !empty($_POST['mail'])) {
			$v    = gestsup_options::gestsup_mysql();
			$m    = $v->query( "SELECT * FROM tusers WHERE mail = '$_POST[mail]'" );
			$mail = $m->fetch_assoc();
			if ( $mail['mail'] === $_POST['mail'] ) {
				//return $_POST['mail'];
				return $mail;
			}
		}
	}

	public function add_ticket_db(){
		if(isset($_POST['add_ticket']) && $this->search_mail()) {

			$_POST['ticket'] = sanitize_text_field( $_POST['ticket'] );
			$_POST['title']  = sanitize_text_field( $_POST['title'] );
			$date            = current_time( 'Y-m-d H:m:s' );
			$data_user = $this->search_mail();
			$mail = $data_user['mail'];
			$user = $data_user['id'];
			$tech = get_option( 'gestsup_tech');

			$v = gestsup_options::gestsup_mysql();
			$v->query("INSERT INTO tincidents (technician,user,title,description,state,date_create,creator,criticality,techread) VALUES ('$tech','$user', '$_POST[title]','$_POST[ticket]','1','$date','$user','4','0')");
			// recup $user dans Search_mail


		}
	}

}