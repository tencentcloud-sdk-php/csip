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
 * 主机资产信息

主机防护状态枚举，左边是常量，右边是显示
0：未安装
1：基础版防护中
2：普惠版防护中
3：专业版防护中
4：旗舰版防护中
5：已离线
6：已关机
 *
 * @method string getAssetId() 获取资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCWPStatus() 获取防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCWPStatus(integer $CWPStatus) 设置防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetCreateTime() 获取资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCreateTime(string $AssetCreateTime) 设置资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取私网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置私网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取vpc 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置vpc 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取appid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置appid信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailableArea() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableArea(string $AvailableArea) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCore() 获取是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCore(integer $IsCore) 设置是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceUuid() 获取uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceUuid(string $InstanceUuid) 设置uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceQUuid() 获取qquid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceQUuid(string $InstanceQUuid) 设置qquid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取os名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsName(string $OsName) 设置os名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionCount() 获取分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionCount(integer $PartitionCount) 设置分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCPUInfo() 获取cpu信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPUInfo(string $CPUInfo) 设置cpu信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPUSize() 获取cpu大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPUSize(integer $CPUSize) 设置cpu大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCPULoad() 获取cpu负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPULoad(string $CPULoad) 设置cpu负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemorySize() 获取内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemorySize(string $MemorySize) 设置内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemoryLoad() 获取内存负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryLoad(string $MemoryLoad) 设置内存负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskSize() 获取硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(string $DiskSize) 设置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskLoad() 获取硬盘负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskLoad(string $DiskLoad) 设置硬盘负载
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountCount() 获取账号数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountCount(string $AccountCount) 设置账号数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessCount() 获取进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessCount(string $ProcessCount) 设置进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppCount() 获取软件应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppCount(string $AppCount) 设置软件应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPortCount() 获取监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortCount(integer $PortCount) 设置监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttack() 获取网络攻击
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttack(integer $Attack) 设置网络攻击
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccess() 获取网络访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccess(integer $Access) 设置网络访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntercept() 获取网络拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntercept(integer $Intercept) 设置网络拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInBandwidth() 获取入向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInBandwidth(string $InBandwidth) 设置入向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutBandwidth() 获取出向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutBandwidth(string $OutBandwidth) 设置出向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInFlow() 获取入向累计流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInFlow(string $InFlow) 设置入向累计流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutFlow() 获取出向累计流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutFlow(string $OutFlow) 设置出向累计流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetWorkOut() 获取恶意主动外联
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetWorkOut(integer $NetWorkOut) 设置恶意主动外联
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPortRisk() 获取端口风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortRisk(integer $PortRisk) 设置端口风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulnerabilityRisk() 获取漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) 设置漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigurationRisk() 获取配置风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置配置风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanTask() 获取扫描任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTask(integer $ScanTask) 设置扫描任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberId() 获取memberId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberId(string $MemberId) 设置memberId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOs() 获取os全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOs(string $Os) 设置os全称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskExposure() 获取风险服务暴露
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskExposure(integer $RiskExposure) 设置风险服务暴露
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBASAgentStatus() 获取模拟攻击工具状态。0代表未安装，1代表已安装，2代表已离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBASAgentStatus(integer $BASAgentStatus) 设置模拟攻击工具状态。0代表未安装，1代表已安装，2代表已离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNewAsset() 获取1新资产；0 非新资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewAsset(integer $IsNewAsset) 设置1新资产；0 非新资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCVMAgentStatus() 获取0 未安装  1安装 2:安装中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVMAgentStatus(integer $CVMAgentStatus) 设置0 未安装  1安装 2:安装中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCVMStatus() 获取1:开启 0:未开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVMStatus(integer $CVMStatus) 设置1:开启 0:未开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenseModel() 获取1:客户端已安装 0：未安装 2: Agentless
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseModel(integer $DefenseModel) 设置1:客户端已安装 0：未安装 2: Agentless
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTatStatus() 获取1:已安装 0:未安装
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTatStatus(integer $TatStatus) 设置1:已安装 0:未安装
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCpuTrend() 获取cpu趋势图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTrend(array $CpuTrend) 设置cpu趋势图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMemoryTrend() 获取内存趋势图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemoryTrend(array $MemoryTrend) 设置内存趋势图
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAgentStatus() 获取1:agent在线 0:agent离线 2:主机离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentStatus(integer $AgentStatus) 设置1:agent在线 0:agent离线 2:主机离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloseDefenseCount() 获取本月防护关闭次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloseDefenseCount(integer $CloseDefenseCount) 设置本月防护关闭次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取安全组数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAgentMemRss() 获取物理内存占用KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentMemRss(integer $AgentMemRss) 设置物理内存占用KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAgentCpuPer() 获取CPU使用率百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCpuPer(float $AgentCpuPer) 设置CPU使用率百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealAppid() 获取cvm真正所属的appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealAppid(integer $RealAppid) 设置cvm真正所属的appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取云资产类型：0：腾讯云，1：aws，2：azure
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置云资产类型：0：腾讯云，1：aws，2：azure
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProtectStatus() 获取主机防护状态枚举
0：未安装
1：基础版防护中
2：普惠版防护中
3：专业版防护中
4：旗舰版防护中
5：已离线
6：已关机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectStatus(integer $ProtectStatus) 设置主机防护状态枚举
0：未安装
1：基础版防护中
2：普惠版防护中
3：专业版防护中
4：旗舰版防护中
5：已离线
6：已关机
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineTime() 获取最后离线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置最后离线时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class CVMAssetVO extends AbstractModel
{
    /**
     * @var string 资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string 资产名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 防护状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CWPStatus;

    /**
     * @var string 资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCreateTime;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 私网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string vpc 名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var integer appid信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableArea;

    /**
     * @var integer 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCore;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 子网名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceUuid;

    /**
     * @var string qquid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceQUuid;

    /**
     * @var string os名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsName;

    /**
     * @var integer 分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionCount;

    /**
     * @var string cpu信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPUInfo;

    /**
     * @var integer cpu大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPUSize;

    /**
     * @var string cpu负载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPULoad;

    /**
     * @var string 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemorySize;

    /**
     * @var string 内存负载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryLoad;

    /**
     * @var string 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 硬盘负载
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskLoad;

    /**
     * @var string 账号数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountCount;

    /**
     * @var string 进程数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessCount;

    /**
     * @var string 软件应用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppCount;

    /**
     * @var integer 监听端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortCount;

    /**
     * @var integer 网络攻击
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attack;

    /**
     * @var integer 网络访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Access;

    /**
     * @var integer 网络拦截
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Intercept;

    /**
     * @var string 入向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InBandwidth;

    /**
     * @var string 出向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutBandwidth;

    /**
     * @var string 入向累计流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InFlow;

    /**
     * @var string 出向累计流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutFlow;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastScanTime;

    /**
     * @var integer 恶意主动外联
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetWorkOut;

    /**
     * @var integer 端口风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortRisk;

    /**
     * @var integer 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityRisk;

    /**
     * @var integer 配置风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigurationRisk;

    /**
     * @var integer 扫描任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTask;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string memberId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberId;

    /**
     * @var string os全称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Os;

    /**
     * @var integer 风险服务暴露
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskExposure;

    /**
     * @var integer 模拟攻击工具状态。0代表未安装，1代表已安装，2代表已离线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BASAgentStatus;

    /**
     * @var integer 1新资产；0 非新资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewAsset;

    /**
     * @var integer 0 未安装  1安装 2:安装中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVMAgentStatus;

    /**
     * @var integer 1:开启 0:未开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVMStatus;

    /**
     * @var integer 1:客户端已安装 0：未安装 2: Agentless
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenseModel;

    /**
     * @var integer 1:已安装 0:未安装
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TatStatus;

    /**
     * @var array cpu趋势图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTrend;

    /**
     * @var array 内存趋势图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemoryTrend;

    /**
     * @var integer 1:agent在线 0:agent离线 2:主机离线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentStatus;

    /**
     * @var integer 本月防护关闭次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloseDefenseCount;

    /**
     * @var string 运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var array 安全组数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var integer 物理内存占用KB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentMemRss;

    /**
     * @var float CPU使用率百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCpuPer;

    /**
     * @var integer cvm真正所属的appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealAppid;

    /**
     * @var integer 云资产类型：0：腾讯云，1：aws，2：azure
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @var integer 主机防护状态枚举
0：未安装
1：基础版防护中
2：普惠版防护中
3：专业版防护中
4：旗舰版防护中
5：已离线
6：已关机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectStatus;

    /**
     * @var string 最后离线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @param string $AssetId 资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CWPStatus 防护状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetCreateTime 资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 私网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName vpc 名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId appid信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailableArea 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCore 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceUuid uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceQUuid qquid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName os名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionCount 分区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CPUInfo cpu信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPUSize cpu大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CPULoad cpu负载
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemorySize 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemoryLoad 内存负载
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskSize 硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskLoad 硬盘负载
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountCount 账号数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessCount 进程数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppCount 软件应用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PortCount 监听端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Attack 网络攻击
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Access 网络访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Intercept 网络拦截
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InBandwidth 入向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutBandwidth 出向峰值带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InFlow 入向累计流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutFlow 出向累计流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastScanTime 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetWorkOut 恶意主动外联
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PortRisk 端口风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulnerabilityRisk 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigurationRisk 配置风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanTask 扫描任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberId memberId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Os os全称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskExposure 风险服务暴露
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BASAgentStatus 模拟攻击工具状态。0代表未安装，1代表已安装，2代表已离线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNewAsset 1新资产；0 非新资产
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CVMAgentStatus 0 未安装  1安装 2:安装中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CVMStatus 1:开启 0:未开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenseModel 1:客户端已安装 0：未安装 2: Agentless
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TatStatus 1:已安装 0:未安装
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CpuTrend cpu趋势图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MemoryTrend 内存趋势图
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AgentStatus 1:agent在线 0:agent离线 2:主机离线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloseDefenseCount 本月防护关闭次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState 运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 安全组数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AgentMemRss 物理内存占用KB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AgentCpuPer CPU使用率百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealAppid cvm真正所属的appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType 云资产类型：0：腾讯云，1：aws，2：azure
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProtectStatus 主机防护状态枚举
0：未安装
1：基础版防护中
2：普惠版防护中
3：专业版防护中
4：旗舰版防护中
5：已离线
6：已关机
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineTime 最后离线时间
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CWPStatus",$param) and $param["CWPStatus"] !== null) {
            $this->CWPStatus = $param["CWPStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("AvailableArea",$param) and $param["AvailableArea"] !== null) {
            $this->AvailableArea = $param["AvailableArea"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("InstanceUuid",$param) and $param["InstanceUuid"] !== null) {
            $this->InstanceUuid = $param["InstanceUuid"];
        }

        if (array_key_exists("InstanceQUuid",$param) and $param["InstanceQUuid"] !== null) {
            $this->InstanceQUuid = $param["InstanceQUuid"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("CPUInfo",$param) and $param["CPUInfo"] !== null) {
            $this->CPUInfo = $param["CPUInfo"];
        }

        if (array_key_exists("CPUSize",$param) and $param["CPUSize"] !== null) {
            $this->CPUSize = $param["CPUSize"];
        }

        if (array_key_exists("CPULoad",$param) and $param["CPULoad"] !== null) {
            $this->CPULoad = $param["CPULoad"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("MemoryLoad",$param) and $param["MemoryLoad"] !== null) {
            $this->MemoryLoad = $param["MemoryLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("AppCount",$param) and $param["AppCount"] !== null) {
            $this->AppCount = $param["AppCount"];
        }

        if (array_key_exists("PortCount",$param) and $param["PortCount"] !== null) {
            $this->PortCount = $param["PortCount"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Intercept",$param) and $param["Intercept"] !== null) {
            $this->Intercept = $param["Intercept"];
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("InFlow",$param) and $param["InFlow"] !== null) {
            $this->InFlow = $param["InFlow"];
        }

        if (array_key_exists("OutFlow",$param) and $param["OutFlow"] !== null) {
            $this->OutFlow = $param["OutFlow"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("NetWorkOut",$param) and $param["NetWorkOut"] !== null) {
            $this->NetWorkOut = $param["NetWorkOut"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("VulnerabilityRisk",$param) and $param["VulnerabilityRisk"] !== null) {
            $this->VulnerabilityRisk = $param["VulnerabilityRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("RiskExposure",$param) and $param["RiskExposure"] !== null) {
            $this->RiskExposure = $param["RiskExposure"];
        }

        if (array_key_exists("BASAgentStatus",$param) and $param["BASAgentStatus"] !== null) {
            $this->BASAgentStatus = $param["BASAgentStatus"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("CVMAgentStatus",$param) and $param["CVMAgentStatus"] !== null) {
            $this->CVMAgentStatus = $param["CVMAgentStatus"];
        }

        if (array_key_exists("CVMStatus",$param) and $param["CVMStatus"] !== null) {
            $this->CVMStatus = $param["CVMStatus"];
        }

        if (array_key_exists("DefenseModel",$param) and $param["DefenseModel"] !== null) {
            $this->DefenseModel = $param["DefenseModel"];
        }

        if (array_key_exists("TatStatus",$param) and $param["TatStatus"] !== null) {
            $this->TatStatus = $param["TatStatus"];
        }

        if (array_key_exists("CpuTrend",$param) and $param["CpuTrend"] !== null) {
            $this->CpuTrend = [];
            foreach ($param["CpuTrend"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->CpuTrend, $obj);
            }
        }

        if (array_key_exists("MemoryTrend",$param) and $param["MemoryTrend"] !== null) {
            $this->MemoryTrend = [];
            foreach ($param["MemoryTrend"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->MemoryTrend, $obj);
            }
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("CloseDefenseCount",$param) and $param["CloseDefenseCount"] !== null) {
            $this->CloseDefenseCount = $param["CloseDefenseCount"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AgentMemRss",$param) and $param["AgentMemRss"] !== null) {
            $this->AgentMemRss = $param["AgentMemRss"];
        }

        if (array_key_exists("AgentCpuPer",$param) and $param["AgentCpuPer"] !== null) {
            $this->AgentCpuPer = $param["AgentCpuPer"];
        }

        if (array_key_exists("RealAppid",$param) and $param["RealAppid"] !== null) {
            $this->RealAppid = $param["RealAppid"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }
    }
}
