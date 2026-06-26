<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * نمایش لیست پروژه‌ها
     */
    public function index()
    {
        // پروژه‌های نمونه (بعداً از دیتابیس خوانده می‌شود)
        $projects = [
            [
                'id' => 1,
                'title' => 'پنل مدیریت فروشگاهی',
                'description' => 'یک پنل مدیریت کامل برای فروشگاه‌های آنلاین با قابلیت مدیریت محصولات، سفارشات و کاربران.',
                'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                'image' => null,
                'github_url' => '#',
                'demo_url' => '#',
                'category' => 'وب‌اپلیکیشن',
            ],
            [
                'id' => 2,
                'title' => 'ربات تلگرام مدیریت وظایف',
                'description' => 'ربات تلگرام برای مدیریت وظایف روزانه با قابلیت یادآوری و دسته‌بندی.',
                'technologies' => ['PHP', 'Telegram API', 'MySQL'],
                'image' => null,
                'github_url' => '#',
                'demo_url' => '#',
                'category' => 'ربات',
            ],
            [
                'id' => 3,
                'title' => 'سیستم مدیریت محتوا',
                'description' => 'یک CMS ساده با قابلیت مدیریت مقالات، کاربران و دسته‌بندی‌ها.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
                'image' => null,
                'github_url' => '#',
                'demo_url' => '#',
                'category' => 'وب‌اپلیکیشن',
            ],
        ];

        return view('projects.index', compact('projects'));
    }

    /**
     * نمایش جزئیات یک پروژه
     */
    public function show($id)
    {
        // بعداً از دیتابیس خوانده می‌شود
        return view('projects.show', compact('id'));
    }
}