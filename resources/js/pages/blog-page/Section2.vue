<template>
<block folder="blog-page" file="Section2" #default="{ contents }">
<div class="bloge-page">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-8 col-sm-12">
<div class="blog-main-area">
<div class="single-blog">
<div class="blog-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
<div class="blog-text">
<h2>{{ contents[0].h2_1 }}</h2>
<span>{{ contents[0].span_1 }}</span>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
<!-- single blog -->
<div class="single-blog">
<div class="blog-img">
<img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/>
</div>
<div class="blog-text">
<h2>{{ contents[0].h2_2 }}</h2>
<span>{{ contents[0].span_2 }}</span>
<p>{{ contents[0].p_2 }}</p>
</div>
</div>
<!-- single blog -->
<div class="single-blog">
<div class="blog-img">
<img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/>
</div>
<div class="blog-text">
<h2>{{ contents[0].h2_3 }}</h2>
<span>{{ contents[0].span_3 }}</span>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
<!-- single blog -->
<div class="pagination st-2" data-wow-delay="200ms" data-wow-duration="1500ms">
<ul>
<li class="custom">
<a class="muted3-color" href="#"><i class="fas fa-chevron-left"></i></a>
</li>
<li><a :href="contents[0].button_1.link" :target="contents[0].button_1.open" class="page-numbers" href="#">{{ contents[0].button_1.text }}</a></li>
<li><a :href="contents[0].button_2.link" :target="contents[0].button_2.open" class="page-numbers" href="#">{{ contents[0].button_2.text }}</a></li>
<li><a :href="contents[0].button_3.link" :target="contents[0].button_3.open" class="page-numbers" href="#">{{ contents[0].button_3.text }}</a></li>
<li class="custom st-2">
<a class="muted3-color" href="#"><i class="fas fa-chevron-right"></i></a>
</li>
</ul>
</div>
</div>
</div>
<!-- col-md-8 -->
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="blog-page-sidebar">
<div class="sidebar-search">
<h4>{{ contents[0].h4_1 }}</h4>
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php" class="d-flex justify-content-between" method="get">
<input placeholder="Search Your Need" type="search"/>
<input type="submit" value="Search"/>
</form>
</div>
<div class="course-feature-slider-area">
<h4>{{ contents[0].h4_2 }}</h4>
<div class="course-fature-slider owl-carousel owl-theme">
<div class="slider-item">
<img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/>
<h5>{{ contents[0].h5_1 }}</h5>
<p>{{ contents[0].p_4 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-comments"></i> 25 Cpmments</p>
<p><i class="fa-solid fa-eye"></i> 2.4k View</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/>
<h5>{{ contents[0].h5_2 }}</h5>
<p>{{ contents[0].p_5 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-comments"></i> 25 Cpmments</p>
<p><i class="fa-solid fa-eye"></i> 2.4k View</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/>
<h5>{{ contents[0].h5_3 }}</h5>
<p>{{ contents[0].p_6 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-comments"></i> 25 Cpmments</p>
<p><i class="fa-solid fa-eye"></i> 2.4k View</p>
</div>
</div>
<!-- item -->
</div>
</div>
<!-- close -->
<div class="blog-social">
<h4>{{ contents[0].h4_3 }}</h4>
<ul class="d-flex">
<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
<!-- close -->
<div class="catagury">
<h4>{{ contents[0].h4_4 }}</h4>
<ul>
<li class="d-flex justify-content-between"><a :href="contents[0].button_4.link" :target="contents[0].button_4.open" href="#">{{ contents[0].button_4.text }}</a> <a :href="contents[0].button_5.link" :target="contents[0].button_5.open" href="#">{{ contents[0].button_5.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_6.link" :target="contents[0].button_6.open" href="#">{{ contents[0].button_6.text }}</a> <a :href="contents[0].button_7.link" :target="contents[0].button_7.open" href="#">{{ contents[0].button_7.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_8.link" :target="contents[0].button_8.open" href="#">{{ contents[0].button_8.text }}</a> <a :href="contents[0].button_9.link" :target="contents[0].button_9.open" href="#">{{ contents[0].button_9.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_10.link" :target="contents[0].button_10.open" href="#">{{ contents[0].button_10.text }}</a> <a :href="contents[0].button_11.link" :target="contents[0].button_11.open" href="#">{{ contents[0].button_11.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_12.link" :target="contents[0].button_12.open" href="#">{{ contents[0].button_12.text }}</a> <a :href="contents[0].button_13.link" :target="contents[0].button_13.open" href="#">{{ contents[0].button_13.text }}</a></li>
</ul>
</div>
<!-- close -->
<div class="wiget-tags">
<ul>
<li><a :href="contents[0].button_14.link" :target="contents[0].button_14.open" href="#">{{ contents[0].button_14.text }}</a></li>
<li><a :href="contents[0].button_15.link" :target="contents[0].button_15.open" href="#">{{ contents[0].button_15.text }}</a></li>
<li><a :href="contents[0].button_16.link" :target="contents[0].button_16.open" href="#">{{ contents[0].button_16.text }}</a></li>
<li><a :href="contents[0].button_17.link" :target="contents[0].button_17.open" href="#">{{ contents[0].button_17.text }}</a></li>
<li><a :href="contents[0].button_18.link" :target="contents[0].button_18.open" href="#">{{ contents[0].button_18.text }}</a></li>
<li><a :href="contents[0].button_19.link" :target="contents[0].button_19.open" href="#">{{ contents[0].button_19.text }}</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
