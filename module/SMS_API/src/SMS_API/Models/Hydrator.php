<?php
/**
 * Created by PhpStorm.
 * User: BENGEOS-PC
 * Date: 3/12/2016
 * Time: 7:25 AM
 */

namespace SMS_API\Models;


class Hydrator
{
    public function Hydrate($Post,$DataType){
        if(is_array($Post)){
            if($DataType instanceof IncomingSMS){
                $Found = null;
                foreach($Post as $data){
                    $New_Data = new IncomingSMS();
                    $New_Data->setId(isset($data['id'])? intval($data['id']):null);
                    $New_Data->setSmsId(isset($data['sms_id'])? ($data['sms_id']):null);
                    $New_Data->setCampaignId(isset($data['campaign_id'])? $data['campaign_id']:null);
                    $New_Data->setSmsFrom(isset($data['sms_from'])? $data['sms_msg']:null);
                    $New_Data->setSmsTo(isset($data['sms_to'])? $data['sms_to']:null);
                    $New_Data->setCreated(isset($data['created'])? $data['created']:null);
                    $Found[] = $New_Data;
                }
                return $Found;
            }else if($DataType instanceof OutgoingSMS){
                $Found = null;
                foreach($Post as $data){
                    $New_Data = new OutgoingSMS();
                    $New_Data->setId(isset($data['id'])? intval($data['id']):null);
                    $New_Data->setUserId(isset($data['user_id'])? ($data['user_id']):null);
                    $New_Data->setCampaignId(isset($data['campaign_id'])? $data['campaign_id']:null);
                    $New_Data->setUuid(isset($data['uuid'])? $data['uuid']:null);
                    $New_Data->setSmsTo(isset($data['sms_to'])? $data['sms_to']:null);
                    $New_Data->setSmsMsg(isset($data['sms_msg'])? $data['sms_msg']:null);
                    $New_Data->setCreated(isset($data['created'])? $data['created']:null);
                    $Found[] = $New_Data;
                }
                return $Found;
            }
        }else{
            return null;
        }
    }
    public function Extract($Post,$Data_Type){
        if(is_array($Post)){
            if($Post instanceof IncomingSMS){
                $Found = null;
                foreach($Post as $data){
                    $New_Data = new IncomingSMS();
                    $New_Data->setId(isset($data['id'])? intval($data['id']):null);
                    $New_Data->setSmsId(isset($data['sms_id'])? ($data['sms_id']):null);
                    $New_Data->setCampaignId(isset($data['campaign_id'])? $data['campaign_id']:null);
                    $New_Data->setSmsFrom(isset($data['sms_from'])? $data['sms_msg']:null);
                    $New_Data->setSmsTo(isset($data['sms_to'])? $data['sms_to']:null);
                    $New_Data->setCreated(isset($data['created'])? $data['created']:null);
                    $Found[] = $New_Data->getArray();
                }
                return $Found;
            }else if($Post instanceof OutgoingSMS){
                $Found = null;
                foreach($Post as $data){
                    $New_Data = new OutgoingSMS();
                    $New_Data->setId(isset($data['id'])? intval($data['id']):null);
                    $New_Data->setUserId(isset($data['user_id'])? ($data['user_id']):null);
                    $New_Data->setCampaignId(isset($data['campaign_id'])? $data['campaign_id']:null);
                    $New_Data->setUuid(isset($data['uuid'])? $data['uuid']:null);
                    $New_Data->setSmsTo(isset($data['sms_to'])? $data['sms_to']:null);
                    $New_Data->setSmsMsg(isset($data['sms_msg'])? $data['sms_msg']:null);
                    $New_Data->setCreated(isset($data['created'])? $data['created']:null);
                    $Found[] = $New_Data->getArray();
                }
                return $Found;
            }
        }
    }

}