<div id="business">
	<h4>{{ $business->get_name() }}</h4>
	<div>
		<div id="business_contact_info">
			<p id="#address">{{ str_replace('<br>', ' ', $business->get_address()) }}</p>
			<p id="phone">{{ $business->get_phone() }}
			</p>
			<div id="business_contact_links">
				<ul>
					<li><a target="_blank" href="http://maps.google.com/?q={{ urlencode(str_replace('<br>', ' ', $business->get_address())) }}" class="address-map"></a></li>
					<li><a href="tel:{{ str_replace(' ', '', $business->get_phone()) }}" class="phone-link"></a></li>
				</ul>
			</div>
		</div>
		<div id="average_rating_info" class="clearfix">
			<div class="stars">
				<ul class="clearfix">
					@for($i = 1; $i <= round($business->get_total_rating()->total_avg_rating); $i++)
						<li class="rating-star"></li>
					@endfor
				</ul>
			</div>
			<div class="details">
				<p>
					<strong class="text-grey">Average Rating:</strong> {{ $business->get_total_rating()->total_avg_rating }}/5 <small>({{ $business->get_total_rating()->total_no_of_reviews }} Ratings)</small>
				</p>
			</div>
		</div>
	</div>
</div>