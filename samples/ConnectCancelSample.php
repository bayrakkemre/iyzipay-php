<?php

require_once('../IyzipayBootstrap.php');
require_once('Sample.php');

IyzipayBootstrap::init();

$sample = new ConnectCancelSample();
$sample->should_cancel_payment();

class ConnectCancelSample
{
    public function should_cancel_payment()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateCancelRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setPaymentId("24");
        $request->setIp("127.0.0.1");

        # make request
        $connectCancel = \Iyzipay\Model\ConnectCancel::create($request, Sample::options());

        # print result
        print_r($connectCancel);
    }
}