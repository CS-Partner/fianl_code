//�ı����ȡ�����¼���������룩
function foucs_username()
{
  document.getElementById("span_username").className="span2";
  document.getElementById("span_username").innerHTML="<img src='images3/reg2.gif' style='vertical-align: middle' />8-50���ַ�";
}

//�ı���ʧȥ�����¼�������Ƴ���
function blur_username()
{
 if( form1.txt_username.value=="")
 {
    document.getElementById("span_username").className="span3";
    document.getElementById("span_username").innerHTML="<img src='images3/reg3.gif' style='vertical-align: middle' />����Ƿ�����ȷ��";
 }
 else
 {
    document.getElementById("span_username").className="span2";
    document.getElementById("span_username").innerHTML="<img src='images3/reg4.gif' style='vertical-align: middle' />";
  }
}

 //�ı����ȡ�����¼���������룩
function foucs_email()
{
  document.getElementById("span_email").className="span2";
  document.getElementById("span_email").innerHTML="<img src='images3/reg2.gif' style='vertical-align: middle' />8-50���ַ�";
}

//�ı���ʧȥ�����¼�������Ƴ���
function blur_email()
{
 if( form1.txt_email.value=="")
 {
    document.getElementById("span_email").className="span3";
    document.getElementById("span_email").innerHTML="<img src='images3/reg3.gif' style='vertical-align: middle' />����Ƿ�����ȷ��";
 }
 else
 {
    document.getElementById("span_email").className="span2";
    document.getElementById("span_email").innerHTML="<img src='images3/reg4.gif' style='vertical-align: middle' />";
  }
}