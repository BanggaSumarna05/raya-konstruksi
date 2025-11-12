<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>
<style>
.card-hover-bg {
    /* Only grayscale the background image, not the content */
    position: relative;
    overflow: hidden;
}

.card-hover-bg::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: inherit;
    background-position: inherit;
    background-repeat: inherit;
    background-size: inherit;
    filter: grayscale(1);
    z-index: 0;
    pointer-events: none;
    /* Copy the background image from the inline style */
    opacity: 1;
}

.card-hover-bg>* {
    position: relative;
    z-index: 1;
}

.card-hover-bg:hover::before {
    filter: grayscale(0.2);
}
</style>
<template>

    <Head title="Corporate Structure" />
    <section id="alt-services-2" class="alt-services-2 section mb-10" style="padding-top:15vh">
        <div class="container">
            <h4>
                President Commissioner
            </h4>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/robby-2.png');
                    background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;
                ">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Robby Satria</h5>
                            <p style="font-size: 12px;padding-top: 12px;">President Commissioner</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4>
                Board Of Directors
            </h4>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/andhika-1.png');
                        background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Andhika Sutanto</h5>
                            <p style="font-size: 12px;padding-top: 12px;">President Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/jimmy-1.png');
                        background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Jimmy Sanjaya</h5>
                            <p style="font-size: 12px;padding-top: 12px;">Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4>
                Key Management
            </h4>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/Henry Adrianto.png');
                        background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Henry Adrianto</h5>
                            <p style="font-size: 12px;padding-top: 12px;">Vice President Bussiness Operation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/Suwoto.png');
                        background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Suwoto</h5>
                            <p style="font-size: 12px;padding-top: 12px;">Sr. Manager Proposal & Estimator</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 card-hover-bg" style="
                    background-image: url('/assets/img/anggi1.png');
                        background-position: right bottom;
                    background-repeat: no-repeat;
                    background-size: contain;
                    min-height: 12em;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold pb-3"
                                style="border-bottom: 5px solid #2a4184; display: inline-block;">Anggi Simatupang</h5>
                            <p style="font-size: 12px;padding-top: 12px;">Manager Bussiness Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
    },
    mounted() {
    },
    beforeDestroy() {
    },
    methods: {}
};
</script>