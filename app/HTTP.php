<?php
namespace App;

use Session;
use Log as Logging;
use App\API;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Client;
use GuzzleHttp\FORCE_IP_RESOLVE;
use GuzzleHttp\DECODE_CONTENT;
use GuzzleHttp\CONNECT_TIMEOUT;
use GuzzleHttp\READ_TIMEOUT;
use GuzzleHttp\TIMEOUT;

class HTTP
{
	public static function get($url) {
		try {
			$client = new Client();
			$options = [
				'http_errors' => false,
				'connect_timeout' => 10,
				'read_timeout' => 10,
				'timeout' => 10
			];

			$result = $client->request('GET', $url, $options);
		} catch (ConnectException $e) {
			Logging::error($e);
			return null;
		}

		return json_decode($result->getBody(), true);
	}

	public static function getBasicAuth($url, $un, $pw, $acceptType) {
		try {
			$client = new Client();
			$options = [
				'http_errors' => false,
				'connect_timeout' => 10,
				'read_timeout' => 10,
				'timeout' => 10
			];

			$headers = [
				'headers' => [
					'Accept' => $acceptType,
					'Authorization' => 'Basic ' . base64_encode($un . ':' . $pw)
				]
			];

			$result = $client->request('GET', $url, $headers);

		} catch (ConnectException $e) {
			Logging::error($e);
			return null;
		}

		return json_decode($result->getBody(), true);
	}

	public static function getV6($url) {
		try {
			$client = new Client();
			$options = [
				'http_errors' => false,
				'force_ip_resolve' => 'v6',
				'connect_timeout' => 10,
				'read_timeout' => 10,
				'timeout' => 10
			];

			$result = $client->request('GET', $url, $options);
		} catch (ConnectException $e) {
			Logging::error($e);
			return null;
		}

		return json_decode($result->getBody(), true);
	}

	public static function postBasicAuth($url, $data, $un, $pw) {
		try {
			$maxRetry = 1;
			$retryCount = 0;
			do {

				$ch = curl_init($url);

				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/vnd.yang.operation+json'));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
				curl_setopt($ch, CURLOPT_TIMEOUT_MS, 5000);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
				curl_setopt($ch, CURLOPT_ENCODING , "gzip");
				curl_setopt($ch, CURLOPT_USERAGENT,'php');
				curl_setopt($ch, CURLOPT_USERPWD, $un.":".$pw);

				$result = curl_exec($ch);

				$info = curl_getinfo($ch);
				$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

				$retryCount++;

				if ($httpCode != 204 && $retryCount < $maxRetry) {
					sleep(1000);
				} else {
					return $httpCode;
				}

			} while ($httpCode != 204 && $retryCount < $maxRetry);

		} catch (ConnectException $e) {
			Logging::error($e);

			return null;
		}

		return json_decode($result, true);
	}

	public static function post($url, $data) {
		try {
			$maxRetry = 1;
			$retryCount = 0;
			do {

				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
				curl_setopt($ch, CURLOPT_TIMEOUT_MS, 5000);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
				curl_setopt($ch, CURLOPT_ENCODING , "gzip");
				curl_setopt($ch, CURLOPT_USERAGENT,'php');

				$result = curl_exec($ch);
				$info = curl_getinfo($ch);
				$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

				$retryCount++;

				if ($httpCode != 200 && $retryCount < $maxRetry) {
					sleep(1000);
				}  else {
					return $httpCode;
				}

			} while ($httpCode != 200 && $retryCount < $maxRetry);

		} catch (ConnectException $e) {
			Logging::error($e);

			return null;
		}

		return json_decode($result, true);
	}

	public static function put($url, $data) {
		try {
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_TIMEOUT_MS, 1000);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			curl_close($ch);
		} catch (ConnectException $e) {
			Logging::error($e);
			return null;
		}

		return json_decode($result, true);
	}

	public static function delete($url) {
		try {
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			$info = curl_getinfo($ch);
			curl_close($ch);
		} catch (ConnectException $e) {
			Logging::error($e);
			return null;
		}

		return json_decode($result, true);
	}
}
