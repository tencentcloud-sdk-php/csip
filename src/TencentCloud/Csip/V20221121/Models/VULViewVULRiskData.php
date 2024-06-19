<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 漏洞视角的漏洞风险对象
 *
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method integer getNoHandleCount() 获取影响资产
 * @method void setNoHandleCount(integer $NoHandleCount) 设置影响资产
 * @method string getLevel() 获取风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method void setLevel(string $Level) 设置风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method integer getAffectAssetCount() 获取影响资产数量
 * @method void setAffectAssetCount(integer $AffectAssetCount) 设置影响资产数量
 * @method string getRiskId() 获取风险ID
 * @method void setRiskId(string $RiskId) 设置风险ID
 * @method string getFrom() 获取扫描来源，具体看接口返回枚举类型
 * @method void setFrom(string $From) 设置扫描来源，具体看接口返回枚举类型
 * @method string getIndex() 获取前端索引
 * @method void setIndex(string $Index) 设置前端索引
 * @method string getVULType() 获取漏洞类型
 * @method void setVULType(string $VULType) 设置漏洞类型
 * @method string getVULName() 获取漏洞名
 * @method void setVULName(string $VULName) 设置漏洞名
 * @method string getCVE() 获取cve
 * @method void setCVE(string $CVE) 设置cve
 * @method string getPayload() 获取漏洞payload
 * @method void setPayload(string $Payload) 设置漏洞payload
 * @method string getAppName() 获取漏洞影响组件
 * @method void setAppName(string $AppName) 设置漏洞影响组件
 * @method string getAppVersion() 获取漏洞影响版本
 * @method void setAppVersion(string $AppVersion) 设置漏洞影响版本
 * @method string getVULURL() 获取风险点
 * @method void setVULURL(string $VULURL) 设置风险点
 * @method string getNick() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNick(string $Nick) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEMGCVulType() 获取应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEMGCVulType(integer $EMGCVulType) 设置应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCVSS() 获取CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVSS(float $CVSS) 设置CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPCMGRId() 获取PCMGRId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPCMGRId(string $PCMGRId) 设置PCMGRId
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVulTag() 获取漏洞标签。搜索时应急 必修传参VulTag=SuggestRepair/EMGCVul
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulTag(array $VulTag) 设置漏洞标签。搜索时应急 必修传参VulTag=SuggestRepair/EMGCVul
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisclosureTime() 获取漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisclosureTime(string $DisclosureTime) 设置漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackHeat() 获取攻击热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackHeat(integer $AttackHeat) 设置攻击热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSuggest() 获取是否必修漏洞1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSuggest(integer $IsSuggest) 设置是否必修漏洞1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHandleTaskId() 获取处置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHandleTaskId(string $HandleTaskId) 设置处置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineSource() 获取引擎来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineSource(string $EngineSource) 设置引擎来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulRiskId() 获取新的漏洞风险id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulRiskId(string $VulRiskId) 设置新的漏洞风险id
注意：此字段可能返回 null，表示取不到有效值。
 */
class VULViewVULRiskData extends AbstractModel
{
    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var integer 影响资产
     */
    public $NoHandleCount;

    /**
     * @var string 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     */
    public $Level;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var integer 影响资产数量
     */
    public $AffectAssetCount;

    /**
     * @var string 风险ID
     */
    public $RiskId;

    /**
     * @var string 扫描来源，具体看接口返回枚举类型
     */
    public $From;

    /**
     * @var string 前端索引
     */
    public $Index;

    /**
     * @var string 漏洞类型
     */
    public $VULType;

    /**
     * @var string 漏洞名
     */
    public $VULName;

    /**
     * @var string cve
     */
    public $CVE;

    /**
     * @var string 漏洞payload
     */
    public $Payload;

    /**
     * @var string 漏洞影响组件
     */
    public $AppName;

    /**
     * @var string 漏洞影响版本
     */
    public $AppVersion;

    /**
     * @var string 风险点
     */
    public $VULURL;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nick;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EMGCVulType;

    /**
     * @var float CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVSS;

    /**
     * @var string PCMGRId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PCMGRId;

    /**
     * @var array 漏洞标签。搜索时应急 必修传参VulTag=SuggestRepair/EMGCVul
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulTag;

    /**
     * @var string 漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisclosureTime;

    /**
     * @var integer 攻击热度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackHeat;

    /**
     * @var integer 是否必修漏洞1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSuggest;

    /**
     * @var string 处置任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HandleTaskId;

    /**
     * @var string 引擎来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineSource;

    /**
     * @var string 新的漏洞风险id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulRiskId;

    /**
     * @param string $Port 端口
     * @param integer $NoHandleCount 影响资产
     * @param string $Level 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     * @param string $Component 组件
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param integer $AffectAssetCount 影响资产数量
     * @param string $RiskId 风险ID
     * @param string $From 扫描来源，具体看接口返回枚举类型
     * @param string $Index 前端索引
     * @param string $VULType 漏洞类型
     * @param string $VULName 漏洞名
     * @param string $CVE cve
     * @param string $Payload 漏洞payload
     * @param string $AppName 漏洞影响组件
     * @param string $AppVersion 漏洞影响版本
     * @param string $VULURL 风险点
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 用户appid
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EMGCVulType 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CVSS CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PCMGRId PCMGRId
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VulTag 漏洞标签。搜索时应急 必修传参VulTag=SuggestRepair/EMGCVul
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisclosureTime 漏洞披露时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackHeat 攻击热度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSuggest 是否必修漏洞1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HandleTaskId 处置任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineSource 引擎来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulRiskId 新的漏洞风险id
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("NoHandleCount",$param) and $param["NoHandleCount"] !== null) {
            $this->NoHandleCount = $param["NoHandleCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("VULURL",$param) and $param["VULURL"] !== null) {
            $this->VULURL = $param["VULURL"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PCMGRId",$param) and $param["PCMGRId"] !== null) {
            $this->PCMGRId = $param["PCMGRId"];
        }

        if (array_key_exists("VulTag",$param) and $param["VulTag"] !== null) {
            $this->VulTag = $param["VulTag"];
        }

        if (array_key_exists("DisclosureTime",$param) and $param["DisclosureTime"] !== null) {
            $this->DisclosureTime = $param["DisclosureTime"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("HandleTaskId",$param) and $param["HandleTaskId"] !== null) {
            $this->HandleTaskId = $param["HandleTaskId"];
        }

        if (array_key_exists("EngineSource",$param) and $param["EngineSource"] !== null) {
            $this->EngineSource = $param["EngineSource"];
        }

        if (array_key_exists("VulRiskId",$param) and $param["VulRiskId"] !== null) {
            $this->VulRiskId = $param["VulRiskId"];
        }
    }
}
