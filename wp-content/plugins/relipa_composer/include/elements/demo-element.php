<?php
if ( ! class_exists('Demo_Element')) {
    class Demo_Element
    {
        public function __construct()
        {
            add_shortcode('show_element', array($this, 'shortcode_show_element'));
            add_action('vc_before_init', array($this, 'show_element_integrate_vc'));
        }

        public function shortcode_show_element($atts)
        {
            $text = '';
            extract(shortcode_atts(array(
                'text' => '',
            ), $atts));
            require_once RELIPA_COMPOSER_INCLUDES_DIR . 'elements/demo-element-html.php';
            echo get_demo_element_html($text);
        }

        public function show_element_integrate_vc()
        {
            vc_map(array(
                'name'     => esc_html__('Demo Element', 'dgt-framework'),
                'base'     => 'show_element',
                'category' => esc_html__('', 'dgt-framework'),
                'icon'     => 'dgt-show_text',
                "params"   => array(
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Enter Text', 'dgt-framework'),
                        'param_name'  => 'text',
                        'description' => esc_html__('', 'dgt-framework')
                    )
                )
            ));
        }
    }
    new Demo_Element();
}