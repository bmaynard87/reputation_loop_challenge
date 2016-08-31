<?php

namespace App\Library;

use GuzzleHttp\Client;

class ReputationLoopAPI
{

	private $url;
	private $params;
	private $request;

	private $client;

	public function __construct(Client $client) {
		$this->client = $client;
	}

	public function get($params = null) {
		$query_str = http_build_query($this->params);
		$this->request = $this->client->get($this->url . $query_str);

		$data = json_decode($this->request->getBody());

		return $data;
	}

	public function set_params($params = null) {
		$config = config('api');

		$this->url = isset($params['url']) ? $params['url'] : $config['url'];

		if(isset($params) && is_array($params)) {
			if($params == $config) {
				dd(true);
				return $this;
			}

			foreach($params as $key => $val) {
				if($config[$key] != $val) {
					$config[$key] = $val;
				}
			}
		}

		$this->params = $config;

		return $this;
	}
}