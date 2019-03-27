<?php

namespace WenboBao\EasyTDJ\TaoBao\Request;

use WenboBao\EasyTDJ\TaoBao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.sc.order.get request
 *
 * @author auto create
 * @since 1.0, 2018.06.13
 */
class TbkScOrderGetRequest
{
    /**
     * 需返回的字段列表
     **/
    private $fields;
    /**
     * 订单查询开始时间
     **/
    private $startTime;

    /**
     * 订单查询时间范围,单位:秒,最小60,最大600,默认60
     **/
    private $span;
    /**
     * 第几页，默认1，1~100
     **/
    private $pageNo;

    /**
     * 页大小，默认20，1~100
     **/
    private $pageSize;
    /**
     * 订单状态，1: 全部订单，3：订单结算，12：订单付款， 13：订单失效，14：订单成功； 订单查询类型为‘结算时间’时，只能查订单结算状态 默认值：1
     **/
    private $tkStatus;
    /**
     * 订单查询类型，创建时间“create_time”，或结算时间“settle_time” 默认值：settle_time
     **/
    private $orderQueryType;

    /**
     * 订单场景类型，默认为1，
     * 1:常规订单，
     * 2:渠道订单，
     * 3:会员运营订单，
     * 通过设置订单场景类型，媒体可以查询指定场景下的订单信息，
     * 例如不设置，或者设置为1，表示查询常规订单，常规订单包含淘宝客所有的订单数据，含渠道，及会员运营订单，但不包含3方分成，及维权订单
     **/
    private $orderScene;

    /**
     * 订单数据统计类型，1: 2方订单，2: 3方订单，如果不设置，或者设置为1，表示2方订单
     **/
    private $orderCountType;

    private $apiParas = array();

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["start_time"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setSpan($span)
    {
        $this->span = $span;
        $this->apiParas["span"] = $span;
    }

    public function getSpan()
    {
        return $this->span;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setTkStatus($tkStatus)
    {
        $this->tkStatus = $tkStatus;
        $this->apiParas["tk_status"] = $tkStatus;
    }

    public function getTkStatus()
    {
        return $this->tkStatus;
    }

    public function setOrderQueryType($orderQueryType)
    {
        $this->orderQueryType = $orderQueryType;
        $this->apiParas["order_query_type"] = $orderQueryType;
    }

    public function getOrderQueryType()
    {
        return $this->orderQueryType;
    }

    public function getOrderScene()
    {
        return $this->orderScene;
    }

    public function setOrderScene($orderScene)
    {
        $this->orderScene = $orderScene;
        $this->apiParas["order_scene"] = $orderScene;
    }

    public function getOrderCountType()
    {
        return $this->orderCountType;
    }

    public function setOrderCountType($orderCountType)
    {
        $this->orderCountType = $orderCountType;
        $this->apiParas["order_count_type"] = $orderCountType;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.sc.order.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->fields, "fields");
        RequestCheckUtil::checkNotNull($this->span, "span");
        RequestCheckUtil::checkNotNull($this->startTime, "startTime");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}