<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="tablec">
                <tr>
                    <td>{{ trans('general.product_name') }}</td>
                    <td>{{ trans('general.price') }}</td>
                    <td>{{ trans('general.qty') }}</td>
                    <td>{{ trans('general.subtotal') }}</td>
                </tr>
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item->options->product->name }}</td>
                        <td><p class="tabletextp">{{ $item->price }}</p></td>
                        <td>{{ $item->qty }}</td>
                        <td>
                            <p class="tabletextp">{{ session()->get('currency')->symbol }}  {{ $item->price }}</p>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">
                        <p class="tabletext">{{ trans('general.subtotal') }}</p>

                        <p class="tabletext">{{ trans('general.shipping_cost') }}</p>
                        <p class="tabletext">{{ trans('general.grand_total') }}</p>
                    </td>
                    <td>
                        <p class="tabletextp"><span id="subtotal" value="{{ getCartNetTotal() }}">{{ getCartNetTotal() }}</span>{{ trans('general.kd') }}
                            <input type="hidden" name="subtotal" value="{{ getCartNetTotal() }}">
                        </p>
                        <p class="tabletextp"><span id="finalDeliveryCost" class="shipping_cost" value=""></span> {{ trans('general.kd') }}
                            <input type="hidden" name="shipping_cost" value="" class="shipping_cost">
                        </p>
                        <p class="tabletextp">
                            <span id="grandtotal" value=""></span> {{ trans('general.kd') }}
                            <input type="hidden" name="grandtotal" class="grandtotal" value="">
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="button-check">
                            <div class="">
                                                                    <span class="left-btn"><a
                                                                                href="{{ route('frontend.cart.index') }}">{{ trans('general.forget_item_edit_here') }}</a></span>
                                <button type="submit"
                                        class="btn right-btn custom-button">
                                    {{ trans('general.continue') }}
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>