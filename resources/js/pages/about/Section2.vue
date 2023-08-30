<template>
<block folder="about" file="Section2" #default="{ contents }">
<section class="about">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
<div class="col-12 col-md-7 col-lg-7">
<div class="about-img">
<div class="about-main-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
<div class="about-cloud-img-one"> <img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/> </div>
<div class="about-cloud-img-two"> <img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/> </div>
</div>
</div>
<div class="col-12 col-md-5 col-lg-5">
<div class="about-text">
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_2 }}</p>
<a :href="contents[0].button_1.link" :target="contents[0].button_1.open" class="btn btn-primary kids-active-btn" href="#">{{ contents[0].button_1.text }}</a>
</div>
</div>
</div>
</div>
<div class="about-main-cloud-one"> <img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/></div>
<div class="about-main-cloud-two"> <img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/></div>
<div class="about-main-shape-one"> <img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/></div>
<div class="about-main-shape-two"> <img :alt="contents[0].image_7.alt" :src="contents[0].image_7.src"/></div>
<div class="animation"><img :alt="contents[0].image_8.alt" :src="contents[0].image_8.src"/></div>
<div class="animation-two"><img :alt="contents[0].image_9.alt" :src="contents[0].image_9.src"/></div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
