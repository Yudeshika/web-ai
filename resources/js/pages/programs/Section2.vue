<template>
<block folder="programs" file="Section2" #default="{ contents }">
<section class="our-classes">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<div class="classes-top-area">
<div class="classes-slider owl-carousel owl-theme">
<div class="classes-slider-item">
<div class="slider-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
<div class="pagetwo-price">Age: 2+</div>
</div>
<div class="slider-description">
<div class="slider-text">
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_2 }}</p>
</div>
<div class="slider-title d-flex justify-content-between">
<div class="title-left">
<span>{{ contents[0].span_1 }}</span>
<span>{{ contents[0].span_2 }}</span>
</div>
<div class="title-left">
<span></span>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_1.link" :target="contents[0].button_1.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_1.text }}</a>
</div>
</div>
</div>
<!-- iteam -->
<div class="classes-slider-item">
<div class="slider-img">
<img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/>
</div>
<div class="slider-description">
<div class="slider-text">
<h4>{{ contents[0].h4_2 }}</h4>
<p>{{ contents[0].p_3 }}</p>
</div>
<div class="slider-title d-flex justify-content-between">
<div class="title-left">
<span>{{ contents[0].span_3 }}</span>
<span>{{ contents[0].span_4 }}</span>
</div>
<div class="title-left">
<span>{{ contents[0].span_5 }}</span>
<span>{{ contents[0].span_6 }}</span>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_2.link" :target="contents[0].button_2.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_2.text }}</a>
</div>
</div>
</div>
<!-- iteam -->
<div class="classes-slider-item">
<div class="slider-img">
<img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/>
</div>
<div class="slider-description">
<div class="slider-text">
<h4>{{ contents[0].h4_3 }}</h4>
<p>{{ contents[0].p_4 }}</p>
</div>
<div class="slider-title d-flex justify-content-between">
<div class="title-left">
<span>{{ contents[0].span_7 }}</span>
<span>{{ contents[0].span_8 }}</span>
</div>
<div class="title-left">
<span>{{ contents[0].span_9 }}</span>
<span>{{ contents[0].span_10 }}</span>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_3.link" :target="contents[0].button_3.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_3.text }}</a>
</div>
</div>
</div>
<!-- iteam -->
<div class="classes-slider-item">
<div class="slider-img">
<img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/>
</div>
<div class="slider-description">
<div class="slider-text">
<h4>{{ contents[0].h4_4 }}</h4>
<p>{{ contents[0].p_5 }}</p>
</div>
<div class="slider-title d-flex justify-content-between">
<div class="title-left">
<span>{{ contents[0].span_11 }}</span>
<span>{{ contents[0].span_12 }}</span>
</div>
<div class="title-left">
<span>{{ contents[0].span_13 }}</span>
<span>{{ contents[0].span_14 }}</span>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_4.link" :target="contents[0].button_4.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_4.text }}</a>
</div>
</div>
</div>
<!-- iteam -->
</div>
<!-- slider -->
</div>
<!-- top area -->
<div class="our-classes-bottom">
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-6 co-12">
<div class="classes-bottom-img">
<img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/>
</div>
</div>
<div class="col-md-8 col-lg-8 col-sm-6 co-12">
<div class="classes-bottom-text">
<div>
<h2>{{ contents[0].h2_2 }}</h2>
<p>{{ contents[0].p_6 }}</p>
<a :href="contents[0].button_5.link" :target="contents[0].button_5.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_5.text }}</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="classes-form">
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php" method="post">
<div class="row">
<div class="form-group col-md-5">
<select>
<option value="">All Categories</option>
<option value="">Class One</option>
<option value="">Class Two</option>
<option value="">Class Three</option>
<option value="">Class Four</option>
<option value="">Class Five</option>
</select>
</div>
<div class="form-group col-md-4">
<input name="keyword" placeholder="Course Keyword" type="text"/>
</div>
<div class="form-group col-md-3">
<input name="view" type="submit" value="View Course"/>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="classes-cloud-one"><img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/></div>
<div class="classes-cloud-two"><img :alt="contents[0].image_7.alt" :src="contents[0].image_7.src"/></div>
<div class="classes-cloud-three"><img :alt="contents[0].image_8.alt" :src="contents[0].image_8.src"/></div>
</div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
