@php $classes = 'single-page'; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('Shipping Policy'))

@section('content')
<main class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-gray-800">
        <h1 class="text-4xl font-bold mb-4 text-gray-900">Shipping Policy</h1>
        <p class="mb-6 text-lg leading-relaxed">
            This shipping policy explains how Maa Dharitri Craft operates its shipping procedures and how we strive to meet your expectations with every order. Whether you’re a first-time buyer or a returning customer, we want to ensure that your experience with us is smooth and satisfactory, right from placing your order to the moment it arrives at your doorstep.
        </p>
        <p class="mb-10 text-lg leading-relaxed">
            Please read this shipping policy together with our 
            <a href="https://mdterracottacraftproducer.com/terms-and-conditions" class="text-blue-600 underline hover:text-blue-800 transition">terms and conditions</a> 
            to familiarize yourself with the rest of our general guidelines.
        </p>

        <div class="bg-gray-100 p-6 rounded-xl mb-10">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Table of Contents</h2>
            <ol class="list-decimal list-inside space-y-2 text-base">
                <li>
                    <a href="#shipping-and-delivery-options" class="text-blue-600 hover:underline">Shipping and Delivery Options</a>
                    <ol class="list-disc list-inside ml-5 space-y-1">
                        <li><a href="#flat-rate-shipping" class="text-blue-600 hover:underline">Flat Rate Shipping</a></li>
                        <li><a href="#shipping-methods" class="text-blue-600 hover:underline">Shipping Methods</a></li>
                    </ol>
                </li>
                <li><a href="#delayed-orders" class="text-blue-600 hover:underline">Delayed Orders</a></li>
                <li><a href="#contact-information" class="text-blue-600 hover:underline">Contact Information</a></li>
            </ol>
        </div>

        <section id="shipping-and-delivery-options" class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Shipping and Delivery Options</h2>
            <p class="mb-6 text-lg leading-relaxed">We offer a variety of shipping options to suit the needs of our customers.</p>

            <h3 id="flat-rate-shipping" class="text-xl font-semibold text-gray-800 mb-2">Flat Rate Shipping</h3>
            <p class="mb-6 text-lg leading-relaxed">To ensure affordability and simplicity in our shipping process, we provide a flat rate shipping option.</p>

            <h3 id="shipping-methods" class="text-xl font-semibold text-gray-800 mb-2">Shipping Methods</h3>
            <p class="mb-4 text-lg leading-relaxed">We offer a variety of shipping options to suit the needs of our customers:</p>
            <ul class="list-disc list-inside space-y-2 text-lg mb-6">
                <li>Courier: 3–7 business days</li>
            </ul>
            <p class="text-lg leading-relaxed">In certain situations, we may collaborate with a third-party supplier who might handle our inventory and take charge of shipping your products.</p>
        </section>

        <section id="delayed-orders" class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Delayed Orders</h2>
            <p class="text-lg leading-relaxed mb-6">
                Unexpected delays can occur due to various reasons such as logistic challenges, inclement weather, high demand, or carrier issues. We are committed to handling these situations with transparency and efficiency.
            </p>
            <p class="text-lg leading-relaxed">
                In the event of a delay, our priority is to keep you informed. We will promptly notify you with updates on the status of your order and the expected new delivery time.
                Our goal is to provide clear and accurate information so you can plan accordingly.
            </p>
        </section>

        <section id="contact-information" class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">Contact Information</h2>
            <p class="text-lg leading-relaxed mb-4">
                If you have any questions or concerns regarding our shipping policy, we encourage you to contact us:
            </p>
            <ul class="list-disc list-inside text-lg mb-6">
                <li>
                    <a href="mailto:Maadharitriterracotta@gmail.com" class="text-blue-600 hover:underline">
                        Maadharitriterracotta@gmail.com
                    </a>
                </li>
            </ul>
            <p class="text-sm text-gray-500">This document was last updated on July 26, 2025.</p>
        </section>
    </div>
</main>


@endsection

@section('front-footer')

@endsection