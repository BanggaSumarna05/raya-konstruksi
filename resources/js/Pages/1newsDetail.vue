<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';

const props = defineProps({
    blog: Object
});

// Fungsi helper untuk konversi link YouTube ke embed iframe
function convertMedia(content) {
    if (!content) return content;

    // 1) Embed YouTube
    const youtubeRegex = /https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/shorts\/)([\w-]+)/g;
    content = content.replace(youtubeRegex, (match, videoId) => {
        return `
        <div class="ratio ratio-16x9 my-4">
            <iframe src="https://www.youtube.com/embed/${videoId}"
                title="YouTube video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                style="width:100%; height:100%; border:0;">
            </iframe>
        </div>`;
    });

    // 2) Embed video lokal (mp4/webm)
    const localVideoRegex = /(https?:\/\/[^\s]+?\.(mp4|webm)|\/storage\/[^\s]+?\.(mp4|webm))/g;
    content = content.replace(localVideoRegex, (url) => {
        return `
        <div class="my-4">
            <video controls style="width:100%; border-radius:10px;">
                <source src="${url}" type="video/mp4">
                Browser kamu tidak mendukung video.
            </video>
        </div>`;
    });

    return content;
}

</script>

<template>

    <Head :title="blog.title" />

    <section id="services" class="services section-bg mb-10" style="padding-top: 10%;">
        <div class="container mt-5" data-aos="fade-down">
            <div class="row justify-content-center">
                <div class="col-9">
                    <h1>{{ blog.title }}</h1>
                    <hr>
                </div>
                <div class="col-9">
                    <img class="responsive img-fluid w-100 mb-4"
                        :src="blog.image ? `/storage/${blog.image}` : '/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'"
                        :alt="blog.title" />

                    <div class="d-flex justify-content-between align-items-center my-3 text-muted"
                        style="font-size: 0.95em;">
                        <div>
                            <i class="bi bi-person"></i>
                            {{ blog.user?.name || 'IT Officer' }}
                        </div>
                        <div>
                            <i class="bi bi-calendar-event"></i>
                            {{ new Date(blog.published_at).toLocaleDateString('id-ID', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            }) }}
                        </div>
                    </div>

                    <!-- Render konten dengan auto embed YouTube -->
                    <div v-html="convertMedia(blog.content)"></div>
                </div>
            </div>
        </div>
    </section>
</template>
