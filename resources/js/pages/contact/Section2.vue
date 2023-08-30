<template>
<block folder="contact" file="Section2" #default="{ contents }">
<section class="pagetwo contact-page">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
</div>
<div class="contact">
<div class="row">
<div class="col-12 col-lg-8 col-md-8">
<div class="contact-form">
<div id="contact">
<form action="https://ecologytheme.com/theme/kidsplace/contact.php" class="form" id="contactform" method="post" name="contactform">
<input id="name" name="name" placeholder="First Name" required="required" type="text"/>
<input id="lname" name="lname" placeholder="Last Name" required="required" type="text"/>
<input id="email" name="email" placeholder="Enter Email" required="required" type="email"/>
<input id="subject" name="subject" placeholder="Subject" required="required" type="text"/>
<textarea id="comments" name="message" placeholder="Message" rows="6"></textarea>
<input id="" name="" type="submit" value="Send"/>
</form>
</div>
</div>
</div>
<div class="col-12 col-lg-4 col-md-4">
<div class="contact-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
</div>
</div>
</div>
</div>
<div class="teacher-shape-two"><img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/></div>
<div class="teacher-shape-three"><img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/></div>
</section>
</block>
</template>
<script lang="ts">

export default {

}
</script>
