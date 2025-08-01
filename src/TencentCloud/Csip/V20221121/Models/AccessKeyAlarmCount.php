<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问密钥告警数量
 *
 * @method integer getID() 获取访问密钥的ID
 * @method void setID(integer $ID) 设置访问密钥的ID
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method integer getAlarmCount() 获取告警数量
 * @method void setAlarmCount(integer $AlarmCount) 设置告警数量
 */
class AccessKeyAlarmCount extends AbstractModel
{
    /**
     * @var integer 访问密钥的ID
     */
    public $ID;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var integer 告警数量
     */
    public $AlarmCount;

    /**
     * @param integer $ID 访问密钥的ID
     * @param string $AccessKey 访问密钥
     * @param integer $AlarmCount 告警数量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }
    }
}
