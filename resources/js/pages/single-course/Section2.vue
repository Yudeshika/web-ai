<template>
<block folder="single-course" file="Section2" #default="{ contents }">
<section class="single-course">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 col-sm-12 col-lg-8">
<div class="single-course-details">
<div class="single-course-details-top d-flex justify-content-between">
<div class="course-duration">
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_2 }}</p>
</div>
<div class="course-review">
<h4>{{ contents[0].h4_2 }}</h4>
<ul class="d-flex">
<li>5</li>
<li><i class="fa-solid fa-star"></i></li>
<li><i class="fa-solid fa-star"></i></li>
<li><i class="fa-solid fa-star"></i></li>
<li><i class="fa-solid fa-star"></i></li>
<li><i class="fa-solid fa-star"></i></li>
</ul>
</div>
<div class="course-duration">
<h4>{{ contents[0].h4_3 }}</h4>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
</div>
<!-- single-course-details-top -->
<div class="course-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
<div class="course-info">
<div class="course-tabs d-flex justify-content-center">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button aria-controls="home" aria-selected="true" class="nav-link active" data-bs-target="#course-de" data-bs-toggle="tab" id="course-de-tab" role="tab" type="button">Course Details</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="curriculum" aria-selected="false" class="nav-link" data-bs-target="#curriculum" data-bs-toggle="tab" id="curriculum-tab" role="tab" type="button">Course Curriculum</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="instructor" aria-selected="false" class="nav-link" data-bs-target="#instructor" data-bs-toggle="tab" id="review-tab" role="tab" type="button">Instructor</button>
</li>
</ul>
</div>
<div class="tab-content" id="myTabContent">
<div aria-labelledby="course-de-tab" class="tab-pane fade show active" id="course-de" role="tabpanel">
<h4>{{ contents[0].h4_4 }}</h4>
<p>{{ contents[0].p_4 }}</p>
<h4>{{ contents[0].h4_5 }}</h4>
<p>{{ contents[0].p_5 }}</p>
<h4>{{ contents[0].h4_6 }}</h4>
<ul class="course-module">
<li><i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet</li>
<li><i class="fa-solid fa-check"></i> Euismod tincidunt ut laoreet dolore magna</li>
<li><i class="fa-solid fa-check"></i> Illum dolore eu feugiat nulla facilisis at</li>
<li><i class="fa-solid fa-check"></i> Placerat facer possim assum Typi non habent</li>
<li><i class="fa-solid fa-check"></i> Feugiat nulla facilisis at vero eros et accumsan</li>
<li><i class="fa-solid fa-check"></i> Augue duis dolore te feugait nulla facilisi</li>
</ul>
<div class="course-btn">
<a :href="contents[0].button_1.link" :target="contents[0].button_1.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_1.text }}</a>
</div>
</div>
<!-- tab-one -->
<div aria-labelledby="curriculum-tab" class="tab-pane fade" id="curriculum" role="tabpanel">
<div class="accordion" id="accordionExample">
<div class="accordion-item">
<h2 class="accordion-header" id="headingOne">
<button aria-controls="course-one-accordion" aria-expanded="true" class="accordion-button" data-bs-target="#course-one-accordion" data-bs-toggle="collapse" type="button">
                                      01. Basic Course
                                    </button>
</h2>
<div aria-labelledby="headingOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample" id="course-one-accordion">
<div class="accordion-body">
<p>{{ contents[0].p_6 }}</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo">
<button aria-controls="course-two-accordion" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#course-two-accordion" data-bs-toggle="collapse" type="button">
                                     02. Advanced Course
                                    </button>
</h2>
<div aria-labelledby="headingTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" id="course-two-accordion">
<div class="accordion-body">
<p><i class="fa-solid fa-circle-exclamation"></i> Course List Show after Buying</p>
</div>
</div>
</div>
</div>
<div class="course-btn">
<a :href="contents[0].button_2.link" :target="contents[0].button_2.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_2.text }}</a>
</div>
</div>
<!-- tab two -->
<div aria-labelledby="review-tab" class="tab-pane fade" id="instructor" role="tabpanel">
<div class="row">
<div class="col-md-4 col-sm-12 col-lg-4">
<div class="insctuctor-img">
<img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/>
</div>
</div>
<div class="col-md-8 col-sm-12 col-lg-8">
<div class="insctuctor-des">
<h4>{{ contents[0].h4_7 }}</h4>
<div class="teacher-detiles-box">
<p>{{ contents[0].p_7 }}</p>
</div>
<div class="techer-social footer-social">
<ul>
<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="course-btn">
<a :href="contents[0].button_3.link" :target="contents[0].button_3.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_3.text }}</a>
</div>
</div>
</div>
</div>
</div>
<!-- col-md-8 -->
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="course-sidebar">
<div class="course-feature">
<div class="course-search">
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php" class="d-flex justify-content-between">
<input placeholder="Search Your Course" type="search"/>
<i class="fa-solid fa-magnifying-glass"></i>
</form>
</div>
<div class="course-feature-top">
<h4>{{ contents[0].h4_8 }}</h4>
<div class="course-feature-info">
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-certificate"></i> Course Catagury</p>
<span>{{ contents[0].span_1 }}</span>
</div>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-users"></i> Total Students</p>
<span>{{ contents[0].span_2 }}</span>
</div>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-clock"></i> Course Duration</p>
<span>{{ contents[0].span_3 }}</span>
</div>
</div>
</div>
<div class="course-feature-top">
<h4>{{ contents[0].h4_9 }}</h4>
<div class="course-feature-info">
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-certificate"></i> Learning A,B,C</p>
<span>{{ contents[0].span_4 }}</span>
</div>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-users"></i>Make More Friends</p>
<span>{{ contents[0].span_5 }}</span>
</div>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-clock"></i> Build Your Skill</p>
<span>{{ contents[0].span_6 }}</span>
</div>
</div>
</div>
<div class="course-feature-slider-area">
<h4>{{ contents[0].h4_10 }}</h4>
<div class="course-fature-slider owl-carousel owl-theme">
<div class="slider-item">
<img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/>
<h5><a :href="contents[0].button_4.link" :target="contents[0].button_4.open" href="#">{{ contents[0].button_4.text }}</a></h5>
<p>{{ contents[0].p_8 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-users"></i> Total Students: 500</p>
<p><i class="fa-solid fa-comments"></i> Total Review: 2.4k</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/>
<h5><a :href="contents[0].button_5.link" :target="contents[0].button_5.open" href="#">{{ contents[0].button_5.text }}</a></h5>
<p>{{ contents[0].p_9 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-users"></i> Total Students: 500</p>
<p><i class="fa-solid fa-comments"></i> Total Review: 2.4k</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/>
<h5><a :href="contents[0].button_6.link" :target="contents[0].button_6.open" href="#">{{ contents[0].button_6.text }}</a></h5>
<p>{{ contents[0].p_10 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-users"></i> Total Students: 500</p>
<p><i class="fa-solid fa-comments"></i> Total Review: 2.4k</p>
</div>
</div>
<!-- item -->
</div>
</div>
</div>
</div>
</div>
<!-- col-md-4 -->
</div>
</div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
