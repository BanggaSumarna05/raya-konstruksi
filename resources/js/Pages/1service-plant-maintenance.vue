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

.content-ul {
    list-style-type: disc !important;
    list-style-position: outside;
    padding-left: 1.5rem !important;
    margin: 0 0 1rem 0;
    color: #444444;
}
</style>
<template>

    <Head title="Plant Maintenance" />
    <section id="constructions" class="constructions" style="padding-top: 10%;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Plant Maintenance</h2>
                <p class="rapih">
                    <b>RAYA</b> delivers reliable plant maintenance solutions across the <b>Oil & Gas, Oleochemical, and
                        Petrochemical sectors</b>. Our services cover both scheduled and unscheduled maintenance,
                    including
                    routine inspections, equipment servicing, full-scale shutdown or turnaround execution. With
                    disciplined planning, certified manpower and strict HSE compliance, we ensure your facility
                    operates safely, efficiently & with minimized downtime helping prevent costly failures and
                    extending asset life.
                </p>
            </div>

            <section id="services-cards" class="">
                <h2>Scope of Services</h2>
                <hr>
                <p class="align-items-center">
                    Plant maintenance requires different approaches depending on equipment condition and operational
                    needs. <b>RAYA</b> applies the appropriate maintenance method to ensure safe performance,
                    extended asset life,
                    and minimized downtime. Our comprehensive services include:
                </p>
                <br>
                <div class="row justify-content-around ">
                    <div class="col-lg-3 d-flex flex-column" data-aos="fade-right">
                        <h3>
                            Preventive & Predictive Maintenance
                        </h3>
                        <hr>
                        Proactive maintenance to prevent costly breakdowns.
                        <ul class="content-ul">
                            <li>
                                Routine inspection & servicing.
                            </li>
                            <li>
                                Lubrication, calibration & alignment.
                            </li>
                            <li>
                                Vibration, temperature & condition monitoring.
                            </li>
                            <li>
                                Performance analysis & maintenance recommendations.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex flex-column" data-aos="fade-right">
                        <h3>
                            Corrective Maintenance & Overhaul
                        </h3>
                        <hr>
                        Restoring equipment performance when issues occur.
                        <ul class="content-ul">
                            <li>
                                Mechanical repair & component replacement.
                            </li>
                            <li>
                                Pump, valve, and rotating equipment servicing.
                            </li>
                            <li>
                                Alignment, balancing & diagnostics.
                            </li>
                            <li>
                                Major overhaul during planned downtime.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex flex-column" data-aos="fade-right">
                        <h3>
                            Shutdown & Turnaround Execution
                        </h3>
                        <hr>
                        Time-critical maintenance with precise scheduling and coordination.
                        <ul class="content-ul">
                            <li>
                                Routine inspection & servicing
                            </li>
                            <li>
                                Lubrication, calibration & alignment
                            </li>
                            <li>
                                Vibration, temperature & condition monitoring
                            </li>
                            <li>
                                Performance analysis & maintenance recommendations
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-flex flex-column" data-aos="fade-right">
                        <h3>
                            Reliability Improvement &nbsp;&nbsp;&nbsp;&nbsp;
                        </h3>
                        <hr>
                        Enhancing equipment reliability for long-term operational stability.
                        <ul class="content-ul">
                            <li>
                                Root Cause Failure Analysis (RCA / RCFA)
                            </li>
                            <li>
                                Operation & maintenance optimization
                            </li>
                            <li>
                                Life cycle and efficiency evaluation
                            </li>
                            <li>
                                Safety & compliance improvement strategies
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <center>
                <img src="/assets/img/footer-1.jpg" style="border-radius: 6px;"
                    alt="Construction & Fabrication" class="img-fluid" />
            </center>
            <section id="services-cards" class="">
                <h3>Comparison</h3>
                <hr />
                <table class="table align-items-center" style="width: 100%; background-color: red; font-size: 1.55vh;">
                    <thead>
                        <tr>
                            <th>Maintenance Level</th>
                            <th>Application Condition</th>
                            <th>Activities Included</th>
                            <th>Expected Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Routine / Preventive Maintenance</td>
                            <td>Equipment operating normally with expected wear</td>
                            <td>Inspection, cleaning, lubrication, calibration, scheduled part replacement</td>
                            <td>Maintain stability & prevent premature failure</td>
                        </tr>
                        <tr>
                            <td>Predictive / Condition-Based Maintenance</td>
                            <td>Early signs of deviation detected via monitoring</td>
                            <td>Vibration/temperature trending, oil analysis, targeted inspections</td>
                            <td>Detect faults early & reduce unplanned downtime</td>
                        </tr>
                        <tr>
                            <td>Corrective Maintenance</td>
                            <td>Performance reduced or malfunction identified</td>
                            <td>Troubleshooting, component repair/replacement, alignment & testing</td>
                            <td>Restore equipment efficiency & reliability</td>
                        </tr>
                        <tr>
                            <td>Overhaul / Major Repair</td>
                            <td>Asset at end-of-service cycle or requiring full restoration</td>
                            <td>Disassembly, inspection, refurbishment, precision rebuild</td>
                            <td>Reset equipment to near-new condition</td>
                        </tr>
                        <tr>
                            <td>Shutdown / Turnaround Maintenance</td>
                            <td>Planned full-plant or partial area downtime</td>
                            <td>Multi-discipline execution, job sequencing, QA/QC, HSE oversight</td>
                            <td>Complete maintenance with minimal production interruption</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <div class="pt-2">
                <h2>Contact</h2>
                <hr />
                We’d love to hear from you! Feel free to reach out to us at
                <a href="mailto:marketing@rayakonstruksi.com">marketing@rayakonstruksi.com</a>
                for inquiries or collaborations.
            </div>
        </div>
    </section>

</template>
