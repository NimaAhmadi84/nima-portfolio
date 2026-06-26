@extends('layouts.app')

@section('title', 'نمونه‌کارها - نیما احمدی')

@section('content')
    <!-- Hero بخش صفحه -->
    <section class="projects-hero py-5">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="section-label-wrapper justify-content-center mb-3">
                    <span class="section-label">نمونه‌کارها</span>
                    <span class="section-line"></span>
                </div>
                <h1 class="display-4 fw-bold mt-3">
                    پروژه‌هایی که<br>
                    <span class="text-primary">انجام داده‌ام</span>
                </h1>
                <p class="lead text-muted mt-3">
                    مجموعه‌ای از پروژه‌های شخصی و آموزشی که با تکنولوژی‌های مختلف ساخته‌ام
                </p>
            </div>
        </div>
    </section>

    <!-- لیست پروژه‌ها -->
    <section class="projects-list py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="project-card">
                            <!-- تصویر پروژه -->
                            <div class="project-image">
                                @if($project['image'])
                                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                                @else
                                    <div class="project-image-placeholder">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                @endif
                                <span class="project-category">{{ $project['category'] }}</span>
                            </div>
                            
                            <!-- محتوای کارت -->
                            <div class="project-content">
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-description">{{ $project['description'] }}</p>
                                
                                <!-- تکنولوژی‌ها -->
                                <div class="project-technologies">
                                    @foreach($project['technologies'] as $tech)
                                        <span class="tech-badge">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                
                                <!-- دکمه‌ها -->
                                <div class="project-actions">
                                    <a href="{{ $project['demo_url'] }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye me-1"></i>
                                        مشاهده دمو
                                    </a>
                                    <a href="{{ $project['github_url'] }}" class="btn btn-outline-secondary btn-sm" target="_blank">
                                        <i class="bi bi-github me-1"></i>
                                        گیت‌هاب
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush