<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    $settings = new admin_settingpage('local_emailplugin', get_string('pluginname', 'local_emailplugin'));

    $settings->add(new admin_setting_heading('local_emailplugin/testemailheading',
        get_string('testemailheading', 'local_emailplugin'),
        get_string('testemailheading_desc', 'local_emailplugin')));

    $settings->add(new admin_setting_configtext('local_emailplugin/testemailaddress',
        get_string('testemailaddress', 'local_emailplugin'),
        get_string('testemailaddress_desc', 'local_emailplugin'),
        ''));

    $settings->add(new admin_setting_configtext('local_emailplugin/testemailsubject',
        get_string('testemailsubject', 'local_emailplugin'),
        get_string('testemailsubject_desc', 'local_emailplugin'),
        'Test Email Subject'));

    $settings->add(new admin_setting_configtextarea('local_emailplugin/testemailmessage',
        get_string('testemailmessage', 'local_emailplugin'),
        get_string('testemailmessage_desc', 'local_emailplugin'),
        'This is a test email from Moodle plugin.', PARAM_TEXT));

    // Add the button to send the test email.
    $buttonhtml = html_writer::empty_tag('input', array('id'=>'submit','type' => 'submit', 'value' => get_string('sendtestemail', 'local_emailplugin')));
    $settings->add(new admin_setting_heading('local_emailplugin_button', '', $buttonhtml));
    
    $ADMIN->add('localplugins', $settings);

     // Include the JavaScript file
     $PAGE->requires->js('/local/emailplugin/js/script.js'); // Adjust path based on location

}
?>