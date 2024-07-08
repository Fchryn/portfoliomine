<!-- ======= pages/contact/page ======= -->

@extends('home')

@section('konten')
    <div class="bg-slate-950 py-14" id="contact">
        <div class="text-center p-10">
            <h1 class="font-bold text-4xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-900 to-slate-400">Contact Me</h1>
            <h1 class="text-3xl text-white">To Find Out More</h1>
        </div>
        <form action="/contact" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 grid md:grid-cols-2 lg:grid-cols-2 gap-y-8 md:gap-x-8 md:gap-y-8 lg:gap-x-8 lg:gap-y-16">
                <div>
                    <p class="max-w-sm mt-4 mb-4 text-xl text-white text-justify">Have something to say? We are here to help. Fill up the
                        form or send email or call phone.</p>
                    <div class="flex items-center mt-2 space-x-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                            </path>
                        </svg>
                        <a href="/contact" class="text-lg text-white">fachryan@ee.student.pens.ac.id</a>
                    </div>
                    <div class="flex items-center mt-2 space-x-2 text-dark-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                            </path>
                        </svg>
                        <a href="https://wa.me/6281247580207/?text=urlencodedtext" class="text-lg text-white">+62 812-4758-0207</a>
                    </div>
                </div>
                <div>
                    <input type="checkbox" id="" class="hidden" style="display:none" name="botcheck">
                    <div class="mb-5">
                        <input type="text" placeholder="Full Name" autocomplete="false"
                            class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white rounded-md outline-none dark:placeholder:text-gray-200 dark:bg-gray-900 focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                            name="name">
                    </div>
                    <div class="mb-5">
                        <label for="email_address" class="sr-only">Email Address</label>
                        <input id="email_address" type="email" placeholder="Email Address" autocomplete="false"
                            class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white rounded-md outline-none dark:placeholder:text-gray-200 dark:bg-gray-900   focus:ring-4  border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                            name="email">
                    </div>
                    <div class="mb-5">
                        <label for="phone_number" class="sr-only">Phone Number</label>
                        <input id="phone_number" type="text" placeholder="Phone Number" autocomplete="false"
                            class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white rounded-md outline-none dark:placeholder:text-gray-200 dark:bg-gray-900   focus:ring-4  border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                            name="phone">
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Your Message"
                            class="w-full px-4 py-3 border-2 placeholder:text-gray-800 dark:text-white dark:placeholder:text-gray-200 dark:bg-gray-900   rounded-md outline-none  h-36 focus:ring-4  border-gray-300 focus:border-gray-600 ring-gray-100 dark:border-gray-600 dark:focus:border-white dark:ring-0"
                            name="message">
                        </textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-4 font-semibold text-white transition-colors bg-emerald-950 rounded-md hover:bg-yellow-950 hover:ring-yellow-950 focus:outline-none focus:ring-offset-2 focus:ring px-7">Send
                        Message
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

