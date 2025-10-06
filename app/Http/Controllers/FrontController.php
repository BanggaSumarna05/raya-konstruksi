<?php

namespace App\Http\Controllers;

use App\Mail\InqueryMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Inertia\Inertia;

class FrontController extends Controller
{
    private $keywords;

    public function __construct()
    {
        $this->keywords = [
            "Catalyst Loading Indonesia",
            "Catalyst Loading Pulau Jawa",
            "Catalyst Loading Pulau Sumatera",
            "Catalyst Loading Pulau Kalimantan",
            "Catalyst Loading Pulau Sulawesi",
            "Catalyst Handling Indonesia",
            "Catalyst Handling Pulau Jawa",
            "Catalyst Handling Pulau Sumatera",
            "Catalyst Handling Pulau Kalimantan",
            "Catalyst Handling Pulau Sulawesi",
            "Catalyst Handling Services",
            "Safe Catalyst Loading Solutions",
            "Catalyst Handling Experts",
            "Industrial Catalyst Loading",
            "Catalyst Changeout Services",
            "Catalyst Management Professionals",
            "On-Site Catalyst Handling",
            "Catalyst Handling and Maintenance",
            "Catalyst Replacement Solutions",
            "Catalyst Activation Services",
            "Reliable Catalyst Handling Teams",
            "Catalyst Inspection and Safety",
            "Catalyst Maintenance Support",
            "Catalyst Unloading Services",
            "Catalyst Loading for Petrochemical Plants",
            "Catalyst Optimization and Activation",
            "Industrial Catalyst Replacement Experts",
            "Catalyst Safety Training Programs",
            "Catalyst Deployment and Handling",
            "Catalyst Turnaround Solutions",
            "Catalyst Handling Contractors",
            "Catalyst Loading Safety Experts",
            "Catalyst Efficiency Management",
            "Advanced Catalyst Handling Services",
            "Catalyst Change Management Consultants",
            "Emergency Catalyst Replacement Teams",
            "Catalyst Process Optimization",
            "Catalyst Preparation Services",
            "Catalyst Lifecycle Maintenance",
            "Catalyst Storage and Handling Services",
            "Catalyst Handling for Energy Plants",
            "Catalyst Handling and Safety Practices",
            "Catalyst Activation for Chemical Plants",
            "Catalyst Changeout for Refinery Operations",
            "Catalyst Handling for Industrial Plants",
            "Catalyst Handling in Hazardous Environments",
            "Catalyst Maintenance and Disposal Experts",
            "Catalyst Handling Equipment Solutions",
            "Catalyst Loading Innovations",
            "Catalyst Inspection and Loading Professionals",
            "Catalyst Maintenance Specialists",
            "Catalyst Loading for Refinery Efficiency",
            "Catalyst Handling for Oil and Gas",
            "Catalyst Troubleshooting Services",
            "Catalyst Replacement for Optimal Performance",
            "Catalyst Handling Techniques",
            "Catalyst Handling Safety Compliance",
            "Catalyst Operations and Monitoring",
            "Catalyst Handling in Chemical Processing",
            "Catalyst Disposal and Recycling",
            "Catalyst Reactivation Services",
            "Catalyst Maintenance Planning",
            "Catalyst Optimization Strategies",
            "Catalyst Replacement and Inspection",
            "Catalyst Handling for Sustainable Operations",
            "Catalyst Turnaround Management",
            "Catalyst Safety and Compliance Experts",
            "Catalyst Preparation and Activation",
            "Catalyst Deployment for Petrochemicals",
            "Catalyst Unloading for Refinery Turnaround",
            "Catalyst Handling Logistics",
            "Catalyst Storage Solutions",
            "Catalyst Loading Efficiency Practices",
            "Catalyst Operational Safety",
            "Catalyst Change Services for Industrial Plants",
            "Catalyst Handling for High-Risk Areas",
            "Catalyst Maintenance Technicians",
            "Catalyst Activation for Performance Improvement",
            "Catalyst Optimization for Industrial Use",
            "Catalyst Disposal Solutions",
            "Catalyst Safe Handling Practices",
            "Catalyst Turnaround Projects",
            "Catalyst Troubleshooting and Repair",
            "Catalyst Maintenance Teams",
            "Catalyst Monitoring and Support Services",
            "Catalyst Deployment Experts",
            "Catalyst Handling and Monitoring",
            "Catalyst Safety Inspection Services",
            "Catalyst Replacement Experts",
            "Catalyst Troubleshooting and Monitoring",
            "Catalyst Lifecycle Support",
            "Catalyst Maintenance for Energy Plants",
            "Catalyst Activation for Refinery Efficiency",
            "Catalyst Handling for Petrochemical Plants",
            "Catalyst Optimization for Safety",
            "Catalyst Equipment Handling",
            "Catalyst Preparation for Operations",
            "Catalyst Disposal for Chemical Plants",
            "Catalyst Storage and Activation",
            "Catalyst Safe Disposal Practices",
            "Catalyst Handling Projects",
            "Catalyst Monitoring Systems",
            "Catalyst Deployment and Optimization",
            "Catalyst Lifecycle Services",
            "Catalyst Handling Innovations",
            "Catalyst Optimization Practices",
            "Catalyst Troubleshooting for Operations",
            "Catalyst Maintenance for Chemical Plants",
            "Catalyst Efficiency Experts",
            "Catalyst Preparation for Petrochemicals",
            "Catalyst Lifecycle Monitoring",
            "Catalyst Activation for High Performance",
            "Catalyst Storage and Maintenance",
            "Catalyst Handling Systems",
            "Catalyst Maintenance and Activation",
            "Catalyst Optimization for Energy Efficiency",
            "Catalyst Turnaround Planning",
            "Catalyst Deployment for Chemical Plants",
            "Catalyst Equipment Maintenance",
            "Catalyst Handling for Operations",
            "Catalyst Handling Optimization Services",
            "Catalyst Maintenance Best Practices",
            "Catalyst Troubleshooting Experts",
            "Catalyst Storage and Loading Experts",
            "Catalyst Handling Support Teams",
            "Catalyst Activation Planning",
            "Catalyst Maintenance for Safety Compliance",
            "Catalyst Deployment Planning",
            "Catalyst Optimization for Refinery Operations",
            "Catalyst Handling for Sustainable Operations",
            "Catalyst Troubleshooting Techniques",
            "Catalyst Maintenance Services",
            "Catalyst Activation Teams",
            "Catalyst Maintenance Innovations",
            "Catalyst Equipment Solutions",
            "Catalyst Handling for Large Projects",
            "Catalyst Lifecycle Management Services",
            "Catalyst Activation for Chemical Efficiency",
            "Catalyst Storage and Handling Professionals",
            "Catalyst Preparation for Safe Operations",
            "Catalyst Handling for High Efficiency",
            "Catalyst Troubleshooting Planning",
            "Catalyst Optimization Teams",
            "Catalyst Handling Maintenance Professionals",
            "Catalyst Equipment Handling Innovations",
            "Catalyst Troubleshooting for Energy Plants",
            "Catalyst Activation for Energy Safety",
            "Catalyst Storage and Deployment Professionals",
            "Catalyst Preparation and Handling Services",
            "Catalyst Efficiency Solutions",
            "Catalyst Storage Maintenance Professionals",
            "Catalyst Lifecycle Optimization",

            "Steel Structure Fabrication Experts",
            "Industrial Piping Services",
            "Mechanical Construction Professionals",
            "Structural Steel Solutions",
            "Piping Design and Installation",
            "Customized Steel Fabrication",
            "Heavy Steel Structure Projects",
            "Precision Mechanical Contractors",
            "Welding and Steel Assembly",
            "Industrial Steel Framework",
            "Advanced Piping Technology",
            "Steel and Mechanical Solutions",
            "Industrial Mechanical Systems",
            "Piping for Chemical Plants",
            "High-Performance Mechanical Construction",
            "Steel Structure Contractors",
            "Industrial Piping Fabrication",
            "Steel Framework Installation",
            "Mechanical Systems Design",
            "Piping Contractors for Petrochemicals",
            "Steel Structure Assembly Experts",
            "Mechanical Maintenance Solutions",
            "Precision Welding Contractors",
            "Structural Engineering Solutions",
            "Steel Structure Maintenance",
            "Piping Optimization Services",
            "Mechanical Equipment Installation",
            "Industrial Steel Assembly",
            "Piping Solutions for Refineries",
            "Structural Solutions for Industrial Plants",
            "Heavy-Duty Piping Installation",
            "Industrial Steel Design",
            "Mechanical Construction for Energy Plants",
            "Steel Structure Repair Experts",
            "Industrial Piping Optimization",
            "Steel Assembly Contractors",
            "High-Precision Mechanical Services",
            "Welding Solutions for Industrial Projects",
            "Structural Steel Safety Standards",
            "Piping Installation for Chemical Processing",
            "Customized Mechanical Systems",
            "Structural Fabrication Services",
            "Piping Solutions for High-Performance Plants",
            "Mechanical Installation for Refineries",
            "Steel Structure Innovations",
            "Industrial Steel Repairs",
            "Mechanical Design Experts",
            "Piping Assembly for Oil and Gas",
            "Heavy Steel Construction Solutions",
            "Precision Piping Systems",
            "Structural Contractors for Energy Plants",
            "Steel Assembly Solutions",
            "Industrial Piping Specialists",
            "Steel Framework Experts",
            "Piping Solutions for Hazardous Areas",
            "Advanced Mechanical Fabrication",
            "Welding Specialists for Structural Steel",
            "Industrial Mechanical Design Services",
            "Steel Structure Engineers",
            "Customized Piping Installations",
            "Mechanical Maintenance Professionals",
            "Steel Assembly for Refineries",
            "Industrial Piping and Maintenance",
            "High-Performance Steel Construction",
            "Structural Maintenance Teams",
            "Steel Structure Repair Professionals",
            "Industrial Piping Planning",
            "Piping Maintenance and Repairs",
            "Structural Steel Innovations",
            "Welding Contractors for Large Projects",
            "Mechanical Optimization Solutions",
            "Piping Design and Repairs",
            "Steel Maintenance Solutions",
            "Industrial Mechanical Safety Standards",
            "Structural Solutions for Chemical Plants",
            "Steel Installation for Energy Efficiency",
            "Piping Equipment Experts",
            "Mechanical Systems for Petrochemicals",
            "Heavy-Duty Steel Solutions",
            "Precision Piping Equipment",
            "Structural Engineering for Large Projects",
            "Steel Repairs and Maintenance",
            "Industrial Mechanical Systems Optimization",
            "Steel Structure Innovations for Efficiency",
            "Piping Fabrication and Installation Experts",


            "Reliable Manpower Supply Services",
            "Professional Scaffolding Solutions",
            "Industrial Equipment Rental Experts",
            "On-Demand Workforce Solutions",
            "Scaffolding for Construction Projects",
            "Heavy Equipment Rental Specialists",
            "Certified Manpower Providers",
            "Temporary Workforce Solutions",
            "Scaffolding Installation Experts",
            "Industrial Rental Services",
            "Skilled Labor Supply",
            "Custom Scaffolding Rentals",
            "Equipment Rental for Industrial Use",
            "Scaffolding for Hazardous Environments",
            "Industrial Workforce Planning",
            "Reliable Equipment Rental Services",
            "Scaffolding Maintenance Experts",
            "Workforce Solutions for Large Projects",
            "Temporary Labor Supply Teams",
            "Industrial Equipment Specialists",
            "Scaffolding for Refineries",
            "Equipment Rental for Petrochemicals",
            "Professional Workforce Providers",
            "Scaffolding Services for Energy Plants",
            "Heavy-Duty Equipment Rentals",
            "Skilled Workforce Contractors",
            "Scaffolding Safety Standards",
            "Reliable Scaffolding Rentals",
            "Equipment Rental for Refineries",
            "Workforce Planning Experts",
            "Industrial Equipment Rentals",
            "Temporary Manpower Solutions",
            "Certified Scaffolding Contractors",
            "Industrial Scaffolding Services",
            "Equipment Rental for Energy Projects",
            "Temporary Workforce for Industrial Plants",
            "Reliable Scaffolding Providers",
            "Certified Equipment Rentals",
            "Workforce Supply for Chemical Plants",
            "Scaffolding Installation for Safety",
            "Equipment Rentals for High-Risk Areas",
            "Skilled Labor for Petrochemicals",
            "Industrial Equipment Supply Services",
            "Workforce Optimization Solutions",
            "Reliable Industrial Workforce",
            "Custom Equipment Rentals",
            "Certified Workforce Supply Services",
            "Skilled Labor Solutions for Industry",

            "Industrial Project Management Experts",
            "Project Consultancy Services",
            "Turnkey Project Solutions",
            "Strategic Project Planning Consultants",
            "Industrial Operations Consulting",
            "Risk Management for Projects",
            "End-to-End Project Consulting",
            "Efficient Project Execution Planning",
            "Cost Optimization Consultants",
            "Industrial Project Strategy Experts",
            "Project Execution Teams",
            "Planning Consultants for Large Projects",
            "Risk Management and Compliance",
            "Industrial Strategy Planning",
            "End-to-End Execution Experts",
            "Cost Management Solutions for Projects",
            "Industrial Planning Consultants",
            "Turnkey Operations Planning",
            "Project Optimization Teams",
            "Execution and Planning Experts",
            "Industrial Project Execution Planning",
            "Risk and Cost Management Solutions",

            # Keywords in bahasa
            "Pengisian Katalis Indonesia",
            "Pengisian Katalis Pulau Jawa",
            "Pengisian Katalis Pulau Sumatera",
            "Pengisian Katalis Pulau Kalimantan",
            "Pengisian Katalis Pulau Sulawesi",
            "Penanganan Katalis Indonesia",
            "Penanganan Katalis Pulau Jawa",
            "Penanganan Katalis Pulau Sumatera",
            "Penanganan Katalis Pulau Kalimantan",
            "Penanganan Katalis Pulau Sulawesi",
            "Layanan Penanganan Katalis",
            "Solusi Pengisian Katalis Aman",
            "Ahli Penanganan Katalis",
            "Pengisian Katalis Industri",
            "Layanan Penggantian Katalis",
            "Profesional Manajemen Katalis",
            "Penanganan Katalis di Lokasi",
            "Penanganan dan Perawatan Katalis",
            "Solusi Penggantian Katalis",
            "Layanan Aktivasi Katalis",
            "Tim Penanganan Katalis Andal",
            "Inspeksi dan Keamanan Katalis",
            "Dukungan Perawatan Katalis",
            "Layanan Pengosongan Katalis",
            "Pengisian Katalis untuk Pabrik Petrokimia",
            "Optimasi dan Aktivasi Katalis",
            "Ahli Penggantian Katalis Industri",
            "Program Pelatihan Keamanan Katalis",
            "Penempatan dan Penanganan Katalis",
            "Solusi Turnaround Katalis",
            "Kontraktor Penanganan Katalis",
            "Ahli Keamanan Pengisian Katalis",
            "Manajemen Efisiensi Katalis",
            "Layanan Penanganan Katalis Lanjutan",
            "Konsultan Manajemen Perubahan Katalis",
            "Tim Penggantian Katalis Darurat",
            "Optimasi Proses Katalis",
            "Layanan Persiapan Katalis",
            "Perawatan Siklus Hidup Katalis",
            "Layanan Penyimpanan dan Penanganan Katalis",
            "Penanganan Katalis untuk Pembangkit Energi",
            "Penanganan dan Praktik Keamanan Katalis",
            "Aktivasi Katalis untuk Pabrik Kimia",
            "Penggantian Katalis untuk Operasi Kilang",
            "Penanganan Katalis untuk Pabrik Industri",
            "Penanganan Katalis di Lingkungan Berbahaya",
            "Ahli Perawatan dan Pembuangan Katalis",
            "Solusi Peralatan Penanganan Katalis",
            "Inovasi Pengisian Katalis",
            "Profesional Inspeksi dan Pengisian Katalis",
            "Spesialis Perawatan Katalis",
            "Pengisian Katalis untuk Efisiensi Kilang",
            "Penanganan Katalis untuk Minyak dan Gas",
            "Layanan Pemecahan Masalah Katalis",
            "Penggantian Katalis untuk Performa Optimal",
            "Teknik Penanganan Katalis",
            "Kepatuhan Keamanan Penanganan Katalis",
            "Operasi dan Pemantauan Katalis",
            "Penanganan Katalis dalam Proses Kimia",
            "Pembuangan dan Daur Ulang Katalis",
            "Layanan Reaktivasi Katalis",
            "Perencanaan Perawatan Katalis",
            "Strategi Optimasi Katalis",
            "Penggantian dan Inspeksi Katalis",
            "Penanganan Katalis untuk Operasi Berkelanjutan",
            "Manajemen Turnaround Katalis",
            "Ahli Keamanan dan Kepatuhan Katalis",
            "Persiapan dan Aktivasi Katalis",
            "Penempatan Katalis untuk Petrokimia",
            "Pengosongan Katalis untuk Turnaround Kilang",
            "Logistik Penanganan Katalis",
            "Solusi Penyimpanan Katalis",
            "Praktik Efisiensi Pengisian Katalis",
            "Keamanan Operasional Katalis",
            "Layanan Penggantian Katalis untuk Pabrik Industri",
            "Penanganan Katalis untuk Area Berisiko Tinggi",
            "Teknisi Perawatan Katalis",
            "Aktivasi Katalis untuk Peningkatan Performa",
            "Optimasi Katalis untuk Industri",
            "Solusi Pembuangan Katalis",
            "Praktik Penanganan Katalis Aman",
            "Proyek Turnaround Katalis",
            "Pemecahan Masalah dan Perbaikan Katalis",
            "Tim Perawatan Katalis",
            "Layanan Pemantauan dan Dukungan Katalis",
            "Ahli Penempatan Katalis",
            "Penanganan dan Pemantauan Katalis",
            "Layanan Inspeksi Keamanan Katalis",
            "Ahli Penggantian Katalis",
            "Pemecahan Masalah dan Pemantauan Katalis",
            "Dukungan Siklus Hidup Katalis",
            "Perawatan Katalis untuk Pembangkit Energi",
            "Aktivasi Katalis untuk Efisiensi Kilang",
            "Penanganan Katalis untuk Pabrik Petrokimia",
            "Optimasi Katalis untuk Keamanan",
            "Penanganan Peralatan Katalis",
            "Persiapan Katalis untuk Operasi",
            "Pembuangan Katalis untuk Pabrik Kimia",
            "Penyimpanan dan Aktivasi Katalis",
            "Praktik Pembuangan Katalis Aman",
            "Proyek Penanganan Katalis",
            "Sistem Pemantauan Katalis",
            "Penempatan dan Optimasi Katalis",
            "Layanan Siklus Hidup Katalis",
            "Inovasi Penanganan Katalis",
            "Praktik Optimasi Katalis",
            "Pemecahan Masalah Katalis untuk Operasi",
            "Perawatan Katalis untuk Pabrik Kimia",
            "Ahli Efisiensi Katalis",
            "Persiapan Katalis untuk Petrokimia",
            "Pemantauan Siklus Hidup Katalis",
            "Aktivasi Katalis untuk Performa Tinggi",
            "Penyimpanan dan Perawatan Katalis",
            "Sistem Penanganan Katalis",
            "Perawatan dan Aktivasi Katalis",
            "Optimasi Katalis untuk Efisiensi Energi",
            "Perencanaan Turnaround Katalis",
            "Penempatan Katalis untuk Pabrik Kimia",
            "Perawatan Peralatan Katalis",
            "Penanganan Katalis untuk Operasi",
            "Layanan Optimasi Penanganan Katalis",
            "Praktik Terbaik Perawatan Katalis",
            "Ahli Pemecahan Masalah Katalis",
            "Ahli Penyimpanan dan Pengisian Katalis",
            "Tim Dukungan Penanganan Katalis",
            "Perencanaan Aktivasi Katalis",
            "Perawatan Katalis untuk Kepatuhan Keamanan",
            "Perencanaan Penempatan Katalis",
            "Optimasi Katalis untuk Operasi Kilang",
            "Penanganan Katalis untuk Operasi Berkelanjutan",
            "Teknik Pemecahan Masalah Katalis",
            "Layanan Perawatan Katalis",
            "Tim Aktivasi Katalis",
            "Inovasi Perawatan Katalis",
            "Solusi Peralatan Katalis",
            "Penanganan Katalis untuk Proyek Besar",
            "Layanan Manajemen Siklus Hidup Katalis",
            "Aktivasi Katalis untuk Efisiensi Kimia",
            "Profesional Penyimpanan dan Penanganan Katalis",
            "Persiapan Katalis untuk Operasi Aman",
            "Penanganan Katalis untuk Efisiensi Tinggi",
            "Perencanaan Pemecahan Masalah Katalis",
            "Tim Optimasi Katalis",
            "Profesional Perawatan Penanganan Katalis",
            "Inovasi Penanganan Peralatan Katalis",
            "Pemecahan Masalah Katalis untuk Pembangkit Energi",
            "Aktivasi Katalis untuk Keamanan Energi",
            "Profesional Penyimpanan dan Penempatan Katalis",
            "Layanan Persiapan dan Penanganan Katalis",
            "Solusi Efisiensi Katalis",
            "Profesional Perawatan Penyimpanan Katalis",
            "Optimasi Siklus Hidup Katalis",

            "Ahli Fabrikasi Struktur Baja",
            "Layanan Pipa Industri",
            "Profesional Konstruksi Mekanikal",
            "Solusi Struktur Baja",
            "Desain dan Instalasi Pipa",
            "Fabrikasi Baja Kustom",
            "Proyek Struktur Baja Berat",
            "Kontraktor Mekanikal Presisi",
            "Pengelasan dan Perakitan Baja",
            "Kerangka Baja Industri",
            "Teknologi Pipa Lanjutan",
            "Solusi Baja dan Mekanikal",
            "Sistem Mekanikal Industri",
            "Pipa untuk Pabrik Kimia",
            "Konstruksi Mekanikal Berkinerja Tinggi",
            "Kontraktor Struktur Baja",
            "Fabrikasi Pipa Industri",
            "Instalasi Kerangka Baja",
            "Desain Sistem Mekanikal",
            "Kontraktor Pipa untuk Petrokimia",
            "Ahli Perakitan Struktur Baja",
            "Solusi Perawatan Mekanikal",
            "Kontraktor Pengelasan Presisi",
            "Solusi Rekayasa Struktur",
            "Perawatan Struktur Baja",
            "Layanan Optimasi Pipa",
            "Instalasi Peralatan Mekanikal",
            "Perakitan Baja Industri",
            "Solusi Pipa untuk Kilang",
            "Solusi Struktur untuk Pabrik Industri",
            "Instalasi Pipa Berat",
            "Desain Baja Industri",
            "Konstruksi Mekanikal untuk Pembangkit Energi",
            "Ahli Perbaikan Struktur Baja",
            "Optimasi Pipa Industri",
            "Kontraktor Perakitan Baja",
            "Layanan Mekanikal Presisi Tinggi",
            "Solusi Pengelasan untuk Proyek Industri",
            "Standar Keamanan Struktur Baja",
            "Instalasi Pipa untuk Proses Kimia",
            "Sistem Mekanikal Kustom",
            "Layanan Fabrikasi Struktur",
            "Solusi Pipa untuk Pabrik Berkinerja Tinggi",
            "Instalasi Mekanikal untuk Kilang",
            "Inovasi Struktur Baja",
            "Perbaikan Baja Industri",
            "Ahli Desain Mekanikal",
            "Perakitan Pipa untuk Minyak dan Gas",
            "Solusi Konstruksi Baja Berat",
            "Sistem Pipa Presisi",
            "Kontraktor Struktur untuk Pembangkit Energi",
            "Solusi Perakitan Baja",
            "Spesialis Pipa Industri",
            "Ahli Kerangka Baja",
            "Solusi Pipa untuk Area Berbahaya",
            "Fabrikasi Mekanikal Lanjutan",
            "Spesialis Pengelasan untuk Struktur Baja",
            "Layanan Desain Mekanikal Industri",
            "Insinyur Struktur Baja",
            "Instalasi Pipa Kustom",
            "Profesional Perawatan Mekanikal",
            "Perakitan Baja untuk Kilang",
            "Pipa dan Perawatan Industri",
            "Konstruksi Baja Berkinerja Tinggi",
            "Tim Perawatan Struktur",
            "Profesional Perbaikan Struktur Baja",
            "Perencanaan Pipa Industri",
            "Perawatan dan Perbaikan Pipa",
            "Inovasi Struktur Baja",
            "Kontraktor Pengelasan untuk Proyek Besar",
            "Solusi Optimasi Mekanikal",
            "Desain dan Perbaikan Pipa",
            "Solusi Perawatan Baja",
            "Standar Keamanan Sistem Mekanikal Industri",
            "Solusi Struktur untuk Pabrik Kimia",
            "Instalasi Baja untuk Efisiensi Energi",
            "Ahli Peralatan Pipa",
            "Sistem Mekanikal untuk Petrokimia",
            "Solusi Baja Berat",
            "Peralatan Pipa Presisi",
            "Rekayasa Struktur untuk Proyek Besar",
            "Perbaikan dan Perawatan Baja",
            "Optimasi Sistem Mekanikal Industri",
            "Inovasi Struktur Baja untuk Efisiensi",
            "Ahli Fabrikasi dan Instalasi Pipa",

            "Layanan Penyedia Tenaga Kerja Andal",
            "Solusi Scaffolding Profesional",
            "Ahli Sewa Peralatan Industri",
            "Solusi Tenaga Kerja Sesuai Permintaan",
            "Scaffolding untuk Proyek Konstruksi",
            "Spesialis Sewa Peralatan Berat",
            "Penyedia Tenaga Kerja Bersertifikat",
            "Solusi Tenaga Kerja Sementara",
            "Ahli Instalasi Scaffolding",
            "Layanan Sewa Industri",
            "Penyedia Tenaga Kerja Terampil",
            "Sewa Scaffolding Kustom",
            "Sewa Peralatan untuk Industri",
            "Scaffolding untuk Lingkungan Berbahaya",
            "Perencanaan Tenaga Kerja Industri",
            "Layanan Sewa Peralatan Andal",
            "Ahli Perawatan Scaffolding",
            "Solusi Tenaga Kerja untuk Proyek Besar",
            "Tim Penyedia Tenaga Kerja Sementara",
            "Spesialis Peralatan Industri",
            "Scaffolding untuk Kilang",
            "Sewa Peralatan untuk Petrokimia",
            "Penyedia Tenaga Kerja Profesional",
            "Layanan Scaffolding untuk Pembangkit Energi",
            "Sewa Peralatan Berat",
            "Kontraktor Tenaga Kerja Terampil",
            "Standar Keamanan Scaffolding",
            "Sewa Scaffolding Andal",
            "Sewa Peralatan untuk Kilang",
            "Ahli Perencanaan Tenaga Kerja",
            "Sewa Peralatan Industri",
            "Solusi Tenaga Kerja Sementara",
            "Kontraktor Scaffolding Bersertifikat",
            "Layanan Scaffolding Industri",
            "Sewa Peralatan untuk Proyek Energi",
            "Tenaga Kerja Sementara untuk Pabrik Industri",
            "Penyedia Scaffolding Andal",
            "Sewa Peralatan Bersertifikat",
            "Penyedia Tenaga Kerja untuk Pabrik Kimia",
            "Instalasi Scaffolding untuk Keamanan",
            "Sewa Peralatan untuk Area Berisiko Tinggi",
            "Tenaga Kerja Terampil untuk Petrokimia",
            "Layanan Penyediaan Peralatan Industri",
            "Solusi Optimasi Tenaga Kerja",
            "Tenaga Kerja Industri Andal",
            "Sewa Peralatan Kustom",
            "Layanan Penyedia Tenaga Kerja Bersertifikat",
            "Solusi Tenaga Kerja Terampil untuk Industri",

            "Ahli Manajemen Proyek Industri",
            "Layanan Konsultasi Proyek",
            "Solusi Proyek Terpadu",
            "Konsultan Perencanaan Proyek Strategis",
            "Konsultasi Operasi Industri",
            "Manajemen Risiko untuk Proyek",
            "Konsultasi Proyek End-to-End",
            "Perencanaan Eksekusi Proyek Efisien",
            "Konsultan Optimasi Biaya",
            "Ahli Strategi Proyek Industri",
            "Tim Eksekusi Proyek",
            "Konsultan Perencanaan untuk Proyek Besar",
            "Manajemen Risiko dan Kepatuhan",
            "Perencanaan Strategi Industri",
            "Ahli Eksekusi End-to-End",
            "Solusi Manajemen Biaya untuk Proyek",
            "Konsultan Perencanaan Industri",
            "Perencanaan Operasi Terpadu",
            "Tim Optimasi Proyek",
            "Ahli Eksekusi dan Perencanaan",
            "Perencanaan Eksekusi Proyek Industri",
            "Solusi Manajemen Risiko dan Biaya"
        ];
    }

    public function index()
    {
        $blogs = Blog::where('is_published', 1)->orderBy('published_at', 'desc')->get()->take(4);
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1home', [
            'blogs' => $blogs
        ]);
    }

    public function whoWeAre()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1whoWeAre');
    }


    public function corporateStructure()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1whoWeAre-bod');
    }

    public function clientPartner()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1whoWeAre-partners');
    }

    public function whatWeDo()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1whatWeDo');
    }

    public function contactUs()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1contact');
    }

    public function career()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1career');
    }

    public function sustainability()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1sustainability');
    }

    public function safety()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1safety');
    }

    public function quality()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1quality');
    }

    public function respon()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1respon');
    }

    public function news()
    {
        $blogs = Blog::where('is_published', 1)->orderBy('published_at', 'desc')->paginate(4);
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1news', [
            'blogs' => $blogs
        ]);
    }

    public function newsDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1newsDetail', [
            'blog' => $blog
        ]);
    }

    public function catalystLoading()
    {
        $data = [];
        $data['title'] = 'Catalyst Handle Indonesia';
        $data['desc'] = "Catalyst Loading The process of placing a catalyst into a chemical reactor to facilitate reactions without being consumed during the process. This step is critical to ensure reaction efficiency, uniform catalyst distribution, and maximum conversion of reactants to products. Here's how catalyst loading works. We carry out the loading process using Big-Bags or Drums, depending on the preferences of our clients or the situation of the equipment to be loaded and its location in the plant. Catalyst loading process with DRUMS The main benefit of the drums is that they are reusable, so once emptied they can be returned to the supplier. This considerably reduces waste generation at the plant. The drum loading mechanism consists of filling the hopper and, once it is loaded, raising it to the mouth of the equipment and proceeding to load the catalyst. The drum loading mechanism consists of filling the hopper and, once it is loaded, raising it to the mouth of the equipment and proceeding to load the catalyst. Big bags are large and flexible bags made of strong materials used to transport bulk material (in this case catalyst). Big-bags are easier to handle due to their “flexibility” and are more adaptable in case of limited manoeuvring space. On the other hand, are often discarded once they have been used, so we generate waste and need to dispose of them properly. In terms of the manoeuvre, the process consists of placing the hopper in the mouth of the reactor, and then raising the big bags without the need to move the hopper at each manoeuvre. Catalyst Method In catalyst loading, there are many methods that are often used, that's why we commonly use the 3 method's below Dry Catalyst Loading Dry catalyst loading involves the introduction of solid catalysts into the reactor without using any auxiliary equipment or liquid medium. commodi magnam occaecati. Dense Catalyst Loading Dense loading optimizes catalyst placement by maximizing packing density and reducing void spaces in the reactor. This method often requires specialized equipment, such as dense loading machines. Sock Catalyst Loading Sock loading employs a sock or tubular bag to guide catalysts into the reactor gently, minimizing physical damage to fragile materials.";
        SEOMeta::setTitle($data['title']);
        SEOMeta::setDescription($data['desc']);
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1service-catalyst', [
            'data' => $data
        ]);
    }

    public function plantMaintenance()
    {
        $data = [];
        $data['title'] = 'Plant Maintenance Indonesia';
        $data['desc'] = "Plant maintenance is the service and repair of assets and equipment. During normal operation, assets may accumulate wear-and-tear that needs to be addressed. Deviations outside of normal operation of cause the majority of damage to equipment and assets.";
        SEOMeta::setTitle($data['title']);
        SEOMeta::setDescription($data['desc']);
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1service-plant-maintenance', [
            'data' => $data
        ]);
    }

    public function portfolio()
    {
        return response()->file(public_path('assets/pdf/Raya_-_Road_Construction_Work.pdf'));
    }


    public function heavyRental()
    {
        $data = [];
        $data['title'] = 'Heavy Equipment Rental';
        $data['desc'] = "Plant maintenance is the service and repair of assets and equipment. During normal operation, assets may accumulate wear-and-tear that needs to be addressed. Deviations outside of normal operation of cause the majority of damage to equipment and assets.";
        SEOMeta::setTitle($data['title']);
        SEOMeta::setDescription($data['desc']);
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('1services-equipment', [
            'data' => $data
        ]);
    }
























    #
    public function aboutUs()
    {
        SEOMeta::addKeyword($this->keywords);
        return Inertia::render('aboutUs');
    }
    public function ecatalogue()
    {
        return response()->file(public_path('/assets/ecatalogue/Catalogue Equipment Makadia Group International.pdf'));
    }

    public function submitEmail(Request $request)
    {
        try {
            $data = $request->all();
            Mail::to("marketing@rayakonstruksi.com")->send(new InqueryMail($data));
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // public function catalystLoading()
    // {
    //     $data = [];
    //     $data['title'] = 'Catalyst Handle Indonesia';
    //     $data['desc'] = "Catalyst Loading The process of placing a catalyst into a chemical reactor to facilitate reactions without being consumed during the process. This step is critical to ensure reaction efficiency, uniform catalyst distribution, and maximum conversion of reactants to products. Here's how catalyst loading works. We carry out the loading process using Big-Bags or Drums, depending on the preferences of our clients or the situation of the equipment to be loaded and its location in the plant. Catalyst loading process with DRUMS The main benefit of the drums is that they are reusable, so once emptied they can be returned to the supplier. This considerably reduces waste generation at the plant. The drum loading mechanism consists of filling the hopper and, once it is loaded, raising it to the mouth of the equipment and proceeding to load the catalyst. The drum loading mechanism consists of filling the hopper and, once it is loaded, raising it to the mouth of the equipment and proceeding to load the catalyst. Big bags are large and flexible bags made of strong materials used to transport bulk material (in this case catalyst). Big-bags are easier to handle due to their “flexibility” and are more adaptable in case of limited manoeuvring space. On the other hand, are often discarded once they have been used, so we generate waste and need to dispose of them properly. In terms of the manoeuvre, the process consists of placing the hopper in the mouth of the reactor, and then raising the big bags without the need to move the hopper at each manoeuvre. Catalyst Method In catalyst loading, there are many methods that are often used, that's why we commonly use the 3 method's below Dry Catalyst Loading Dry catalyst loading involves the introduction of solid catalysts into the reactor without using any auxiliary equipment or liquid medium. commodi magnam occaecati. Dense Catalyst Loading Dense loading optimizes catalyst placement by maximizing packing density and reducing void spaces in the reactor. This method often requires specialized equipment, such as dense loading machines. Sock Catalyst Loading Sock loading employs a sock or tubular bag to guide catalysts into the reactor gently, minimizing physical damage to fragile materials.";
    //     SEOMeta::setTitle($data['title']);
    //     SEOMeta::setDescription($data['desc']);
    //     SEOMeta::addKeyword($this->keywords);
    //     return Inertia::render('1service-catalyst', [
    //         'data' => $data
    //     ]);
    // }
}
