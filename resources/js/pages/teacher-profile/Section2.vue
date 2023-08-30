<template>
<block folder="teacher-profile" file="Section2" #default="{ contents }">
<section class="teacher-profile">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 col-sm-12 col-lg-5">
<div class="teacher-img"><img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/></div>
</div>
<div class="col-md-7 col-sm-12 col-lg-7">
<div class="teacher-description">
<h2>{{ contents[0].h2_2 }}</h2>
<div class="teacher-detiles-box">
<p>{{ contents[0].p_1 }}</p>
</div>
<div class="t-d d-flex justify-content-start">
<h5>{{ contents[0].h5_1 }}</h5>
<span>{{ contents[0].span_1 }}</span>
</div>
<div class="t-d d-flex justify-content-start">
<h5>{{ contents[0].h5_2 }}</h5>
<span>{{ contents[0].span_2 }}</span>
</div>
<div class="t-d d-flex justify-content-start">
<h5>{{ contents[0].h5_3 }}</h5>
<span>{{ contents[0].span_3 }}</span>
</div>
<div class="techer-social footer-social">
<ul>
<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
</ul>
</div>
<div class="teacher-btn">
<a class="btn btn-primary kids-active-btn" data-bs-target="#sign-modal" data-bs-toggle="modal">Enroll Course</a>
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="sign-modal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="sign-modal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="sign-modal">{{ contents[0].h5_4 }}</h5>
<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body">
<div class="sign-in-form">
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php">
<input name="" placeholder="Your Email or Phone Number" type="text"/>
<input name="" placeholder="Your Password" type="password"/>
<input name="" type="submit" value="Sing In"/>
</form>
</div>
</div>
<div class="modal-footer">
<p>{{ contents[0].p_2 }}</p> <a :href="contents[0].button_1.link" :target="contents[0].button_1.open" href="#">{{ contents[0].button_1.text }}</a>
</div>
</div>
</div>
</div>
<!-- modal close -->
</div>
</div>
</div>
</div>
<div class="teacher-social-shape-one"><img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/></div>
</div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
