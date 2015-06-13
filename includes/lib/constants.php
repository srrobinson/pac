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

#Database constants
const DB_USER = "root";
const DB_PASS = "";
const DB_SERVER = "127.0.0.1";
const DB_PORT = "3306";
const DB_TABLE_PREFIX = "";
const DB_NAME = "account-man";

#LDAP Constants - ADJUST THESE FOR YOUR ENVIRONMENT
const APP_ROOT_DOMAIN = "server.local";
const APP_LDAP_ROOT = "DC=server,DC=local";
const APP_LDAP_SERVER = "adserver.server.local";
const APP_LDAP_PORT = "636";
const APP_LDAP_USER = "server\\Administrator";
const APP_LDAP_PASS = "Start123";


#String constants
const PAGE_TITLE = "PAC";

#Settings constants
const RAND_PASSWORD_LENGTH = 12;
const RAND_PASSWORD_SPECIAL_CHARS = true;