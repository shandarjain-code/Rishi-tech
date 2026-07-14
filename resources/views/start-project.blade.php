@extends('layouts.app')

@section('title', 'Start Your Project | Web & App Development Quote')
@section('description', 'Start a Laravel, React, Flutter, or SaaS project: share scope, budget, and timeline. Multi-step brief — get a structured proposal and fast follow-up from a full stack developer.')

@section('content')
    <x-page-hero
        title="Start your project"
        subtitle="Share a few details — I'll respond with a clear plan, timeline, and next steps."
    />

<section class="bg-rose-50/50 py-16 md:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <div x-data="leadFormStore()">
                <!-- Progress Bar -->
                <div class="mb-8">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm text-gray-600">Step <span x-text="currentStep"></span> of 5</span>
                        <span class="text-sm text-gray-600" x-text="Math.round((currentStep / 5) * 100) + '%' "></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-rose-600 h-2 rounded-full transition-all duration-300" :style="`width: ${(currentStep / 5) * 100}%`"></div>
                    </div>
                </div>
                
                <form method="POST" action="{{ route('leads.store') }}" x-ref="leadForm" @submit.prevent="submitForm">
                    @csrf
                    <!-- Step 1: Project Type -->
                    <div x-show="currentStep === 1" x-transition>
                        <h2 class="text-2xl font-bold mb-6">What type of project do you need?</h2>
                        <div class="space-y-4">
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="project_type" value="Mobile App" x-model="form.project_type" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">Mobile App</span>
                                    <p class="text-gray-600 mt-1">iOS & Android applications with native performance</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="project_type" value="Website" x-model="form.project_type" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">Website</span>
                                    <p class="text-gray-600 mt-1">Responsive web applications and modern websites</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="project_type" value="E-commerce" x-model="form.project_type" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">E-commerce</span>
                                    <p class="text-gray-600 mt-1">Online stores, marketplaces, and payment systems</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="project_type" value="SaaS Platform" x-model="form.project_type" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">SaaS Platform</span>
                                    <p class="text-gray-600 mt-1">Software as a Service solutions with subscription models</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Step 2: Budget -->
                    <div x-show="currentStep === 2" x-transition>
                        <h2 class="text-2xl font-bold mb-6">What's your budget range?</h2>
                        <div class="space-y-4">
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="budget" value="$500-$1000" x-model="form.budget" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">$500 - $1000</span>
                                    <p class="text-gray-600 mt-1">Basic MVP, simple website, or small feature development</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="budget" value="$1000-$5000" x-model="form.budget" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">$1000 - $5000</span>
                                    <p class="text-gray-600 mt-1">Professional web application or mobile app</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="budget" value="$5000+" x-model="form.budget" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">$5000+</span>
                                    <p class="text-gray-600 mt-1">Enterprise-level solution or complex platform</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Step 3: Timeline -->
                    <div x-show="currentStep === 3" x-transition>
                        <h2 class="text-2xl font-bold mb-6">When do you need this completed?</h2>
                        <div class="space-y-4">
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="timeline" value="1 Week" x-model="form.timeline" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">1 Week</span>
                                    <p class="text-gray-600 mt-1">Urgent project - premium rates may apply</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="timeline" value="1 Month" x-model="form.timeline" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">1 Month</span>
                                    <p class="text-gray-600 mt-1">Standard timeline for most projects</p>
                                </div>
                            </label>
                            <label class="flex items-center p-6 border-2 rounded-lg cursor-pointer hover:bg-rose-50 border-rose-200">
                                <input type="radio" name="timeline" value="2-3 Months" x-model="form.timeline" class="mr-4 w-5 h-5 text-rose-600">
                                <div class="flex-1">
                                    <span class="font-medium text-lg">2-3 Months</span>
                                    <p class="text-gray-600 mt-1">Complex project requiring detailed development</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Step 4: Project Description -->
                    <div x-show="currentStep === 4" x-transition>
                        <h2 class="text-2xl font-bold mb-6">Tell me about your project</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Project Description</label>
                                <textarea name="description" x-model="form.description" rows="8" 
                                    class="w-full border-2 border-gray-200 rounded-lg p-4 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                    placeholder="Please describe your project in detail. Include:

- Main features and functionality
- Target audience or users
- Any specific requirements or constraints
- Reference websites or apps (if any)
- Goals you want to achieve

The more details you provide, the better I can understand your needs and provide accurate estimates."></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 5: Contact Information -->
                    <div x-show="currentStep === 5" x-transition>
                        <h2 class="text-2xl font-bold mb-6">Your Contact Information</h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                                <input type="text" name="name" x-model="form.name" required
                                    class="w-full border-2 border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                    placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" x-model="form.email" required
                                    class="w-full border-2 border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                    placeholder="john.doe@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number (with country code)</label>
                                <input type="tel" name="phone" x-model="form.phone"
                                    class="w-full border-2 border-gray-200 rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                    placeholder="+1 234 567 8900">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <div class="flex justify-between mt-8">
                        <button type="button" @click="previousStep()" x-show="currentStep > 1"
                            class="px-6 py-3 border-2 border-gray-300 rounded-lg hover:bg-gray-50 transition font-semibold">
                            Previous
                        </button>
                        <button type="button" @click="nextStep()" x-show="currentStep < 5"
                            class="px-6 py-3 bg-rose-600 text-white rounded-lg hover:bg-rose-700 transition font-semibold ml-auto">
                            Next Step
                        </button>
                        <button type="submit" x-show="currentStep === 5"
                            class="px-6 py-3 bg-rose-600 text-white rounded-lg hover:bg-rose-700 transition font-semibold">
                            Submit Project Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
function leadFormStore() {
    return {
        currentStep: 1,
        form: {
            project_type: '',
            budget: '',
            timeline: '',
            description: '',
            name: '',
            email: '',
            phone: ''
        },
        nextStep() {
            if (this.canProceed()) {
                this.currentStep++;
            }
        },
        previousStep() {
            this.currentStep--;
        },
        canProceed() {
            if (this.currentStep === 1) return this.form.project_type !== '';
            if (this.currentStep === 2) return this.form.budget !== '';
            if (this.currentStep === 3) return this.form.timeline !== '';
            if (this.currentStep === 4) return true; // Description is optional
            if (this.currentStep === 5) return this.form.name !== '' && this.form.email !== '';
            return false;
        },
        submitForm() {
            if (!this.canProceed()) return;

            this.$refs.leadForm.submit();
        }
    }
}
</script>
@endsection
