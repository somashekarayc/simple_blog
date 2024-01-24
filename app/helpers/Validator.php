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

    public function validateRegister($data) {
        $errors = [];
    
        // Validate name
        if (empty($data['name'])) {
            $errors['name'] = 'Please enter your name.';
        } else if (strlen($data['name']) < 3) {
            $errors['name'] = 'Name must be at least 3 characters long.';
        }
    
        // Validate email
        if (empty($data['email'])) {
            $errors['email'] = 'Please enter your email address.';
        } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    
        // Validate password
        if (empty($data['password'])) {
            $errors['password'] = 'Please enter a password.';
        } else if (strlen($data['password']) < 8) {
            $errors['password'] = 'Password must be at least 8 characters long.';
        }
    
        // Validate confirm password
        if (empty($data['confirm_password'])) {
            $errors['confirm_password'] = 'Please confirm your password.';
        } else if ($data['password'] !== $data['confirm_password']) {
            $errors['confirm_password'] = 'Passwords do not match.';
        }
    
        return $errors;
    }
    

    // Add more validation methods for other fields as needed, e.g.,
    // validateUsername(), validatePhoneNumber(), etc.
}
