<template>
<block folder="welcome" file="Section2" #default="{ contents }">
<section class="about">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
</div>
</div>
<div class="col-12 col-md-6 col-lg-6">
<div class="about-img">
<div class="about-main-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
<div class="about-cloud-img-one"> <img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/> </div>
<div class="about-cloud-img-two"> <img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/> </div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-6">
<div class="about-text">
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_1 }}</p>
<a :href="contents[0].button_1.link" :target="contents[0].button_1.open" class="btn btn-primary kids-active-btn" href="about.html">{{ contents[0].button_1.text }}</a>
</div>
</div>
</div>
</div>
<div class="about-main-cloud-one"> <img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/></div>
<div class="about-main-cloud-two"> <img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/></div>
<div class="about-main-shape-one"> <img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/></div>
<div class="about-main-shape-two"> <img :alt="contents[0].image_7.alt" :src="contents[0].image_7.src"/></div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
