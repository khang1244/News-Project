function likes (id){
    $.ajax({
        url:"likes.php?id="+id,
        type: "get",
        success: function(ketqua){
            $('#likes').html( "<i class=\"fa fa-thumbs-up\"></i>"+ketqua);
        }
    });   
}