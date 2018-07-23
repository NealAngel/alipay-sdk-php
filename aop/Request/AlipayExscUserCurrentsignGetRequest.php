<?php
/**
 * ALIPAY API: alipay.exsc.user.currentsign.get request
 *
 * @author auto create
 * @since  1.0, 2017-03-29 17:12:42
 */
namespace Alipay\Request;

class AlipayExscUserCurrentsignGetRequest extends AbstractAlipayRequest
{
    /**
     * 支付宝 cif的accountNo 格式：支付宝userId+0156
     **/
    private $alipayId;
    private $apiParas = array();
    public function setAlipayId($alipayId)
    {
        $this->alipayId = $alipayId;
        $this->apiParas["alipay_id"] = $alipayId;
    }
    public function getAlipayId()
    {
        return $this->alipayId;
    }
}
