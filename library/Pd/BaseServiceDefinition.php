<?php


class Pd_BaseServiceDefinition {

	static public function create($service) {
		$fn = 'get_'.$service;
		if (method_exists(new static(), $fn)) {
			return static::$fn();
		}
		return null;
	}


	/*
	 * @var \Smarty  $smarty
	 */
	protected static function register_smarty_modifiers(&$smarty) {
		$smarty->registerPlugin('modifier', 'array_diff_key', function() {
			list($arrays, $value) = func_get_args();
			return array_diff_key($value, $arrays);
		});
		$smarty->registerPlugin('modifier', 'array_flip', function($value) {
			return array_flip($value);
		});
		$smarty->registerPlugin('modifier', 'array_slice', function($value) {
			list(, $i, $j) = func_get_args();
			return array_slice($value, $i, $j);
		});
		$smarty->registerPlugin('modifier', 'base64_encode', function($value) {
			return base64_encode($value);
		});
		$smarty->registerPlugin('modifier', 'current', function($value) {
			return current($value);
		});
		$smarty->registerPlugin('modifier', 'gethostbyaddr', function($value) {
			return gethostbyaddr($value);
		});
		$smarty->registerPlugin('modifier', 'htmlentities', function($value) {
			return ($value && is_scalar($value) ? htmlentities($value) : '');
		});
		$smarty->registerPlugin('modifier', 'htmlspecialchars', function($value) {
			return ($value && is_scalar($value) ? htmlspecialchars($value) : '');
		});
		$smarty->registerPlugin('modifier', 'implode', function($value, $separator) {
			return implode($separator, $value);
		});
		$smarty->registerPlugin('modifier', 'intval', function($value) {
			return intval($value);
		});
		$smarty->registerPlugin('modifier', 'is_a', function($value, $class) {
			return is_a($value, $class);
		});
		$smarty->registerPlugin('modifier', 'json_encode', function($value) {
			return json_encode($value);
		});
		$smarty->registerPlugin('modifier', 'md5', function($value) {
			return md5($value);
		});
		$smarty->registerPlugin('modifier', 'mt_rand', function($value) {
			return mt_rand(1, $value);
		});
		$smarty->registerPlugin('modifier', 'print_r', function($value) {
			return print_r($value, true);
		});
		$smarty->registerPlugin('modifier', 'rawurlencode', function($value) {
			return rawurlencode($value);
		});
		$smarty->registerPlugin('modifier', 'sizeof', function($value) {
			return sizeof($value);
		});
		$smarty->registerPlugin('modifier', 'stripslashes', function($value) {
			return stripslashes($value ?? '');
		});
		$smarty->registerPlugin('modifier', 'strtotime', function($value) {
			return strtotime($value ?? '');
		});
		$smarty->registerPlugin('modifier', 'tidy_parse_string', function($value) {
			return tidy_parse_string($value);
		});
		$smarty->registerPlugin('modifier', 'trim', function($value) {
			return trim($value ?? '');
		});
		$smarty->registerPlugin('modifier', 'ucfirst', function($value) {
			return ucfirst($value ?? '');
		});
		$smarty->registerPlugin('modifier', 'ucwords', function($value) {
			return ucwords($value ?? '');
		});
		$smarty->registerPlugin('modifier', 'unserialize', function($value) {
			return unserialize($value);
		});
		$smarty->registerPlugin('modifier', 'urlencode', function($value) {
			return ($value) ? urlencode($value) : '';
		});
	}
}

?>