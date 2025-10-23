<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';

const props = defineProps({
    blog: Object
});

// Fungsi helper untuk konversi link YouTube ke embed iframe
function convertYoutubeLinksToIframe(content) {
    // Regex untuk menangkap link YouTube biasa, youtu.be, dan shorts
    const youtubeRegex = /https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/shorts\/)([\w-]+)/g;

    return content.replace(youtubeRegex, (match, videoId) => {
        return `
      <div class="ratio ratio-16x9 my-3">
        <iframe src="https://www.youtube.com/embed/${videoId}" 
                title="YouTube video" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
      </div>`;
    });
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
                    <div v-html="convertYoutubeLinksToIframe(blog.content)"></div>
                </div>
            </div>
        </div>
    </section>
</template>
