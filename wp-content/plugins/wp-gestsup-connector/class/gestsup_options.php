<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 13/09/15
 * Time: 00:25
 */
class gestsup_options {

	public function __construct() {
		add_action( 'admin_init', array( $this, 'register_setting' ) );
		add_action('admin_init', array($this,'gestsup_mysql'));

	}

	public static function credentials() { ?>
		<form method="post" action="options.php">
			<?php settings_fields( 'gestsup_options_settings' ) ?>
			<?php do_settings_sections( 'gestsup_options_settings' ) ?>

			<?php submit_button( __( 'Save', 'thfo_gestsup' ) ) ?>
		</form>
		<?php
	}

	public static function gestsup_options()
	{ ?>
		<form method="post" action="options.php">
			<?php settings_fields('gestsup_API') ?>
			<?php do_settings_sections('gestsup_options_API') ?>
			<?php submit_button( __( 'Save', 'thfo_gestsup' ),'','tech' ) ?>
		</form>
	<?php }

	public function register_setting() {
		register_setting( 'gestsup_options_settings', 'gestsup_host' );
		register_setting( 'gestsup_options_settings', 'gestsup_user' );
		register_setting( 'gestsup_options_settings', 'gestsup_dbname' );
		register_setting( 'gestsup_options_settings', 'gestsup_pass' );

		register_setting( 'gestsup_API', 'gestsup_tech' );

		add_settings_section( 'gestsup_options', __( 'Save your GestSup db credentials', 'thfo_gestsup' ), array(
			$this,
			'section_html'
		), 'gestsup_options_settings' );

		add_settings_section( 'gestsup_API_options', __( 'Save your GestSup defaults infos', 'thfo_gestsup' ), array(
			$this,
			'section_API_html'
		), 'gestsup_options_API' );

		add_settings_field( 'gestsup_host', __( 'Host Name', 'thfo_gestsup' ), array(
			$this,
			'host_html'
		), 'gestsup_options_settings', 'gestsup_options' );

		add_settings_field( 'gestsup_dbname', __( 'DB Name', 'thfo_gestsup' ), array(
			$this,
			'dbname_html'
		), 'gestsup_options_settings', 'gestsup_options' );
		add_settings_field( 'gestsup_user', __( 'DB UserName', 'thfo_gestsup' ), array(
			$this,
			'dbuser_html'
		), 'gestsup_options_settings', 'gestsup_options' );
		add_settings_field( 'gestsup_pass', __( 'DB Password', 'thfo_gestsup' ), array(
			$this,
			'dbpass_html'
		), 'gestsup_options_settings', 'gestsup_options' );

		$db = $this->gestsup_mysql();
		$err = $db->errno;
		if ( ! is_null( $err ) ) {
			add_settings_field( 'gestsup_tech', __( 'By default technician', 'thfo_gestsup' ), array(
				$this,
				'tech_html'
			), 'gestsup_options_API', 'gestsup_API_options' );
		}
	}

	public function section_html() {
		_e( 'Save your GestSup db credentials', 'thfo_gestsup' );
	}

	public function section_API_html() {
		_e( 'Save your GestSup by defaults infos', 'thfo_gestsup' );
	}

	public function host_html() { ?>
		<input type="text" name="gestsup_host" placeholder="db host" value="<?php echo get_option('gestsup_host'); ?>"/>
	<?php }

	public function dbname_html() {
		?>
		<input type="text" name="gestsup_dbname" placeholder="db name" value="<?php echo get_option('gestsup_dbname');?>"/>
		<?php
	}

	public function dbuser_html() {?>
		<input type="text" name="gestsup_user" placeholder="db user" value="<?php echo get_option('gestsup_user'); ?>"/>
		<?php }



	public function dbpass_html() {
		?>
		<input type="password" name="gestsup_pass" placeholder="db password" value="<?php echo get_option('gestsup_pass'); ?>"/>
		<?php
	}

	public function tech_html() {
		$db          = $this->gestsup_mysql();
		$t           = $db->query( " SELECT id,firstname, lastname FROM tusers WHERE profile = '4' or profile='0' or profile = '3' " );
		$option_tech = get_option( 'gestsup_tech' );

		?>
		<select name="gestsup_tech">
			<?php
			while ( $tech = $t->fetch_assoc() ) { ?>
				<option name="gestsup_tech" value="<?php echo $tech['id']; ?>"
					<?php

					if ( get_option( 'gestsup_tech' ) && $option_tech == $tech['id'] ) {
						echo "selected";
					}
					?>><?php echo $tech['firstname'] . ' ' . $tech['lastname']; ?></option>
				<?php
			} ?>
		</select>
		<?php
	}

	public static function menu_html() {
		echo '<h1>' . get_admin_page_title() . '</h1>';
		echo self::credentials();
		echo self::check_sql();
		echo self::gestsup_options();

	}

	public static function gestsup_mysql() {

		$server   = get_option( 'gestsup_host' );
		$db       = get_option( 'gestsup_dbname' );
		$user     = get_option( 'gestsup_user' );
		$password = get_option( 'gestsup_pass' );

		$connect = @new Mysqli( $server, $user, $password, $db );

		return $connect;
	}

	public static function  check_sql(){
		$gestsup_mysql = self::gestsup_mysql();
		$connexion = 0;
		if($gestsup_mysql->connect_errno){
			return $connexion= __('Failed to connect to MySQL, please check your login credentials', 'thfo_gestsup');
		}else{
			return $connexion= __('Succesfully connected to the database', 'thfo_gestsup');
		}
	}


}