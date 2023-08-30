<template>
<block folder="welcome" file="Section3" #default="{ contents }">
<div class="counter-area home-two">
<div class="container">
<div class="row">
<div class="col-12 col-md-4 col-lg-4">
<div class="home-two single-counter">
<div class="counter-single-area">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
<span class="counter">{{ contents[0].span_1 }}</span>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
<div class="col-12 col-md-4 col-lg-4">
<div class="home-two single-counter">
<div class="counter-single-area">
<img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/>
<span class="counter">{{ contents[0].span_2 }}</span>
<p>{{ contents[0].p_2 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
<div class="col-12 col-md-4 col-lg-4">
<div class="home-two single-counter">
<div class="counter-single-area">
<img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/>
<span class="counter">{{ contents[0].span_3 }}</span>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
</div>
</div>
<div class="airplane"><img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/></div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
