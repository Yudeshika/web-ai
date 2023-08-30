<template>
<block folder="welcome" file="Section6" #default="{ contents }">
<div class="pagetwo video">
<div class="container">
<div class="row">
<div class="col-12 col-md-5 col-lg-5">
<div class="video-img">
<img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/>
</div>
</div>
<div class="col-12 col-md-7 col-lg-7">
<div class="video-play">
<a href="#"><i class="fa-solid fa-play"></i></a>
</div>
</div>
</div>
</div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
