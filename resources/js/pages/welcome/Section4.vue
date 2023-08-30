<template>
<block folder="welcome" file="Section4" #default="{ contents }">
<section class="pagetwo activities">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
<div class="col-12 col-md-4 col-lg-4">
<div class="service-single-box d-flex justify-content-between">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
</div>
<!-- col-md-4 -->
<div class="col-12 col-md-8 col-lg-8">
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="pagetwo service-box">
<i class="fa-solid fa-shield"></i>
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_2 }}</p>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="pagetwo service-box">
<i class="fa-solid fa-book-open"></i>
<h4>{{ contents[0].h4_2 }}</h4>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="pagetwo service-box">
<i class="fa-solid fa-medal"></i>
<h4>{{ contents[0].h4_3 }}</h4>
<p>{{ contents[0].p_4 }}</p>
</div>
</div>
<div class="col-md-6 col-lg-6">
<div class="pagetwo service-box">
<i class="fa-solid fa-home"></i>
<h4>{{ contents[0].h4_4 }}</h4>
<p>{{ contents[0].p_5 }}</p>
</div>
</div>
</div>
</div>
<!-- col-md-8 -->
</div>
</div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
