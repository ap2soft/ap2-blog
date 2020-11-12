<section id="contact" class="text-gray-400 py-16">
    <div class="container flex flex-col items-center">
        <h2 class="text-gray-400 text-2xl uppercase border-b-4 border-red-500">Contacts</h2>

        <div class="mt-6 max-w-lg w-full">
            <h1 class="text-gray-500 font-semibold tracking-wide text-center">
                Do you have a question
                <br class="sm:hidden">
                or want to work together?
            </h1>

            <div class="mt-4">
                {{-- TODO: Form validation --}}
                <form x-data="{ }" action="/contact" method="post" netlify>
                    <div class="flex flex-col justify-between space-y-4 sm:flex-row sm:space-x-6 sm:space-y-0">
                        <div class="flex-1">
                            <label for="name" class="sr-only">What is your name?</label>
                            <input type="text" name="name" id="name" placeholder="What is your name?" required="required"
                                class="p-2 w-full text-white tracking-wide bg-transparent border-b border-gray-500 hover:border-white focus:text-white focus:outline-none focus:border-white">
                        </div>

                        <div class="flex-1">
                            <label for="email" class="sr-only">Your email (so I could reply)</label>
                            <input type="email" name="email" id="email" placeholder="Your email (so I could reply)"
                                class="p-2 w-full text-white tracking-wide bg-transparent border-b border-gray-500 hover:border-white focus:outline-none focus:border-white">
                        </div>
                    </div>

                    <div>
                        <label for="message" class="sr-only">What is your question?</label>
                        <textarea name="message" id="message" placeholder="What is your question?" required="required"
                            class="mt-4 p-2 w-full h-auto text-white border-b border-gray-500 tracking-wide bg-transparent hover:border-white focus:border-white focus:outline-none"
                            style="max-height: 113px;"></textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" aria-label="Send"
                            class="px-4 py-2 | block w-full | text-gray-500 border border-gray-500 | hover:text-white hover:border-white | focus:outline-none focus:shadow-outline focus:text-white | sm:w-auto sm:mx-auto">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
