@extends('layouts.app')

@section('title', $project->title . ' - نیما احمدی')

@section('content')
    <section class="project-show-section">
        <div class="container">
            <!-- دکمه بازگشت -->
            <a href="{{ route('projects.index') }}" class="back-button" data-aos="fade-right">
                <i class="bi bi-arrow-right"></i>
                بازگشت به نمونه‌کارها
            </a>
            
            <!-- کارت پروژه -->
            <div class="project-show-card" data-aos="fade-up">
                <!-- تصویر پروژه -->
                <div class="project-show-image">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    @else
                        <div class="project-show-image-placeholder">
                            <i class="bi bi-code-slash"></i>
                        </div>
                    @endif
                </div>
                
                <!-- محتوای پروژه -->
                <div class="project-show-content">
                    <!-- عنوان و دسته‌بندی -->
                    <h1 class="project-show-title">{{ $project->title }}</h1>
                    <span class="project-show-category">{{ $project->category }}</span>
                    
                    <!-- توضیحات -->
                    <p class="project-show-description">
                        {{ $project->description }}
                    </p>
                    
                    <!-- تکنولوژی‌ها -->
                    @php
                        $technologies = $project->technologies;
                        if (is_string($technologies)) {
                            $technologies = array_map('trim', explode(',', $technologies));
                        }
                    @endphp
                    
                    @if(!empty($technologies) && is_array($technologies))
                        <div class="project-show-technologies">
                            <h3 class="technologies-title">
                                <i class="bi bi-stack"></i>
                                تکنولوژی‌های استفاده شده:
                            </h3>
                            <div class="technologies-list">
                                @foreach($technologies as $tech)
                                    <span class="tech-badge-large">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    
                    <!-- دکمه‌های اقدام -->
                    <div class="project-show-actions">
                        @if($project->demo_url && $project->demo_url !== '#')
                            <a href="{{ $project->demo_url }}" target="_blank" class="btn-project btn-project-primary">
                                <i class="bi bi-eye"></i>
                                مشاهده دمو
                            </a>
                        @endif
                        
                        @if($project->github_url && $project->github_url !== '#')
                            <a href="{{ $project->github_url }}" target="_blank" class="btn-project btn-project-secondary">
                                <i class="bi bi-github"></i>
                                مشاهده در گیت‌هاب
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/project-show.css') }}">
@endpush