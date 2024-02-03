@extends('layouts.app')

@section('title')
    Contact Support - Abstract
@endsection

@section('content')
    <header>
        @include('layouts._partials.navbar')
        <div class="bg-violet-100 w-full h-1/3 py-12">
            <h1 class="text-4xl font-semibold ml-12 sm:ml-20 md:ml-24 lg:ml-28 lg:text-6xl">Contact Support</h1>
        </div>
    </header>
    <main>
        <article class="bg-yellow-200 w-3/4 mx-auto py-4 pl-10 mt-16 rounded">
            <p class="font-semibold text-xl text-start">Support hours are Monday-Friday 05:00-18:00 Pacific Time. We observe all U.S. holidays.</p>
        </article>
        <article class="w-3/4 mx-auto mt-5">
            <p class="font-semibold text-xl">Unable to Sign in? <a class="underline hover:text-gray-400" href="#">Reach us here.</a></p>
        </article>
        <section class="w-3/4 mx-auto mt-5">
            <h1 class="font-semibold text-3xl mb-5">Contact support</h1>
            <article class="font-semibold text-xl">
                <ol class="grid grid-cols-1 gap-5">
                    <li>1. While asigned in to Abstract, select the icon.</li>
                    <p class="ml-8">. if you're in the Abstract web app, the ? icon is in the lower left corner.</p>
                    <p class="ml-8">. if you're in the Abstract desktop app, the ? icon is the upper right corner.</li>
                    <li>2. Select <strong>Contact Support.</strong></li>
                    <li>3. On the Contact Support page, choose the <strong>Topic</strong> you want to contact support about, write a <strong>Subject</strong> for your message, and enter a <strong>Description</strong>of your issue.</li>
                    <li>4. If you have files you want to give support such as bug reports or screenshots, click <strong>Browse files...</strong> and choose them from your computer.</li>
                    <li>5. When you're done, click <strong>Send to Support.</strong></li>
                </ol>
            </article>
        </section>
        <section class="w-3/4 mx-auto my-5">
            <h1 class="font-semibold text-3xl mb-5">Ask questions about subscriptions and billing</h1>
            <article class="bg-yellow-200 text-xl font-semibold py-4 pl-6 pr-3 rounded">
                <p>
                    Admins can manage and update billing information on behalf of their Organization directly from the <a class="underline hover:text-gray-400" href="#">Web app</a>,
                   inlcuding <a class="underline hover:text-gray-400" href="#">adding more Contributor seats</a>, <a class="underline hover:text-gray-400" href="#">Managing billing details</a>, and <a class="underline hover:text-gray-400" href="#">Locating invoices</a>
                </p>
            </article>
            <article class="font-semibold text-xl mt-5">
                <p>
                    For security purposes, Support can only assist with billing matters if you are and admin <strong>or</strong> can provide credit card
                    information to verify your identity. If you want to use card information to verify your identity, you need to provide:
                </p>
                <ul class="mt-5 pl-5">
                    <li>. The name on the credit card on file</li>
                    <li>. The last four digits of the card number</li>
                    <li>. The card expiration date</li>
                    <li>. A screenshot of the last charge that Abstract made to the card</li>
                </ul>
                <p class="mt-5">
                    If you aren't an admin and can't provide the card information mentioned above, <a class="underline hover:text-gray-400" href="#">Locate your admin</a> within the web or desktop
                    application. Have this person contact Support with our questions.
                </p>
            </article>
        </section>
        <section class="w-3/4 mx-auto mb-16">
            <h1 class="font-semibold text-3xl mb-5">Make a sales inquiry</h1>
            <article class="font-semibold text-xl">
                <p>
                    Are you a software reseller? Please <a class="underline hover:text-gray-400" href="#">get in touch with our Sales Team.</a>
                </p>
                <p>
                    If you're part of an Enterprise plan and want to discuss an upcoming renewal, please contact your customer succes manager directly.
                </p>
            </article>
        </section>
        @include('layouts._partials.footer')
    </main>

@endsection
