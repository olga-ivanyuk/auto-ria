<div class="col-12 col-md-6">
    <!-- Single Blog -->
    <div class="single-blog res-margin">
        <!-- Blog Thumb -->
        <div class="blog-thumb">
            <a href="/ads/{{ $ad->id }}"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
        </div>
        <!-- Blog Content -->
        <div class="blog-content">
            <!-- Meta Info -->
            <ul class="meta-info d-flex justify-content-between">
                <li>By <a href="#">{{ $ad->owner }}</a></li>
{{--                {{ $ads->owner }}--}}
                <li><a href="/ads/{{ $ad->id }}">{{ $ad->created_at }}</a></li>
            </ul>
            <!-- Blog Title -->
            <h3 class="blog-title my-3"><a href="/ads/{{ $ad->id }}">{{ $ad->title }}</a></h3>
            <p>{{ $ad->description }}</p>
            <a href="/ads/{{ $ad->id }}" class="blog-btn mt-3">Read More</a>
        </div>
    </div>
</div>
