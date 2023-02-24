<?php

// Register Endpoints
add_action('rest_api_init', function () {
    register_rest_route('sensorz/v1', '/contact', array(
        'methods' => 'POST',
        'callback' =>  'send_contact_form',
        'permission_callback' => '__return_true',
    ));
});

function send_contact_form($request)
{
    $name = $request->get_param('name');
    $email = $request->get_param('email');
    $message = $request->get_param('message');

    // Check if name is empty
    if (empty($name)) {
        $err_msg = array(
            'error' => true,
            'message' => __('Name is required', 'sensorz'),
        );
        return $err_msg;
    }

    // Check if email is empty
    if (empty($email)) {
        $err_msg = array(
            'error' => true,
            'message' => __('Email is required', 'sensorz')
        );
        return $err_msg;
    }
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err_msg = array(
            'error' => true,
            'message' => __('Email is invalid', 'sensorz')
        );
        return $err_msg;
    }
    // Check if message is empty
    if (empty($message)) {
        $err_msg = array(
            'error' => true,
            'message' => __('Message is required', 'sensorz')
        );
        return $err_msg;
    }


    // Send email
    $adminEmail = get_option('admin_email');
    $to = get_field('contact_form_email', 'option') ? get_field('contact_form_email', 'option') : $adminEmail;
    $subject = 'Contact Form Submission';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    // Set the from email address
    $headers[] = 'From: ' . $name . ' <' . $email . '>';
    // Set the reply to email address
    $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';

    $body = "<table>
                <tr>
                    <td>Name</td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>$message</td>
                </tr>
            </table>";




    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        $success_msg = array(
            'error' => false,
            'message' => __('Message sent successfully', 'sensorz')
        );
        return $success_msg;
    } else {
        $err_msg = array(
            'error' => true,
            'message' =>  __('Message could not be sent', 'sensorz')
        );
        return $err_msg;
    }
}
