$(document).ready(function(){
   $('.filter').on('change', function (event) {
      event.preventDefault();
      var value = $(this).val();
      var url = $(this).data("url");
      $.ajax({
         type:'get',
         dataType: 'html',
         url:url+'/'+value,
         beforeSend:function () {
            $('#content').html('Working on...');
         },
          success:function (data) {
            $('#content').html(data);
          },
      });
   });
    $('.search').on('click', function (event) {
        event.preventDefault();
        var value = $('#search').val();
        var url = $(this).data("url");
        if(value == ''){
            $('#content').html("You must enter a name of city or a state");
        }
        $.ajax({
            type:'get',
            dataType: 'html',
            url:url+'/'+value,
            success:function (data) {
                $('#content').html(data);
            },
        });
    });
});