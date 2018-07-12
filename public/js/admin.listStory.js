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
var m_sImage = "data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1648228bc57%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1648228bc57%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E194x284%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E";
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
        $('#btn-edit').on('click',OnJscEditData);

        $('.btn-add').on('click',{classshow:'add_change',classhide:'edit_change'},OnJscChangeFrom);
        //
        $(document).on('click','.btn-edit',{classshow:'edit_change',classhide:'add_change'},OnJscChangeFrom);
        //
        $(document).on('click','.btn-edit',OnJscAddFrom);
        //
        $(document).on('click','.btn-delete',OnjscDelete);
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
    $('#storyNameEdit').val(data.story_name);
    $('#authorIdEdit').val(data.author_id);
    $('#storySourceEdit').val(data.story_source);
    $('#storySumChapterEdit').val(data.story_sum_chapter);
    $('#storyViewEdit').val(data.story_view);
    $('#storyRatingEdit').val(data.story_rating);
    $('#storyStatusEdit').val(data.story_status);
    $('#storyPriceEdit').val(data.story_price);
    $('#storyIdEdit').val(data.story_id);
    //
    $("input[name=flag][value=" + data.flag + "]").prop('checked', true);
    //
    var oStoryType = data.story_type.split(',');
    for (var ix = 0; ix < oStoryType.length; ix++) {
    	$("#storyTypeEdit option[value ='"+ oStoryType[ix]+"']").prop("selected", true);
    }
    //
    CKEDITOR.instances['storyIntroEdit'].setData(data.story_intro);
    //
  });
  //
}
// -----------------------------------------------------------------
// - 関数名：フォーム変更
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscChangeFrom(evt){
    //
    $('.'+ evt.data.classhide).css('display','none');
    $('.'+ evt.data.classshow).css('display','block');
    $('img.img-thumbnail').attr('src', m_sImage);
    //
    if(!$('.alert-success').hasClass('d-none')){
      $('.alert-success').addClass('d-none');
    }
    //
    $('.alert-danger').remove();
}
// -----------------------------------------------------------------
// - 関数名：データ保存
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscEditData(e){
   //
   e.preventDefault();
   var oData = new Object();
   oData.flag             = $("input[name=flag]:checked").val();
   oData.storyName        = $('#storyNameEdit').val();
   oData.authorId         = $('#authorIdEdit').val();
   oData.storySource      = $('#storySourceEdit').val();
   oData.storySumChapter  = $('#storySumChapterEdit').val();
   oData.storyView        = $('#storyViewEdit').val();
   oData.storyRating      = $('#storyRatingEdit').val();
   oData.storyStatus      = $('#storyStatusEdit').val();
   oData.storyPrice       = $('#storyPriceEdit').val();
   oData.storyId          = $('#storyIdEdit').val();
   oData.storyIntro       = CKEDITOR.instances['storyIntroEdit'].getData();
   //
   oData.storyType        = $('#storyTypeEdit').val();
   //
   oData.storyImage        = $('#storyImageEdit').val();
   //
   // alert(oData.storyImage);
   //
   OnJscEditDataAjax(oData);
}
// -----------------------------------------------------------------
// - 関数名：データ保存
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscEditDataAjax(oData){
  //
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   $.ajax({ 
        url : $('.edit_change').attr('action'),
        type : "post",
        dataType:"text",
        data : {
                storyId : oData.storyId ,
                storyType :oData.storyType,
                storyName : oData.storyName ,
                authorId : oData.authorId,
                storyIntro : oData.storyIntro,
                storySource : oData.storySource,
                storySumChapter : oData.storySumChapter,
                storyView : oData.storyView,
                storyRating : oData.storyRating,
                storyStatus : oData.storyStatus,
                storyPrice : oData.storyPrice,
                storyImage : oData.storyImage,
                flag : oData.flag
        },
        success : function (result){

          if (JSON.parse(result).Status = STATUS_NORMAL) {
            //
            if($('.alert-success').hasClass('d-none')){
              $('.alert-success').removeClass('d-none');
              $('.alert-success').html('<strong>Success!</strong> Sửa thành công!.');
            }
            //
            var page = $('.pagination li.active span').text();
            //
            OnJscGetPaginationAjax(page);
          }
        }
    });
}
// -----------------------------------------------------------------
// - 関数名：ページ分別-Ajax
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscGetPaginationAjax(page){
  //
  $.ajax({
     type: "GET",
     url: '?page='+ page
  }).success(function(data) {
         $('#i-pagination').html(data);
  });
  //
}
// -----------------------------------------------------------------
// - 関数名：削除
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnjscDelete(e){
  //
  e.preventDefault();
  var url = $(this).attr('href');
  //
  OnjscDeleteAjax(url);
  //
}
// -----------------------------------------------------------------
// - 関数名：削除-Ajax
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnjscDeleteAjax(url){
  //
  $.ajax({
     type: "GET",
     url: url
  }).success(function(result) {
      //
      if($('.alert-success').hasClass('d-none')){
        $('.alert-success').removeClass('d-none');
        $('.alert-success').html('<strong>Success!</strong> Xóa thành công!.');
      }
      //
      var page = $('.pagination li.active span').text();
      //
      OnJscGetPaginationAjax(page);
  });
  //
}