// ----------------------------------------------------------------------------------
// - ﾌｧｲﾙ名    ： admin.story.js
// - 備　考    ： なし
// -           
// -             [ 命名規則 ]
// -                jsp_xxxxx                       ... 変数
// -                JSP_XXXXX                       ... 定数
// -                jspXXXXXX                       ... 関数
// -                OnJspXXXX                       ... ｲﾍﾞﾝﾄﾊﾝﾄﾞﾗ
// -
// - [ 更新履歴 ] 
// -     Ver 1.0.0       ... 2018.07.08      ... Admin
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
        // jspAddEvent();
        //
        $('#btn-edit').on('click',OnJscAddData);
        //
        $('.btn-add').on('click',{classshow:'add_story_type',classhide:'edit_story_type'},OnJscChangeFrom);
        //
        $(document).on('click','.pagination a', OnjscGetPagination);
        //
        $(document).on('click','.btn-edit',{classshow:'edit_story_type',classhide:'add_story_type'},OnJscChangeFrom);
        //
        $(document).on('click','.btn-edit',OnJscAddFrom);
        //
        $(document).on('click','.btn-delete',OnjscDelete);
    }
    catch( ex )
    {
    }
}
// -----------------------------------------------------------------
// - 関数名：ｲﾍﾞﾝﾄ登録
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function jspAddEvent() {

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
    //
    if(!$('.alert-success').hasClass('d-none')){
      $('.alert-success').addClass('d-none');
    }
    //
    $('.alert-danger').remove();
}
// -----------------------------------------------------------------
// - 関数名：データ追加
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscAddFrom(){
    //
    var typeid      = $(this).attr('typeid');
    var typename    = $(this).attr('typename');
    var flag        = $(this).attr('flag');
    //
    $('#typeId').val(typeid);
    $('#typeNameAdd').val(typename);
    $("input[name=flag][value=" + flag + "]").prop('checked', true);
    //
}
// -----------------------------------------------------------------
// - 関数名：データ保存
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscAddData(e){
   //
   e.preventDefault();
   var oData = new Object();
   oData.typeName = $('#typeNameAdd').val();
   oData.typeId   = $('#typeId').val();
   oData.flag     = $("input[name=flag]:checked").val();

   OnJscAddDataAjax(oData);
}
// -----------------------------------------------------------------
// - 関数名：データ保存
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnJscAddDataAjax(oData){
  //
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   $.ajax({ 
        url : $('.edit_story_type').attr('action'),
        type : "post",
        dataType:"text",
        data : {typeName : oData.typeName ,typeId : oData.typeId , flag : oData.flag
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
// - 関数名：ページ分別
// - 引　数：なし
// - 戻り値：なし
// - 備　考：なし
// -----------------------------------------------------------------
function OnjscGetPagination(e){
  //
  e.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  //
  OnJscGetPaginationAjax(page);
  //
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
