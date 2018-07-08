$(document).ready(function(){
    //
    $('.btn-edit').on('click',{classshow:'edit_story_type',classhide:'add_story_type'},OnChangeFrom);
    $('.btn-edit').on('click',OnAddFrom);
    $('.btn-add').on('click',{classshow:'add_story_type',classhide:'edit_story_type'},OnChangeFrom);
    //
    $('#btn-edit').on('click',function(e){
       e.preventDefault();
       var oData = new Object();
       oData.typeName = $('#typeNameAdd').val();
       oData.typeId   = $('#typeId').val();
       oData.flag     = $("input[name=flag]:checked").val();
       addData(oData);
    });
});
$(document).on('click','.pagination a', function(e){
   e.preventDefault();
   var page = $(this).attr('href').split('page=')[1];
   getPosts(page);
});
// $(document).on('click','#btn-edit', function(e){
//    e.preventDefault();
//    var oData = new Object();
//    oData.typeName = $('#typeNameAdd').val();
//    oData.typeId   = $('#typeId').val();
//    oData.flag     = $("input[name=flag]:checked").val();
//    addData(oData);
// });
function OnChangeFrom(evt){
    //
    $('.'+ evt.data.classhide).css('display','none');
    $('.'+ evt.data.classshow).css('display','block');
    //
}
function OnAddFrom(){
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
function getPosts(page)
{
   $.ajax({
       type: "GET",
       url: '?page='+ page
   })
   .success(function(data) {
       $('body').html(data);
   });
}
function addData(oData){
    // alert(oData.typeId +oData.typeName + oData.flag);
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
            alert(result);
           $('#content-wrapper').html(result);
        }
    });
}