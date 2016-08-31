<?php

namespace App\Library;

class Business
{

	private $name;
	private $address;
	private $phone;
	private $total_rating;
	private $external_url;
	private $external_page_url;

	public function __construct($name, $address, $phone, $total_rating, $external_url, $external_page_url) {
		$this->name = $name;
		$this->address = $address;
		$this->phone = $phone;
		$this->total_rating = $total_rating;
		$this->external_url = $external_url;
		$this->external_page_url = $external_page_url;
	}

	/**
	 * @return string
	 */
	public function get_name() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function set_name( $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function get_address() {
		return $this->address;
	}

	/**
	 * @param string $address
	 */
	public function set_address( $address ) {
		$this->address = $address;
	}

	/**
	 * @return string
	 */
	public function get_phone() {
		return $this->phone;
	}

	/**
	 * @param string $phone
	 */
	public function set_phone( $phone ) {
		$this->phone = $phone;
	}

	/**
	 * @return array
	 */
	public function get_total_rating() {
		return $this->total_rating;
	}

	/**
	 * @param array $total_rating
	 */
	public function set_total_rating( $total_rating ) {
		$this->total_rating = $total_rating;
	}

	/**
	 * @return string
	 */
	public function get_external_url() {
		return $this->external_url;
	}

	/**
	 * @param string $external_url
	 */
	public function set_external_url( $external_url ) {
		$this->external_url = $external_url;
	}

	/**
	 * @return string
	 */
	public function get_external_page_url() {
		return $this->external_page_url;
	}


}