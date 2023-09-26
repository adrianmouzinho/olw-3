<?php

namespace Database\Seeders;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Sku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($session_id = null): void
    {
        $orders = Order::factory()
                ->count(1)
                ->create([
                    'session_id' => $session_id ?? Str::uuid(),
                    'status' => OrderStatusEnum::CART,
                ]);

        $orders->each(function ($order) {
            $skus = Sku::with('product')->inRandomOrder()->take(random_int(1, 8))->get();

            $order->total = 0;

            $skus->each(function ($sku) use ($order) {
                $qtd = random_int(1, 3);

                $order->skus()->attach([$sku->id => [
                    'product' => $sku->product->toJson(),
                    'quantity' => $qtd,
                    'unitary_price' => $sku->price,
                ]]);

                $order->total += $sku->price * $qtd;
            });

            $order->save();
        });
    }
}
