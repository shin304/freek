<x-app-layout title="Automation">
    <div class="markup">
        <h1>Automation</h1>

        <p>
            You can help me test automations, by entering your email address here. You will enter <a href="https://twitter.com/freekmurze/status/1371467273366609921">this automation</a> and get two or three mails.
        </p>
        <p>
            I won't share your email with anyone, and after the test I will delete it from the database.
        </p>

        <form
            action="{{ route('automation.subscribe') }}"
            method="post"
            accept-charset="utf-8"
            class="flex flex-col md:flex-row items-stretch {{ $class ?? '' }}"
        >
            @csrf
            @honeypot
            <input class="mb-2 md:mb-0" type="email" autocomplete="off" id="email" name="email"
                   placeholder="Your e-mail address" aria-label="E-mail" required>

            <input type="submit" name="submit" id="submit" value="Submit"
                   class="px-3 py-2 text-sm text-white bg-yellow-500 font-semibold border-t-3 border-b-3 border-yellow-700 border-t-transparent">

        </form>

        @error('email')
        <div
            class="mt-2 py-2 px-2 flex-1 bg-red-500 focus:outline-none md:mb-0 text-white text-2xs">{{ $message }}</div>
        @enderror

    </div>
</x-app-layout>
