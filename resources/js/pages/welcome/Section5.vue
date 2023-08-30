<template>
<block folder="welcome" file="Section5" #default="{ contents }">
<section class="pagetwo our-classes">
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
<ul>
<li>Feeding</li>
<li>Washing/bathing (as per parents wish)</li>
<li>Changing clothes</li>
<li>Nap Time</li>
<li>Play Time (Dance/Music/Art &amp; Craft/Exercise) in the Activity Room or Play Area</li>
<li>TV Time</li>
<li>Story Time </li>
</ul>
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
<ul>
<li>The Montessori Approach</li>
<li>The 7 learning styles</li>
<li>Language Lessons</li>
<li>Reading &amp; Listening</li>
<li>Magical Maths!</li>
<li>Creativity Room</li>
<li>Social Skills </li>
</ul>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_2.link" :target="contents[0].button_2.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_2.text }}</a>
</div>
<span>{{ contents[0].span_1 }}</span>
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
<ul>
<li>The Montessori Approach</li>
<li>The 7 learning styles</li>
<li>Language Lessons</li>
<li>Reading &amp; Listening</li>
<li>Magical Maths!</li>
<li>Creativity Room</li>
<li>Social Skills </li>
</ul>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_3.link" :target="contents[0].button_3.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_3.text }}</a>
</div>
<span>{{ contents[0].span_2 }}</span>
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
<ul>
<li>The Montessori Approach</li>
<li>The 7 learning styles</li>
<li>Language Lessons</li>
<li>Reading &amp; Listening</li>
<li>Magical Maths!</li>
<li>Creativity Room</li>
<li>Social Skills </li>
</ul>
</div>
</div>
<div class="slider-btn">
<a :href="contents[0].button_4.link" :target="contents[0].button_4.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_4.text }}</a>
</div>
<span>{{ contents[0].span_3 }}</span>
</div>
</div>
</div>
<!-- slider -->
</div>
<!-- top area -->
<div class="classes-cloud-one"><img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/></div>
<div class="classes-cloud-two"><img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/></div>
<div class="classes-cloud-three"><img :alt="contents[0].image_7.alt" :src="contents[0].image_7.src"/></div>
</div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
