<template>
    <div id="map" style="height: 450px; width: 100%; border-radius: 8px;"></div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import L from "leaflet";
import "leaflet/dist/leaflet.css";

const props = defineProps({
    markers: {
        type: Array,
        default: () => [],
    },
});

// Perbaiki path icon Leaflet (agar ikon marker muncul)
delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
    iconRetinaUrl: new URL('leaflet/dist/images/marker-icon-2x.png', import.meta.url).href,
    iconUrl: new URL('leaflet/dist/images/marker-icon.png', import.meta.url).href,
    shadowUrl: new URL('leaflet/dist/images/marker-shadow.png', import.meta.url).href,
});

// Data marker dari props (fallback ke lokasi bawaan)
const markers = ref(
    props.markers.length
        ? props.markers.map((m) => ({ name: m.name, coords: [Number(m.lat), Number(m.lng)] }))
        : [
            { name: "Sumba", coords: [-9.6586, 120.2530] },
            { name: "Jakarta", coords: [-6.2088, 106.8456] },
            { name: "Riau (Pekanbaru)", coords: [0.5071, 101.4478] },
            { name: "Sei Mangkei", coords: [3.4579, 99.2143] },
            { name: "Balikpapan", coords: [-1.2654, 116.8312] },
            { name: "Batam", coords: [1.0456, 104.0305] },
        ]
);

onMounted(() => {

    // Inisialisasi map posisi tengah Indonesia
    const map = L.map("map").setView([-1, 118.5], 5);

    // Basemap CARTO Voyager
    L.tileLayer(
        "https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",
        {
            maxZoom: 20,
            subdomains: "abcd",
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        }
    ).addTo(map);

    // Render semua marker
    markers.value.forEach((m) => {
        const icon = L.divIcon({
            className: "custom-marker",
            html: `
            <div class="marker-dot"></div>
            <span class="marker-label">${m.name}</span>
        `,
            iconSize: [0, 0], // biar tidak ada offset aneh
        });

        L.marker(m.coords, { icon }).addTo(map);
    });

    const modalEl = document.getElementById("mapModal");
    if (modalEl) {
        modalEl.addEventListener("shown.bs.modal", () => {
            map.invalidateSize();
            map.setView([-1, 118.5], 5);
        });
    }

});
</script>

<style>
.custom-marker {
    position: relative;
    display: flex;
    align-items: center;
}

.marker-dot {
    width: 12px;
    height: 12px;
    background: #f7c600;
    /* kuning sesuai titik pada gambar */
    border-radius: 50%;
    border: 2px solid #284185;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
}

.marker-label {
    margin-left: 6px;
    font-size: 14px;
    font-weight: 600;
    color: #284185;
    /* warna tulisan */
    background: rgba(255, 255, 255, 0.85);
    padding: 2px 6px;
    border-radius: 4px;
    backdrop-filter: blur(3px);
    white-space: nowrap;
}

#map {
    z-index: 1;
}
</style>
