<script setup>
import { ref } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';

const props = defineProps({
    blogs: Object // Harus dari Laravel: paginate()
});

const allBlogs = ref([...props.blogs.data]);
const currentPage = ref(props.blogs.current_page);
const lastPage = ref(props.blogs.last_page);
const loading = ref(false);

// Load more function
const loadMore = () => {
    if (currentPage.value >= lastPage.value) return;

    loading.value = true;
    router.get(
        route('news'), // pastikan nama route news.index benar
        { page: currentPage.value + 1 },
        {
            preserveScroll: true,
            preserveState: true,
            only: ['blogs'],
            onSuccess: (page) => {
                allBlogs.value.push(...page.props.blogs.data);
                currentPage.value = page.props.blogs.current_page;
                loading.value = false;
            }
        }
    );
};
</script>

<template>

    <Head title="News & Event" />
    <section id="services" class="services section-bg" style="padding-top: 10%;">
        <div class="container">
            <h1 class="pb-10">News & Event</h1>
            <br />
            <div class="row">
                <div v-for="(blog, idx) in allBlogs" :key="blog.id" class="col-lg-3 col-md-6" data-aos="fade-right"
                    :data-aos-delay="1100 + idx * 100" style="padding: 0 6px 12px 6px;">
                    <a :href="route('newsDetail', blog.slug)">
                        <div class="card"
                            style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                            <img class="card-img-top"
                                :src="blog.image ? `/storage/${blog.image}` : '/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'"
                                :alt="(blog.title)"
                                style="max-height: 30vh;min-height: 30vh; object-fit: cover; width: 100%;"
                                loading="lazy"
                                onload="this.previousElementSibling.classList.add('hidden'); this.classList.remove('opacity-0');"
                                onerror="this.previousElementSibling.classList.remove('hidden'); this.classList.add('hidden');" />
                            <div class="card-body">
                                <p
                                    style="border-bottom: 3px solid #2a4184; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                    {{ new Date(blog.published_at).toLocaleDateString('id-ID', {
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    }) }}
                                </p>
                                <h5 class="card-title text-black">{{ blog.title }}</h5>
                                <p class="card-text">
                                    {{ blog.content.replace(/<[^>]*>/g, '').slice(0, 32) + '...' }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <button v-if="currentPage < lastPage" @click="loadMore" class="btn-get-started" :disabled="loading"
                style="border: none; color: white; padding: 10px 24px; border-radius: 4px; margin: 24px auto 0; display: block;">
                {{ loading ? 'Loading...' : 'Load More' }}
            </button>
        </div>
    </section>
</template>
