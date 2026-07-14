@extends('layouts.app')

@section('title', 'Contact | Hire a Full Stack Developer — Laravel & React')
@section('description', 'Contact Rishi Jain for Laravel, React, Flutter, or WordPress projects. WhatsApp, email, or Freelancer. Response within 24 hours — project quotes and consultations.')

@section('content')
    <x-page-hero
        title="Get in touch"
        subtitle="Let's discuss your project and create something amazing together."
    />

<section class="bg-rose-50/50 py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold mb-8 gradient-text">Let's Connect</h2>
                <p class="text-gray-600 mb-8 text-lg">
                    I'm always excited to work on new projects and help businesses achieve their digital goals. 
                    Whether you have a specific project in mind or just want to discuss possibilities, feel free to reach out.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-rose-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Phone/WhatsApp</h3>
                            <p class="text-gray-600">+91 9522339343</p>
                            <p class="text-gray-500 text-sm">Available 24/7 for urgent queries</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-rose-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Email</h3>
                            <p class="text-gray-600">contact@rishijain.tech</p>
                            <p class="text-gray-500 text-sm">I respond within 24 hours</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-rose-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Location</h3>
                            <p class="text-gray-600">India (Remote Available)</p>
                            <p class="text-gray-500 text-sm">Working with clients worldwide</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-rose-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Website</h3>
                            <p class="text-gray-600">rishijain.tech</p>
                            <p class="text-gray-500 text-sm">Portfolio and project showcase</p>
                        </div>
                    </div>
                </div>

                <div id="freelancer-profile" class="mt-10 scroll-mt-24 rounded-2xl border border-slate-200/90 bg-white p-6 shadow-md shadow-slate-900/5 ring-1 ring-slate-100">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Freelancer</p>
                    <h3 class="mt-1 text-lg font-semibold text-slate-900">Hire via Freelancer.com</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Verified profile <span class="font-medium text-slate-800">@rishi9343</span> — reviews, portfolio, and milestone-based work with secure payments.
                    </p>
                    <a
                        href="https://www.freelancer.in/u/rishi9343?sb=t"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[#29b2fe] px-5 py-3 text-sm font-semibold text-white shadow-md shadow-sky-900/15 transition hover:bg-[#1fa3ef] sm:w-auto"
                    >
                        View Freelancer profile
                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <div class="mt-8">
                    <h3 class="mb-3 text-sm font-semibold uppercase tracking-wide text-slate-500">LinkedIn</h3>
                    <a href="https://www.linkedin.com/in/rishi-jain-b14945262/" target="_blank" rel="noopener noreferrer" class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-rose-100 text-rose-600 transition hover:bg-rose-200" aria-label="LinkedIn profile">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Contact Form -->
            <div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Start Your Project</h2>
                    <p class="text-gray-600 mb-6">
                        Fill out this quick form and I'll get back to you within 24 hours to discuss your project.
                    </p>
                    
                    <a href="{{ route('start-project') }}" class="block w-full text-center bg-rose-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-rose-700 transition">
                        Start Project Inquiry
                    </a>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-500 text-sm">Or directly message me on WhatsApp</p>
                        <a href="https://wa.me/919522339343" target="_blank" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold mt-2">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Message on WhatsApp
                        </a>
                    </div>
                </div>
                
                <!-- Business Hours -->
                <div class="bg-white p-6 rounded-xl shadow-lg mt-6">
                    <h3 class="font-semibold text-lg mb-4">Business Hours</h3>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 8:00 PM IST</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday</span>
                            <span>10:00 AM - 6:00 PM IST</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday</span>
                            <span>Available for urgent projects</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4">
                        Note: I work with clients worldwide and keep hours flexible across time zones.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
