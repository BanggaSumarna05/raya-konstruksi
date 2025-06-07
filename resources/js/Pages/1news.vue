<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
defineProps({ blogs: Array })

</script>

<template>

    <Head title="News & Event" />

    <section id="services" class="services section-bg" style="padding-top: 12%;">
        <div class="container">
            <h4>
                News & Events
            </h4>
            <br>
            <div class="row ">

                <div v-for="(blog, idx) in blogs" :key="blog.id" class="col-lg-3 col-md-6" data-aos="fade-right"
                    :data-aos-delay="1100 + idx * 100" style="padding: 0 6px 12px 6px;">
                    <div class="card" style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                        <img class="card-img-top"
                            :src="blog.image ? `/storage/${blog.image}` : '/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'"
                            alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                        <div class="card-body">
                            <p
                                style="border-bottom: 3px solid #fcd03b; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                {{ new Date(blog.published_at).toLocaleDateString('id-ID', {
                                    year: 'numeric', month: 'long',
                                    day: 'numeric'
                                }) }}
                            </p>
                            <a :href="route('newsDetail', blog.id)">
                                <h5 class="card-title text-black">
                                    {{ blog.title }}
                                </h5>
                            </a>
                            <p class="card-text">
                                {{ blog.content.replace(/<[^>]*>/g, '').slice(0, 64) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button v-if="hasMore" @click="loadMore" class="btn-get-started"
                style="border: none; background: #fcd03b; color: #000; padding: 10px 24px; border-radius: 4px; margin: 24px auto 0; display: block;">
                Load More
            </button>
        </div>
    </section>
</template>