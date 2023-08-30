<template>
<block folder="gallery" file="Section4" #default="{ contents }">
<div class="call-to-action">
<div class="container">
<div class="row">
<div class="col-md-4 clo-sm-6 cal-xxl-3">
<div class="call-to-action-img"><img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/></div>
</div>
<div class="col-md-8 clo-sm-6 cal-xxl-9">
<div class="call-to-action-text">
<div>
<h3>{{ contents[0].h3_1 }}</h3>
<p>{{ contents[0].p_1 }}</p>
<div class="call-to-action-from">
<form action="https://ecologytheme.com/theme/kidsplace/pagename.php" class="d-flex">
<input placeholder="Enter your email" type="text"/>
<input type="submit" value="Subscribe Now"/>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="call-shape-one"><img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/></div>
<div class="call-shape-two"><img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/></div>
<div class="call-shape-three"><img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/></div>
<div class="call-shape-four"><img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/></div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
