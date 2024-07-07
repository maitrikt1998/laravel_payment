<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop', 
                'description' => 'A high-performance laptop with the latest features.', 
                'image' => 'https://example.com/images/laptop.jpg', 
                'price' => 999.99
            ],
            [
                'name' => 'Backpack', 
                'description' => 'A durable and spacious backpack for daily use.', 
                'image' => 'https://example.com/images/backpack.jpg', 
                'price' => 49.99
            ],
            [
                'name' => 'Smartphone', 
                'description' => 'A cutting-edge smartphone with advanced capabilities.', 
                'image' => 'https://example.com/images/smartphone.jpg', 
                'price' => 799.99
            ],
            [
                'name' => 'Headphones', 
                'description' => 'Noise-cancelling headphones for an immersive audio experience.', 
                'image' => 'https://example.com/images/headphones.jpg', 
                'price' => 199.99
            ],
            [
                'name' => 'Camera', 
                'description' => 'A professional-grade camera for capturing stunning photos.', 
                'image' => 'https://example.com/images/camera.jpg', 
                'price' => 499.99
            ],
            [
                'name' => 'Watch', 
                'description' => 'A stylish and functional watch for everyday wear.', 
                'image' => 'https://example.com/images/watch.jpg', 
                'price' => 149.99
            ],
            [
                'name' => 'Tablet', 
                'description' => 'A versatile tablet for work and play.', 
                'image' => 'https://example.com/images/tablet.jpg', 
                'price' => 299.99
            ],
            [
                'name' => 'Gaming Console', 
                'description' => 'A powerful gaming console for endless entertainment.', 
                'image' => 'https://example.com/images/gaming_console.jpg', 
                'price' => 399.99
            ],
            [
                'name' => 'Fitness Tracker', 
                'description' => 'A fitness tracker to monitor your health and activity.', 
                'image' => 'https://example.com/images/fitness_tracker.jpg', 
                'price' => 99.99
            ],
            [
                'name' => 'Smart Home Device', 
                'description' => 'A smart home device to automate your living space.', 
                'image' => 'https://example.com/images/smart_home_device.jpg', 
                'price' => 129.99
            ],
            [
                'name' => 'Bluetooth Speaker', 
                'description' => 'A portable Bluetooth speaker with excellent sound quality.', 
                'image' => 'https://example.com/images/bluetooth_speaker.jpg', 
                'price' => 79.99
            ],
            [
                'name' => 'E-book Reader', 
                'description' => 'An e-book reader with a high-resolution display.', 
                'image' => 'https://example.com/images/ebook_reader.jpg', 
                'price' => 129.99
            ],
            [
                'name' => 'Drone', 
                'description' => 'A drone with a camera for capturing aerial footage.', 
                'image' => 'https://example.com/images/drone.jpg', 
                'price' => 299.99
            ],
            [
                'name' => 'Projector', 
                'description' => 'A high-definition projector for home theater experiences.', 
                'image' => 'https://example.com/images/projector.jpg', 
                'price' => 349.99
            ],
            [
                'name' => 'Wireless Charger', 
                'description' => 'A fast and convenient wireless charger.', 
                'image' => 'https://example.com/images/wireless_charger.jpg', 
                'price' => 39.99
            ],
            [
                'name' => 'Electric Kettle', 
                'description' => 'An electric kettle with quick boiling technology.', 
                'image' => 'https://example.com/images/electric_kettle.jpg', 
                'price' => 29.99
            ],
            [
                'name' => 'Blender', 
                'description' => 'A powerful blender for smoothies and soups.', 
                'image' => 'https://example.com/images/blender.jpg', 
                'price' => 59.99
            ],
            [
                'name' => 'Coffee Maker', 
                'description' => 'A coffee maker for brewing delicious coffee at home.', 
                'image' => 'https://example.com/images/coffee_maker.jpg', 
                'price' => 89.99
            ],
            [
                'name' => 'Air Purifier', 
                'description' => 'An air purifier to keep your home environment clean.', 
                'image' => 'https://example.com/images/air_purifier.jpg', 
                'price' => 129.99
            ],
            [
                'name' => 'Robot Vacuum', 
                'description' => 'A robot vacuum to automate your home cleaning.', 
                'image' => 'https://example.com/images/robot_vacuum.jpg', 
                'price' => 249.99
            ],
            [
                'name' => 'Smart Light Bulb', 
                'description' => 'A smart light bulb with adjustable brightness and color.', 
                'image' => 'https://example.com/images/smart_light_bulb.jpg', 
                'price' => 19.99
            ],
            [
                'name' => 'Electric Toothbrush', 
                'description' => 'An electric toothbrush for superior oral care.', 
                'image' => 'https://example.com/images/electric_toothbrush.jpg', 
                'price' => 49.99
            ],
            [
                'name' => 'Hair Dryer', 
                'description' => 'A powerful hair dryer with multiple settings.', 
                'image' => 'https://example.com/images/hair_dryer.jpg', 
                'price' => 39.99
            ],
            [
                'name' => 'Digital Thermometer', 
                'description' => 'A digital thermometer for accurate temperature readings.', 
                'image' => 'https://example.com/images/digital_thermometer.jpg', 
                'price' => 19.99
            ],
            [
                'name' => 'Electric Shaver', 
                'description' => 'An electric shaver for a smooth and comfortable shave.', 
                'image' => 'https://example.com/images/electric_shaver.jpg', 
                'price' => 69.99
            ],
            [
                'name' => 'Portable Hard Drive', 
                'description' => 'A portable hard drive with ample storage space.', 
                'image' => 'https://example.com/images/portable_hard_drive.jpg', 
                'price' => 79.99
            ],
            [
                'name' => 'Memory Card', 
                'description' => 'A high-speed memory card for your devices.', 
                'image' => 'https://example.com/images/memory_card.jpg', 
                'price' => 29.99
            ],
            [
                'name' => 'Action Camera', 
                'description' => 'An action camera for recording your adventures.', 
                'image' => 'https://example.com/images/action_camera.jpg', 
                'price' => 199.99
            ],
            [
                'name' => 'Smart Doorbell', 
                'description' => 'A smart doorbell with video capabilities.', 
                'image' => 'https://example.com/images/smart_doorbell.jpg', 
                'price' => 149.99
            ],
            [
                'name' => 'Water Bottle', 
                'description' => 'A reusable water bottle to stay hydrated on the go.', 
                'image' => 'https://example.com/images/water_bottle.jpg', 
                'price' => 24.99
            ],
            [
                'name' => 'Yoga Mat', 
                'description' => 'A comfortable yoga mat for your exercise routine.', 
                'image' => 'https://example.com/images/yoga_mat.jpg', 
                'price' => 29.99
            ],
            [
                'name' => 'Office Chair', 
                'description' => 'An ergonomic office chair for maximum comfort.', 
                'image' => 'https://example.com/images/office_chair.jpg', 
                'price' => 199.99
            ],
            [
                'name' => 'Desk Lamp', 
                'description' => 'A stylish desk lamp with adjustable brightness.', 
                'image' => 'https://example.com/images/desk_lamp.jpg', 
                'price' => 39.99
            ],
            [
                'name' => 'Wireless Mouse', 
                'description' => 'A precision wireless mouse for your computer.', 
                'image' => 'https://example.com/images/wireless_mouse.jpg', 
                'price' => 29.99
            ],
            [
                'name' => 'Keyboard', 
                'description' => 'A mechanical keyboard with customizable keys.', 
                'image' => 'https://example.com/images/keyboard.jpg', 
                'price' => 49.99
            ],
            [
                'name' => 'Monitor', 
                'description' => 'A high-resolution monitor for your computer.', 
                'image' => 'https://example.com/images/monitor.jpg', 
                'price' => 179.99
            ],
            [
                'name' => 'External Battery', 
                'description' => 'A portable external battery to charge your devices.', 
                'image' => 'https://example.com/images/external_battery.jpg', 
                'price' => 39.99
            ],
            [
                'name' => 'Flashlight', 
                'description' => 'A high-power flashlight for outdoor activities.', 
                'image' => 'https://example.com/images/flashlight.jpg', 
                'price' => 19.99
            ],
            [
                'name' => 'Camping Tent', 
                'description' => 'A durable camping tent for outdoor adventures.', 
                'image' => 'https://example.com/images/camping_tent.jpg', 
                'price' => 129.99
            ],
            [
                'name' => 'Sleeping Bag', 
                'description' => 'A warm and comfortable sleeping bag.', 
                'image' => 'https://example.com/images/sleeping_bag.jpg', 
                'price' => 79.99
            ],
            [
                'name' => 'Hiking Boots', 
                'description' => 'Rugged hiking boots for outdoor trekking.', 
                'image' => 'https://example.com/images/hiking_boots.jpg', 
                'price' => 99.99
            ],
            [
                'name' => 'Fitness Band', 
                'description' => 'A fitness band to track your workouts.', 
                'image' => 'https://example.com/images/fitness_band.jpg', 
                'price' => 59.99
            ],
            [
                'name' => 'Electric Scooter', 
                'description' => 'A fun and efficient electric scooter.', 
                'image' => 'https://example.com/images/electric_scooter.jpg', 
                'price' => 299.99
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'image' => $product['image'],
                'price' => $product['price'],
            ]);
        }
    }
}
