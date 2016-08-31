<nav>
    <ul>
        @if($page > 1)
            <li><a href="/reviews/page/1">First</a></li>
            <li><a href="/reviews/page/{{ $page - 1 }}">Prev</a></li>
            @if($page > 7)
                <li><a href="/reviews/page/{{ $page - 5 }}">...</a></li>
            @endif
        @endif
        @for($i = 1; $i <= $num_pages; $i++)
            @if($page == $i)
                <li class="active">{{ $i }}</li>
            @else
                @if($i > ($page - 5) && $i < $page + 5)
                    <li><a href="/reviews/page/{{ $i }}">{{ $i }}</a></li>
                @else
                    @if($i == $page + 5)
                        <li><a href="/reviews/page/{{ $page + 5 }}">...</a></li>
                        @break;
                    @endif
                @endif
            @endif
        @endfor
        @if($page < $num_pages)
            <li><a href="/reviews/page/{{ $page + 1 }}">Next</a></li>
            <li><a href="/reviews/page/{{ $num_pages }}">Last</a></li>
        @endif
    </ul>
</nav>