@extends('layouts.app')

@section('title', 'App')

@section('content')
<!-- App Introduction Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">App</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">App</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 class="mb-4 text-primary">Introducing Our App</h2>
            <p>The App is an innovative digital tool designed to empower qualitative researchers with advanced artificial intelligence capabilities. Developed as part of the TQRS initiative, this app streamlines the research process, making it easier to collect, analyze, and interpret qualitative data.</p>
            <h4 class="mt-5 mb-3">Key Features</h4>
            <ul>
                <li><strong>Automated Data Analysis:</strong> Leverage AI to quickly identify patterns, themes, and insights from large qualitative datasets.</li>
                <li><strong>Smart Transcription:</strong> Convert audio interviews and focus groups into accurate, searchable text with minimal effort.</li>
                <li><strong>Interactive Dashboards:</strong> Visualize your findings and track research progress in real time.</li>
                <li><strong>Collaboration Tools:</strong> Work with team members, share notes, and manage projects securely in the cloud.</li>
                <li><strong>Accessible Anywhere:</strong> Use the app on any device, ensuring research continuity and flexibility.</li>
            </ul>
            <h4 class="mt-5 mb-3">How the App Supports Qualitative Research</h4>
            <p>Our App is built to simplify and enhance every stage of the qualitative research journey. Whether you are designing a study, managing data, or reporting findings, the app provides intelligent support and actionable insights. It is especially valuable for researchers working with large or complex datasets, or those seeking to improve the efficiency and rigor of their analysis.</p>
            <h4 class="mt-5 mb-3">Get Started</h4>
            <p>Ready to experience the future of qualitative research? <a href="#">Sign up</a> or <a href="#">learn more</a> about our App today and join a growing community of innovative researchers.</p>
        </div>
    </div>
</div>
<!-- App Introduction End -->
@endsection 