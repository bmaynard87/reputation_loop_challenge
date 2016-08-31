@extends('layouts/app')
@section('title', $business->get_name())
@section('content')
    <section id="business_info">
        <h3 class="text-grey">Business Information</h3>
        @include('business.layouts.business', ['business' => $business])
    </section>
    <section id="reviews">
        <h3 class="text-grey">Reviews</h3>
        @include('business.layouts.page_nav')
        <div id="review_list">
            @if($reviews)
                @foreach($reviews as $review)
                    @include('business.layouts.reviews', ['review' => $review])
                @endforeach
            @else
                <p>Sorry, we were unable to find any records..</p>
            @endif
        </div>
    </section>
@endsection