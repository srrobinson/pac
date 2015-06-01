<?php

/*
 * Copyright (c) 2015 srrobinson
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
*/

/***
 * Function to check if a variable was ever POSTed to the server
 * @param mixed $varname the given variable to check
 * @return bool return whether the variable exists in the post array
 */
function does_post_var_exist($varname)
{
    return isset($_POST[$varname]);
}

/***
 * Return a sanitized version of a post variable.
 * @param mixed $varname name of the post variable.
 * @return string the value of that post variable.
 */

function get_post_var($varname)
{
    return sanitize_data($_POST[$varname]);
}

/***
 * Perform some basic input sanitization (whitespace, html and php), not DB safe.
 * @param mixed $input_data data to be sanitized
 * @return string return the sanitized string input or sanitized array
 */
function sanitize_data($input_data)
{
    if (is_array($input_data)) {
        foreach ($input_data as $key => $data) {
            $input_data[$key] = trim(stripslashes(strip_tags($data)));
        }
        return $input_data;
    } else {
        return trim(stripslashes(strip_tags($input_data)));
    }
}

/***
 * Wrapper function around is_numeric, can run against arrays of values or single value.
 * @param mixed $varname variable we are checking.
 * @return bool return true if its numeric, false if not
 */
function is_var_numeric($varname)
{
    $input_data = $_POST[$varname];
    if (is_array($input_data)) {
        foreach ($input_data as $key => $data) {
            if (!is_numeric($data)) {
                return false;
            }
        }
    } else {
        return is_numeric($input_data);
    }
    return true;
}

/**
 * Verify if the variable is blank or not. Can check arrays of values for blanks.
 * @param mixed $varname POST variable name to check
 * @return bool true is any of the values in an array are blank or single variable, false if nothing is blank
 */
function is_field_blank($varname)
{

    $input_data = $_POST[$varname];
    if (is_array($input_data)) {
        foreach ($input_data as $key => $data) {
            if (empty($data)) {
                return true;
            }
        }
    } else {
        return empty($input_data);
    }
}


/**
 * Print out a standardized error message if someone tries ot enter bad data.
 * @param $message string the message to be displayed
 */
function print_error($message)
{
    print '<h3 class="error">' . $message . '</h3>';
    print '<a class="go_back_link" href="javascript:void(0);">Go Back</a>';

}

/**
 * Wrapper around filter_var for checking email
 * @param $email string the email to validate
 * @return bool return true is the email is valid or false if it isn't valid.
 */
function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
}