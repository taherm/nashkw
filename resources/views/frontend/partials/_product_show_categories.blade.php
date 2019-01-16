<hr class="page-divider small"/>
<table>
    <tr>
        <td class="title">{{ trans('general.categories') }}:</td>
        <td>
            @foreach($product->categories as $cat)
                <a href="{{ route('frontend.product.search',['category_id' => $cat->id]) }}">
                    {{ $cat->name }},
                </a>
            @endforeach
        </td>
    </tr>
    @if($product->sku)
        <tr>
            <td class="title">{{ trans('general.sku') }}:</td>
            <td>{{ $product->sku }}</td>
        </tr>
    @endif
    @if(!$product->tags->isEmpty())
        <tr>
            <td class="title">{{ trans("general.tags") }}:</td>
            <td>
                @foreach($product->tags as $tag)
                    <a href="{{ route('frontend.product.search',['tag_id' => $tag->id]) }}">
                        {{ $tag->slug }},
                    </a>
                @endforeach
            </td>
        </tr>
    @endif
    @if(!$product->brands->isEmpty())
        <tr>
            <td class="title">{{ trans("general.brands") }}:</td>
            <td>
                @foreach($product->brands as $brand)
                    <a href="{{ route('frontend.product.search',['brand_id' => $brand->id]) }}">
                        {{ $brand->slug }},
                    </a>
                @endforeach
            </td>
        </tr>
    @endif
</table>