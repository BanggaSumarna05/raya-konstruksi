<script setup>
import { Head, Link } from "@inertiajs/vue3";
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>
<style>
.th {
    background-color: yellow !important;
}
</style>
<template>

    <Head title="Catalyst Loading" />
    <!-- End Breadcrumbs -->
    <section id="constructions" class="constructions mb-10" style="padding-top: 10%;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Catalyst Loading</h2>
                <p class="rapih">
                    The process of placing a catalyst into a chemical reactor to
                    facilitate reactions without being consumed during the
                    process. This step is critical to ensure reaction
                    efficiency, uniform catalyst distribution, and maximum
                    conversion of reactants to products. Here's how catalyst
                    loading works. We carry out the loading process using
                    Big-Bags or Drums, depending on the preferences of our
                    clients or the situation of the equipment to be loaded and
                    its location in the plant.
                </p>
            </div>

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 d-flex flex-column" data-aos="fade-right">
                    <h3>Catalyst loading process with DRUMS</h3>
                    <hr />
                    <p class="rapih">
                        The main benefit of the drums is that they are reusable,
                        so once emptied they can be returned to the supplier.
                        This considerably reduces waste generation at the plant.
                        <br /><br />
                        <center>
                            <img src="/assets/img/catalyst-loading-1.png" alt="" class="img-fluid"
                                style="max-width: 60%" />
                        </center>
                        <br /><br />
                        The drum loading mechanism consists of filling the
                        hopper and, once it is loaded, raising it to the mouth
                        of the equipment and proceeding to load the catalyst.
                    </p>
                </div>
                <div class="col-lg-6 d-flex flex-column" data-aos="fade-right">
                    <h3>Catalyst loading process with BIG-BAGS</h3>
                    <hr />
                    <p class="rapih">
                        Big bags are large and flexible bags made of strong
                        materials used to transport bulk material (in this case
                        catalyst). Big-bags are easier to handle due to their
                        “flexibility” and are more adaptable in case of limited
                        manoeuvring space. On the other hand, are often
                        discarded once they have been used, so we generate waste
                        and need to dispose of them properly.
                        <br /><br />
                        <center>
                            <img src="/assets/img/catalyst-loading-2.png" alt="" class="img-fluid"
                                style="max-width: 60%" />
                        </center>
                        <br /><br />
                        In terms of the manoeuvre, the process consists of
                        placing the hopper in the mouth of the reactor, and then
                        raising the big bags without the need to move the hopper
                        at each manoeuvre.
                    </p>
                </div>
            </div>

            <!-- below were update -->
            <section id="services-cards" class="services-cards">
                <div class="section-header">
                    <h2>Catalyst Method</h2>
                    <p class="align-items-center">
                        In catalyst loading, there are many methods that are
                        often used, that's why we commonly use the 3 method's
                        below
                    </p>
                </div>
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Dry Catalyst Loading</h3>
                            <hr />
                            <p class="rapih">
                                Dry catalyst loading involves the introduction
                                of solid catalysts into the reactor without
                                using any auxiliary equipment or liquid medium.
                                commodi magnam occaecati.
                            </p>
                            <b>Advantages : </b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Cost-effective and simple to implement.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Does not require additional materials like
                                    liquids, reducing preparation time.
                                </li>
                            </ul>
                            <b>Applications :</b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Suitable for hydrocracking, hydrogenation,
                                    and other fixed-bed processes in the
                                    petrochemical industry.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Dense Catalyst Loading</h3>
                            <hr />
                            <p class="rapih">
                                Dense loading optimizes catalyst placement by
                                maximizing packing density and reducing void
                                spaces in the reactor. This method often
                                requires specialized equipment, such as dense
                                loading machines.
                            </p>
                            <b>Advantages : </b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Enhances reactor efficiency by improving
                                    catalyst density.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Reduces the risk of channeling due to better
                                    distribution.
                                </li>
                            </ul>
                            <b>Applications :</b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Widely used in hydroprocessing (e.g.,
                                    hydrodesulfurization) and other
                                    high-capacity processes in oil refineries.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Sock Catalyst Loading</h3>
                            <hr />
                            <p class="rapih">
                                Sock loading employs a "sock" or tubular bag to
                                guide catalysts into the reactor gently,
                                minimizing physical damage to fragile materials.
                            </p>
                            <br />
                            <b>Advantages : </b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Protects fragile catalysts from mechanical
                                    damage.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Suitable for reloading expensive or
                                    sensitive catalysts.
                                </li>
                            </ul>
                            <b>Applications :</b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Used for large-scale reactors or when
                                    handling delicate catalysts, such as in
                                    reforming processes.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3>Comparasion</h3>
                    <hr />
                    <table class="table align-items-center" style="width: 100%; background-color: red">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Ease of Use</th>
                                <th>Cost</th>
                                <th>Efficiency</th>
                                <th>Best For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dry Loading</td>
                                <td>Easy</td>
                                <td>Low</td>
                                <td>Moderate</td>
                                <td>Fixed-bed reactors (small).</td>
                            </tr>
                            <tr>
                                <td>Dense Loading</td>
                                <td>Moderate</td>
                                <td>High</td>
                                <td>High</td>
                                <td>High-capacity hydroprocessing.</td>
                            </tr>
                            <tr>
                                <td>Sock Loading</td>
                                <td>Moderate</td>
                                <td>Medium</td>
                                <td>High</td>
                                <td>Fragile or expensive catalysts.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <h2>Contact</h2>
                    <hr />
                    We’d love to hear from you! Feel free to reach out to us at
                    <a href="mailto:marketing@rayakonstruksi.com">marketing@rayakonstruksi.com</a>
                    for inquiries or collaborations.
                </div>
            </section>
        </div>
    </section>
</template>
