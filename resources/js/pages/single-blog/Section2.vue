<template>
<block folder="single-blog" file="Section2" #default="{ contents }">
<div class="bloge-page">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-8 col-sm-12">
<div class="single-blog-post">
<span>{{ contents[0].span_1 }}</span>
<h2>{{ contents[0].h2_1 }}</h2>
<div class="row">
<div class="col-md-2 col-lg-2 col-sm-12">
<div class="blog-author">
<div class="writter-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
<div class="writter-share">
<ul>
<li><a href="#"><i class="fa-solid fa-square-share-nodes"></i><br/> Share</a></li>
<li><a href="#"><i class="fa-solid fa-eye"></i><br/> View</a></li>
<li><a href="#"><i class="fa-solid fa-comments"></i><br/> Comments</a></li>
</ul>
</div>
</div>
</div>
<!-- col-md-2 -->
<div class="col-md-10 col-lg-10 col-sm-12">
<div class="post-main-text">
<p>{{ contents[0].p_1 }}</p>
<p>{{ contents[0].p_2 }}</p>
<img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/>
<p>{{ contents[0].p_3 }}</p>
<p>{{ contents[0].p_4 }}</p>
</div>
</div>
<div class="col-md-12 col-lg-12 col-sm-12">
<div class="post-page-bottom d-flex justify-content-between">
<p>Tages: <a :href="contents[0].button_1.link" :target="contents[0].button_1.open" href="#">{{ contents[0].button_1.text }}</a></p>
<div class="blog-social">
<ul class="d-flex">
<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="blog-form">
<h2>{{ contents[0].h2_2 }}</h2>
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php">
<input name="" placeholder="Enter Your Full Name" type=""/>
<input name="" placeholder="Enter Your Email*" type=""/>
<textarea placeholder="Write a Massage"> </textarea>
<input type="submit" value="Leave a Comment"/>
</form>
</div>
</div>
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
<img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/>
<h5><a :href="contents[0].button_2.link" :target="contents[0].button_2.open" href="#">{{ contents[0].button_2.text }}</a></h5>
<p>{{ contents[0].p_5 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-comments"></i> 25 Cpmments</p>
<p><i class="fa-solid fa-eye"></i> 2.4k View</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/>
<h5><a :href="contents[0].button_3.link" :target="contents[0].button_3.open" href="#">{{ contents[0].button_3.text }}</a></h5>
<p>{{ contents[0].p_6 }}</p>
<div class="d-flex justify-content-between">
<p><i class="fa-solid fa-comments"></i> 25 Cpmments</p>
<p><i class="fa-solid fa-eye"></i> 2.4k View</p>
</div>
</div>
<!-- item -->
<div class="slider-item">
<img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/>
<h5><a :href="contents[0].button_4.link" :target="contents[0].button_4.open" href="#">{{ contents[0].button_4.text }}</a></h5>
<p>{{ contents[0].p_7 }}</p>
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
<li class="d-flex justify-content-between"><a :href="contents[0].button_5.link" :target="contents[0].button_5.open" href="#">{{ contents[0].button_5.text }}</a> <a :href="contents[0].button_6.link" :target="contents[0].button_6.open" href="#">{{ contents[0].button_6.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_7.link" :target="contents[0].button_7.open" href="#">{{ contents[0].button_7.text }}</a> <a :href="contents[0].button_8.link" :target="contents[0].button_8.open" href="#">{{ contents[0].button_8.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_9.link" :target="contents[0].button_9.open" href="#">{{ contents[0].button_9.text }}</a> <a :href="contents[0].button_10.link" :target="contents[0].button_10.open" href="#">{{ contents[0].button_10.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_11.link" :target="contents[0].button_11.open" href="#">{{ contents[0].button_11.text }}</a> <a :href="contents[0].button_12.link" :target="contents[0].button_12.open" href="#">{{ contents[0].button_12.text }}</a></li>
<li class="d-flex justify-content-between"><a :href="contents[0].button_13.link" :target="contents[0].button_13.open" href="#">{{ contents[0].button_13.text }}</a> <a :href="contents[0].button_14.link" :target="contents[0].button_14.open" href="#">{{ contents[0].button_14.text }}</a></li>
</ul>
</div>
<!-- close -->
<div class="wiget-tags">
<ul>
<li><a :href="contents[0].button_15.link" :target="contents[0].button_15.open" href="#">{{ contents[0].button_15.text }}</a></li>
<li><a :href="contents[0].button_16.link" :target="contents[0].button_16.open" href="#">{{ contents[0].button_16.text }}</a></li>
<li><a :href="contents[0].button_17.link" :target="contents[0].button_17.open" href="#">{{ contents[0].button_17.text }}</a></li>
<li><a :href="contents[0].button_18.link" :target="contents[0].button_18.open" href="#">{{ contents[0].button_18.text }}</a></li>
<li><a :href="contents[0].button_19.link" :target="contents[0].button_19.open" href="#">{{ contents[0].button_19.text }}</a></li>
<li><a :href="contents[0].button_20.link" :target="contents[0].button_20.open" href="#">{{ contents[0].button_20.text }}</a></li>
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
