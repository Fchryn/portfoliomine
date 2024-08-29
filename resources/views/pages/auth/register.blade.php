<!-- ======= pages/auth/register ======= -->

@extends('home')

@section('konten')
<div class="py-20 bg-slate-950">
    <div class="flex h-full items-center justify-center">
        <div
            class="rounded-lg border border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-900 flex-col flex h-full items-center justify-center sm:px-4">
            <div class="flex h-full flex-col justify-center gap-4 p-6">
                <div class="left-0 right-0 inline-block border-gray-200 px-2 py-2.5 sm:px-4">
                    <form id="registerForm" class="flex flex-col gap-4 pb-4" method="POST">
                        @csrf
                        <h1 class="mb-4 text-2xl font-bold  dark:text-white">Create Account</h1>
                        <div>
                            <div class="mb-1">
                                <label class="text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="username">Username</label>
                            </div>
                            <div class="flex w-full rounded-lg pt-1">
                                <div class="relative w-full"><input
                                        class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                        id="username" type="text" name="username" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="error-message" id="username-error"></div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <label class="text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="name">Name</label>
                            </div>
                            <div class="flex w-full rounded-lg pt-1">
                                <div class="relative w-full"><input
                                        class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                        id="name" type="text" name="name" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="error-message" id="name-error"></div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <label class="text-sm font-medium text-gray-900 dark:text-gray-300"
                                    for="email">Email</label>
                            </div>
                            <div class="flex w-full rounded-lg pt-1">
                                <div class="relative w-full"><input
                                        class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                        id="email" type="email" name="email" placeholder="email@example.com"
                                        required="">
                                </div>
                            </div>
                            <div class="error-message" id="email-error"></div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <label class="text-sm font-medium text-gray-900 dark:text-gray-300"
                                    data-testid="flowbite-label" for="password">Password</label>
                            </div>
                            <div class="flex w-full rounded-lg pt-1">
                                <div class="relative w-full"><input
                                        class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                        id="password" type="password" name="password" required="">
                                </div>
                            </div>
                            <div class="error-message" id="password-error"></div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <button type="submit"
                                class="border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Register
                                </span>
                            </button>
                        </div>
                        <div class="success-message" id="success-message"></div>
                    </form>
                    <div class="min-w-[270px]">
                        <div class="mt-4 text-center dark:text-gray-200">Already have an account?
                            <a class="text-blue-500 underline hover:text-blue-600" href="/login">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('registerForm').addEventListener('submit', async function(event) {
        event.preventDefault();
        let formData = new FormData(this);
        let data = {
            username: formData.get('username'),
            name: formData.get('name'),
            email: formData.get('email'),
            password: formData.get('password'),
        };
        
        try {
            let response = await fetch('{{ route('api.register') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            });

            let result = await response.json();
            if (response.ok) {
                window.location.href = '{{ route('login.view') }}';
            } else {
                console.log(result.errors);
                // Handle validation errors
                for (const [key, messages] of Object.entries(result.errors)) {
                    document.getElementById(`${key}-error`).textContent = messages.join(', ');
                }
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });
</script>
@endsection


