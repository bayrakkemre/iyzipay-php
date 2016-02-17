<?php
require_once('../IyzipayBootstrap.php');

IyzipayBootstrap::init();

$sample = new SubMerchantSample;
$sample->should_create_personal_sub_merchant();
$sample->should_create_private_sub_merchant();
$sample->should_create_limited_company_sub_merchant();
$sample->should_update_personal_sub_merchant();
$sample->should_update_private_sub_merchant();
$sample->should_update_limited_company_sub_merchant();
$sample->should_retrieve_sub_merchant();

class SubMerchantSample extends Sample
{
    public function should_create_personal_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantExternalId("B49224");
        $request->setSubMerchantType(Iyzipay\Model\SubMerchantType::PERSONAL);
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setContactName("Sabri Onur");
        $request->setContactSurname("Tüzün");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Sabri Onur'un mağazası");
        $request->setIban("TR180006200119000006672315");
        $request->setIdentityNumber("1234567890");

        # make request
        $response = Iyzipay\Model\SubMerchant::create($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_create_private_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantExternalId("B49224");
        $request->setSubMerchantType(Iyzipay\Model\SubMerchantType::PRIVATE_COMPANY);
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setTaxOffice("Kadıköy V.D.");
        $request->setLegalCompanyTitle("Sabri Onur Tüzün Bilişim Hizmetleri");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Sabri Onur'un mağazası");
        $request->setIban("TR180006200119000006672315");
        $request->setIdentityNumber("1234567890");

        # make request
        $response = Iyzipay\Model\SubMerchant::create($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_create_limited_company_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantExternalId("B49224");
        $request->setSubMerchantType(Iyzipay\Model\SubMerchantType::LIMITED_OR_JOINT_STOCK_COMPANY);
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setTaxOffice("Kadıköy V.D.");
        $request->setTaxNumber("9261877");
        $request->setLegalCompanyTitle("XYZ Bilişim Hizmetleri A.Ş.");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Sabri Onur'un mağazası");
        $request->setIban("TR180006200119000006672315");


        # make request
        $response = Iyzipay\Model\SubMerchant::create($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_update_personal_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantKey("subMerchantKey");
        $request->setIban("TR630006200027700006678204");
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setContactName("Hakan");
        $request->setContactSurname("Erdoğan");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Hakan Erdoğan'ın mağazası");
        $request->setIdentityNumber("31300864726");

        # make request
        $response = Iyzipay\Model\SubMerchant::update($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_update_private_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantKey("subMerchantKey");
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setTaxOffice("Kadıköy V.D.");
        $request->setLegalCompanyTitle("Hakan Erdoğan Bilişim Hizmetleri");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Hakan Erdoğan'ın mağazası");
        $request->setIban("TR180006200119000006672315");
        $request->setIdentityNumber("31300864726");

        # make request
        $response = Iyzipay\Model\SubMerchant::update($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_update_limited_company_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\UpdateSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantKey("subMerchantKey");
        $request->setAddress("Nidakule Göztepe İş Merkezi Merdivenköy Mah. Bora Sok. No:1 Kat:19 Bağımsız 70/73 Göztepe Kadıköy 34732");
        $request->setTaxOffice("Kadıköy V.D.");
        $request->setTaxNumber("9261877");
        $request->setLegalCompanyTitle("ABC Bilişim Hizmetleri A.Ş.");
        $request->setEmail("email@submerchantemail.com");
        $request->setGsmNumber("+905350000000");
        $request->setName("Hakan Erdoğan'ın mağazası");
        $request->setIban("TR180006200119000006672315");

        # make request
        $response = Iyzipay\Model\SubMerchant::update($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_retrieve_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\RetrieveSubMerchantRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubMerchantExternalId("AS49224");

        # make request
        $response = Iyzipay\Model\SubMerchant::retrieve($request, parent::options());

        # print response
        print_r($response);
    }
}