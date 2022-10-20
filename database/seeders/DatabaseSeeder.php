<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceLine;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteLine;
use App\Models\Receipt;
use App\Models\ReceiptLine;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Imad Machi',
            'email' => 'imadoxmachi@gmail.com',
            'phone' => '0628221956',
            'password' => 'test1234',
        ]);

        Settings::factory()->create([
            'user_id' => $user->id
        ]);

        // Customer::factory()->count(10)->create([
        //     'user_id' => $user->id
        // ]);

        // Product::factory()->count(10)->create();

        for ($i = 0; $i < 10; $i++) {
            $customer = Customer::factory()->create(['user_id' => $user->id]);
            $product = Product::factory()->create();
            $invoice = Invoice::factory()->create(['customer_id' => $customer->id,]);
            $quote = Quote::factory()->create(['customer_id' => $customer->id,]);
            $receipt = Receipt::factory()->create(['customer_id' => $customer->id,]);

            InvoiceLine::factory()->create([
                'invoice_id' => $invoice->id,
                'product_id' => $product->id,
            ]);
            // QuoteLine::factory()->create([
            //     'quote_id' => $quote->id,
            //     'product_id' => $product->id,
            // ]);
            // ReceiptLine::factory()->create([
            //     'receipt_id' => $receipt->id,
            //     'product_id' => $product->id,
            // ]);
        }
        // InvoiceLine::factory()->count(10)->create();
        // QuoteLine::factory()->count(10)->create();
    }
}
