<?php
/**
 * Created by PhpStorm.
 * User: BENGEOS-PC
 * Date: 3/12/2016
 * Time: 6:41 AM
 */

namespace SMS_API\Models;


class OutgoingSMS
{
    protected $id;
    protected $uuid;
    protected $campaign_id;
    protected $user_id;
    protected $sms_to;
    protected $sms_msg;
    protected $created;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return mixed
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * @param mixed $campaign_id
     */
    public function setCampaignId($campaign_id)
    {
        $this->campaign_id = $campaign_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getSmsTo()
    {
        return $this->sms_to;
    }

    /**
     * @param mixed $sms_to
     */
    public function setSmsTo($sms_to)
    {
        $this->sms_to = $sms_to;
    }

    /**
     * @return mixed
     */
    public function getSmsMsg()
    {
        return $this->sms_msg;
    }

    /**
     * @param mixed $sms_msg
     */
    public function setSmsMsg($sms_msg)
    {
        $this->sms_msg = $sms_msg;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function getArray(){
        return array(
            'id'=>$this->getId(),
            'uuid' => $this->getUuid(),
            'campaign_id' => $this->getCampaignId(),
            'user_id' => $this->getUserId(),
            'sms_to' => $this->getSmsMsg(),
            'sms_msg' => $this->getSmsTo(),
            'created' => $this->getCreated(),
        );
    }

}