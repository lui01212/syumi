// ----------------------------------------------------------------------------------
// - ﾌｧｲﾙ名    ： admin.listStory.js
// - 備　考    ： なし
// -           
// -             [ 命名規則 ]
// -                jsp_xxxxx                       ... 変数
// -                JSP_XXXXX                       ... 定数
// -                jspXXXXXX                       ... 関数
// -                OnJspXXXX                       ... ｲﾍﾞﾝﾄﾊﾝﾄﾞﾗ
// -
// - [ 更新履歴 ] 
// -     Ver 1.0.0       ... 2018.07.10      ... Admin
// -                         新規作成
// ----------------------------------------------------------------------------------
// -----------------------------------------------------------------
// - 定数
// -----------------------------------------------------------------
var JSP_XXXXXX = true;
var STATUS_NORMAL = "NORMAL";
var STATUS_WARNING = "WARNING";
var STATUS_ERROR = "ERROR";
// -----------------------------------------------------------------
// - 変数
// -----------------------------------------------------------------
var jsp_xxxxxx = true;
// -----------------------------------------------------------------
// - ｽﾀｰﾄｱｯﾌﾟ
// -----------------------------------------------------------------
$(document).ready(OnJscStartUp);
// -----------------------------------------------------------------
// - 関数名：ｽﾀｰﾄｱｯﾌﾟ
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscStartUp()
{
    try
    {
    	//
        $(document).on('click','.btn-edit',OnJscAddFrom);
        //
    }
    catch( ex )
    {
    }
}
// -----------------------------------------------------------------
// - 関数名：画像を選択
// - 引　数：input
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJspSelectImage(input) {
    var oSelected = new Object();
    oSelected.File = input.files[0];
    $('img.img-thumbnail').attr('src', URL.createObjectURL(oSelected.File));
}
// -----------------------------------------------------------------
// - 関数名：データ追加
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscAddFrom(e){
  //
  e.preventDefault();
  //
  var sURL = $(this).attr('href');
  //
  var sSrc = $('#' + $(this).attr('idImage')).attr('src');
  if(sSrc.split('images')[1].length > 0) $('img.img-thumbnail').attr('src', $('#' + $(this).attr('idImage')).attr('src'));
  //
  OnJscGetDataAddFromAjax(sURL);
}
// -----------------------------------------------------------------
// - 関数名：データ追加-Ajax
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscGetDataAddFromAjax(sURL){
  //
  $.ajax({
     type: "GET",
     url: sURL
  }).success(function(data) {
  	//
    $('#storyName').val(data.story_name);
    $('#authorId').val(data.author_id);
    $('#storySource').val(data.story_source);
    $('#storySumChapter').val(data.story_sum_chapter);
    $('#storyView').val(data.story_view);
    $('#storyRating').val(data.story_rating);
    $('#storyStatus').val(data.story_status);
    $('#storyPrice').val(data.story_price);
    //
    var oStoryType = data.story_type.split(',');
    for (var ix = 0; ix < oStoryType.length; ix++) {
    	$("#storyType option[value ='"+ oStoryType[ix]+"']").prop("selected", true);
    }
    //
    CKEDITOR.instances['storyIntro'].setData(data.story_intro);
    //
  });
  //
}