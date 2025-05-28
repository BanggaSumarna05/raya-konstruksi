<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Cyber Security Information" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container hero position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Information Regarding Cyber Security</h2>
        </div>
    </div>

    <section id="services" class="services section-bg" style="padding-bottom: 0px;">
        <div class="container" data-aos="fade-down">
            <div class="row justify-content-center">
                <div class="col-9">
                    <p class="rapih">
                        The Cybercrime is placed in the current and future top 10 risks globally(1) and the cost of
                        Cybercrime is
                        predicted to reach $ 8 trillion in 2023, while it is projected to hit an annual $10.5 trillion
                        by
                        2025. If
                        it were measured as a Country, then Cybercrime would be the world’s third largest economy after
                        U.S.
                        and
                        China(2).<br><br>
                        Phishing e-mails are leading the current ranking of top Cybersecurity threats. These e-mails
                        usually
                        exploit
                        <b>spoofing</b> techniques, i.e. the creation of messages with a fake sender address.<br><br>
                        In many cases, <b>typosquatting</b>, i.e. deliberately typing errors that could trick the
                        recipients, is
                        used to
                        spoof e-mail addresses.<br><br>
                        <!-- For example: makadlagroup.com; makadiagrup.com; makediagrup.com<br><br> -->

                        However, advanced spoofing techniques can make it almost impossible for users to distinguish a
                        legitimate
                        message from one sent by a fake sender.<br><br>

                        To improve the security of its own communications, for every RAYA Construction International
                        domain,
                        RAYA Construction International uses three
                        protocols that
                        work together to ensure the validity and reliability of an e-mail message:<br><br>
                    <ul>
                        <li>
                            <b>SPF</b> (Sender Policy Framework): lets the domain owner authorise IP addresses that are
                            allowed to
                            send email
                            for the domain. Receiving servers can verify that messages appearing to come from a specific
                            domain
                            are sent
                            from servers allowed by the domain owner.
                        </li>
                        <li>
                            <b>DKIM</b> (Domain Keys Identified Mail): adds a digital signature to every sent message.
                            Receiving
                            servers use
                            the signature to verify that messages are authentic and weren't forged or changed during
                            transit.
                        </li>
                        <li>
                            <b>DMARC</b> (Domain-based Message Authentication, Reporting, and Conformance): tells
                            receiving
                            mail
                            servers what
                            to do when they get a message that appears to be from your organisation, but doesn't pass
                            authentication
                            checks, or doesn’t meet the authentication requirements in your DMARC policy record.
                        </li>
                    </ul>

                    RAYA Construction International recommends that all potential recipients of e-mail messages that
                    look like
                    they come from one
                    of the
                    mentioned domains always check the SPF, DKIM and DMARC records and <b>reject all communications</b>
                    that
                    <b>do not pass these checks</b>.<br><br>

                    RAYA Construction International considers the adoption of these protocols in e-mail communications
                    strategic
                    and advises all the companies in its supply chain to adopt them.<br><br>

                    To report any cases of communications that try to mimic companies of the RAYA Construction
                    International
                    group, please write to:
                    <b>IT@rayaconstruction.com</b>
                    </p>
                    <br><br><br>
                </div>
            </div>
        </div>
    </section>
</template>