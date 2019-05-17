<?php
/**
 ** @name Main_Controller
 ** @desc 资源方控制器
 ** @author matian@baidu.com
 **/
class Controller_Rsapi extends Ap_Controller_Abstract {
    public $actions = array(
        'medreply' => 'actions/api/rsapi/MedReply.php',
        'adapterchunyuaddquestion' => 'actions/api/rsapi/AdapterChunyuAddQuestion.php',
        'adapterchunyuask' => 'actions/api/rsapi/AdapterChunyuAsk.php',
        'adapterchunyureply' => 'actions/api/rsapi/AdapterChunyuReply.php',
        'adapterchunyuclose' => 'actions/api/rsapi/AdapterChunyuClose.php',
        'adapterchunyudelete' => 'actions/api/rsapi/AdapterChunyuDelete.php',
        
        'orderwriteofflaw' => 'actions/api/rsapi/OrderWriteOffLaw.php',               //订单核销申请(法律)
        'orderrefundlaw' => 'actions/api/rsapi/OrderRefundLaw.php',                   //订单退款申请(法律)
        
        'hdfnotify' => 'actions/api/medpay/HdfNotify.php',      //医生信息变更通知（好大夫）
        
        'medorderwriteoff' => 'actions/api/rsapi/MedOrderWriteOff.php',    //订单核销（医疗付费升级）
        'medorderrefund' => 'actions/api/rsapi/MedOrderRefund.php',       //订单退款（医疗付费升级）
        'expertupdatenotice' => 'actions/api/rsapi/ExpertUpdateNotice.php', //医生信息更新通知
        'getchunyuidbyphone' => 'actions/api/rsapi/GetChunyuIdByPhone.php', //获取春雨id（春雨后台用接口）
        'medaccept' => 'actions/api/rsapi/MedAccept.php', //智能开场白确认接单
        'medpushorder' => 'actions/api/rsapi/MedPushOrder.php',//推送订单至百度
        'medpushorderstatus' => 'actions/api/rsapi/MedPushOrderStatus.php',//推送订单状态至百度
        'medupdatedrug' => 'actions/api/rsapi/MedUpdateDrug.php',//更新药品
        'commonreply' => 'actions/api/rsapi/CommonReply.php',
        'commonclose' => 'actions/api/rsapi/CommonClose.php',
        'commonexpertprice' => 'actions/api/rsapi/CommonExpertPrice.php',
        'commonwriteoff' => 'actions/api/rsapi/CommonWriteOff.php',
        'commonrefund' => 'actions/api/rsapi/CommonRefund.php',

    );
}
