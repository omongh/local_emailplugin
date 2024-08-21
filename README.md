# Email Plugin for Moodle
# Email Plugin for Moodle

## Description

The **Email Plugin for Moodle** is a custom plugin designed to integrate email functionality within the Moodle learning management system. This plugin allows administrators to send test emails from the Moodle interface, making it easier to verify email configurations and ensure proper communication through the platform.

### Key Features

- **Send Test Emails**: Provides functionality to send test emails directly from Moodle's administrative settings, enabling quick verification of email configurations.
- **Configuration Options**: Allows users to set and customize the recipient's email address, subject, and body of the test email through Moodle's settings page.
- **PHPMailer Integration**: Utilizes the PHPMailer library for robust and secure email sending, supporting SMTP configurations with SSL.

### Installation

1. **Download and Extract**: Download the plugin and place it in the `local` directory of your Moodle installation.
2. **Configure SMTP Settings**: Ensure that SMTP settings are configured correctly in the `testemail.php` file for email sending.
3. **Set Up Plugin**: Access the Moodle site administration, navigate to the plugins section, and configure the plugin settings as needed.
4. **Send Test Email**: Use the provided button in the settings page to send a test email and verify email functionality.

### Usage

- **Configuration**: Adjust settings for email address, subject, and body through the plugin settings page in Moodle.
- **Testing**: Click the “Send Test Email” button to trigger email sending and verify that the configuration works correctly.

### Requirements

- Moodle (version X.X or higher)
- PHPMailer library
- SMTP server configuration

### Contributing

Contributions to enhance the plugin are welcome. Please submit issues, feature requests, or pull requests through GitHub.

### License

