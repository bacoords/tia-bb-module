<?php

/**
 * This is an example module with only the basic
 * setup necessary to get it working.
 *
 * @class TIAAudioModule
 */
class TIAAudioModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('TIA Audio', 'fl-builder'),
            'description'   => __('Audio Module.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder'),
            'dir'           => TIA_FL_MODULE_EXAMPLES_DIR . 'audio-module/',
            'url'           => TIA_FL_MODULE_EXAMPLES_URL . 'audio-module/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('TIAAudioModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Settings', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'text'     => array(
                        'type'          => 'text',
                        'label'         => __('Text', 'fl-builder'),
                        'default'       => '',
                        'help'          => 'Insert text to be displayed.'
                    ),
                    'audio'    => array(
                        'type'          => 'text',
                        'label'         => __('Audio File URL', 'fl-builder'),
                        'help'          => 'Please entire entire URL for audio file.'
                    ),
                    'photo'    => array(
                        'type'          => 'photo',
                        'label'         => __('Thumbnail', 'fl-builder')
                    ),
                )
            )
        )
    )
));