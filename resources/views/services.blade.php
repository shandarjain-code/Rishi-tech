@extends('layouts.app')

@section('title', 'Services | Web, Mobile & SaaS Development — Laravel, React, Flutter')
@section('description', 'Web development, mobile apps (Flutter), Laravel & React engineering, SaaS, WordPress, and Shopify. Discovery to launch with clear milestones — remote-friendly for clients worldwide.')

@section('content')
    <x-page-hero
        title="Services"
        subtitle="Comprehensive digital solutions to help your business grow — from discovery to launch."
    />

    <section class="bg-rose-50/50 py-16 md:py-20" x-data="quoteModal()">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                @forelse($services as $service)
                    <div class="flex flex-col h-full rounded-2xl border border-rose-100/80 bg-white p-8 shadow-lg shadow-slate-900/5 transition relative overflow-hidden group">
                        <h3 class="mb-3 text-center text-xl font-bold text-slate-900 leading-tight relative z-10">{{ $service->title }}</h3>
                        <p class="text-slate-600 text-left mb-6 flex-grow text-sm relative z-10">{{ $service->description }}</p>
                        <div class="mt-auto relative z-10 pt-4 border-t border-slate-100">
                            <button type="button" @click="$dispatch('open-quote-modal', { service: '{{ addslashes($service->title) }}' })" class="inline-flex w-full items-center justify-center rounded-xl bg-rose-50 px-4 py-3 text-sm font-semibold text-rose-600 transition hover:bg-rose-100 border border-rose-100">
                                Get Quote
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center">
                        <p class="text-lg text-slate-500">Services information will be available soon.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Get Quote Modal -->
        <div x-cloak 
             @open-quote-modal.window="openModal($event.detail.service)" 
             x-show="isOpen" 
             class="fixed inset-0 z-[100] flex items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-900/60 p-4 backdrop-blur-sm"
        >
            <div x-show="isOpen" 
                 @click.away="closeModal()"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="relative w-full max-w-lg rounded-3xl bg-white p-6 shadow-2xl sm:p-8 border border-rose-100"
            >
                <button @click="closeModal()" class="absolute right-4 top-4 rounded-full p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-600 transition">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
                
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Get a Quote</h3>
                <p class="text-slate-500 text-sm mb-6">For <strong class="text-rose-600" x-text="serviceName"></strong></p>

                <template x-if="successMessage">
                    <div class="rounded-xl bg-emerald-50 p-6 text-center border border-emerald-200">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        </div>
                        <h4 class="text-lg font-bold text-emerald-800 mb-2">Request Submitted!</h4>
                        <p class="text-emerald-600 text-sm" x-text="successMessage"></p>
                        <button @click="closeModal()" class="mt-6 w-full rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-700">Close</button>
                    </div>
                </template>

                <form x-show="!successMessage" @submit.prevent="submitForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Name <span class="text-rose-500">*</span></label>
                        <input type="text" x-model="form.name" required class="w-full rounded-xl border-slate-200 bg-slate-50/50 px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900 placeholder:text-slate-400" placeholder="Your full name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">WhatsApp Number <span class="text-rose-500">*</span></label>
                        <input type="text" x-model="form.phone" required class="w-full rounded-xl border-slate-200 bg-slate-50/50 px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900 placeholder:text-slate-400" placeholder="+1 234 567 8900">
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Email <span class="text-slate-400 font-normal">(Optional)</span></label>
                            <input type="email" x-model="form.email" class="w-full rounded-xl border-slate-200 bg-slate-50/50 px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900 placeholder:text-slate-400" placeholder="you@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Estimated Budget</label>
                            <input type="text" x-model="form.budget" class="w-full rounded-xl border-slate-200 bg-slate-50/50 px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900 placeholder:text-slate-400" placeholder="e.g. $1000 - $5000">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">When should we contact you? <span class="text-rose-500">*</span></label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex cursor-pointer items-center justify-center rounded-xl border p-3 transition"
                                   :class="form.contact_timing === 'immediately' ? 'border-rose-500 bg-rose-50 text-rose-700' : 'border-slate-200 bg-white hover:bg-slate-50'">
                                <input type="radio" x-model="form.contact_timing" value="immediately" class="sr-only">
                                <span class="text-sm font-medium">Immediately</span>
                            </label>
                            <label class="flex cursor-pointer items-center justify-center rounded-xl border p-3 transition"
                                   :class="form.contact_timing === 'schedule' ? 'border-rose-500 bg-rose-50 text-rose-700' : 'border-slate-200 bg-white hover:bg-slate-50'">
                                <input type="radio" x-model="form.contact_timing" value="schedule" class="sr-only">
                                <span class="text-sm font-medium">Schedule Time</span>
                            </label>
                        </div>
                    </div>

                    <div x-show="form.contact_timing === 'schedule'" x-transition x-cloak class="space-y-4 rounded-xl bg-slate-50 p-4 border border-slate-100">
                        <div class="relative" @click.away="showCountryList = false" @keydown.escape="showCountryList = false">
                            <label class="block text-sm font-medium text-slate-700 mb-1">Country <span class="text-rose-500">*</span></label>
                            <input type="text" x-model="form.country" 
                                @focus="showCountryList = true; countryIndex = -1" 
                                @input="showCountryList = true; countryIndex = -1" 
                                @keydown.down.prevent="if(showCountryList && filteredCountries.length > 0) { countryIndex = Math.min(countryIndex + 1, filteredCountries.length - 1); $nextTick(() => document.getElementById('country-item-' + countryIndex)?.scrollIntoView({block: 'nearest'})); }"
                                @keydown.up.prevent="if(showCountryList && filteredCountries.length > 0) { countryIndex = Math.max(countryIndex - 1, 0); $nextTick(() => document.getElementById('country-item-' + countryIndex)?.scrollIntoView({block: 'nearest'})); }"
                                @keydown.enter="if(showCountryList && countryIndex >= 0) { $event.preventDefault(); selectCountry(filteredCountries[countryIndex]); }"
                                :required="form.contact_timing === 'schedule'" 
                                class="w-full rounded-xl border-slate-200 bg-white px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900" placeholder="Your country" autocomplete="new-password">
                            <div x-show="showCountryList && filteredCountries.length > 0" class="absolute z-50 w-full mt-1 bg-white border border-slate-200 rounded-xl shadow-lg max-h-48 overflow-y-auto" style="display: none;">
                                <template x-for="(country, index) in filteredCountries" :key="country">
                                    <div :id="'country-item-' + index" 
                                         @click="selectCountry(country)" 
                                         :class="{'bg-slate-100 font-medium': countryIndex === index, 'hover:bg-slate-50': countryIndex !== index}"
                                         class="px-4 py-2 text-sm text-slate-700 cursor-pointer transition-colors" x-text="country"></div>
                                </template>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Date <span class="text-rose-500">*</span></label>
                                <input type="date" x-model="form.schedule_date" :required="form.contact_timing === 'schedule'" class="w-full rounded-xl border-slate-200 bg-white px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Time <span class="text-rose-500">*</span></label>
                                <input type="time" x-model="form.schedule_time" :required="form.contact_timing === 'schedule'" class="w-full rounded-xl border-slate-200 bg-white px-4 py-2.5 text-sm focus:border-rose-500 focus:ring-rose-500 text-slate-900">
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" :disabled="loading" class="inline-flex w-full items-center justify-center rounded-xl bg-rose-600 px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-rose-200 transition hover:-translate-y-0.5 hover:bg-rose-700 hover:shadow-xl disabled:opacity-70 disabled:hover:translate-y-0">
                            <svg x-show="loading" class="mr-2 h-4 w-4 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            <span x-text="loading ? 'Submitting...' : 'Submit Request'"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('quoteModal', () => ({
                    isOpen: false,
                    loading: false,
                    serviceName: '',
                    successMessage: '',
                    showCountryList: false,
                    countryIndex: -1,
                    selectCountry(country) {
                        this.form.country = country;
                        this.showCountryList = false;
                        this.countryIndex = -1;
                    },
                    countries: [
                        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
                    ],
                    get filteredCountries() {
                        if (!this.form.country) return this.countries;
                        const term = this.form.country.toLowerCase();
                        return this.countries.filter(c => c.toLowerCase().includes(term));
                    },
                    form: {
                        name: '',
                        phone: '',
                        email: '',
                        budget: '',
                        contact_timing: 'immediately',
                        schedule_date: '',
                        schedule_time: '',
                        country: ''
                    },
                    openModal(service) {
                        this.serviceName = service;
                        this.isOpen = true;
                        this.successMessage = '';
                        this.resetForm();
                    },
                    closeModal() {
                        this.isOpen = false;
                        setTimeout(() => this.resetForm(), 300);
                    },
                    resetForm() {
                        this.form = {
                            name: '',
                            phone: '',
                            email: '',
                            budget: '',
                            contact_timing: 'immediately',
                            schedule_date: '',
                            schedule_time: '',
                            country: ''
                        };
                    },
                    async submitForm() {
                        this.loading = true;
                        try {
                            const response = await fetch('{{ route("api.quote.store") }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                },
                                body: JSON.stringify({
                                    ...this.form,
                                    service: this.serviceName
                                })
                            });
                            
                            if (response.ok) {
                                if (this.form.contact_timing === 'immediately') {
                                    this.successMessage = 'Our team will contact you via WhatsApp within 10 minutes.';
                                } else {
                                    this.successMessage = `We will contact you via WhatsApp on ${this.form.schedule_date} at ${this.form.schedule_time}.`;
                                }
                            } else {
                                alert('Something went wrong. Please try again.');
                            }
                        } catch (error) {
                            alert('An error occurred. Please try again.');
                        } finally {
                            this.loading = false;
                        }
                    }
                }));
            });
        </script>
    </section>

    <section class="bg-white py-16 md:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-12 text-center text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                <span class="gradient-text">My development process</span>
            </h2>
            <div class="grid grid-cols-1 gap-10 md:grid-cols-4 md:gap-8">
                @foreach ([
                    ['step' => '1', 'title' => 'Discovery', 'desc' => 'Understanding your requirements and business goals'],
                    ['step' => '2', 'title' => 'Planning', 'desc' => 'Creating a detailed roadmap and architecture'],
                    ['step' => '3', 'title' => 'Development', 'desc' => 'Building your solution with clean, scalable code'],
                    ['step' => '4', 'title' => 'Delivery', 'desc' => 'Testing, deployment, and ongoing support'],
                ] as $item)
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-rose-500 text-2xl font-bold text-white shadow-md shadow-rose-300/40">
                            {{ $item['step'] }}
                        </div>
                        <h3 class="mb-2 text-lg font-semibold text-slate-900">{{ $item['title'] }}</h3>
                        <p class="text-slate-600">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-band py-16 md:py-20">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Ready to get started?</h2>
            <p class="mb-8 text-lg text-slate-600 md:text-xl">
                Let's discuss your project requirements and create a custom solution for your business.
            </p>
            <a href="{{ route('start-project') }}" class="inline-flex rounded-xl bg-rose-500 px-8 py-4 text-base font-semibold text-white shadow-md shadow-rose-300/40 transition hover:bg-rose-600">
                Start Your Project
            </a>
        </div>
    </section>
@endsection

