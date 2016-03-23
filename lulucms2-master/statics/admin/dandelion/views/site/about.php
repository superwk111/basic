
<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="blank" />
<meta name="format-detection" content="telephone=no" />
<title>ϵͳ����</title>
<base href="http://localhost/WeCenter/?/" />
<link type="text/css" rel="stylesheet" href="http://localhost/WeCenter/static/css/bootstrap.css?v=20150409" />
<link type="text/css" rel="stylesheet" href="http://localhost/WeCenter/static/css/icon.css?v=20150409" />
<script type="text/javascript">
    var G_INDEX_SCRIPT = "?/";
    var G_BASE_URL = "http://localhost/WeCenter/?";
    var G_STATIC_URL = "http://localhost/WeCenter/static";
    var G_UPLOAD_URL = "http://localhost/WeCenter/uploads";
    var G_USER_ID = "1";
    var G_POST_HASH = "";
</script>
<link type="text/css" rel="stylesheet" href="http://localhost/WeCenter/static/admin/css/common.css?v=20150409" />
<script type="text/javascript" src="http://localhost/WeCenter/static/js/jquery.2.js?v=20150409" ></script>
<script type="text/javascript" src="http://localhost/WeCenter/static/admin/js/aws_admin.js?v=20150409" ></script>
<script type="text/javascript" src="http://localhost/WeCenter/static/admin/js/aws_admin_template.js?v=20150409" ></script>
<script type="text/javascript" src="http://localhost/WeCenter/static/js/jquery.form.js?v=20150409" ></script>
<script type="text/javascript" src="http://localhost/WeCenter/static/admin/js/framework.js?v=20150409" ></script>
<script type="text/javascript" src="http://localhost/WeCenter/static/admin/js/global.js?v=20150409" ></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://localhost/WeCenter/static/js/respond.js"></script>
<![endif]-->
</head>

<body>
<div  class="aw-header">
    <button class="btn btn-sm mod-head-btn pull-left">
        <i class="icon icon-bar"></i>
    </button>

    <div class="mod-header-user">
        <ul class="pull-right">
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle mod-bell" data-toggle="dropdown">
                    <i class="icon icon-bell"></i>
                                    </a>
                <ul class="dropdown-menu mod-chat">
                                    <p>û��֪ͨ</p>
                                    </ul>
            </li>

            <li class="dropdown username">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="http://localhost/WeCenter/static/common/avatar-mid-img.png" class="img-circle" width="30">
                    admin888                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu pull-right mod-user">
                    <li>
                        <a href="http://localhost/WeCenter" target="_blank"><i class="icon icon-home"></i>��ҳ</a>
                    </li>

                    <li>
                        <a href="http://localhost/WeCenter/?/admin/"><i class="icon icon-ul"></i>����</a>
                    </li>

                    <li>
                        <a href="http://localhost/WeCenter/?/admin/logout/"><i class="icon icon-logout"></i>�˳�</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="aw-side" id="aw-side">
    <div class="mod">
        <div class="mod-logo">
            <img class="pull-left" src="http://localhost/WeCenter/static/admin/img/logo.png" alt="" />
            <h1>WeCenter</h1>
        </div>

        <div class="mod-message">
            <div class="message">
                <a class="btn btn-sm" href="http://localhost/WeCenter" target="_blank" title="��ҳ">
                    <i class="icon icon-home"></i>
                </a>

                <a class="btn btn-sm" href="http://localhost/WeCenter/?/admin/" title="����">
                    <i class="icon icon-ul"></i>
                </a>

                <a class="btn btn-sm" href="http://localhost/WeCenter/?/admin/logout/" title="�˳�">
                    <i class="icon icon-logout"></i>
                </a>
            </div>
        </div>

        <ul class="mod-bar" >
            <input type="hidden" id="hide_values" val="0" />
                        <li>
                <a href="http://localhost/WeCenter/?/admin/" class=" icon icon-home">
                    <span>����</span>
                </a>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-setting active" data="icon">
                    <span>ȫ������</span>
                </a>
                
                <ul>
                                        <li>
                        <a  class="active" href="http://localhost/WeCenter/?/admin/settings/category-site">
                            <span>վ����Ϣ</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-register">
                            <span>ע�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-functions">
                            <span>վ�㹦��</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-contents">
                            <span>��������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-integral">
                            <span>��������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-permissions">
                            <span>�û�Ȩ��</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-mail">
                            <span>�ʼ�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-openid">
                            <span>����ƽ̨</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-cache">
                            <span>�����Ż�</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/settings/category-interface">
                            <span>��������</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-reply" data="icon">
                    <span>���ݹ���</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/question/question_list/">
                            <span>�������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/article/list/">
                            <span>���¹���</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/topic/list/">
                            <span>�������</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-user" data="icon">
                    <span>�û�����</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/list/">
                            <span>�û��б�</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/group_list/">
                            <span>�û���</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/invites/">
                            <span>��������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/job_list/">
                            <span>ְλ����</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-report" data="icon">
                    <span>��˹���</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/approval/list/">
                            <span>�������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/verify_approval_list/">
                            <span>��֤���</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/user/register_approval_list/">
                            <span>ע�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/question/report_list/">
                            <span>�û��ٱ�</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-signup" data="icon">
                    <span>��������</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/nav_menu/">
                            <span>��������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/category/list/">
                            <span>�������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/feature/list/">
                            <span>ר�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/page/">
                            <span>ҳ�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/help/list/">
                            <span>��������</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-share" data="icon">
                    <span>΢��΢��</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/accounts/">
                            <span>΢�Ŷ��˺Ź���</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/mp_menu/">
                            <span>΢�Ų˵�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/reply/">
                            <span>΢���Զ���ظ�</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/third_party_access/">
                            <span>΢�ŵ���������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/qr_code/">
                            <span>΢�Ŷ�ά�����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weixin/sent_msgs_list/">
                            <span>΢����ϢȺ��</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/weibo/msg/">
                            <span>΢����Ϣ����</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/edm/receiving_list/">
                            <span>�ʼ�����</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-inbox" data="icon">
                    <span>�ʼ�Ⱥ��</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/edm/tasks/">
                            <span>�������</span>
                        </a>
                    </li>
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/edm/groups/">
                            <span>�û�Ⱥ����</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                        <li>
                <a href="javascript:;" class=" icon icon-job" data="icon">
                    <span>����</span>
                </a>
                
                <ul class="hide">
                                        <li>
                        <a  href="http://localhost/WeCenter/?/admin/tools/">
                            <span>ϵͳά��</span>
                        </a>
                    </li>
                                    </ul>
                            </li>
                    </ul>
    </div>
</div>

<div class="aw-content-wrap">
    <form action="http://localhost/WeCenter/?/admin/ajax/save_settings/" id="settings_form" method="post" onsubmit="return false">
    <div class="mod">
                <div class="mod-head">
            <h3>
                <span class="pull-left">վ����Ϣ</span>

                <span class="pull-right"><a href="javascript:;" onclick="AWS.ajax_post($('#settings_form'));" class="btn btn-xs btn-primary mod-site-save">���ٱ���</a></span>
            </h3>
        </div>
        <div class="tab-content mod-content">
            <table class="table table-striped">
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">��վ����:</span>
                            <div class="col-sm-5 col-xs-8">
                                <input type="text" class="form-control" name="site_name" value="">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">��վ���:</span>
                            <div class="col-sm-5 col-xs-8">
                                <textarea class="form-control textarea" rows="4" name="description"  >WeCenter �罻��֪ʶ����</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">��վ�ؼ���:</span>
                            <div class="col-sm-5 col-xs-8">
                                <textarea class="form-control textarea" rows="4" name="keywords"  >WeCenter,֪ʶ����,�罻����,�ʴ�����</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">��վ ICP ������:</span>
                            <div class="col-sm-5 col-xs-8">
                                <input name="icp_beian" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">�ϴ�Ŀ¼�ⲿ���� URL ��ַ:</span>
                            <div class="col-sm-5 col-xs-8">
                                <input name="upload_url" class="form-control" type="text" value="http://localhost/WeCenter/uploads"/>

                                <span class="help-block">ĩβ���� / �� \</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">�ϴ��ļ���ž���·��</span>
                            <div class="col-sm-5 col-xs-8">
                                <input name="upload_dir" class="form-control" type="text" value="D:/wamp/www/WeCenter/uploads"/>

                                <span class="help-block">ĩβ���� / �� \��Ŀǰ��վ��Ŀ¼����·����D:\wamp\www\WeCenter/</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <span class="col-sm-4 col-xs-3 control-label">static Ŀ¼��Դ URL ��ַ</span>
                            <div class="col-sm-5 col-xs-8">
                                <input name="img_url" class="form-control" type="text" value=""/>

                                <span class="help-block">ĩβ���� / �� \������ʹ�ø�Ŀ¼�µ� static ��Դ</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

                <div class="tab-content mod-content mod-one-btn">
            <div class="center-block">
                <input type="button" value="��������" class="btn btn-primary" onclick="AWS.ajax_post($('#settings_form'));" />
            </div>
        </div>
    </div>
    </form>
</div>

<div class="aw-footer">
    <p>Copyright &copy; 2015 - Powered By <a href="http://www.wecenter.com/?copyright" target="blank">WeCenter 3.1.2</a></p>
</div>

<!-- DO NOT REMOVE -->
<div id="aw-ajax-box" class="aw-ajax-box"></div>


<div style="display:none;" id="__crond">
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#__crond').html(unescape('%3Cimg%20src%3D%22' + G_BASE_URL + '/crond/run/1431182380%22%20width%3D%221%22%20height%3D%221%22%20/%3E'));
	    });

	</script>
</div>

<!-- Escape time: 0.14000797271729 --><!-- / DO NOT REMOVE -->

</body>
</html>
