<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
const props = defineProps({ blog: Object })
</script>

<template>

    <Head title="News Title" />

    <section id="services" class="services section-bg" style="padding-top: 10%;">
        <div class="container mt-5" data-aos="fade-down">
            <div class="row justify-content-center">
                <div class="col-9">
                    <h1>{{ blog.title }}</h1>
                    <hr>
                </div>
                <div class="col-9">
                    <img class="card-img-top"
                        :src="blog.image ? `/storage/${blog.image}` : '/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'"
                        alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                    <div class="d-flex justify-content-between align-items-center my-3 text-muted"
                        style="font-size: 0.95em;">
                        <div>
                            <i class="bi bi-person"></i>
                            {{ blog.user?.name || 'IT Officer' }}
                        </div>
                        <div>
                            <i class="bi bi-calendar-event"></i>
                            {{ new Date(blog.published_at).toLocaleDateString('id-ID', {
                                year: 'numeric', month: 'long',
                                day: 'numeric'
                            }) }}
                        </div>
                    </div>
                    <div v-html="blog.content"></div>
                </div>
            </div>
        </div>
    </section>
</template>