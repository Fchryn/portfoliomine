<!-- ======= pages/auth/newpass ======= -->

@extends('home')

@section('title', 'Change Password')

@section('konten')
    <div class="w-screen bg-slate-950">
        <main id="content" role="main" class="w-full h-screen max-w-md mx-auto p-6">
            <div class="mt-14 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot Password</h1>
                <p class="mt-2 text-sm bg-slate-400 rounded-lg text-center px-10">
                    Please create a new password that you don't use an any other site
                </p>
                </div>
        
                <div class="mt-4">
                <form id="forgotpassForm" class="flex flex-col gap-4 pb-4" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="grid gap-y-4">
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full"><input
                                class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                id="newPass" type="password" name="newPass" placeholder="Your old password"
                                required="">
                            </div> 
                        </div>
                        <div class="error-message" id="newPass-error"></div>
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full"><input
                                class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg"
                                id="ConfirmnewPass" type="password" name="ConfirmnewPass" placeholder="Your new password"
                                required="">
                            </div>
                        </div>
                        <div class="error-message" id="ConfirmnewPass-error"></div>
                        <div class="flex flex-col gap-2">
                            <button type="submit"
                                class="border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Change
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('newpassForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            let formData = new FormData(this);
            let data = {
                oldPass: formData.get('oldPass'),
                newPass: formData.get('newPass')
            };

            try {
                let response = await fetch('{{ route('api.newpass', ['id' => request()->id]) }}', {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });
                let result = await response.json();
                if (response.ok) {
                    window.location.href = result.redirect_url;
                } else {
                    //console.log(result.errors);
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


