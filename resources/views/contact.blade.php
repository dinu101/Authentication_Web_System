@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div class="text-center mb-8">
            <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-full bg-purple-100 mb-4">
                <i class="fas fa-envelope text-purple-600 text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Contact Us
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Have questions or need support? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">
                    <i class="fas fa-paper-plane mr-2"></i>Send us a message
                </h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                            <input type="text" name="first_name" id="first_name" 
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                                   placeholder="John">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                            <input type="text" name="last_name" id="last_name" 
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                                   placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                               placeholder="john@example.com">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <select name="subject" id="subject" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="billing">Billing Question</option>
                            <option value="feature">Feature Request</option>
                            <option value="bug">Bug Report</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" 
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                                  placeholder="Tell us more about your inquiry..."></textarea>
                    </div>
                    <div>
                        <button type="submit" 
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6">
                <div class="bg-blue-50 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">
                        <i class="fas fa-info-circle mr-2"></i>Get in touch
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900">Address</h3>
                                <p class="text-sm text-gray-600">123 Main Street<br>City, State 12345<br>United States</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900">Phone</h3>
                                <p class="text-sm text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i class="fas fa-envelope text-purple-600"></i>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900">Email</h3>
                                <p class="text-sm text-gray-600">support@authapp.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <i class="fas fa-clock text-yellow-600"></i>
                                </div>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900">Business Hours</h3>
                                <p class="text-sm text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">
                        <i class="fas fa-question-circle mr-2"></i>Frequently Asked Questions
                    </h2>
                    <div class="space-y-4">
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">How do I reset my password?</h3>
                            <p class="text-sm text-gray-600">You can reset your password by clicking the "Forgot Password" link on the login page and following the instructions sent to your email.</p>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">How secure is my data?</h3>
                            <p class="text-sm text-gray-600">We use industry-standard encryption and security practices to protect your personal information and account data.</p>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Can I change my email address?</h3>
                            <p class="text-sm text-gray-600">Yes, you can update your email address in your profile settings. You'll need to verify the new email address.</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-2">How do I delete my account?</h3>
                            <p class="text-sm text-gray-600">You can delete your account from your profile page. Please note that this action is irreversible and will permanently remove all your data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 