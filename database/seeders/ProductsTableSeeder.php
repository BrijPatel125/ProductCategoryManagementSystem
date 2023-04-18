namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => 'product1.jpg',
                'category_id' => 1,
                'price' => 9.99,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'product2.jpg',
                'category_id' => 2,
                'price' => 19.99,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => 'product3.jpg',
                'category_id' => 3,
                'price' => 29.99,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
