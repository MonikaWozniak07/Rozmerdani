<?php
// add settings page
function custom_admin_menu() {
    add_menu_page(
        __( 'Sample page', 'my-textdomain' ),
        __( 'Sample menu', 'my-textdomain' ),
        'manage_options',
        'sample-page',
        'my_admin_page_contents',
        'dashicons-schedule',
        3
    );
}
add_action( 'admin_menu', 'custom_admin_menu' );

function my_admin_page_contents() { ?>
    <div class="wrap">
        <h1>Opcje dodatkowe</h1>
        <form method="post" action="options.php">
        <?php
            // This prints out all hidden setting fields
            settings_fields( 'my_option_group' );
            do_settings_sections( 'my-setting-admin' );
            submit_button();
        ?>
        </form>
    </div>
    <h1> <?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?> </h1>
    <form method="POST" action="options.php">
    <?php
        settings_fields( 'sample-page' );
        do_settings_sections( 'sample-page' );

        // settings_fields( 'numer-konta' );
        // do_settings_sections( 'numer-konta' );

        // settings_fields( 'adres-email' );
        // do_settings_sections( 'adres-email' );

        // settings_fields( 'social-facebook' );
        // do_settings_sections( 'social-facebook' );

        // settings_fields( 'social-instagram' );
        // do_settings_sections( 'social-instagram' );

        submit_button(); ?>
    </form>
    <?php
}

add_action( 'admin_init', 'my_settings_init' );

function my_settings_init() {

    add_settings_section(
        'sample_page_setting_section',
        __( 'Custom settings', 'my-textdomain' ),
        'my_setting_section_callback_function',
        'sample-page'
    );

    add_settings_field(
        'my_setting_field',
        __( 'My custom setting field', 'my-textdomain' ),
        'my_setting_markup',
        'sample-page',
        'sample_page_setting_section'
    );
    register_setting( 'sample-page', 'my_setting_field' );

    add_settings_field(
        'nr_konta', // ID
        'Nr konta', // Title
        'my_setting_markup',
        'sample-page', // Page
        'sample_page_setting_section' // Section
    );
    register_setting( 'sample-page', 'nr_konta' );

    add_settings_field(
        'email',
        'Email',
        'my_setting_markup',
        'sample-page',
        'sample_page_setting_section'
    );
    register_setting( 'sample-page', 'email' );

    add_settings_field(
        'telefon',
        'Telefon',
        'my_setting_markup',
        'sample-page',
        'sample_page_setting_section'
    );
    register_setting( 'sample-page', 'telefon' );
    add_settings_field(
        'facebook',
        'Facebook',
        'my_setting_markup',
        'sample-page',
        'sample_page_setting_section'
    );
    register_setting( 'sample-page', 'facebook' );

    add_settings_field(
        'instagram',
        'Instagram',
        'my_setting_markup',
        'sample-page',
        'sample_page_setting_section'
    );
    register_setting( 'sample-page', 'instagram' );
}

function my_setting_section_callback_function() {
    echo '<p>Intro text for our settings section</p>';
}


function my_setting_markup() {
    ?>
    <input type="text" id="my_setting_field" name="my_setting_field" class="regular-text" value="<?php echo get_option( 'my_setting_field' ); ?>">
    <?php
}













class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Settings Admin',
            'My Settings',
            'manage_options',
            'my-setting-admin',
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'my_option_name' );
        ?>
        <div class="wrap">
            <h1>My Settings</h1>
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'my_option_group' );
                do_settings_sections( 'my-setting-admin' );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'my_option_group', // Option group
            'my_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'My Custom Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'my-setting-admin' // Page
        );

        add_settings_field(
            'nr_konta', // ID
            'Nr konta', // Title
            array( $this, 'id_number_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section
        );
        register_setting( 'my-setting-admin', 'nr_konta' );

        add_settings_field(
            'email',
            'Email',
            array( $this, 'title_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        register_setting( 'my-setting-admin', 'email' );

        add_settings_field(
            'telefon',
            'Telefon',
            array( $this, 'title_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        register_setting( 'my-setting-admin', 'telefon' );
        add_settings_field(
            'facebook',
            'Facebook',
            array( $this, 'title_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        register_setting( 'my-setting-admin', 'facebook' );

        add_settings_field(
            'instagram',
            'Instagram',
            array( $this, 'title_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        register_setting( 'my-setting-admin', 'instagram' );
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your settings below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function id_number_callback()
    {
        printf(
            '<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />',
            isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="my_option_name[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }
}

if( is_admin() )
    $my_settings_page = new MySettingsPage();