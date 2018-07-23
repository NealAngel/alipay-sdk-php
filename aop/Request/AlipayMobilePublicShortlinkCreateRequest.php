<?php
/**
 * ALIPAY API: alipay.mobile.public.shortlink.create request
 *
 * @author auto create
 * @since  1.0, 2016-07-29 19:58:48
 */
namespace Alipay\Request;

class AlipayMobilePublicShortlinkCreateRequest extends AbstractAlipayRequest
{
    /**
     * json串，<a href="https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7386797.0.0.pGdb8h&treeId=53&articleId=103491&docType=1">详情请见</a>
     **/
    private $bizContent;
    private $apiParas = array();
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }
    public function getBizContent()
    {
        return $this->bizContent;
    }
}
