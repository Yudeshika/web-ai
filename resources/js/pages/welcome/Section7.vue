<template>
<block folder="welcome" file="Section7" #default="{ contents }">
<section class="pagetwo gallery">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="section-title">
<h2>{{ contents[0].h2_1 }}</h2>
</div>
</div>
</div>
<div class="row">
<div class="gallery-wrapper col-md-12">
<div class="filter-buttons">
<div class="button-group filters-button-group">
<button class="button is-checked" data-filter="*">All</button>
<button class="button" data-filter=".ct1">Malabe Branch</button>
<button class="button" data-filter=".ct2">Pannipitiya Branch</button>
<button class="button" data-filter=".ct3">Kaduwela Branch</button>
<button class="button" data-filter=".ct4">Kesbewa Branch</button>
<button class="button" data-filter=".ct5">Ja-Ela Branch</button>
</div>
</div>
</div>
</div>
<div class="grid">
<div class="row">
<div class="col-md-4 grid-item ct3 ct4">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_1.alt" :src="contents[0].image_1.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-01.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct1">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_2.alt" :src="contents[0].image_2.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-02.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct3">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_3.alt" :src="contents[0].image_3.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-03.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
</div>
<!-- row -->
<div class="row">
<div class="col-md-4 grid-item ct2 ct3 ct4">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_4.alt" :src="contents[0].image_4.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-04.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct1">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_5.alt" :src="contents[0].image_5.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-05.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct2 ct3 ct4">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_6.alt" :src="contents[0].image_6.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-06.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
</div>
<!-- row -->
<div class="row">
<div class="col-md-4 grid-item ct2 ct3 ct4">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_7.alt" :src="contents[0].image_7.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-07.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct1">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_8.alt" :src="contents[0].image_8.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-08.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
<div class="col-md-4 grid-item ct2 ct3 ct4">
<div class="single-gallery-item">
<div class="single-gallery-itemimg">
<a href="#"><img :alt="contents[0].image_9.alt" :src="contents[0].image_9.src"/></a>
</div>
<div class="view">
<a class="port-view" href="images/gallery-09.jpg"><i class="fa-solid fa-eye"></i></a>
</div>
</div>
</div>
<!-- item -->
</div>
<!-- row -->
</div>
</div>
<div class="g-bettarfly"><img :alt="contents[0].image_10.alt" :src="contents[0].image_10.src"/></div>
<div class="g-bettarfly-two"><img :alt="contents[0].image_11.alt" :src="contents[0].image_11.src"/></div>
</section> 
</block>
</template>
<script lang="ts" setup>
    import { ref, onMounted } from 'vue'


    onMounted(() => { 
        console.log('on Mounted..')
        // var $grid = $('.grid').isotope({
        //     itemSelector: '.grid-item',
        //     percentPosition: true,
        //     masonry: {
        //     columnWidth : '.grid-item'
        //     }
        // });
    })
</script>
