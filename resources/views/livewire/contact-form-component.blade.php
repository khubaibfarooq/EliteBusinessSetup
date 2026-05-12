<div>
    @if($success)
    <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-8 rounded-2xl text-center">
        <div class="text-4xl mb-3">✅</div>
        <h3 class="font-heading font-black text-xl mb-2">Message Sent!</h3>
        <p class="text-sm">Thank you for reaching out. Our experts will contact you shortly.</p>
        <button wire:click="$set('success', false)" class="mt-6 text-green-700 font-bold text-xs uppercase tracking-widest border-b border-green-700">Send Another Message</button>
    </div>
    @else
    <form wire:submit.prevent="submit" class="space-y-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">First Name *</label>
                <input type="text" wire:model="first_name" required
                       class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all">
                @error('first_name') <span class="text-red-500 text-[10px] font-bold">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">Last Name *</label>
                <input type="text" wire:model="last_name" required
                       class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all">
                @error('last_name') <span class="text-red-500 text-[10px] font-bold">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
                <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">Email Address *</label>
                <input type="email" wire:model="email" required
                       class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all">
                @error('email') <span class="text-red-500 text-[10px] font-bold">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">Phone Number *</label>
                <input type="tel" wire:model="phone" required
                       class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all">
                @error('phone') <span class="text-red-500 text-[10px] font-bold">{{ $message }}</span> @enderror
            </div>
        </div>

        <div>
            <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">Subject</label>
            <select wire:model="subject" class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all">
                <option value="">Select an option</option>
                <option value="Business Setup">Business Setup</option>
                <option value="Visa Services">Visa Services</option>
                <option value="Bank Account">Bank Account Opening</option>
                <option value="Other">Other Inquiry</option>
            </select>
        </div>

        <div>
            <label class="block font-heading font-bold text-navy text-[10px] tracking-widest uppercase mb-1.5">Message *</label>
            <textarea wire:model="message" required rows="4"
                      class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-all resize-none"></textarea>
            @error('message') <span class="text-red-500 text-[10px] font-bold">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full btn-gold rounded-xl py-4 flex items-center justify-center gap-3">
            <span wire:loading.remove>🚀 Send Inquiry Now</span>
            <span wire:loading>⌛ Sending...</span>
        </button>
    </form>
    @endif
</div>
