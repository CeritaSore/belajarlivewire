@props([
    'action' => '#',
    'method' => 'POST'
])

<div>
    <form action="{{ $action }}" method="{{ $method }}" class="space-y-6">
        @csrf
        <div>
            <label class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Your name" required />
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="your@email.com" required />
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Subject</label>
            <input type="text" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Project inquiry" required />
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Your message..." required></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition shadow-lg shadow-blue-600/30">
            Send Message
        </button>
    </form>
</div>
