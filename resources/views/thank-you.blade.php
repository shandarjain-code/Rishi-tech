@extends('layouts.app')

@section('title', 'Thank You — Project Request Received')
@section('description', 'Thanks — your project request was received. Expect a reply within 24 hours via email or WhatsApp.')
@section('robots', 'noindex, follow')

@section('content')
    <section class="relative overflow-hidden border-b border-rose-100/80 bg-gradient-to-b from-emerald-50/80 via-white to-rose-50/30 py-16 md:py-20">
        <div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-emerald-100 ring-4 ring-emerald-50">
                <svg class="h-10 w-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h1 class="mb-3 text-4xl font-bold tracking-tight text-slate-900 md:text-5xl">Thank you!</h1>
            <p class="text-lg text-slate-600 md:text-xl">Your project request was submitted successfully.</p>
        </div>
    </section>

    <section class="bg-white py-14 md:py-16">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl border border-slate-200/80 bg-slate-50/50 p-8 shadow-sm">
                <h2 class="mb-6 text-center text-2xl font-semibold text-slate-900">What happens next?</h2>
                <div class="mx-auto max-w-2xl space-y-5 text-left">
                    @foreach ([
                        ['n' => '1', 't' => 'Review your requirements', 'd' => "I'll review your project and prepare a detailed proposal."],
                        ['n' => '2', 't' => 'Response within 24 hours', 'd' => "I'll reach out via email or WhatsApp with next steps."],
                        ['n' => '3', 't' => 'Consultation call', 'd' => "We'll schedule a call to align on scope, timeline, and success metrics."],
                        ['n' => '4', 't' => 'Project proposal', 'd' => "You'll receive timeline, investment, and deliverables in writing."],
                    ] as $row)
                        <div class="flex gap-4">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-rose-500 text-sm font-bold text-white shadow-sm shadow-rose-300/40">
                                {{ $row['n'] }}
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">{{ $row['t'] }}</h3>
                                <p class="mt-1 text-slate-600">{{ $row['d'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-rose-50/50 py-14 md:py-16">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-10 text-center text-3xl font-bold tracking-tight text-slate-900">
                <span class="gradient-text">Need to reach me sooner?</span>
            </h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="text-center">
                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-rose-100">
                        <svg class="h-8 w-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-slate-900">Phone / WhatsApp</h3>
                    <p class="mb-2 text-slate-600">+91 9522339343</p>
                    <a href="https://wa.me/919522339343" target="_blank" rel="noopener noreferrer" class="font-semibold text-emerald-600 transition hover:text-emerald-700">Message on WhatsApp</a>
                </div>
                <div class="text-center">
                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-rose-100">
                        <svg class="h-8 w-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-slate-900">Email</h3>
                    <p class="mb-2 text-slate-600">contact@rishijain.tech</p>
                    <a href="mailto:contact@rishijain.tech" class="font-semibold text-rose-600 transition hover:text-rose-700">Send email</a>
                </div>
                <div class="text-center">
                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-rose-100">
                        <svg class="h-8 w-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-slate-900">Business hours</h3>
                    <p class="text-slate-600">Mon–Fri: 9AM–8PM IST</p>
                    <p class="text-slate-600">Sat: 10AM–6PM IST</p>
                    <p class="mt-2 text-sm text-slate-500">Flexible for clients worldwide</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 md:py-16">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold tracking-tight text-slate-900">
                <span class="gradient-text">While you wait…</span>
            </h2>
            <p class="mb-8 text-lg text-slate-600">Explore the portfolio and services to see how we can work together.</p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center rounded-xl bg-rose-500 px-8 py-3 font-semibold text-white shadow-md shadow-rose-300/40 transition hover:bg-rose-600">
                    View portfolio
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-xl border-2 border-rose-400 px-8 py-3 font-semibold text-rose-700 transition hover:bg-rose-50">
                    Browse services
                </a>
            </div>
        </div>
    </section>
@endsection
