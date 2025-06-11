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
        /**$this->keywords = [
            "Catalyst Loading",
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
            "Risk and Cost Management Solutions"

        ];*/
        $this->keywords = [
            "catalyst loading",

            "sock catalyst lotte cilegon",
            "sock catalyst cilegon lotte",
            "sock lotte catalyst cilegon",
            "sock lotte cilegon catalyst",
            "sock cilegon catalyst lotte",
            "sock cilegon lotte catalyst",
            "catalyst sock lotte cilegon",
            "catalyst sock cilegon lotte",
            "catalyst lotte sock cilegon",
            "catalyst lotte cilegon sock",
            "catalyst cilegon sock lotte",
            "catalyst cilegon lotte sock",
            "lotte sock catalyst cilegon",
            "lotte sock cilegon catalyst",
            "lotte catalyst sock cilegon",
            "lotte catalyst cilegon sock",
            "lotte cilegon sock catalyst",
            "lotte cilegon catalyst sock",
            "cilegon sock catalyst lotte",
            "cilegon sock lotte catalyst",
            "cilegon catalyst sock lotte",
            "cilegon catalyst lotte sock",
            "cilegon lotte sock catalyst",
            "cilegon lotte catalyst sock",

            "sock catalyst loading lotte cilegon",
            "sock catalyst loading cilegon lotte",
            "sock catalyst lotte loading cilegon",
            "sock catalyst lotte cilegon loading",
            "sock catalyst cilegon loading lotte",
            "sock catalyst cilegon lotte loading",
            "sock loading catalyst lotte cilegon",
            "sock loading catalyst cilegon lotte",
            "sock loading lotte catalyst cilegon",
            "sock loading lotte cilegon catalyst",
            "sock loading cilegon catalyst lotte",
            "sock loading cilegon lotte catalyst",
            "sock lotte catalyst loading cilegon",
            "sock lotte catalyst cilegon loading",
            "sock lotte loading catalyst cilegon",
            "sock lotte loading cilegon catalyst",
            "sock lotte cilegon catalyst loading",
            "sock lotte cilegon loading catalyst",
            "sock cilegon catalyst loading lotte",
            "sock cilegon catalyst lotte loading",
            "sock cilegon loading catalyst lotte",
            "sock cilegon loading lotte catalyst",
            "sock cilegon lotte catalyst loading",
            "sock cilegon lotte loading catalyst",
            "catalyst sock loading lotte cilegon",
            "catalyst sock loading cilegon lotte",
            "catalyst sock lotte loading cilegon",
            "catalyst sock lotte cilegon loading",
            "catalyst sock cilegon loading lotte",
            "catalyst sock cilegon lotte loading",
            "catalyst loading sock lotte cilegon",
            "catalyst loading sock cilegon lotte",
            "catalyst loading lotte sock cilegon",
            "catalyst loading lotte cilegon sock",
            "catalyst loading cilegon sock lotte",
            "catalyst loading cilegon lotte sock",
            "catalyst lotte sock loading cilegon",
            "catalyst lotte sock cilegon loading",
            "catalyst lotte loading sock cilegon",
            "catalyst lotte loading cilegon sock",
            "catalyst lotte cilegon sock loading",
            "catalyst lotte cilegon loading sock",
            "catalyst cilegon sock loading lotte",
            "catalyst cilegon sock lotte loading",
            "catalyst cilegon loading sock lotte",
            "catalyst cilegon loading lotte sock",
            "catalyst cilegon lotte sock loading",
            "catalyst cilegon lotte loading sock",
            "loading sock catalyst lotte cilegon",
            "loading sock catalyst cilegon lotte",
            "loading sock lotte catalyst cilegon",
            "loading sock lotte cilegon catalyst",
            "loading sock cilegon catalyst lotte",
            "loading sock cilegon lotte catalyst",
            "loading catalyst sock lotte cilegon",
            "loading catalyst sock cilegon lotte",
            "loading catalyst lotte sock cilegon",
            "loading catalyst lotte cilegon sock",
            "loading catalyst cilegon sock lotte",
            "loading catalyst cilegon lotte sock",
            "loading lotte sock catalyst cilegon",
            "loading lotte sock cilegon catalyst",
            "loading lotte catalyst sock cilegon",
            "loading lotte catalyst cilegon sock",
            "loading lotte cilegon sock catalyst",
            "loading lotte cilegon catalyst sock",
            "loading cilegon sock catalyst lotte",
            "loading cilegon sock lotte catalyst",
            "loading cilegon catalyst sock lotte",
            "loading cilegon catalyst lotte sock",
            "loading cilegon lotte sock catalyst",
            "loading cilegon lotte catalyst sock",
            "lotte sock catalyst loading cilegon",
            "lotte sock catalyst cilegon loading",
            "lotte sock loading catalyst cilegon",
            "lotte sock loading cilegon catalyst",
            "lotte sock cilegon catalyst loading",
            "lotte sock cilegon loading catalyst",
            "lotte catalyst sock loading cilegon",
            "lotte catalyst sock cilegon loading",
            "lotte catalyst loading sock cilegon",
            "lotte catalyst loading cilegon sock",
            "lotte catalyst cilegon sock loading",
            "lotte catalyst cilegon loading sock",
            "lotte loading sock catalyst cilegon",
            "lotte loading sock cilegon catalyst",
            "lotte loading catalyst sock cilegon",
            "lotte loading catalyst cilegon sock",
            "lotte loading cilegon sock catalyst",
            "lotte loading cilegon catalyst sock",
            "lotte cilegon sock catalyst loading",
            "lotte cilegon sock loading catalyst",
            "lotte cilegon catalyst sock loading",
            "lotte cilegon catalyst loading sock",
            "lotte cilegon loading sock catalyst",
            "lotte cilegon loading catalyst sock",
            "cilegon sock catalyst loading lotte",
            "cilegon sock catalyst lotte loading",
            "cilegon sock loading catalyst lotte",
            "cilegon sock loading lotte catalyst",
            "cilegon sock lotte catalyst loading",
            "cilegon sock lotte loading catalyst",
            "cilegon catalyst sock loading lotte",
            "cilegon catalyst sock lotte loading",
            "cilegon catalyst loading sock lotte",
            "cilegon catalyst loading lotte sock",
            "cilegon catalyst lotte sock loading",
            "cilegon catalyst lotte loading sock",
            "cilegon loading sock catalyst lotte",
            "cilegon loading sock lotte catalyst",
            "cilegon loading catalyst sock lotte",
            "cilegon loading catalyst lotte sock",
            "cilegon loading lotte sock catalyst",
            "cilegon loading lotte catalyst sock",
            "cilegon lotte sock catalyst loading",
            "cilegon lotte sock loading catalyst",
            "cilegon lotte catalyst sock loading",
            "cilegon lotte catalyst loading sock",
            "cilegon lotte loading sock catalyst",
            "cilegon lotte loading catalyst sock",

            "sock catalyst loading",
            "sock loading catalyst",
            "catalyst sock loading",
            "catalyst loading sock",
            "loading sock catalyst",
            "loading catalyst sock",
            "dense catalyst loading",
            "dense loading catalyst",
            "catalyst dense loading",
            "catalyst loading dense",
            "loading dense catalyst",
            "loading catalyst dense",
            "dry catalyst loading",
            "dry loading catalyst",
            "catalyst dry loading",
            "catalyst loading dry",
            "loading dry catalyst",
            "loading catalyst dry",

            "catalyst loading process DRUMS",
            "catalyst loading DRUMS process",
            "catalyst process loading DRUMS",
            "catalyst process DRUMS loading",
            "catalyst DRUMS loading process",
            "catalyst DRUMS process loading",
            "loading catalyst process DRUMS",
            "loading catalyst DRUMS process",
            "loading process catalyst DRUMS",
            "loading process DRUMS catalyst",
            "loading DRUMS catalyst process",
            "loading DRUMS process catalyst",
            "process catalyst loading DRUMS",
            "process catalyst DRUMS loading",
            "process loading catalyst DRUMS",
            "process loading DRUMS catalyst",
            "process DRUMS catalyst loading",
            "process DRUMS loading catalyst",
            "DRUMS catalyst loading process",
            "DRUMS catalyst process loading",
            "DRUMS loading catalyst process",
            "DRUMS loading process catalyst",
            "DRUMS process catalyst loading",
            "DRUMS process loading catalyst",

            "catalyst loading process BIG-BAGS",
            "catalyst loading BIG-BAGS process",
            "catalyst process loading BIG-BAGS",
            "catalyst process BIG-BAGS loading",
            "catalyst BIG-BAGS loading process",
            "catalyst BIG-BAGS process loading",
            "loading catalyst process BIG-BAGS",
            "loading catalyst BIG-BAGS process",
            "loading process catalyst BIG-BAGS",
            "loading process BIG-BAGS catalyst",
            "loading BIG-BAGS catalyst process",
            "loading BIG-BAGS process catalyst",
            "process catalyst loading BIG-BAGS",
            "process catalyst BIG-BAGS loading",
            "process loading catalyst BIG-BAGS",
            "process loading BIG-BAGS catalyst",
            "process BIG-BAGS catalyst loading",
            "process BIG-BAGS loading catalyst",
            "BIG-BAGS catalyst loading process",
            "BIG-BAGS catalyst process loading",
            "BIG-BAGS loading catalyst process",
            "BIG-BAGS loading process catalyst",
            "BIG-BAGS process catalyst loading",
            "BIG-BAGS process loading catalyst",

            "sock catalyst loading lotte",
            "sock catalyst lotte loading",
            "sock loading catalyst lotte",
            "sock loading lotte catalyst",
            "sock lotte catalyst loading",
            "sock lotte loading catalyst",
            "catalyst sock loading lotte",
            "catalyst sock lotte loading",
            "catalyst loading sock lotte",
            "catalyst loading lotte sock",
            "catalyst lotte sock loading",
            "catalyst lotte loading sock",
            "catalyst lotte loading sock",
            "catalyst lotte loading sock",
            "loading sock catalyst lotte",
            "loading sock lotte catalyst",
            "loading catalyst sock lotte",
            "loading catalyst lotte sock",
            "loading lotte sock catalyst",
            "loading lotte catalyst sock",
            "lotte sock catalyst loading",
            "lotte sock loading catalyst",
            "lotte catalyst sock loading",
            "lotte catalyst loading sock",

            "catalyst loading lotte cilegon banten",
            "catalyst loading lotte banten cilegon",
            "catalyst loading cilegon lotte banten",
            "catalyst loading cilegon banten lotte",
            "catalyst loading banten lotte cilegon",
            "catalyst loading banten cilegon lotte",
            "catalyst lotte loading cilegon banten",
            "catalyst lotte loading banten cilegon",
            "catalyst lotte cilegon loading banten",
            "catalyst lotte cilegon banten loading",
            "catalyst lotte banten loading cilegon",
            "catalyst lotte banten cilegon loading",
            "catalyst cilegon loading lotte banten",
            "catalyst cilegon loading banten lotte",
            "catalyst cilegon lotte loading banten",
            "catalyst cilegon lotte banten loading",
            "catalyst cilegon banten loading lotte",
            "catalyst cilegon banten lotte loading",
            "catalyst banten loading lotte cilegon",
            "catalyst banten loading cilegon lotte",
            "catalyst banten lotte loading cilegon",
            "catalyst banten lotte cilegon loading",
            "catalyst banten cilegon loading lotte",
            "catalyst banten cilegon lotte loading",
            "loading catalyst lotte cilegon banten",
            "loading catalyst lotte banten cilegon",
            "loading catalyst cilegon lotte banten",
            "loading catalyst cilegon banten lotte",
            "loading catalyst banten lotte cilegon",
            "loading catalyst banten cilegon lotte",
            "loading lotte catalyst cilegon banten",
            "loading lotte catalyst banten cilegon",
            "loading lotte cilegon catalyst banten",
            "loading lotte cilegon banten catalyst",
            "loading lotte banten catalyst cilegon",
            "loading lotte banten cilegon catalyst",
            "loading cilegon catalyst lotte banten",
            "loading cilegon catalyst banten lotte",
            "loading cilegon lotte catalyst banten",
            "loading cilegon lotte banten catalyst",
            "loading cilegon banten catalyst lotte",
            "loading cilegon banten lotte catalyst",
            "loading banten catalyst lotte cilegon",
            "loading banten catalyst cilegon lotte",
            "loading banten lotte catalyst cilegon",
            "loading banten lotte cilegon catalyst",
            "loading banten cilegon catalyst lotte",
            "loading banten cilegon lotte catalyst",
            "lotte catalyst loading cilegon banten",
            "lotte catalyst loading banten cilegon",
            "lotte catalyst cilegon loading banten",
            "lotte catalyst cilegon banten loading",
            "lotte catalyst banten loading cilegon",
            "lotte catalyst banten cilegon loading",
            "lotte loading catalyst cilegon banten",
            "lotte loading catalyst banten cilegon",
            "lotte loading cilegon catalyst banten",
            "lotte loading cilegon banten catalyst",
            "lotte loading banten catalyst cilegon",
            "lotte loading banten cilegon catalyst",
            "lotte cilegon catalyst loading banten",
            "lotte cilegon catalyst banten loading",
            "lotte cilegon loading catalyst banten",
            "lotte cilegon loading banten catalyst",
            "lotte cilegon banten catalyst loading",
            "lotte cilegon banten loading catalyst",
            "lotte banten catalyst loading cilegon",
            "lotte banten catalyst cilegon loading",
            "lotte banten loading catalyst cilegon",
            "lotte banten loading cilegon catalyst",
            "lotte banten cilegon catalyst loading",
            "lotte banten cilegon loading catalyst",
            "cilegon catalyst loading lotte banten",
            "cilegon catalyst loading banten lotte",
            "cilegon catalyst lotte loading banten",
            "cilegon catalyst lotte banten loading",
            "cilegon catalyst banten loading lotte",
            "cilegon catalyst banten lotte loading",
            "cilegon loading catalyst lotte banten",
            "cilegon loading catalyst banten lotte",
            "cilegon loading lotte catalyst banten",
            "cilegon loading lotte banten catalyst",
            "cilegon loading banten catalyst lotte",
            "cilegon loading banten lotte catalyst",
            "cilegon lotte catalyst loading banten",
            "cilegon lotte catalyst banten loading",
            "cilegon lotte loading catalyst banten",
            "cilegon lotte loading banten catalyst",
            "cilegon lotte banten catalyst loading",
            "cilegon lotte banten loading catalyst",
            "cilegon banten catalyst loading lotte",
            "cilegon banten catalyst lotte loading",
            "cilegon banten loading catalyst lotte",
            "cilegon banten loading lotte catalyst",
            "cilegon banten lotte catalyst loading",
            "cilegon banten lotte loading catalyst",
            "banten catalyst loading lotte cilegon",
            "banten catalyst loading cilegon lotte",
            "banten catalyst lotte loading cilegon",
            "banten catalyst lotte cilegon loading",
            "banten catalyst cilegon loading lotte",
            "banten catalyst cilegon lotte loading",
            "banten loading catalyst lotte cilegon",
            "banten loading catalyst cilegon lotte",
            "banten loading lotte catalyst cilegon",
            "banten loading lotte cilegon catalyst",
            "banten loading cilegon catalyst lotte",
            "banten loading cilegon lotte catalyst",
            "banten lotte catalyst loading cilegon",
            "banten lotte catalyst cilegon loading",
            "banten lotte loading catalyst cilegon",
            "banten lotte loading cilegon catalyst",
            "banten lotte cilegon catalyst loading",
            "banten lotte cilegon loading catalyst",
            "banten cilegon catalyst loading lotte",
            "banten cilegon catalyst lotte loading",
            "banten cilegon loading catalyst lotte",
            "banten cilegon loading lotte catalyst",
            "banten cilegon lotte catalyst loading",
            "banten cilegon lotte loading catalyst"
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
            Mail::to("marketing@makadiagroup.com")->send(new InqueryMail($data));
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
