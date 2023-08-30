<template>
<block folder="welcome" file="Section8" #default="{ contents }">
<section class="contact">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-8 col-md-8">
<div class="contact-form">
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php">
<input name="" placeholder="First Name" type="text"/>
<input name="" placeholder="Last Name" type="text"/>
<input name="" placeholder="Enter Email" type="email"/>
<input name="" placeholder="Subject" type="text"/>
<textarea id="" name="" placeholder="Massage"></textarea>
<input id="" name="" type="submit" value="Send"/>
</form>
</div>
</div>
<div class="col-12 col-lg-4 col-md-4">
<div class="contact-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
</div>
</div>
</div>
<!-- <div class="contact-shap"><img src="../../../www.ecologytheme.com/theme/kidsplace/images/Vector.html" alt=""></div>
	<div class="contact-shap-two"><img src="../../../www.ecologytheme.com/theme/kidsplace/images/Vector.html" alt=""></div> -->
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
