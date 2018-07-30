<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Services\ShippingManager;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart;
    use ShippingManager;

    public function __construct(\Gloudemans\Shoppingcart\Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $cart = $this->cart->content();
        $coupon = session()->has('coupon') ? session('coupon') : null;
        return view('frontend.modules.cart.index', compact('cart', 'coupon'));
    }


    public function addItem(Request $request)
    {
        $validator = validator($request->all(),
            [
                'product_id' => 'required|exists:products,id',
                'color_id' => 'required|exists:colors,id',
                'size_id' => 'required|exists:sizes,id',
                'qty' => 'required|integer|min:1',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = Product::whereId($request->product_id)->first();

        $productAttribute = ProductAttribute::where([
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'product_id' => $request->product_id
        ])->with('size', 'color')->first();

        $this->cart->add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
            [
                'size_id' => $productAttribute->size_id,
                'color_id' => $productAttribute->color_id,
                'sizeName' => $productAttribute->sizeName,
                'colorName' => $productAttribute->colorName,
                'product' => $product
            ]
        );
        return redirect()->back()->with('success', trans('message.item_added_to_cart'));
    }


    public function removeItem($id)
    {
        Cart::search(function ($item, $rowId) use ($id) {
            $item->id == $id ? Cart::remove($rowId) : null;
        });
        return redirect()->route('frontend.cart.index')->with('success', trans('message.item_removed'));
    }

    public function clearCart()
    {
        $this->cart->destroy();
        return redirect()->home()->with('success', trans('message.cart_destroyed'));
    }

    public function checkout(Request $request)
    {
        $validate = validator($request->all(), [
            'country_id' => 'required|exists:countries,id',
            'area' => 'required_with:country_id'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        $country = Country::whereId(request()->country_id)->first();
        // check cart itmes before move to checkout
        // 1- check if each item is shipment_availability true
        // 2- check in case of kuwait === Home_deliver_availability for each item
        // 3 - if kuwait check home_deliever_minimum_charnge for the whole cart
        // 4- also have to make double check if the qty < 0

        $this->checkCartBeforeCheckOut($country);

        $cartWeight = $this->cart->content()->pluck('options.product')->sum('weight');
        $shippingCost = rand(1,15);
//        $shippingCost = $this->calculateCost($cartWeight, $request->country_id, $request->area);
        $area = request()->area;
        $cart = $this->cart->content();
        return view('frontend.modules.checkout.index', compact('shippingCost', 'cartWeight', 'cart', 'country', 'area'));
    }

    public function applyCoupon(Request $request)
    {
        $validate = validator($request->all(), [
            'code' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }
        $coupon = Coupon::active()->where(['code' => $request->code, 'consumed' => false])
            ->where('due_date', '>=', Carbon::now())
            ->where('minimum_charge', '<=', $this->cart->subTotal())
            ->first();
        if ($coupon) {
            session()->put('coupon', $coupon);
            return redirect()->back()->with('success', trans('message.coupon_shall_be_applied'));
        } else {
            session()->forget('coupon');
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }

    }

    public function checkCartBeforeCheckOut()
    {
        return true;
    }

}
// request

/*<?xml version="1.0" encoding="UTF-8" standalone="no"?><p:DCTRequest xmlns:p="http://www.dhl.com" xmlns:p1="http://www.dhl.com/datatypes" xmlns:p2="http://www.dhl.com/DCTRequestdatatypes" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.dhl.com DCT-req.xsd ">
<!--  <GetQuote>-->
<!--    <Request>-->
<!--      <ServiceHeader>-->
<!--        <MessageTime>2002-08-20T11:28:56.000-08:00</MessageTime>-->
<!--        <MessageReference>1234567890123456789012345678901</MessageReference>-->
<!--            <SiteID>DServiceVal</SiteID>-->
<!--            <Password>testServVal</Password>-->
<!--      </ServiceHeader>-->
<!--    </Request>-->
<!--    <From>-->
<!--      <CountryCode>US</CountryCode>-->
<!--      <Postalcode>10001</Postalcode>-->
<!--    </From>-->
<!--    <BkgDetails>-->
<!--      <PaymentCountryCode>SG</PaymentCountryCode>-->
<!--      <Date>2018-07-27</Date>-->
<!--      <ReadyTime>PT10H21M</ReadyTime>-->
<!--      <ReadyTimeGMTOffset>+01:00</ReadyTimeGMTOffset>-->
<!--      <DimensionUnit>CM</DimensionUnit>-->
<!--      <WeightUnit>KG</WeightUnit>-->
<!--      <Pieces>-->
<!--        <Piece>-->
<!--          <PieceID>1</PieceID>-->
<!--          <Height>1</Height>-->
<!--          <Depth>1</Depth>-->
<!--          <Width>1</Width>-->
<!--          <Weight>5.0</Weight>-->
<!--        </Piece>-->
<!--      </Pieces> -->
<!--	  <PaymentAccountNumber>CASHSIN</PaymentAccountNumber>	  -->
<!--      <IsDutiable>N</IsDutiable>-->
<!--      <NetworkTypeCode>AL</NetworkTypeCode>-->
<!--	  <QtdShp>-->
<!--		 <GlobalProductCode>D</GlobalProductCode>-->
<!--	     <LocalProductCode>D</LocalProductCode>		-->
<!--	     <QtdShpExChrg>-->
<!--            <SpecialServiceType>AA</SpecialServiceType>-->
<!--         </QtdShpExChrg>-->
<!--	  </QtdShp>-->
<!--    </BkgDetails>-->
<!--    <To>-->
<!--      <CountryCode>AU</CountryCode>-->
<!--      <Postalcode>2007</Postalcode>-->
<!--    </To>-->
<!--   <Dutiable>-->
<!--      <DeclaredCurrency>EUR</DeclaredCurrency>-->
<!--      <DeclaredValue>1.0</DeclaredValue>-->
<!--    </Dutiable>-->
<!--  </GetQuote>-->
<!--</p:DCTRequest>-->
// response
/*
<?xml version="1.0" encoding="UTF-8" standalone="no"?><res:DCTResponse xmlns:res='http://www.dhl.com' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation= 'http://www.dhl.com DCT-Response.xsd'>
    <GetQuoteResponse>
        <Response>
            <ServiceHeader>
                <MessageTime>2018-07-26T17:29:10.424+01:00</MessageTime>
                <MessageReference>1234567890123456789012345678901</MessageReference>
                <SiteID>DServiceVal</SiteID>
            </ServiceHeader>
        </Response>
        <BkgDetails>
            <OriginServiceArea>
                <FacilityCode>JR3</FacilityCode>
                <ServiceAreaCode>ZYP</ServiceAreaCode>
            </OriginServiceArea>
            <DestinationServiceArea>
                <FacilityCode>SSE</FacilityCode>
                <ServiceAreaCode>SYD</ServiceAreaCode>
            </DestinationServiceArea>
            <QtdShp>
                <GlobalProductCode>D</GlobalProductCode>
                <LocalProductCode>D</LocalProductCode>
                <ProductShortName>EXPRESS WORLDWIDE</ProductShortName>
                <LocalProductName>EXPRESS WORLDWIDE DOC</LocalProductName>
                <NetworkTypeCode>TD</NetworkTypeCode>
                <POfferedCustAgreement>N</POfferedCustAgreement>
                <TransInd>Y</TransInd>
                <PickupDate>2018-07-27</PickupDate>
                <PickupCutoffTime>PT20H</PickupCutoffTime>
                <BookingTime>PT19H</BookingTime>
                <CurrencyCode>SGD</CurrencyCode>
                <ExchangeRate>0.614077</ExchangeRate>
                <WeightCharge>439.410</WeightCharge>
                <WeightChargeTax>0.000</WeightChargeTax>
                <TotalTransitDays>3</TotalTransitDays>
                <PickupPostalLocAddDays>0</PickupPostalLocAddDays>
                <DeliveryPostalLocAddDays>0</DeliveryPostalLocAddDays>
                <PickupNonDHLCourierCode> </PickupNonDHLCourierCode>
                <DeliveryNonDHLCourierCode> </DeliveryNonDHLCourierCode>
                <DeliveryDate>2018-07-30</DeliveryDate>
                <DeliveryTime>PT23H59M</DeliveryTime>
                <DimensionalWeight>5.000</DimensionalWeight>
                <WeightUnit>KG</WeightUnit>
                <PickupDayOfWeekNum>5</PickupDayOfWeekNum>
                <DestinationDayOfWeekNum>1</DestinationDayOfWeekNum>
                <QtdShpExChrg>
                    <SpecialServiceType>AA</SpecialServiceType>
                    <LocalServiceType>AA</LocalServiceType>
                    <GlobalServiceName>SATURDAY DELIVERY</GlobalServiceName>
                    <LocalServiceTypeName>SATURDAY DELIVERY</LocalServiceTypeName>
                    <SOfferedCustAgreement>N</SOfferedCustAgreement>
                    <ChargeCodeType>XCH</ChargeCodeType>
                    <CurrencyCode>SGD</CurrencyCode>
                    <ChargeValue>68.000</ChargeValue>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>68.000</ChargeValue>
                        <CurrencyCode>SGD</CurrencyCode>
                        <CurrencyRoleTypeCode>BILLC</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>68.000</ChargeValue>
                        <CurrencyCode>SGD</CurrencyCode>
                        <CurrencyRoleTypeCode>PULCL</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>41.760</ChargeValue>
                        <ChargeTaxRate>0.000</ChargeTaxRate>
                        <CurrencyCode>EUR</CurrencyCode>
                        <CurrencyRoleTypeCode>BASEC</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                </QtdShpExChrg>
                <QtdShpExChrg>
                    <SpecialServiceType>FF</SpecialServiceType>
                    <LocalServiceType>FF</LocalServiceType>
                    <GlobalServiceName>FUEL SURCHARGE</GlobalServiceName>
                    <LocalServiceTypeName>FUEL SURCHARGE</LocalServiceTypeName>
                    <SOfferedCustAgreement>N</SOfferedCustAgreement>
                    <ChargeCodeType>SCH</ChargeCodeType>
                    <CurrencyCode>SGD</CurrencyCode>
                    <ChargeValue>78.650</ChargeValue>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>78.650</ChargeValue>
                        <CurrencyCode>SGD</CurrencyCode>
                        <CurrencyRoleTypeCode>BILLC</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>78.650</ChargeValue>
                        <CurrencyCode>SGD</CurrencyCode>
                        <CurrencyRoleTypeCode>PULCL</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                    <QtdSExtrChrgInAdCur>
                        <ChargeValue>48.300</ChargeValue>
                        <ChargeTaxRate>0.000</ChargeTaxRate>
                        <CurrencyCode>EUR</CurrencyCode>
                        <CurrencyRoleTypeCode>BASEC</CurrencyRoleTypeCode>
                    </QtdSExtrChrgInAdCur>
                </QtdShpExChrg>
                <PricingDate>2018-07-26</PricingDate>
                <ShippingCharge>586.060</ShippingCharge>
                <TotalTaxAmount>0.000</TotalTaxAmount>
                <QtdSInAdCur>
                    <CurrencyCode>SGD</CurrencyCode>
                    <CurrencyRoleTypeCode>BILLC</CurrencyRoleTypeCode>
                    <WeightCharge>439.410</WeightCharge>
                    <TotalAmount>586.060</TotalAmount>
                    <TotalTaxAmount>0.000</TotalTaxAmount>
                    <WeightChargeTax>0.000</WeightChargeTax>
                </QtdSInAdCur>
                <QtdSInAdCur>
                    <CurrencyCode>SGD</CurrencyCode>
                    <CurrencyRoleTypeCode>PULCL</CurrencyRoleTypeCode>
                    <WeightCharge>439.410</WeightCharge>
                    <TotalAmount>586.060</TotalAmount>
                    <TotalTaxAmount>0.000</TotalTaxAmount>
                    <WeightChargeTax>0.000</WeightChargeTax>
                </QtdSInAdCur>
                <QtdSInAdCur>
                    <ExchangeRate>0.614077</ExchangeRate>
                    <CurrencyCode>EUR</CurrencyCode>
                    <CurrencyRoleTypeCode>BASEC</CurrencyRoleTypeCode>
                    <WeightCharge>269.830</WeightCharge>
                    <TotalAmount>359.890</TotalAmount>
                    <TotalTaxAmount>0.000</TotalTaxAmount>
                    <WeightChargeTax>0.000</WeightChargeTax>
                </QtdSInAdCur>
            </QtdShp>
        </BkgDetails>
        <Srvs>
            <Srv>
                <GlobalProductCode>D</GlobalProductCode>
                <MrkSrv>
                    <LocalProductCode>D</LocalProductCode>
                    <ProductShortName>EXPRESS WORLDWIDE</ProductShortName>
                    <LocalProductName>EXPRESS WORLDWIDE DOC</LocalProductName>
                    <ProductDesc>EXPRESS WORLDWIDE DOC</ProductDesc>
                    <NetworkTypeCode>TD</NetworkTypeCode>
                    <POfferedCustAgreement>N</POfferedCustAgreement>
                    <TransInd>Y</TransInd>
                </MrkSrv>
                <MrkSrv>
                    <LocalServiceType>AA</LocalServiceType>
                    <GlobalServiceName>SATURDAY DELIVERY</GlobalServiceName>
                    <LocalServiceTypeName>SATURDAY DELIVERY</LocalServiceTypeName>
                    <SOfferedCustAgreement>N</SOfferedCustAgreement>
                    <ChargeCodeType>XCH</ChargeCodeType>
                    <MrkSrvInd>Y</MrkSrvInd>
                </MrkSrv>
                <MrkSrv>
                    <LocalServiceType>FF</LocalServiceType>
                    <GlobalServiceName>FUEL SURCHARGE</GlobalServiceName>
                    <LocalServiceTypeName>FUEL SURCHARGE</LocalServiceTypeName>
                    <SOfferedCustAgreement>N</SOfferedCustAgreement>
                    <ChargeCodeType>SCH</ChargeCodeType>
                    <MrkSrvInd>N</MrkSrvInd>
                </MrkSrv>
            </Srv>
        </Srvs>
    </GetQuoteResponse></res:DCTResponse><!-- ServiceInvocationId:20180726172909_97ed_66cf8961-a2a9-43c7-8df8-032b3885cba4 -->
