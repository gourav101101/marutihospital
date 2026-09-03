<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SiteSetting::firstOrCreate(
            ['id' => 1],
            [
                'hospital_name' => 'Maruti Multispeciality Hospital',
                'hospital_short_name' => 'Maruti Hospital',
                'phone_display' => '+91 99819 13232',
                'phone_href' => '+919981913232',
                'whatsapp_number' => '+919981913232', // User previously wanted 9827787080 for testing, but let's default to actual, they can change it in admin
                'email' => 'info@marutihospital.com',
                'address_line_1' => 'Vardhmaan Colony, B-21, Raisen Rd',
                'address_line_2' => 'Near Dada Ji Dham, Patel Nagar, Bhopal, Madhya Pradesh 462022',
                'working_hours' => 'Open 24 hours',
                'google_rating' => '4.7',
                'google_review_count' => 67,
                'maps_url' => 'https://www.google.com/maps?cid=13215272563962348505',
                'directions_url' => 'https://www.google.com/maps/dir/?api=1&destination=Maruti+Multispeciality+Hospital%2C+Vardhmaan+Colony%2C+B-21%2C+Raisen+Rd%2C+Bhopal%2C+Madhya+Pradesh+462022',
                'map_embed_url' => 'https://maps.google.com/maps?q=Maruti+Multispeciality+Hospital%2C+Vardhmaan+Colony%2C+B-21%2C+Raisen+Rd%2C+Bhopal%2C+Madhya+Pradesh+462022&output=embed',
                'outside_view_url' => 'https://www.google.com/maps/@?api=1&map_action=pano&pano=ZGsOl5__PGqCtMDkI-5sdA&heading=327.834&pitch=0&fov=100',
                'meta_description' => 'Maruti Hospital is a leading multispeciality hospital providing 24/7 emergency care and advanced medical treatments.',
                'facebook_url' => '',
                'instagram_url' => '',
                'twitter_url' => '',
                'youtube_url' => '',
                'show_announcement' => true,
                'announcement_text' => 'We are open 24/7 for emergency cases. Call us at +91 99819 13232.',
            ]
        );
    }
}
