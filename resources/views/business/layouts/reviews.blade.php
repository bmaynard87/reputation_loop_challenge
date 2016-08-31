<div class="review">
    <h5><a target="_blank" href="{{ $review->customer_url }}">{{ $review->customer_name }}</a> <small>posted on {{ date('F j, Y, g:i a', strtotime($review->date_of_submission)) }}</small></h5>
    <p class="review_description">{{ $review->description }}</p>
    <div class="stars">
        <ul>
            @for($i = 1; $i <= $review->rating; $i++)
                <li class="rating-star"></li>
            @endfor
            <li class="text-rating">{{ $review->rating }}/5</li>
        </ul>
    </div>
    <p class="clearfix"><strong class="text-grey">Source:</strong> Molomedia</p>
</div>
