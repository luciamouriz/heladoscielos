<?php
/**
 * Basic theme functions.
 *
 * This file contains hook functions attached to core hooks.
 *
 * @package Golden Builder
 */

if( ! function_exists( 'golden_builder_primary_navigation_fallback' ) ) :

	/**
	 * Fallback for primary navigation.
	 *
	 * @since 1.0.0
	 */
	function golden_builder_primary_navigation_fallback() {
		
		echo '<ul>';
			echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' .esc_html__( 'Home', 'golden-builder' ). '</a></li>';
			wp_list_pages( array(
			'title_li' => '',
			'depth'    => 1,
			'number'   => 5,
			) );
		echo '</ul>';

	}

endif;


if ( ! class_exists( 'WP_Customize_Control' ) )
  return NULL;

/**
 * Class golden_builder_Dropdown_Taxonomies_Control
 */
class Golden_Builder_Dropdown_Taxonomies_Control extends WP_Customize_Control {

    /**
     * Render the control's content.
     *
     * @since 3.4.0
     */
    public function render_content() {
        $dropdown = wp_dropdown_categories(
            array(
                'name'              => 'golden-builder-dropdown-categories-' . $this->id,
                'echo'              => 0,
                'show_option_none'  => __( '&mdash; Select &mdash;', 'golden-builder' ),
                'option_none_value' => '0',
                'selected'          => $this->value(),
                'hide_empty'        => 0,                   

            )
        ); 
        
        $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

        printf(
            '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s <span class="description customize-control-description"></span>%s </label>',
            esc_html($this->label),
            esc_html($this->description),
            $dropdown

        );
    }

}

class Golden_Builder_Switch_Control extends WP_Customize_Control{
    public $type = 'switch';
    public $on_off_label = array();

    public function __construct( $manager, $id, $args = array() ){
        $this->on_off_label = $args['on_off_label'];
        parent::__construct( $manager, $id, $args );
    }

    public function render_content(){
    ?>
        <span class="customize-control-title">
            <?php echo esc_html( $this->label ); ?>
        </span>

        <?php if( $this->description ){ ?>
            <span class="description customize-control-description">
            <?php echo wp_kses_post( $this->description ); ?>
            </span>
        <?php } ?>

        <?php
            $switch_class = ( $this->value() == 'true' ) ? 'switch-on' : '';
            $on_off_label = $this->on_off_label;
        ?>
        <div class="onoffswitch <?php echo esc_attr( $switch_class ); ?>">
            <div class="onoffswitch-inner">
                <div class="onoffswitch-active">
                    <div class="onoffswitch-switch"><?php echo esc_html( $on_off_label['on'] ) ?></div>
                </div>

                <div class="onoffswitch-inactive">
                    <div class="onoffswitch-switch"><?php echo esc_html( $on_off_label['off'] ) ?></div>
                </div>
            </div>  
        </div>
        <input <?php $this->link(); ?> type="hidden" value="<?php echo esc_attr( $this->value() ); ?>"/>
        <?php
    }
}

 /**
 * Customize Control for Repeater Text.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Golden_Builder_Repeater_Text_Control extends WP_Customize_Control {

    /**
     * Control type.
     *
     * @access public
     * @var string
     */
    public $type = 'golden-builder-repeater-text';

    /**
     * Render content.
     *
     * @since 1.0.0
     */
    public function render_content() {
        ?>
        <?php if ( ! empty( $this->label ) ) : ?>
            <h3><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span></h3>
        <?php endif; ?>
        <?php if ( ! empty( $this->description ) ) : ?>
            <span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
        <?php endif; ?>
        <label class="repeater-text-input">
            <input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="repeater-text-value" <?php $this->link(); ?> />
            <div class="repeater-text-fields">
                <div class="set">
                    <input type="text" value="" class="repeater-text-single-field" />
                    <span class="btn-remove-field"><span class="dashicons dashicons-no-alt"></span></span>
                </div>
            </div>
            <a href="#" class="button button-primary btn-add-field"><?php esc_html_e( 'Add New', 'golden-builder' ) ?></a>
        </label><!-- .repeater-text-input -->
        <?php
    }
}

class Golden_Builder_Range_Value_Control extends WP_Customize_Control {
  public $type = 'range-value';
  /**
   * Enqueue scripts/styles.
   *
   * @since 3.4.0
   */
  public function enqueue() {
    wp_enqueue_script( 'golden-builder-customizer-range', get_template_directory_uri() . '/assets/js/customizer-range.js', array( 'jquery' ), rand(), true );
  }
  /**
   * Render the control's content.
   *
   * @author soderlind
   * @version 1.2.0
   */
  public function render_content() {
    ?>
    <label>
      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      <div class="range-slider"  style="width:100%; display:flex;flex-direction: row;justify-content: flex-start;">
        <span  style="width:100%; flex: 1 0 0; vertical-align: middle;"><input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); $this->link(); ?>>
        <span class="range-slider__value">0</span></span>
      </div>
      <?php if ( ! empty( $this->description ) ) : ?>
      <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
      <?php endif; ?>
    </label>
    <?php
  }
}

/**
 * Customizer Controls
 *
 * @package Golden Builder
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) :
    return null;
endif;

/**
 * Upsell customizer section.
 *
 * @since  1.0.0
 * @access public
 */
class Golden_Builder_Customize_Section_Upsell extends WP_Customize_Section {

    /**
     * The type of customize section being rendered.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $type = 'golden-builder-upsell';

    /**
     * Custom button text to output.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $pro_text = '';

    /**
     * Custom pro button URL.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $pro_url = '';

    /**
     * Add custom parameters to pass to the JS via JSON.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function json() {
        $json = parent::json();

        $json['pro_text'] = $this->pro_text;
        $json['pro_url']  = esc_url( $this->pro_url );

        return $json;
    }

    /**
     * Outputs the Underscore.js template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    protected function render_template() { ?>

        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

            <h3 class="accordion-section-title">
                {{ data.title }}

                <# if ( data.pro_text && data.pro_url ) { #>
                    <a href="{{ data.pro_url }}" class="button button-primary alignright" target="_blank">{{ data.pro_text }}</a>
                <# } #>
            </h3>
        </li>
    <?php }
}
