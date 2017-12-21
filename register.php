﻿<!doctype html>
<html lang="en">
 <head>
  <?php include("header.php"); ?>
 </head>
 <body>
   
 <?php include("nav.php"); ?>

<div class="main-content-wrap">
  <div class="container main-content">
    
<div class="area login-area">
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">UserName</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="UserName">
        </div>
      </div>
      <div class="form-group">
        <label for="pw" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control"  name="user_pw" id="user_pw" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="repw" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control"  name="user_repw" id="user_repw" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <label for="repw" class="col-sm-2 control-label">From</label>
        <div>


  <div class="col-xs-3">
          <select class="form-control" id="homeprovince">
          </select>
  </div>

  <div class="col-xs-5">
          <select class="form-control" id="homecity" style="display:none;">
          </select>
  </div>

        </div>
      </div>

      <div class="form-group">
        <label for="repw" class="col-sm-2 control-label">Living</label>
        <div>


  <div class="col-xs-3">
          <select class="form-control" id="livingprovince">
          </select>
  </div>

  <div class="col-xs-5">
          <select class="form-control" id="livingcity" style="display:none;">
          </select>
  </div>


        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-default" id="btn">Sign In</button>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <div>Already has an account, <a href="login.php">Login Now</a></div>
        </div>
      </div>

     
    </form>
</div>

  </div>
</div>
<?php include("footer.php"); ?>
 </body>

<script type="text/javascript">
$(document).ready(function(e) {

var provinces=["北京","上海","天津","重庆","安徽","福建","广东","甘肃","贵州","广西","海南","湖北","河北","河南","黑龙江","湖南","吉林","江苏","江西","辽宁","内蒙古","宁夏","青海","四川","山东","陕西","山西","新疆","西藏","云南","浙江","中国澳门","中国香港","中国台湾"];
var cities={"北京":[],"上海":[],"天津":[],"重庆":[],"安徽":["滁州","合肥","蚌埠","芜湖","淮南","马鞍山","安庆","宿州","阜阳","黄山","淮北","铜陵","宣城","六安","巢湖","池州"],"福建":["福州","厦门","宁德","莆田","泉州","漳州","龙岩","三明","南平"],"广东":["广州","汕尾","阳江","揭阳","茂名","江门","韶关","惠州","梅州","汕头","深圳","珠海","佛山","肇庆","湛江","中山","河源","清远","潮州","东莞"],"甘肃":["临夏","兰州","平凉","庆阳","金昌","武威","定西","张掖","嘉峪关","酒泉","天水","陇南","甘南","白银"],"贵州":["贵阳","遵义","安顺","黔南","黔东南","铜仁","毕节","六盘水"],"广西":["防城港","南宁","柳州","桂林","梧州","贵港","百色","钦州","河池","北海"],"海南":["海口","儋州","三沙","三亚"],"湖北":["武汉","襄阳","鄂州","孝感","黄冈","黄石","咸宁","荆州","宜昌","恩施","十堰","随州","荆门","天门"],"河北":["邯郸","石家庄","保定","张家口","承德","唐山","廊坊","沧州","衡水","邢台","秦皇岛"],"河南":["商丘","郑州","安阳","新乡","许昌","平顶山","信阳","南阳","开封","洛阳","焦作","济源","鹤壁","濮阳","周口","漯河","驻马店","三门峡"],"黑龙江":["哈尔滨","齐齐哈尔","牡丹江","佳木斯","绥化","黑河","大兴安岭","伊春","大庆","七台河","鸡西","鹤岗","双鸭山"],"湖南":["岳阳","长沙","湘潭","株洲","衡阳","郴州","常德","益阳","娄底","邵阳","湘西","张家界","怀化","永州"],"吉林":["长春","吉林","延边","四平","通化","白城","辽源","松原","白山"],"江苏":["南京","无锡","镇江","苏州","南通","扬州","盐城","徐州","淮安","连云港","常州","泰州","宿迁"],"江西":["鹰潭","新余","南昌","九江","上饶","抚州","宜春","吉安","赣州","景德镇","萍乡"],"辽宁":["沈阳","铁岭","大连","鞍山","抚顺","本溪","丹东","锦州","营口","阜新","辽阳","朝阳","盘锦","葫芦岛"],"内蒙古":["呼伦贝尔","呼和浩特","包头","乌海","乌兰察布","通辽","赤峰","鄂尔多斯","巴彦淖尔","锡林郭勒盟","兴安盟","阿拉善盟"],"宁夏":["银川","石嘴山","吴忠","固原","中卫"],"青海":["海北","西宁","海东","黄南","海南","果洛","玉树","海西"],"四川":["成都","攀枝花","自贡","绵阳","南充","达州","遂宁","广安","巴中","泸州","宜宾","内江","乐山","凉山","雅安","甘孜","阿坝","德阳","广元"],"山东":["荷泽","曹县","济南","青岛","淄博","德州","烟台","潍坊","济宁","泰安","临沂","滨州","东营","威海","枣庄","日照","莱芜","聊城"],"陕西":["西安","咸阳","延安","榆林","渭南","商洛","安康","汉中","宝鸡","铜川"],"山西":["朔州","忻州","太原","大同","阳泉","晋中","长治","晋城","临汾","吕梁","运城"],"新疆":["塔城","和田","哈密","阿勒泰","克孜勒苏柯尔克孜","博尔塔拉","克拉玛依","乌鲁木齐","奎屯","乌苏","石河子","昌吉","吐鲁番","巴音郭楞","阿克苏","喀什","伊犁哈萨克"],"西藏":["拉萨","日喀则","山南","林芝","昌都","那曲","阿里"],"云南":["西双版纳","德宏","昭通","昆明","大理","红河","曲靖","保山","文山","玉溪","楚雄","思茅","临沧","怒江","迪庆","丽江"],"中国澳门":[],"中国香港":[],"中国台湾":[],"浙江":["衢州","杭州","湖州","嘉兴","宁波","绍兴","台州","温州","丽水","金华","舟山"]}

console.log(cities["北京"]);

var getOneSelectOption=function(text,value){
  return '<option value="'+value+'">'+text+'</option>';
};
var initalProvinces=function(){
    var html='<option value="">请选择</option>';
    $.each(provinces,function(index,value){
      html+=getOneSelectOption(value,value);
    });
    return html;
};

var initalCities=function(provinceslist){
    var html='<option value="">请选择</option>';
    $.each(provinceslist,function(index,value){
      html+=getOneSelectOption(value,value);
    });
    return html;
};

$('#homeprovince').html(initalProvinces());
$('#livingprovince').html(initalProvinces());

$('#homeprovince').change(function(){
  var citylist=cities[$(this).val()];
  if(citylist.length>0)
  {
    $('#homecity').html(initalCities(citylist)).show();
  }else{
    $('#homecity').hide();
  }
});

$('#livingprovince').change(function(){
  var citylist=cities[$(this).val()];
  if(citylist.length>0)
  {
    $('#livingcity').html(initalCities(citylist)).show();
  }else{
    $('#livingcity').hide();
  }
});

    $("#btn").click(function(){
        var uname = $("#user_name").val();
        var pwd = $("#user_pw").val();
        var repwd = $("#user_repw").val();
        var homeprovince=$("#homeprovince").val();
        var homecity=$("#homecity").val();
        var livingcountry='中国';
        var livingprovince=$("#livingprovince").val();
        var livingcity=$("#livingcity").val();

        $.ajax({
            url:"handle/registerhandle.php",
            data:{uname:uname,
            pwd:pwd,
            repwd:repwd,
            homeprovince:homeprovince,
            homecity:homecity,
            livingcountry:livingcountry,
            livingprovince:livingprovince,
            livingcity:livingcity},
            type:"POST",
            dataType:"TEXT",
            success: function(data){
                if(data=="OK")
                {
                    alert("Success!");
                    window.location.href="login.php"
                }
                else
                {
                    alert("Fail! "+data);
                }
                
                }
            
              })
        
        })    
});

</script>

</html>
