<script setup>
    defineProps({
        assetsUrl: String
    })

</script>



<template>

    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">

            <video class="d-flex col-lg-8" autoplay muted loop>
                <source src="/app-assets/videos/home.mp4" type="video/mp4"/>
            </video>

            <slot />

        </div>
    </div>


</template>

