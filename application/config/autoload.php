<?php
defined('BASEPATH') or exit('No direct script access allowed');


$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','form_validation','ltp','encryption');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','security','file','cookie','download');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('AuthModel','QueryModel','AcctionsModel');