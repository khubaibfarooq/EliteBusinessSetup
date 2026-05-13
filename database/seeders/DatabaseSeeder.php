<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Service;
use App\Models\FreeZone;
use App\Models\Testimonial;
use App\Models\Stat;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::updateOrCreate(
            ['email' => 'admin@elitebusiness.ae'],
            [
                'name' => 'Admin',
                'email' => 'admin@elitebusiness.ae',
                'password' => Hash::make('Admin@123'),
                'email_verified_at' => now(),
            ]
        );

        // Settings
        $settings = [
            'phone'      => '+971 52 845 5102',
            'whatsapp'   => '+971528455102',
            'email'      => 'info@elitebusiness.ae',
            'address'    => 'Office 123, Business Bay, Dubai, UAE',
            'hero_title' => 'Start Your Business in UAE with Experts',
            'hero_sub'   => 'Get 2 Years UAE Residence Visa & Complete Business Setup Solutions',
            'about_text' => 'Elite Business Setup Consultancy FZ-LLC is a UAE-based professional consultancy helping entrepreneurs and investors establish businesses with complete legal support. We provide fast, transparent, and reliable solutions across UAE Mainland, Freezone, and Offshore structures.',
            'meta_description' => 'Elite Business Setup Consultancy – UAE business setup, visa services, trade license, bank account opening, and more. Serving all nationalities.',
        ];
        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        // Quick Services
        $quickServices = [
            ['title' => 'Business Setup',        'icon' => 'building',    'category' => 'quick', 'sort_order' => 1],
            ['title' => 'Visa Services',          'icon' => 'passport',    'category' => 'quick', 'sort_order' => 2],
            ['title' => 'Bank Account Opening',   'icon' => 'bank',        'category' => 'quick', 'sort_order' => 3],
            ['title' => 'PRO Services',           'icon' => 'briefcase',   'category' => 'quick', 'sort_order' => 4],
            ['title' => 'Tax & VAT Services',     'icon' => 'calculator',  'category' => 'quick', 'sort_order' => 5],
            ['title' => 'Legal Services',         'icon' => 'scale',       'category' => 'quick', 'sort_order' => 6],
            ['title' => 'Golden Visa',            'icon' => 'star',        'category' => 'quick', 'sort_order' => 7],
            ['title' => 'Documentation Services','icon' => 'document',    'category' => 'quick', 'sort_order' => 8],
        ];
        foreach ($quickServices as $s) {
            Service::updateOrCreate(['title' => $s['title'], 'category' => 'quick'], $s);
        }

        // RAKEZ Services
        $rakezServices = [
            ['title' => 'Golden & Green Visa',   'icon' => '🌟', 'category' => 'RAKEZ', 'description' => 'Get a 10-year Golden Visa or Green Visa for you and your family. Perfect for entrepreneurs and investors looking for long-term residency in UAE.', 'sort_order' => 1],
            ['title' => 'Workers Protection',    'icon' => '🛡️', 'category' => 'RAKEZ', 'description' => 'Comprehensive workers protection insurance programme to safeguard your employees and meet UAE labor requirements.', 'sort_order' => 2],
            ['title' => 'Employment Visa',       'icon' => '💼', 'category' => 'RAKEZ', 'description' => 'Hassle-free employment visa processing for your staff. Complete documentation and government submission handled by our experts.', 'sort_order' => 3],
            ['title' => 'Student Visa',          'icon' => '🎓', 'category' => 'RAKEZ', 'description' => 'Support for student visa applications including institution verification, document preparation, and Emirates ID processing.', 'sort_order' => 4],
            ['title' => 'Dependent Visa',        'icon' => '👨‍👩‍👧', 'category' => 'RAKEZ', 'description' => 'Bring your family to UAE with our dependent visa services. We handle spouse, children, and parents visa applications.', 'sort_order' => 5],
            ['title' => 'Tourist Visa',          'icon' => '✈️', 'category' => 'RAKEZ', 'description' => 'Quick and easy tourist visa for visitors. Multiple entry options available for your convenience.', 'sort_order' => 6],
            ['title' => 'Employment Contract',   'icon' => '📝', 'category' => 'RAKEZ', 'description' => 'Official employment contract registration and labor contract submission to ensure compliance with UAE labor laws.', 'sort_order' => 7],
            ['title' => 'Other Services',        'icon' => '⚙️', 'category' => 'RAKEZ', 'description' => 'Additional RAKEZ services including business registration, permits, licenses, and government coordination.', 'sort_order' => 8],
        ];
        foreach ($rakezServices as $s) {
            Service::updateOrCreate(['title' => $s['title'], 'category' => 'RAKEZ'], $s);
        }

        // Free Zones
        $freeZones = [
            ['name' => 'Dubai Multi Commodities Centre',    'abbreviation' => 'DMCC',           'emirate' => 'Dubai',        'sort_order' => 1],
            ['name' => 'Dubai Silicon Oasis',               'abbreviation' => 'DSO',            'emirate' => 'Dubai',        'sort_order' => 2],
            ['name' => 'Dubai Airport Freezone',            'abbreviation' => 'DAFZA',          'emirate' => 'Dubai',        'sort_order' => 3],
            ['name' => 'Dubai Internet City',               'abbreviation' => 'DIC',            'emirate' => 'Dubai',        'sort_order' => 4],
            ['name' => 'Sharjah Media City',                'abbreviation' => 'Shams',          'emirate' => 'Sharjah',      'sort_order' => 5],
            ['name' => 'Ajman Free Zone',                   'abbreviation' => 'AFZ',            'emirate' => 'Ajman',        'sort_order' => 6],
            ['name' => 'Ras Al Khaimah Economic Zone',      'abbreviation' => 'RAKEZ',          'emirate' => 'RAK',          'sort_order' => 7],
            ['name' => 'Abu Dhabi Global Market',           'abbreviation' => 'ADGM',           'emirate' => 'Abu Dhabi',    'sort_order' => 8],
            ['name' => 'Fujairah Creative City',            'abbreviation' => 'FCC',            'emirate' => 'Fujairah',     'sort_order' => 9],
        ];
        foreach ($freeZones as $fz) {
            FreeZone::updateOrCreate(['abbreviation' => $fz['abbreviation']], $fz);
        }

        // Stats
        $stats = [
            ['label' => 'Global Partners',      'value' => '250', 'suffix' => '+', 'icon' => 'users',   'sort_order' => 1],
            ['label' => 'Years of Excellence',  'value' => '15',  'suffix' => '+', 'icon' => 'calendar','sort_order' => 2],
            ['label' => 'Successful Setups',    'value' => '5000','suffix' => '+','icon' => 'smile',   'sort_order' => 3],
        ];
        foreach ($stats as $stat) {
            Stat::updateOrCreate(['label' => $stat['label']], $stat);
        }

        // Testimonials
        $testimonials = [
            [
                'client_name'    => 'Dr. Julian Vane',
                'client_role'    => 'Managing Director',
                'client_company' => 'Vane Capital Partners',
                'review'         => 'Elite Business Setup provided an impeccable, high-level advisory service. Their attention to regulatory detail and swift execution set the standard for professional consulting in the UAE.',
                'rating'         => 5,
                'sort_order'     => 1,
            ],
            [
                'client_name'    => 'Elena Rossi',
                'client_role'    => 'Founder',
                'client_company' => 'Rossi Design Group',
                'review'         => 'A seamless and sophisticated experience. The team handled every bureaucratic nuance, allowing me to focus entirely on launching my brand. Truly elite service.',
                'rating'         => 5,
                'sort_order'     => 2,
            ],
            [
                'client_name'    => 'Marcus Sterling',
                'client_role'    => 'Executive Partner',
                'client_company' => 'Sterling Holdings',
                'review'         => 'Navigating UAE corporate law is complex, but the consultants here made it look effortless. Their deep market insights and proactive communication are invaluable.',
                'rating'         => 5,
                'sort_order'     => 3,
            ],
        ];
        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['client_name' => $t['client_name']], $t);
        }

        // FAQs
        $faqs = [
            ['question' => 'What is the minimum cost to set up a business in UAE?', 'answer' => 'The cost varies depending on the jurisdiction (Mainland, Freezone, or Offshore) and business activity. Freezone packages start from AED 5,750. Contact us for a free consultation and customized quote.', 'sort_order' => 1],
            ['question' => 'How long does it take to get a UAE trade license?', 'answer' => 'With our expert team, a Freezone license can be obtained in 2-5 working days, and a Mainland license in 7-14 working days depending on the activity type.', 'sort_order' => 2],
            ['question' => 'Can all nationalities apply for a UAE residence visa?', 'answer' => 'Yes! UAE residence visas are available to all nationalities. We handle the complete visa process including medical, biometrics, Emirates ID, and visa stamping.', 'sort_order' => 3],
            ['question' => 'What documents are required for business setup?', 'answer' => 'Typically a passport copy, passport photo, and completed application form. Depending on the activity, additional documents like educational certificates may be required. Our team will guide you through the exact requirements.', 'sort_order' => 4],
            ['question' => 'Do you assist with corporate bank account opening?', 'answer' => 'Yes, we provide full assistance with opening corporate bank accounts at leading UAE banks. We guide you on the required documents and the best bank for your business type.', 'sort_order' => 5],
        ];
        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
