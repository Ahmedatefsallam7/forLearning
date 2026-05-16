@extends('layouts.app')

@section('title', 'Welcome | TALL Stack')

@section('content')
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 70vh; padding: 20px; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
    
    <!-- Hero Section -->
    <div style="text-align: center; margin-bottom: 50px;">
        <h1 style="font-size: clamp(2.5rem, 8vw, 4.5rem); font-weight: 800; margin-bottom: 20px; line-height: 1.1; letter-spacing: -0.02em; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Build Faster with<br>TALL Stack
        </h1>
        <p style="font-size: 1.25rem; color: #4a5568; max-width: 600px; margin: 0 auto; line-height: 1.6; opacity: 0.8;">
            Experience the harmony of Laravel, Livewire, Tailwind CSS, and Alpine.js. A modern workflow for ambitious developers.
        </p>
    </div>

    <!-- Main Card -->
    <div style="background: white; border-radius: 32px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); padding: 40px; width: 100%; max-width: 500px; text-align: center; border: 1px solid #edf2f7; position: relative; overflow: hidden;">
        <!-- Decorative subtle gradient blob -->
        <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: radial-gradient(circle, rgba(102,126,234,0.1) 0%, rgba(118,75,162,0.1) 100%); border-radius: 50%; z-index: 0;"></div>

        <div style="position: relative; z-index: 1;">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 64px; height: 64px; background: #ebf4ff; border-radius: 20px; margin-bottom: 24px; color: #4c51bf;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            
            <h2 style="font-size: 1.5rem; font-weight: 700; color: #1a202c; margin-bottom: 12px;">Get Started</h2>
            <p style="color: #718096; margin-bottom: 32px; font-size: 1rem;">Explore the interactive components we've built.</p>

            <div style="display: flex; flex-direction: column; gap: 12px;">
                <a href="/counter" style="display: flex; align-items: center; justify-content: center; gap: 10px; padding: 16px 24px; background: #4c51bf; color: white; text-decoration: none; border-radius: 16px; font-weight: 600; font-size: 1rem; transition: transform 0.2s ease; box-shadow: 0 4px 14px 0 rgba(76, 81, 191, 0.39);">
                    <span>Interactive Counter</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                
                <button x-data @click="alert('Alpine.js is working perfectly! 🚀')" style="padding: 16px 24px; background: transparent; color: #4c51bf; border: 2px solid #e2e8f0; border-radius: 16px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.2s ease;">
                    Test Alpine.js
                </button>
            </div>
        </div>
    </div>

    <!-- Features list -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 60px; opacity: 0.6;">
        <span style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 0.875rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Laravel 11
        </span>
        <span style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 0.875rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Livewire 3
        </span>
        <span style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 0.875rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Tailwind CSS
        </span>
        <span style="display: flex; align-items: center; gap: 8px; font-weight: 600; font-size: 0.875rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4c51bf" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Alpine.js
        </span>
    </div>
</div>
@endsection
