<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ReputationLoopAPI;
use App\Library\Business;

class ReviewsController extends Controller
{

    protected $api;

    public function __construct(ReputationLoopAPI $api) {
        $this->api = $api;
    }

    public function index($page = 1, $num_per_page = 10) {
        $offset = $page > 1 ? (($page - 1) * $num_per_page) : 0;

        $data = $this->api->set_params(['noOfReviews' => 10, 'offset' => $offset])->get();

        $business_info = $data->business_info;
        $reviews = $data->reviews;

        $business = new Business(
            $business_info->business_name,
            $business_info->business_address,
            $business_info->business_phone,
            $business_info->total_rating,
            $business_info->external_url,
            $business_info->external_page_url
        );

        $num_reviews = count($this->api->set_params(['noOfReviews' => 1000])->get()->reviews);

        $num_pages = ceil($num_reviews / 10);

        return view('business/single', [
            'business'    => $business,
            'num_reviews' => $num_reviews,
            'page'        => $page,
            'num_pages'   => $num_pages,
            'reviews'     => $reviews
        ]);
    }

}
