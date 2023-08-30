<template>
<block folder="teacher" file="Section3" #default="{ contents }">
<div class="counter-area">
<div class="container">
<div class="row">
<div class="col-12 col-md-4 col-lg-4">
<div class="single-counter">
<div class="counter-single-area">
<i class="fa-solid fa-users"></i>
<span class="counter">{{ contents[0].span_1 }}</span>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
<div class="col-12 col-md-4 col-lg-4">
<div class="single-counter">
<div class="counter-single-area">
<i class="fa-solid fa-book"></i>
<span class="counter">{{ contents[0].span_2 }}</span>
<p>{{ contents[0].p_2 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
<div class="col-12 col-md-4 col-lg-4">
<div class="single-counter">
<div class="counter-single-area">
<i class="fa-solid fa-user-graduate"></i>
<span class="counter">{{ contents[0].span_3 }}</span>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
</div>
<!-- col-md-close -->
</div>
</div>
<div class="airplane"><img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/></div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
