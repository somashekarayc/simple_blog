<?php

class Validator {

    public function validateLogin($data) {
        $errors = [];

        // Validate email
        if (empty($data['email'])) {
            $errors['email'] = 'Please enter your email address.';
        } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        }

        // Validate password
        if (empty($data['password'])) {
            $errors['password'] = 'Please enter your password.';
        } else if (strlen($data['password']) < 8) {
            $errors['password'] = 'Password must be at least 8 characters long.';
        }

        return $errors;
    }

    // Add more validation methods for other fields as needed, e.g.,
    // validateUsername(), validatePhoneNumber(), etc.
}
