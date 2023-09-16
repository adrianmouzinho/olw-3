<x-app-layout>
    <div class="bg-zinc-900">
        <div class="fixed top-0 left-0 hidden lg:block h-full w-1/2 bg-zinc-900" aria-hidden="true"></div>
        <div class="fixed top-0 right-0 hidden lg:block h-full w-1/2 bg-zinc-800" aria-hidden="true"></div>

        <div class="relative w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
            <section
                aria-label="summary-heading"
                class="lg:order-2 py-10 px-10 text-zinc-100"
            >
                <h2 class="font-bold mb-6">Resumo do pedido</h2>

                <x-checkout.product-list>
                    <x-checkout.product-item
                        name="produto 1"
                        price="120,00"
                        image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfEgxYVAcUTgSVWTxcjRH6f9TSPQ24BiowLw&usqp=CAU"
                        :features="[
                            'Branco e preto',
                            'M/G',
                        ]"
                    />
                </x-checkout.product-list>

                <div class="py-6 space-y-6 border-t border-zinc-700">
                    <x-checkout.summary-item
                        title="Subtotal"
                        value="120,50"
                    />
                    <x-checkout.summary-item
                        title="Frete"
                        value="25,50"
                    />
                    <x-checkout.summary-item
                        title="Taxas"
                        value="0,00"
                    />
                    <x-checkout.summary-item
                        title="Total"
                        value="220,00"
                        :is-last="true"
                    />
                </div>
            </section>

            <section
                aria-label="payment-and-shipping-heading"
                class="py-10 px-10 text-zinc-100"
            >
                <form action="" class="space-y-6">
                    <fieldset class="border border-zinc-700 p-4 rounded-lg">
                        <legend class="mb-1">Informação de contato</legend>

                        <div class="space-y-2">
                            <x-input-label for="email">Endereço de e-mail</x-input-label>
                            <x-text-input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="Informe seu e-mail"
                                autocomplete="email"
                            />
                        </div>
                    </fieldset>

                    <fieldset class="border border-zinc-700 p-4 rounded-lg">
                        <legend class="mb-1">Detalhes do pagamento</legend>

                        <div class="space-y-2">
                            <x-input-label for="card-number">Número do cartão</x-input-label>
                            <x-text-input
                                type="text"
                                name="card-number"
                                id="card-number"
                                placeholder="Informe o número do cartão"
                            />
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center gap-4 mt-4">
                            <div class="space-y-2 flex-1">
                                <x-input-label for="expiration-date">Data de expiração (MM/YY)</x-input-label>
                                <x-text-input
                                    type="text"
                                    name="expiration-date"
                                    id="expiration-date"
                                    placeholder="Informe a data de expiração do cartão"
                                />
                            </div>

                            <div class="space-y-2">
                                <x-input-label for="cvc">CVC</x-input-label>
                                <x-text-input
                                    type="number"
                                    name="cvc"
                                    id="cvc"
                                    placeholder="Informe o CVC do cartão"
                                />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="border border-zinc-700 p-4 rounded-lg">
                        <legend class="mb-1">Endereço</legend>

                        <div class="space-y-2">
                            <x-input-label for="street">Rua</x-input-label>
                            <x-text-input
                                type="text"
                                name="street"
                                id="street"
                                placeholder="Informe a rua"
                            />
                        </div>

                        <div class="grid grid-rows-3 grid-cols-1 md:grid-rows-1 md:grid-cols-3 gap-4 mt-4">
                            <div class="space-y-2 flex-1">
                                <x-input-label for="city">Cidade</x-input-label>
                                <x-text-input
                                    type="text"
                                    name="city"
                                    id="city"
                                    placeholder="Informe o cidade"
                                />
                            </div>
                            <div class="space-y-2 flex-1">
                                <x-input-label for="state">Estado</x-input-label>
                                <x-text-input
                                    type="text"
                                    name="state"
                                    id="state"
                                    placeholder="Informe o estado"
                                />
                            </div>
                            <div class="space-y-2 flex-1">
                                <x-input-label for="zipcode">CEP</x-input-label>
                                <x-text-input
                                    type="text"
                                    name="zipcode"
                                    id="zipcode"
                                    placeholder="Informe o CEP"
                                />
                            </div>
                        </div>
                    </fieldset>

                    <div class="border-t border-zinc-700 pt-6">
                        <button class="block ml-auto bg-pink-600 font-bold text-white px-3 py-2 rounded-md hover:bg-pink-700 transition">Finalizar compra</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
