<template>
    <img
        :src="src"
        :srcset="srcset"
        :sizes="sizes"
        :alt="alt"
        :width="width"
        :height="height"
        :loading="loading"
        :fetchpriority="fetchpriority"
        :class="imgClass"
        :style="imgStyle"
    />
</template>

<script setup>
defineProps({
    src: { type: String, required: true },
    alt: { type: String, required: true },
    width: { type: [Number, String], default: null },
    height: { type: [Number, String], default: null },
    sizes: { type: String, default: '100vw' },
    srcset: { type: String, default: null },
    loading: { type: String, default: 'lazy' },
    fetchpriority: { type: String, default: 'auto' },
    imgClass: { type: String, default: '' },
    imgStyle: { type: [String, Object], default: '' },
});
</script>
