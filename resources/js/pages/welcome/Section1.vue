<template>
<block folder="welcome" file="Section1" #default="{ contents }">
<div class="container">
<div class="homepage-two-bottom">
<div class="row">
<div class="col-12 col-sm-4 col-md-4 col-lg-4">
<div class="homepage-box-single box-one">
<div class="box-icon"><i class="fa-solid fa-cubes"></i></div>
<h4>{{ contents[0].h4_1 }}</h4>
<p>{{ contents[0].p_1 }}</p>
</div>
</div>
<!-- col-md -->
<div class="col-12 col-sm-4 col-md-4 col-lg-4">
<div class="homepage-box-single box-two">
<div class="box-icon two"><i class="fa-solid fa-user-graduate"></i></div>
<h4>{{ contents[0].h4_2 }}</h4>
<p>{{ contents[0].p_2 }}</p>
</div>
</div>
<!-- col-md -->
<div class="col-12 col-sm-4 col-md-4 col-lg-4">
<div class="homepage-box-single box-three">
<div class="box-icon three"><i class="fa-solid fa-globe"></i></div>
<h4>{{ contents[0].h4_3 }}</h4>
<p>{{ contents[0].p_3 }}</p>
</div>
</div>
<!-- col-md -->
</div>
</div>
</div>
</block>
</template>
<script lang="ts">

export default {

}
</script>
